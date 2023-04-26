CREATE DATABASE IF NOT EXISTS my_database;
USE my_database;

CREATE TABLE IF NOT EXISTS producto (
    id INT NOT NULL AUTO_INCREMENT,
    producto VARCHAR(255) NOT NULL,
    stock INT NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY (id)
);


INSERT INTO producto (producto, stock, precio) VALUES
    ('Camiseta', 50, 25.99),
    ('Pantalón', 25, 49.99),
    ('Calcetines', 100, 7.99),
    ('Zapatillas', 10, 99.99);
