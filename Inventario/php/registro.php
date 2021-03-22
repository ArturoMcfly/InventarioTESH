<?php
$conex = new mysqli('localhost','root','','sistemas');

$matricula = $_POST['matricula'];
$ape_pat = $_POST['ape_pat'];
$ape_mat = $_POST['ape_mat'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];


$sql = "INSERT INTO usuarios_inventario (
	`matricula`,
	`ape_pat`, 
	`ape_mat`, 
	`nombre`,
	`usuario`, 
	`contrasena`)
    VALUES (
		'".$_POST["matricula"]."',
		'".$_POST["nombre"]."',
		'".$_POST["ape_pat"]."',
		'".$_POST["ape_mat"]."',
		'".$_POST["usuario"]."',
		'".$_POST["pass"]."')";
	


$resul = $conex->query($sql);

if ($resul) {
	echo "<script language='javascript'>"; 
	echo "alert('Registro guardado.')"; 
	echo "</script>"; 
	echo '<script>window.history.go(-1)</script>';
}else {
	echo "<script language='javascript'>"; 
	echo "alert('Error!! Registro no guardado .')"; 
	echo "</script>";  
	echo '<script>window.history.go(-1)</script>';
}
 ?>
