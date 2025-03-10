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