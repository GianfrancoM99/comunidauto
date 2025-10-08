# 🚗 Prueba Técnica – ComunidAuto

Hola, soy **Gianfranco Merad**, Técnico Superior en Programación.  
Este proyecto es mi desarrollo para la **prueba técnica del puesto de Programador Junior en ComunidAuto**.  
Está realizado con **HTML, CSS, JavaScript, PHP y MySQL**, ejecutándose en un entorno local con **XAMPP**.

Mi objetivo con esta entrega fue cumplir con los requerimientos técnicos y, al mismo tiempo, mostrar una estructura clara, bien documentada y fácil de ejecutar incluso para quienes no tengan experiencia previa.

---

## 🧭 Estructura del proyecto

comunidauto/

├──css/
 └──html.css → estilos para las páginas HTML
 └──php.css → estilos para las páginas PHP

├── js/
  └── main.js → lógica de JavaScript: lista dinámica, buscador, conversión de moneda

├── php/
  └── main.php → lógica principal en PHP: listado, filtro y buscador de autos

├── sql/
 ├── schema.sql → creación de tablas (autos, clientes, ventas)
 └── queries.sql → consultas SQL pedidas en la prueba técnica

├── index.html → menú principal para navegar entre las secciones

└── README.md → documentación del proyecto

## ⚙️ Tecnologías utilizadas

| Componente | Descripción |
|-------------|-------------|
| **HTML5** | Estructura básica del sitio. |
| **CSS3** | Estilos visuales para HTML y PHP. |
| **JavaScript (ES6)** | Lógica de filtrado dinámico, buscador y conversión de moneda. |
| **PHP 8** | Backend para mostrar, filtrar y buscar autos. |
| **MySQL / MariaDB** | Base de datos relacional con tablas de autos, clientes y ventas. |
| **XAMPP** | Entorno local con Apache y MySQL. |

---

## 🛠️ Cómo ejecutar el proyecto

📌 **IMPORTANTE:** Si al abrir un archivo PHP el navegador lo descarga en lugar de ejecutarlo, asegurate de acceder mediante `http://localhost/...` y no con doble clic sobre el archivo.

1. **Instalá XAMPP** desde https://www.apachefriends.org/es/index.html.  
2. **Iniciá Apache y MySQL** desde el panel de control.  
3. **Copiá la carpeta del proyecto** (`comunidauto`) dentro de: C:\xampp\htdocs\
4. **Abrí phpMyAdmin** desde tu navegador: http://localhost/phpmyadmin
5. **Creá la base de datos:** CREATE DATABASE comunidauto;
6. **Importá las tablas desde:** `sql/schema.sql.`
7. **(Opcional) Cargá datos de prueba con INSERT INTO (`sql/queries.sql`) o usando tus propias consultas.**
8. **Ejecutá el proyecto:** http://localhost/comunidauto/index.html
9. **Para testear el backend PHP:** http://localhost/comunidauto/php/main.php

## 🧩 Base de datos

El archivo `schema.sql` crea tres tablas relacionadas:

- **autos** → id, marca, modelo, precio, año  
- **clientes** → id, nombre, apellido, email, teléfono  
- **ventas** → id, cliente_id, auto_id, fecha, precio_venta  

Las consultas en `queries.sql` permiten obtener:
1. Autos ordenados por precio (ascendente).  
2. Autos con precio menor a 10.000.000.  
3. Clientes con al menos una compra.  
4. Total de autos vendidos por cliente.  
5. El auto más vendido.  

---

## 💡 Qué hace cada parte

### `php/main.php`
- Muestra todos los autos en una tabla HTML.  
- Permite **filtrar por precio máximo**.  
- Permite **buscar por marca o modelo**.  

### `js/main.js`
- Muestra una lista dinámica de autos.  
- Tiene un **buscador en tiempo real**.  
- Convierte precios de pesos argentinos a dólares (valor fijo).  

### `index.html`
- Página principal que funciona como menú para acceder a cada parte del proyecto.  

---

## 🧠 Objetivo del proyecto

Este proyecto demuestra mi capacidad para:

- Programar en **PHP, JavaScript y SQL** con buenas prácticas.  
- Integrar **frontend y backend** de forma funcional.  
- Escribir código **claro, ordenado y documentado**.  
- Trabajar con un entorno de desarrollo completo (**XAMPP + MySQL + PHP**).  
- Explicar el proceso para que cualquier persona pueda ejecutarlo fácilmente.

---

## 🧾 Datos personales

**Desarrollador:** Gianfranco Merad  
**Título:** Técnico Superior en Programación  
**Año:** 2025  
**Entorno:** XAMPP (Apache + MySQL + PHP 8)  



