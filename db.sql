/*
-- CREATE DATABASE blog_Kristers_Skrastins;
-- USE blog_Kristers_Skrastins;
/*
CREATE TABLE posts (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL
);

INSERT INTO posts (title) VALUES 
('My First Blog Post'),('My Second Blog Post');

CREATE TABLE categories (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR(255) NOT NULL,
DESCRIPTION TEXT
);


INSERT INTO categories (NAME) VALUES ('sport'), ('music'), ('food');
ALTER TABLE posts ADD COLUMN category_id INT;

ALTER TABLE posts ADD FOREIGN KEY (category_id) REFERENCES categories(id);

UPDATE posts SET category_id = (SELECT id FROM categories WHERE name = 'sport') WHERE id = 1;
UPDATE posts SET category_id = (SELECT id FROM categories WHERE name = 'food') WHERE id = 2;
*/
/*
INSERT INTO posts (title,category_id) VALUES
("Blog 3",2);
*/