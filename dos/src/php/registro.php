<?php
include("bd.php");

$tipo_usuario = $_POST['cuenta'];
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];
$telefono = $_POST['phone'];
$pais = $_POST['pais']; 
$genero = $_POST['gender'];

if($tipo_usuario == "cliente"){
    $registro = "INSERT INTO cliente(nombre, email, contraseña, telefono, pais, genero) 
        VALUES ('$nombre', '$email', '$contraseña', '$telefono', '$pais', '$genero')";
}
elseif($tipo_usuario == "proveedor"){
    $registro = "INSERT INTO proveedor(nombre, email, contraseña, telefono, pais, genero) 
        VALUES ('$nombre', '$email', '$contraseña', '$telefono', '$pais', '$genero')";
}
else
    echo "No selecciono un tipo de cuenta";

$rs = mysqli_query($conn, $registro);
if ($rs) {
    echo "Se ha registrado";
} else {
    echo "No se pudo registrar";
}

?>