<?php
session_start();
if(!isset($_SESSION['usuario'])){
header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
</head>
<body>
<?php
echo "<h1>  Hola ".$_SESSION['usuario']."</h1>"; 
?>
    
    <ul>
    <li><a href="index.php">Inicio</a>
    </li>
    <li>
    <a href="Usuario.php">Usuario</a>
    </li>
    <li>
    <a href="TipoUsuario.php">Cargos</a>
    </li>
    <li>
    <a href="cerrarsesion.php">Cerrar Sesion</a>
    </li>
    </ul>
