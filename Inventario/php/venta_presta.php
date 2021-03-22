
<?php
//conexion a la base

$co= new mysqli('localhost','root','','sistemas');


//valores del formulario
$nombre = $_POST['nombre'];
$semestre = $_POST['semestre'];
$carrera = $_POST['carrera'];
$cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];
$fechadev = $_POST['fechadevu'];
$material = $_POST['material'];
$Admin=$_POST['user'];
$contraseña=$_POST['Contra'];
$sqlc=mysqli_query($co,"SELECT  * FROM administrador_inventario where nombre_admin='$Admin' AND contrasena='$contraseña'");

if($sqlc==null){
	echo "<script language='javascript'>"; 
	echo "alert('la clave no es valida.')"; 
	echo "</script>"; 
	echo '<script>window.history.go(-1)</script>';
}else{

	if($nombre==""||$nombre==null||$semestre==""||$semestre==null || $carrera=="" || $carrera==null || $cantidad=="" || $cantidad==null|| $fecha==""|| $fecha==null || $fechadev==""|| $fechadev==null || $material=="" || $material==null){
		echo "<script language='javascript'>"; 
	echo "alert('los campos no estan completos.')"; 
	echo "</script>"; 
	echo '<script>window.history.go(-1)</script>';
	}else {
		$ql1=mysqli_query($co,"SELECT  * FROM materiales_inventario where nombre_m='$material'");
		
		if($ql1==null){
            echo "<script language='javascript'>"; 
	        echo "alert('el material no existe.')"; 
	        echo "</script>"; 
	        echo '<script>window.history.go(-1)</script>';
		}else{
		while($row=mysqli_fetch_array($ql1,MYSQLI_ASSOC)){
		$var2=$row['cantidad'];
		$var3=$row['id_material'];
		}

          if($var2>=$cantidad){
			  $resultado=$var2-$cantidad;
		$sql = "INSERT INTO prestamo_inventario (
			`id_usuario`,
			`semestre`, 
			`carrera`,
			`fecha_pres`,
			`fecha_dev`,
			`stock`,
			`id_material`)
			VALUES (
				'".$_POST["nombre"]."',
				'".$_POST["semestre"]."',
				'".$_POST["carrera"]."',
				'".$_POST["fecha"]."',
				'".$_POST["fechadevu"]."',
				'".$_POST["cantidad"]."',
				'".$_POST["material"]."')";
			
		$sql3="UPDATE materiales_inventario SET cantidad=$resultado WHERE id_material=$var3";
		$resul1=$co->query($sql3);
		
		$resul = $co->query($sql);
		
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
	}else{
		echo "<script language='javascript'>"; 
	echo "alert('No hay material suficiente.')"; 
	echo "</script>"; 
	echo '<script>window.history.go(-1)</script>';
	}
	}

	}
}


 ?>
