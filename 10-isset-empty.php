<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];
//empty

var_dump(empty($clientes)); //te dice si el arreglo esta vacio o no
var_dump(empty($clientes3));
var_dump(empty($clientes2));

// isset .- Revisar si un arreglo seta creado o una propiedad esta definida
echo "<br>";
var_dump(isset($clientes4)); // va dar false porque no existe

var_dump(isset($cliente['nombre']));
include 'includes/footer.php';