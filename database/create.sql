drop if exists users

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
    ('user1', 'hashed_password_1', 'John Doe', 'Computer Science', 'Mathematics', 2023),
    ('user2', 'hashed_password_2', 'Jane Smith', 'Biology', NULL, 2022),
    ('user3', 'hashed_password_3', 'Michael Johnson', 'Physics', 'Chemistry', 2024);

