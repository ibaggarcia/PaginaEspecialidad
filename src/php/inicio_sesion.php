<?php
include("bd.php");
$host = $_SERVER['HTTP_HOST'];

$tipo_usuario = $_POST['cuenta'];
$contraseña = $_POST['contraseña'];
$email = $_POST['email'];

if($tipo_usuario == "cliente"){
    $consulta = "SELECT email, contraseña FROM cliente WHERE email = '$email' AND contraseña = '$contraseña'";
}
elseif($tipo_usuario == "proveedor"){
    $consulta = "SELECT email, contraseña FROM proveedor WHERE email = '$email' AND contraseña = '$contraseña'";
}
else
    echo "No selecciono un tipo de cuenta";

$query_result = mysqli_query($conn, $consulta);
$row = mysqli_fetch_array($query_result);
if ($row != "") {
    header("location: http://$host/PaginaEspecialidad/sesion.html");
}
else {
    header("location: http://$host/PaginaEspecialidad/inicio_sesion.html");
}
?>