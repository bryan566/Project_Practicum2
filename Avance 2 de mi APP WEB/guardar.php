<?php

include("conexion.php");


$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cedula = $_POST['cedula'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$discapacidad = $_POST['discapacidad'];
$institucion = $_POST['institucion'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$query="INSERT INTO  usuarios (nombres, apellidos, cedula, pais, ciudad,
discapacidad, institucion, email, celular, usuario, password)
VALUES ('$nombres', '$apellidos', '$cedula', '$pais', '$ciudad',
        '$discapacidad', '$institucion', '$email', '$celular', '$usuario', '$password')";



$ejecutar = $conexion->query($query);


if($ejecutar){
	echo "insercion exitosa";
}
else{
	echo "insercion no exitosa";
}


?>
