<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";

echo $cliente['nombre'];
echo $cliente['informacion']['tipo'];

//Si escribes una propiedad que no está definida en el arreglo entonces va agregarla
$cliete['codigo'] = 123456;

include 'includes/footer.php';