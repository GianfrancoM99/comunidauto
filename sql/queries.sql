-- Ejercicio 1: listado ascendente por precio --
SELECT FROM * comunidauto.autos ORDER BY precio ASC;

-- Ejercicio 2: autos que precio menor a 10 millones --
SELECT * FROM comunidauto.autos WHERE precio < 10000000;

-- Ejercicio 3: clientes con una compra o más --
SELECT c.* FROM comunidauto.clientes c JOIN comunidauto.ventas v ON c.id = v.cliente_id GROUP BY c.id;

-- Ejercicio 4: cantidad de autos vendidos por cada cliente --
SELECT c.id, c.nombre, c.apellido, COUNT(v.id) AS cantidad_autos_vendidos FROM comunidauto.clientes c LEFT JOIN comunidauto.ventas v ON c.id = v.cliente_id GROUP BY c.id;

-- Ejercicio 5: auto más vendido (modelo + cantidad) --
SELECT a.modelo, COUNT(v.id) AS cantidad_vendida FROM comunidauto.autos a JOIN comunidauto.ventas v ON a.id = v.auto_id GROUP BY a.id ORDER BY cantidad_vendida DESC;