<?php
include("bd.php");
$host = $_SERVER['HTTP_HOST'];

$tipo_usuario = $_POST['cuenta'];
$contraseña = $_POST['contraseña'];
$email = $_POST['email'];

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    if($tipo_usuario == "cliente"){
        $consulta = "SELECT id_cliente, email, contraseña FROM cliente WHERE email = '$email' AND contraseña = '$contraseña'";
        $query_result = mysqli_query($conn, $consulta);
        $row = mysqli_fetch_array($query_result);
        if ($row != ""){
            $id = $row['id_cliente'];
            $consulta = "SELECT nombre FROM cliente WHERE id_cliente = '$id'";
            $query_result = mysqli_query($conn, $consulta);
            $usuario = mysqli_fetch_array($query_result);
            $_SESSION['Usuario'] = $usuario['nombre'];
            header("location: http://$host/PaginaEspecialidad/index.php");
        }else{
            $_SESSION['mensaje'] = "El correo y/o la contraseña son incorrectos...";
            $_SESSION['color'] = 'danger';
            $_SESSION['destroy'] = true;
            header("location: http://$host/PaginaEspecialidad/index.php");
        }
    }elseif($tipo_usuario == "proveedor"){
        $consulta = "SELECT email, contraseña FROM proveedor WHERE email = '$email' AND contraseña = '$contraseña'";
        $query_result = mysqli_query($conn, $consulta);
        $row = mysqli_fetch_array($query_result);
        if ($row != ""){
            $_SESSION['Usuario'] = $row['nombre'];
            header("location: http://$host/PaginaEspecialidad/index.php");
        }else{
            $_SESSION['mensaje'] = "El correo y/o la contraseña son incorrectos...";
            $_SESSION['color'] = 'danger';
            $_SESSION['destroy'] = true;
            header("location: http://$host/PaginaEspecialidad/index.php");
        }
    }else{
        $_SESSION['mensaje'] = "Selecciona un tipo de cuenta";
        $_SESSION['color'] = 'danger';
        $_SESSION['destroy'] = true;
        header("location: http://$host/PaginaEspecialidad/index.php");
    }
}else {
    $_SESSION['mensaje'] = "Ingresa un correo válido...";
    $_SESSION['color'] = 'danger';
    $_SESSION['destroy'] = true;
    header("location: http://$host/PaginaEspecialidad/index.php");
}



?>