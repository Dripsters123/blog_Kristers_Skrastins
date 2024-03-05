/*
-- Create a new database named 'blog_Kristers_Skrastins'
CREATE DATABASE blog_Kristers_Skrastins;

-- Use the newly created database
USE blog_Kristers_Skrastins;

-- Create a new table named 'posts' with 'id' and 'title' columns
CREATE TABLE posts (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL
);

-- Insert two rows into the 'posts' table
INSERT INTO posts (title) VALUES 
('My First Blog Post'),('My Second Blog Post');

-- Create a new table named 'categories' with 'id', 'NAME', and 'DESCRIPTION' columns
CREATE TABLE categories (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR(255) NOT NULL,
DESCRIPTION TEXT
);
*/

/*
-- Insert three rows into the 'categories' table
INSERT INTO categories (NAME) VALUES ('sport'), ('music'), ('food');

-- Add a new column named 'category_id' to the 'posts' table
ALTER TABLE posts ADD COLUMN category_id INT;

-- Add a foreign key constraint to the 'category_id' column of the 'posts' table
ALTER TABLE posts ADD FOREIGN KEY (category_id) REFERENCES categories(id);

-- Update the 'category_id' of the post with id 1 to the id of the category with name 'sport'
UPDATE posts SET category_id = (SELECT id FROM categories WHERE name = 'sport') WHERE id = 1;

-- Update the 'category_id' of the post with id 2 to the id of the category with name 'food'
UPDATE posts SET category_id = (SELECT id FROM categories WHERE name = 'food') WHERE id = 2;
*/