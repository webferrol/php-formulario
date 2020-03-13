<?php

//método POST
// if(!$_POST)
//     //redirigimos
//     header('Location: http://localhost/PROYECTOS/FORMARIO_1/');


// //todo nuestro código. No hace falta ya else

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// extract($_POST);


if(!$_GET)
header('Location: http://localhost/PROYECTOS/FORMARIO_1/');

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

$nombre=$_GET["nombre"];
echo htmlspecialchars($nombre);
