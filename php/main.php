<link rel="stylesheet" href="../css/php.css">

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

function mostrarTabla($lista) {
  echo "<table class='tablaPhp' border='5'>";
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
    return $a['precio'] < $filtro_precio;
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

<body class="bodyPhp">
  <div class="formPhp">
    <h1>Listado de autos</h1>
    <form method="get">
      <label>Filtrar por precio máximo: </label>
      <input type="number" name="precio" placeholder="Ejemplo: 10000000" value="<?= htmlspecialchars($filtro_precio) ?>">
      <label>Buscar: </label>
      <input type="text" name="buscar" placeholder="Marca o modelo" value="<?= htmlspecialchars($busqueda_marca_modelo) ?>">
      <button class="formButton" type="submit">Filtrar</button>
      <button class="resetButton" type="button" onclick="window.location.href='main.php'">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
        </svg>
      </button>
    </form>
  </div>
</body>

<?php
mostrarTabla($autos_filtrados);
?>

