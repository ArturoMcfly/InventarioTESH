<?php

//conexion a la base

$conex = new mysqli('localhost','root','','sistemas');


//valores del formulario
$nombre_m = $_POST['name'];
$producto = $_POST['Producto'];
$marca = $_POST['Marca'];
$cantidad = $_POST['Cantidad'];
$unidad_med = $_POST['Medida'];
$proveedor = $_POST['provedor'];
if($nombre_m==""||$nombre_m==null||$producto==""||$producto==null || $marca=="" || $marca==null || $cantidad=="" || $cantidad==null|| $unidad_med==""|| $unidad_med==null || $proveedor=="" || $proveedor==null){
	echo "<script language='javascript'>"; 
echo "alert('los campos no estan completos.')"; 
echo "</script>"; 
echo '<script>window.history.go(-1)</script>';
}else {


	

$sql = "INSERT INTO materiales_inventario (
	`nombre_m`,
	`producto`, 
	`marca`, 
	`cantidad`,
	`unidad_med`, 
	`proveedor`)
    VALUES (
		'".$_POST["name"]."',
		'".$_POST["Producto"]."',
		'".$_POST["Marca"]."',
		'".$_POST["Cantidad"]."',
		'".$_POST["Medida"]."',
		'".$_POST["provedor"]."')";
	


$resul = $conex->query($sql);

if ($resul) {
	echo "<script language='javascript'>"; 
	echo "alert('Registro guardado.')"; 
	//header("location:material.html");
	echo "</script>"; 
	echo '<script>window.history.go(-1)</script>';
}else {
	echo "<script language='javascript'>"; 
	echo "alert('Error!! Registro no guardado .')"; 
	echo "</script>";  
	echo '<script>window.history.go(-1)</script>';
}
}

    ?>