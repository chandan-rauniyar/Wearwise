--rum this query in you php my admin panal so database created and our code work properly
-- Create database if it does not exist and use it
CREATE DATABASE IF NOT EXISTS wearwise;
USE wearwise;

-- Create table with all required fields, including `name` in the correct position
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE, -- Only for manual login users
    name VARCHAR(255) NULL, -- Name field (added right after username)
    email VARCHAR(255) UNIQUE NOT NULL, -- Common for both manual and Google users
    password VARCHAR(255) NULL, -- NULL for Google users, required for manual login
    login_type ENUM('manual', 'google') NOT NULL, 
    google_id VARCHAR(255) UNIQUE NULL, -- Stores Google user ID, NULL for manual users
    profile_pic VARCHAR(255) NULL, -- Google users get profile pictures, manual users can upload later
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
