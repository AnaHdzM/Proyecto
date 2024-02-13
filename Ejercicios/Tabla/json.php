<?php

$libros = [];

$libros[] = [
    "Nombre" => "Libro1",
    "Autor" => "Autor1",
    "Anio" => "Anio1",
    "NumeroPaginas" => 200,
    "ISBN" => 32,
    "Capitulos" => [
        "Capitulo1" => "Cap1",
        "PagCap1" => 50,
        "Capitulo2" => "Cap2",
        "PagCap2" => 50,
        "Capitulo3" => "Cap3",
        "PagCap3" => 50,
    ]
];
$libros[] = [
    "Nombre" => "Libro2",
    "Autor" => "Autor2",
    "Anio" => "Anio2",
    "NumeroPaginas" => 200,
    "ISBN" => 32,
    "Capitulos" => [
        "Capitulo1" => "Cap1",
        "PagCap1" => 50,
        "Capitulo2" => "Cap2",
        "PagCap2" => 50,
        "Capitulo3" => "Cap3",
        "PagCap3" => 50,
    ]
];
$libros[] = [
    "Nombre" => "Libro3",
    "Autor" => "Autor3",
    "Anio" => "Anio3",
    "NumeroPaginas" => 100,
    "ISBN" => 32,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 20,
        "Capitulo2" => "Cap2",
        "PagCap2" => 20,
        "Capitulo3" => "Cap3",
        "PagCap3" => 20,
        "Capitulo4" => "Cap4",
        "PagCap4" => 20,
        "Capitulo5" => "Cap5",
        "PagCap4" => 20
    ]
    ];

$libros[] = [
    "Nombre" => "Libro4",
    "Autor" => "Autor4",
    "Anio" => "Anio4",
    "NumeroPaginas" => 120,
    "ISBN" => 32,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 20,
        "Capitulo2" => "Cap2",
        "PagCap2" => 20,
        "Capitulo3" => "Cap3",
        "PagCap3" => 20,
        "Capitulo4" => "Cap4",
        "PagCap4" => 20,
        "Capitulo5" => "Cap5",
        "PagCap4" => 20,
        "Capitulo6" => "Cap6",
        "PagCap4" => 20
    ]
    ];

$libros[] = [
    "Nombre" => "Libro5",
    "Autor" => "Autor5",
    "Anio" => "Anio5",
    "NumeroPaginas" => 100,
    "ISBN" => 32,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 30,
        "Capitulo2" => "Cap2",
        "PagCap2" => 40,
        "Capitulo3" => "Cap3",
        "PagCap3" => 20,
        "Capitulo4" => "Cap4",
        "PagCap4" => 10
    ]
    ];

$libros[] = [
    "Nombre" => "Libro6",
    "Autor" => "Autor6",
    "Anio" => "Anio6",
    "NumeroPaginas" => 200,
    "ISBN" => 32,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 20,
        "Capitulo2" => "Cap2",
        "PagCap2" => 20,
        "Capitulo3" => "Cap3",
        "PagCap3" => 20,
        "Capitulo4" => "Cap4",
        "PagCap4" => 20,
        "Capitulo5" => "Cap5",
        "PagCap4" => 20,
        "Capitulo6" => "Cap6",
        "PagCap4" => 20
    ]
    ];

$libros[] = [
    "Nombre" => "Libro7",
    "Autor" => "Autor7",
    "Anio" => "Anio7",
    "NumeroPaginas" => 75,
    "ISBN" => 32,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 50,
        "Capitulo2" => "Cap2",
        "PagCap2" => 25,
    ]
    ];

$libros[] =[
    "Nombre" => "Libro8",
    "Autor" => "Autor8",
    "Anio" => "Anio8",
    "NumeroPaginas" => 100,
    "ISBN" => 32,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 25,
        "Capitulo2" => "Cap2",
        "PagCap2" => 25,
        "Capitulo3" => "Cap3",
        "PagCap3" => 25,
        "Capitulo4" => "Cap4",
        "PagCap4" => 25
    ]
    ];

$libros[] = [
    "Nombre" => "Libro9",
    "Autor" => "Autor9",
    "Anio" => "Anio9",
    "NumeroPaginas" => 100,
    "ISBN" => 32,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 30,
        "Capitulo2" => "Cap2",
        "PagCap2" => 30,
        "Capitulo3" => "Cap3",
        "PagCap3" => 40
        
    ]
];

$libros[] = [
    "Nombre" => "Libro10",
    "Autor" => "Autor10",
    "Anio" => "Anio10",
    "NumeroPaginas" => 100,
    "ISBN" => 32,
    "Capitulos" =>[
        "Capitulo1" => "Cap1",
        "PagCap1" => 30,
        "Capitulo2" => "Cap2",
        "PagCap2" => 20,
        "Capitulo3" => "Cap3",
        "PagCap3" => 25,
        "Capitulo4" => "Cap4",
        "PagCap4" => 25
    ]
    ];


echo json_encode($libros);
?>
