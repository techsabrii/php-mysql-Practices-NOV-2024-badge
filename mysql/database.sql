CREATE DATABASE IF NOT EXISTS basit_sabrii;
USE basit_sabrii;

-- Create users table with auto-increment and primary key
drop table if exists users;
drop table if exists products;
drop table if exists orders;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    username VARCHAR(50) UNIQUE,
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create products table with auto-increment and primary key
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    category VARCHAR(50),
    price DECIMAL(10,3),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample users into users table
INSERT INTO users (fullname, username, email, password)
VALUES
('Ali Khan', 'alikhan', 'ali@example.com', MD5('123456')),
('Sara Malik', 'saram', 'sara@example.com', MD5('abcdef'));

-- Insert sample products into products table
INSERT INTO products (name, category, price)
VALUES
('Laptop', 'Electronics', 75000.00),
('Mobile Phone', 'Electronics', 45000.00),
('Table', 'Furniture', 8000.00);

-- Insert new user into users table
INSERT INTO users (fullname, username, email, password)
VALUES ('Abdul Basit', 'Sabrii', 'basit@example.com', MD5('abcdef'));


-- Create a new orders table to demonstrate the foreign key relationship with users
CREATE TABLE IF NOT EXISTS orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);

CREATE INDEX idx_users_username ON users(username);
CREATE INDEX idx_products_category ON products(category);



INSERT INTO orders (user_id, product_id)
VALUES
(1, 1),
(2, 2),
(3, 3);
