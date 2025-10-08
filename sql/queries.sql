-- datos para iterar las queries

/* insert into comunidauto.autos (marca, modelo, precio) values
('Toyota', 'Corolla', 15000000), ('Honda', 'Civic', 14000000), ('Ford', 'Focus', 13000000),
('Chevrolet', 'Cruze', 12000000), ('Nissan', 'Sentra', 11000000), ('Volkswagen', 'Golf', 16000000); 

insert into comunidauto.clientes (nombre, apellido) values ('Juan', 'Perez'), ('Maria', 'Gomez'), ('Carlos', 'Lopez'), ('Ana', 'Martinez');

insert into comunidauto.ventas (auto_id, cliente_id, fecha) values (1, 1, '2023-01-15'), (2, 1, '2023-02-20'), (3, 2, '2023-03-10'); */

-- Ejercicio 1: listado ascendente por precio 
SELECT * FROM  comunidauto.autos ORDER BY precio ASC;

-- Ejercicio 2: autos que precio menor a 10 millones 
SELECT * FROM comunidauto.autos WHERE precio < 10000000;

-- Ejercicio 3: clientes con una compra o más 
SELECT c.* FROM comunidauto.clientes c JOIN comunidauto.ventas v ON c.id = v.cliente_id GROUP BY c.id;

-- Ejercicio 4: cantidad de autos vendidos por cada cliente 
SELECT c.id, c.nombre, c.apellido, COUNT(v.id) AS cantidad_autos_vendidos FROM comunidauto.clientes c LEFT JOIN comunidauto.ventas v ON c.id = v.cliente_id GROUP BY c.id;

-- Ejercicio 5: auto más vendido (modelo + cantidad) 
SELECT a.modelo, COUNT(v.id) AS cantidad_vendida FROM comunidauto.autos a JOIN comunidauto.ventas v ON a.id = v.auto_id GROUP BY a.id ORDER BY cantidad_vendida DESC;