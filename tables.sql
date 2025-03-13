Tables of Gravia


users table of where data is stored for login.

CREATE TABLE `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `username` VARCHAR(255) NOT NULL,  -- Removed UNIQUE constraint
    `email` VARCHAR(255) NOT NULL UNIQUE,  -- Email remains unique
    `gender` ENUM('male', 'female', 'other') NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `role` ENUM('user', 'admin') DEFAULT 'user',   -- Added role column for admin/user differentiation
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);


user_addresses table to store user's address. 

CREATE TABLE user_addresses (
    id' INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,  -- Foreign key referencing users(id)
    name VARCHAR(255) NOT NULL,
    mobile_number VARCHAR(10) NOT NULL,
    pincode VARCHAR(10) NOT NULL,
    locality VARCHAR(255),
    address TEXT NOT NULL,
    city VARCHAR(255) NOT NULL,
    state VARCHAR(255) NOT NULL,
    landmark VARCHAR(255) NULL,
    alternate_phone VARCHAR(10) NULL,
    address_type ENUM('Home', 'Work') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
