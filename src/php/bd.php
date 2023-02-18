<?php
session_start();
$conn = mysqli_connect(
    '127.0.0.1:3307',
    'root',
    '',
    'plantilla'
);
if(isset($conn)){
    echo "<script>console.log('Conectado a BD')</script>";
}else{
    echo "<script>console.log('Sin conexion a BD')</script>";
}
?>
