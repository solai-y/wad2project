drop database if exists XChange;
create database XChange;
use XChange;

-- Create the 'users' table
CREATE TABLE user (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    primary_degree VARCHAR(100),
    secondary_degree VARCHAR(100),
    year_of_matriculation INT
);

-- Create the 'universities' table
CREATE TABLE universities (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    exchange_slots INT,
    country VARCHAR(50),
    city VARCHAR(50),
    picture_url VARCHAR(255)
);

-- Inserting sample user data
INSERT INTO user (user, password, name, primary_degree, secondary_degree, year_of_matriculation) 
VALUES 
    ('John', '123', 'John Doe', 'Computer Science', NULL, 2023),
    ('Jane', 'ComplicatedPassword', 'Jane Smith', 'Information Systems', NULL, 2022),
    ('Michael', 'pass', 'Michael Johnson', 'Information Systems', 'Business', 2024), 
    ('Mark', 'pass123', 'Mark Brian', 'Business', NULL, 2024),
    ('Larry', '456', 'Larry Lim', 'Business', 'Business', 2024);

-- Insert sample university data
INSERT INTO universities (name, exchange_slots, country, city, picture_url)
VALUES
    ('Massachusetts Institute of Technology', 10, 'United States', 'Cambridge', 'https://example.com/mit.jpg'),
    ('Stanford University', 15, 'United States', 'Stanford', 'https://example.com/stanford.jpg'),
    ('Harvard University', 8, 'United States', 'Cambridge', 'https://example.com/harvard.jpg'),
    ('California Institute of Technology', 5, 'United States', 'Pasadena', 'https://example.com/caltech.jpg'),
    ('University of Oxford', 12, 'United Kingdom', 'Oxford', 'https://example.com/oxford.jpg');

