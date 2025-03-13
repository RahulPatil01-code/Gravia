<?php
include '../../config/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $short_desc = mysqli_real_escape_string($conn, $_POST['short_desc']);
    $detailed_desc = mysqli_real_escape_string($conn, $_POST['detailed_desc']);
    $highlights = mysqli_real_escape_string($conn, $_POST['highlights']);
    $price_min = $_POST['price_min'];
    $price_max = $_POST['price_max'];
    $length = $_POST['length'];
    $width = $_POST['width'];
    $seller_name = mysqli_real_escape_string($conn, $_POST['seller_name']);
    $seller_rating = $_POST['seller_rating'];
    $warranty = mysqli_real_escape_string($conn, $_POST['warranty']);
    $gst_invoice = isset($_POST['gst_invoice']) ? 1 : 0;

    // Folder setup
    $upload_dir = "uploads/";
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Handle Main Image Upload
    $main_image_name = $_FILES['image_main']['name'];
    $main_image_tmp = $_FILES['image_main']['tmp_name'];
    $main_image_path = $upload_dir . time() . "_" . basename($main_image_name);

    if (!move_uploaded_file($main_image_tmp, $main_image_path)) {
        die("Error uploading main image.");
    }

    // Insert Product Data
    $query = "INSERT INTO products (name, category, short_desc, detailed_desc, highlights, price_min, price_max, 
            length, width, seller_name, seller_rating, warranty, gst_invoice, image_main)
            VALUES ('$name', '$category', '$short_desc', '$detailed_desc', '$highlights', '$price_min', '$price_max', 
            '$length', '$width', '$seller_name', '$seller_rating', '$warranty', '$gst_invoice', '$main_image_path')";

    if (mysqli_query($conn, $query)) {
        $product_id = mysqli_insert_id($conn); // Get inserted product ID
     

        // Handle Additional Images Upload
        if (!empty($_FILES['images']['name'][0])) {
            foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                $file_name = $_FILES['images']['name'][$key];
                $file_tmp = $_FILES['images']['tmp_name'][$key];
                $image_path = $upload_dir . time() . "_" . basename($file_name);
        
                if (move_uploaded_file($file_tmp, $image_path)) {
                    // Insert into product_images table
                    $stmt_img = $conn->prepare("INSERT INTO product_images (product_id, image_url) VALUES (?, ?)");
                    $stmt_img->bind_param("is", $product_id, $image_path);
                    $stmt_img->execute();
                    $stmt_img->close();
                }
            }
        }
        

        echo "Product added successfully!";
        header("Location: ../index.php"); // Redirect after successful upload
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Add New Product</h2>
    <form action="add_product.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" class="form-control" name="category" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <input type="text" class="form-control" name="short_desc" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Detailed Description</label>
            <textarea class="form-control" name="detailed_desc" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Highlights</label>
            <textarea class="form-control" name="highlights" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Price Range (Min - Max)</label>
            <div class="d-flex gap-2">
                <input type="number" class="form-control" name="price_min" step="0.01" required placeholder="Min">
                <input type="number" class="form-control" name="price_max" step="0.01" required placeholder="Max">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Dimensions (Length x Width in ft.)</label>
            <div class="d-flex gap-2">
                <input type="number" class="form-control" name="length" step="0.01" required placeholder="Length">
                <input type="number" class="form-control" name="width" step="0.01" required placeholder="Width">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Seller Name</label>
            <input type="text" class="form-control" name="seller_name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Seller Rating</label>
            <input type="number" class="form-control" name="seller_rating" step="0.1" min="0" max="5" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Warranty</label>
            <input type="text" class="form-control" name="warranty">
        </div>

        <div class="mb-3">
            <label class="form-label">GST Invoice Available?</label>
            <input type="checkbox" name="gst_invoice" value="1">
        </div>

        <div class="mb-3">
            <label class="form-label">Main Image</label>
            <input type="file" class="form-control" name="image_main" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Additional Images</label>
            <input type="file" class="form-control" name="images[]" multiple accept="image/*" id="imageInput" required>
            <div id="imagePreview"></div>
        </div>

        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>

<script>

let selectedFiles = [];

document.getElementById('imageInput').addEventListener('change', function(event) {
    let previewDiv = document.getElementById('imagePreview');

    for (let i = 0; i < event.target.files.length; i++) {
        selectedFiles.push(event.target.files[i]); // Store files in array

        let reader = new FileReader();
        reader.onload = function(e) {
            let img = document.createElement('img');
            img.src = e.target.result;
            img.style.width = "100px";
            img.style.margin = "5px";
            previewDiv.appendChild(img);
        };
        reader.readAsDataURL(event.target.files[i]);
    }

    // Create a new FileList object to retain previous selections
    let dataTransfer = new DataTransfer();
    selectedFiles.forEach(file => dataTransfer.items.add(file));
    this.files = dataTransfer.files; // Assign new FileList to input
});


document.getElementById('imageInput').addEventListener('change', function(event) {
    let previewDiv = document.getElementById('imagePreview');
    previewDiv.innerHTML = ""; // Clear previous previews
    
    let files = event.target.files;
    for (let i = 0; i < files.length; i++) {
        let reader = new FileReader();
        reader.onload = function(e) {
            let img = document.createElement('img');
            img.src = e.target.result;
            img.style.width = "100px"; // Adjust as needed
            img.style.margin = "5px";
            previewDiv.appendChild(img);
        };
        reader.readAsDataURL(files[i]);
    }
});
</script>

</body>
</html>
