CREATE DATABASE IF NOT EXISTS HR1;
USE HR1;


CREATE TABLE IF NOT EXISTS employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- 
INSERT INTO employees (email, password) VALUES ('orariojames@gmail.com', '123456789');
INSERT INTO users (email, password) VALUES ('orariojames@gmail.com', '123456789');
