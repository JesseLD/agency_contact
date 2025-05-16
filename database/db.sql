-- Creating Agency Table

CREATE TABLE IF NOT EXISTS agency (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

-- Creating User Table

CREATE TABLE IF NOT EXISTS user (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    agency_id INTEGER,
    FOREIGN KEY (agency_id) REFERENCES agency(id)
);

-- Creating Contact Table

CREATE TABLE IF NOT EXISTS contact (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone VARCHAR(20),
    agency_id INTEGER,
    FOREIGN KEY (agency_id) REFERENCES agency(id)
);