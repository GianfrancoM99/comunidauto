CREATE database comunidauto;
USE comunidauto;

CREATE TABLE autos (
    id int AUTO_INCREMENT PRIMARY KEY,
    marca varchar(50) NOT NULL,
    modelo varchar(50) NOT NULL,
    precio decimal(10,2) NOT NULL,
    anio int NOT NULL
);

CREATE TABLE clientes (
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(100) NOT NULL,
    apellido varchar(100) NOT NULL,
    email varchar(100) NOT NULL UNIQUE,
);

CREATE TABLE ventas (
    id int AUTO_INCREMENT PRIMARY KEY,
    cliente_id int NOT NULL,
    auto_id int NOT NULL,
    fecha date NOT NULL,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id),
    FOREIGN KEY (auto_id) REFERENCES autos(id)
);