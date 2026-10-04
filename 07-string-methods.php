<?php include 'includes/header.php';

$nombreCliente = "     Juan Pablo      ";

echo strlen($nombreCliente); //dice el tamaño del string
var_dump($nombreCliente);

//Eliminar espacios en blanco

$texto = trim($nombreCliente);
echo $texto;

//Convertirlo a mayusculas

echo strtoupper($nombreCliente);

//Convertirlo en minúsculas
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Juan', 'J', $nombreCliente);

//Revisar si un string existe o no
echo strpos($nombreCliente, 'Juan');

$tipoCliente = "Premium";

echo "<br>";
echo "El cliente " . $nombreCliente . "es" .$tipoCliente;
echo "El cliente {$nombreCliente} es ${tipoCliente}";
include 'includes/footer.php';