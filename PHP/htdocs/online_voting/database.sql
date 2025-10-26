DROP DATABASE IF EXISTS voting_system;
CREATE DATABASE voting_system;
USE voting_system;

-- Table for voters with admin column
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  has_voted BOOLEAN DEFAULT 0,
  is_admin BOOLEAN DEFAULT 0
);

-- Table for candidates with img_url
CREATE TABLE candidates (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  img_url VARCHAR(255),
  votes INT DEFAULT 0
);

-- Insert demo candidates with dummy image URLs
INSERT INTO candidates (name, img_url) VALUES
('BJP', 'https://www.shutterstock.com/image-vector/rajkot-gujarat-india-10-disember-600nw-2400847291.jpg'),
('Congress', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Indian_National_Congress_hand_logo.svg/2048px-Indian_National_Congress_hand_logo.svg.png'),
('AAP', 'https://www.pngguru.in/storage/uploads/images/Aam%20aadmi%20party%20logo%20free%20png_1669800331_1480471951.webp');

-- Insert admin user with plain-text password (for local testing only)
-- Email: admin@example.com
-- Password: admin123
INSERT INTO users (name, email, password, is_admin) VALUES
('Admin', 'admin@example.com', 'admin123', 1);
