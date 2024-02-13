<?php

$libro = array(
    "nombre" => "John",
    "Autor" => 30,
    "Año" => "Ejemploville",
    "NumeroPaginas" => "John",
    "ISBN" => 30
);

// Crear otro array
$Capitulos = array(
    "Capitulo" => "Desarrollador",
    "Paginas" => "5 años"
);

// Agregar $otro_array dentro de $mi_array
$libro['informacion_adicional'] = $Capitulos;

// Convertir el array resultante a JSON
$json_resultado = json_encode($libro, JSON_PRETTY_PRINT);

// Mostrar el resultado
echo $json_resultado;
?>
