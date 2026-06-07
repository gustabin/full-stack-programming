CREATE DATABASE my_app;
Select the database
USE my_app;
Create the users table
CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    date_record TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
