<?php
	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'sistemas');

if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
	}
	
	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['name'])){
			$errors[] = "Nombre_ad vacío";
		} else if (empty($_POST['ape_pat'])){
			$errors[] = "Pater_ad vacío";
		} else if (empty($_POST['ape_mat'])){
			$errors[] = "Mater_ad vacío";
		} else if (empty($_POST['user'])){
			$errors[] = "Nume_ad vacío";
		} else if (empty($_POST['pass'])){
			$errors[] = "Contra_ad vacío";
        
        }   else if (
			!empty($_POST['name']) && 
			!empty($_POST['ape_pat']) &&
			!empty($_POST['ape_mat']) &&
			!empty($_POST['user']) &&
            !empty($_POST['pass'])  
           
		){
 
		// escaping, additionally removing everything that could be (html/javascript-) code
		$nombre_ad=mysqli_real_escape_string($con,(strip_tags($_POST["name"],ENT_QUOTES)));
		$pater_ad=mysqli_real_escape_string($con,(strip_tags($_POST["ape_pat"],ENT_QUOTES)));
		$mater_ad=mysqli_real_escape_string($con,(strip_tags($_POST["ape_mat"],ENT_QUOTES)));
		$nume_ad=mysqli_real_escape_string($con,(strip_tags($_POST["user"],ENT_QUOTES)));
		$contra_ad=mysqli_real_escape_string($con,(strip_tags($_POST["pass"],ENT_QUOTES)));
	
		$sql="INSERT INTO `administrador_inventario` (`nombre_admin`, 
									  `apellido_pat_admin`,  
									  `apellido_mat_admin`, 
									  `n_empleado_admin`, 
									  `contrasena`) 
									  VALUES  ('".$nombre_ad."',   
									  		   '".$pater_ad."',	
											   '".$mater_ad."', 	
											   '".$nume_ad."',	
											   '".$contra_ad."')";



    $query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido guardados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
 
?>