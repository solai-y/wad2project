drop database if exists XChange;
create database XChange;
use XChange;

-- Create the 'users' table
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    primary_degree VARCHAR(100),
    secondary_degree VARCHAR(100),
    year_of_matriculation INT
);

-- Inserting sample user data
INSERT INTO users (username, password, name, primary_degree, secondary_degree, year_of_matriculation) 
VALUES 
    ('John', '123', 'John Doe', 'Computer Science', NULL, 2023),
    ('Jane', 'ComplicatedPassword', 'Jane Smith', 'Information Systems', NULL, 2022),
    ('Michael', 'pass', 'Michael Johnson', 'Information Systems', 'Business', 2024), 
    ('Mark', 'pass123', 'Mark Brian', 'Business', NULL, 2024),
    ('Larry', '456', 'Larry Lim', 'Business', 'Business', 2024);

