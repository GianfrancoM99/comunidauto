/*
Script de creación de tablas

insert into comunidauto.autos (marca, modelo, precio, anio) values 
('Toyota', 'Corolla', 15000000, 2020),
('Honda', 'Civic', 16000000, 2019),
('Ford', 'Focus', 14000000, 2018),
('Chevrolet', 'Cruze', 15500000, 2021),
('Nissan', 'Sentra', 14500000, 2020);

insert into comunidauto.clientes (nombre, apellido, email) values 
('Juan', 'Perez'),
('Maria', 'Gomez'),
('Carlos', 'Lopez'),
('Ana', 'Martinez'),
('Luis', 'Rodriguez');

insert into comunidauto.ventas (cliente_id, auto_id, fecha) values 
(1, 1, '2023-01-15'),
(2, 2, '2023-02-20'),
(1, 3, '2023-03-10'),
(3, 1, '2023-04-05'),
(4, 4, '2023-05-12'),
(5, 5, '2023-06-18'),
(2, 3, '2023-07-22');
*/

-- Ejercicio 1: listado ascendente por precio 
SELECT * FROM  comunidauto.autos ORDER BY precio ASC;

-- Ejercicio 2: autos que precio menor a 10 millones 
SELECT * FROM comunidauto.autos WHERE precio < 10000000;

-- Ejercicio 3: clientes con una compra o más 
SELECT c.* FROM comunidauto.clientes c JOIN comunidauto.ventas v ON c.id = v.cliente_id GROUP BY c.id;

-- Ejercicio 4: cantidad de autos vendidos por cada cliente 
SELECT c.id, c.nombre, c.apellido, COUNT(v.id) AS cantidad_autos_vendidos FROM comunidauto.clientes c LEFT JOIN comunidauto.ventas v ON c.id = v.cliente_id GROUP BY c.id;

-- Ejercicio 5: auto más vendido (modelo + cantidad) 
SELECT a.modelo, COUNT(v.id) AS cantidad_vendida FROM comunidauto.autos a JOIN comunidauto.ventas v ON a.id = v.auto_id GROUP BY a.id ORDER BY cantidad_vendida DESC LIMIT 1;