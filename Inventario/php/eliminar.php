<?php
$mysqli=new mysqli('127.0.0.1','root','','sistemas');
$matricula = $_POST['matricula'];
$consulta="DELETE FROM usuarioss WHERE matricula='".$matricula."'";
$resul = $mysqli -> query($consulta);

if ($resul) {
	echo "<script language='javascript'>"; 
	echo "alert('Registro guardado.')"; 
	echo "</script>"; 
	echo '<script>window.history.go(-3)</script>';
}else {
	echo "<script language='javascript'>"; 
	echo "alert('Error!! Registro no guardado .')"; 
	echo "</script>";  
	echo '<script>window.history.go(-1)</script>';
}
?>