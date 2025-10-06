<link rel="stylesheet" href="../css/styles.css">

<?php   

// base de datos manual

$autos_bd =  [
    [
        "id" => 1,
        "marca" => "Toyota",
        "modelo" => "Corolla",
        "precio" => 20000000
    ],
    [
        "id" => 2,
        "marca" => "Chevrolet",
        "modelo" => "Onix",
        "precio" => 18000000
    ],
    [
        "id" => 3,
        "marca" => "Ford",
        "modelo" => "Fiesta",
        "precio" => 15000000
    ],
    [
        "id" => 4,
        "marca" => "Renault",
        "modelo" => "Clio",
        "precio" => 17000000
    ],
    [
        "id" => 5,
        "marca" => "Volkswagen",
        "modelo" => "Gol",
        "precio" => 16000000
    ],
    [
        "id" => 6,
        "marca" => "Honda",
        "modelo" => "Civic",
        "precio" => 22000000
    ],
    [
        "id" => 7,
        "marca" => "Nissan",
        "modelo" => "Sentra",
        "precio" => 21000000
    ],
    [
        "id" => 8,
        "marca" => "Hyundai",
        "modelo" => "Elantra",
        "precio" => 23000000
    ],
    [
        "id" => 9,
        "marca" => "Kia",
        "modelo" => "Rio",
        "precio" => 19000000
    ],
    [
        "id" => 10,
        "marca" => "Mazda",
        "modelo" => "3",
        "precio" => 24000000
    ],
];

// parametros para ejercicio de filtrar y de buscar

$filtro_precio = $_GET['precio'] ?? null;
$busqueda_marca_modelo = $_GET['buscar'] ?? null;

// función lista estática de autos

function mostrar_tabla($lista) {
  echo "<table class='tabla-php' border='5'>";
  echo "<tr><th>Marca</th><th>Modelo</th><th>Precio</th></tr>";
  foreach ($lista as $a) {
    echo "<tr>
            <td>{$a['marca']}</td>
            <td>{$a['modelo']}</td>
            <td>\${$a['precio']}</td>
          </tr>";
  }
  echo "</table>";
}

// función filtrar autos por precio

$autos_filtrados = $autos_bd;

if ($filtro_precio) {
  $autos_filtrados = array_filter($autos_bd, function($a) use ($filtro_precio) {
    return $a['precio'] <= $filtro_precio;
  });
}

// función buscar autos por marca o modelo

if ($busqueda_marca_modelo) {
  $busqueda = strtolower($busqueda_marca_modelo);
  $autos_filtrados = array_filter($autos_filtrados, function($a) use ($busqueda) {
    return str_contains(strtolower($a["marca"]), $busqueda) || str_contains(strtolower($a["modelo"]), $busqueda);
  });
}
?>

<!-- inicio de HTML con un formulario de método GET para obtener los filtros a aplicar en PHP -->

<h1>Listado de autos</h1>
<form method="get">
  <label>Filtrar por precio máximo: </label>
  <input type="number" name="precio" placeholder="Ejemplo: 10000000" value="<?= htmlspecialchars($filtro_precio) ?>">
  <label>Buscar: </label>
  <input type="text" name="buscar" placeholder="Marca o modelo" value="<?= htmlspecialchars($busqueda_marca_modelo) ?>">
  <button class="formButton" type="submit">Filtrar</button>
</form>

<?php
mostrar_tabla($autos_filtrados);
?>

