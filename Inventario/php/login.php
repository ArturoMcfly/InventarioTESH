	<?php
	# conectare la base de datos
    $mysqli=@mysqli_connect('localhost', 'root', '', 'sistemas');
   
		// escaping, additionally removing everything that could be (html/javascript-) code
		$user=$_POST['user'];
	$pass=$_POST['pass'];	
	
		$sql="SELECT * FROM usuarios_inventario WHERE usuario='" . $user . "'";

        $resultado = $mysqli -> query($sql);

        $row = $resultado -> fetch_array(MYSQLI_BOTH);
			
	
        if ($row[5] == $pass) {
            session_start();
            $_SESSION['usr'] = $row[4];
		if ($row[4] == "francisco" || $row[4] == "mari" ) {
			header("location:../vistas/menu.php");

		} else {
			header("location:../vistas/ventana_presta.php");
		}
        } else {
			echo "Error en la autentificacion;";
			
			echo "<script language='javascript'>"; 
			echo "alert('la clave no es valida.')"; 
			
	        echo "</script>"; 
			echo '<script>window.history.go(-1)</script>';
			
			if (isset($errors)){
			}
		}
			
?>