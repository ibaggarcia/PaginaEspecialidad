<?php
session_start();
$host = $_SERVER['HTTP_HOST'];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="display:inline">Iniciaste sesion</h1>
    <h6 style="display:inline"><?php if (isset($_SESSION['Usuario'])){
        echo $_SESSION['Usuario'];
        echo "<ul>";
                echo "<li class='dropdown'>";
                echo "<a class='dropbtn'>$_SESSION[Usuario]</a>";
                echo "<div class='dropdown-content'>";
                echo "<a href='./src/php/logout.php'>Cerrar Sesión</a>";
                echo "</div>";
                echo "</li>";
                echo "</ul>";
    } ?></h6>
</body>
</html>