<?php
include("bd.php");
$host = $_SERVER['HTTP_HOST'];

$tipo_usuario = $_POST['cuenta'];
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];
$confirm_contraseña = $_POST['confirm-contraseña'];
$telefono = $_POST['telefono'];
$pais = $_POST['pais']; 

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    if($tipo_usuario == "cliente"){
        $consulta = "SELECT email FROM cliente WHERE email = '$email'";
        $res1 = mysqli_query($conn, $consulta);
        $resultado1 = mysqli_fetch_array($res1);
        if($resultado != ''){
            $_SESSION['mensajeR'] = "El correo ya está asociado a una cuenta!";
            $_SESSION['colorR'] = 'warning';
            $_SESSION['destroyR'] = true;
            header("location: http://$host/PaginaEspecialidad/registro_cliente.php");
        }else{
            if($contraseña != $confirm_contraseña){
                $_SESSION['mensajeR'] = "La contraseña y su confirmación no son iguales!";
                $_SESSION['colorR'] = 'warning';
                $_SESSION['destroyR'] = true;
                header("location: http://$host/PaginaEspecialidad/registro_cliente.php");
            }
        }
        $registro = "INSERT INTO cliente(nombre, email, contraseña, telefono, pais) 
        VALUES ('$nombre', '$email', '$contraseña', '$telefono', '$pais')";
        $rs = mysqli_query($conn, $registro);
    }elseif($tipo_usuario == "proveedor"){
        $consulta = "SELECT id_proveedor FROM proveedor WHERE email = '$email'";
        $res1 = mysqli_query($conn, $consulta);
        $resultado1 = mysqli_fetch_array($res1);
        if($resultado1 == ''){
            if($contraseña != $confirm_contraseña){
                $_SESSION['mensajeR'] = "La contraseña y su confirmación no son iguales!";
                $_SESSION['colorR'] = 'warning';
                $_SESSION['destroyR'] = true;
                header("location: http://$host/PaginaEspecialidad/registro_cliente.php");
            }
        }else{
            $_SESSION['mensajeR'] = "El correo ya está asociado a una cuenta!";
            $_SESSION['colorR'] = 'warning';
            $_SESSION['destroyR'] = true;
            header("location: http://$host/PaginaEspecialidad/registro_cliente.php");
        }
        $registro = "INSERT INTO proveedor(nombre, email, contraseña, telefono, pais) 
        VALUES ('$nombre', '$email', '$contraseña', '$telefono', '$pais')";
        $rs = mysqli_query($conn, $registro);
    }else{
        $_SESSION['mensaje'] = "Selecciona un tipo de cuenta";
        $_SESSION['color'] = 'danger';
        $_SESSION['destroy'] = true;
        header("location: http://$host/PaginaEspecialidad/registro_cliente.php");
    }
}else {
    $_SESSION['mensajeR'] = "El correo no es válido...";
    $_SESSION['colorR'] = 'danger';
    $_SESSION['destroyR'] = true;
    header("location: http://$host/PaginaEspecialidad/registro_cliente.php");
}

if ($rs) {
    $_SESSION['mensaje'] = "Registro exitoso! Ahora inicia sesión.";
    $_SESSION['color'] = 'success';
    $_SESSION['destroy'] = true;
    echo "<script>alert('Registro exitoso!');window.location = 'http://$host/PaginaEspecialidad/index.html'</script>";
} else {
    echo "<script>alert('Ocurrió un error, vuelve a intentarlo...');window.location = '../../registro_cliente.php'</script>";
}

?>