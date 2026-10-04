<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];
$carrito = array();

//Util para ver los contenidos de un array
echo "<pre>"; //echo pre muy util para revisar resultados de una consulta  de una base de datos o revisar los valores
                // que eixsten en un arreglo
var_dump($carrito[1]);
echo "</pre";


//Acceder a un elemento del array
echo $carrito[1];

//Añade un elemento en el índice 3 del arreglo
$carrito[3] = 'Nuevo Producto...';

// Añadir un elemento al final del arreglo
array_push($carrito, 'Audifonos');

//Añadir al inicio
array_unshift($carrito, 'Smartwash');

//Este estilo se usa mas en Wordpress y el otro en Laravel
$clientes = array('Cliente1', 'Cliente2', 'Cliente3');
include 'includes/footer.php';