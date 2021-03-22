<?php
	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'inventariolab');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['user'])){
			$errors[] = "usurio vacío";
		} else if (empty($_POST['pass'])){
			$errors[] = "pass vacío";
		}   else if (
			!empty($_POST['user']) && 
			!empty($_POST['pass'])
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$user=mysqli_real_escape_string($con,(strip_tags($_POST["user"],ENT_QUOTES)));
		$pass=mysqli_real_escape_string($con,(strip_tags($_POST["pass"],ENT_QUOTES)));
		
	
		$sql="SELECT * FROM usuarios WHERE usuario='" . $user . "'";

        $resultado = $mysqli -> query($sql);

        $row = $resultado -> fetch_array(MYSQLI_BOTH);
        
        if ($row[5] == $pass) {
            session_start();
            $_SESSION['usr'] = $row[4];
            if ($row[4] == "maria") {
                header("location:Menu.html");
            } else {
                header("location:inventario.html");
            }
        } else {
            echo "Error en la autentificacion;";
    
		
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