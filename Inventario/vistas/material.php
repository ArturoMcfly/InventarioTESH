
<?php
session_start();
?>
<?php
if(isset($_SESSION['usr'])){

}else{
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
		
		
<head>
	<title>material</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body >		
		
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="../vistas/Menu.php" class="navbar-brand"><img alt="" height="80px" src="../img/tecnmBlanco.png">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#"><!--aqui se pueden poner HOME--> <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><!--aqui se pueden poner herrramientas --></a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<a href="../php/cerrarsesion.php" class="navbar-brand"><img alt="" height="80px" src="../img/teshlogo.png">
						</a>
				</form>
			</div>
	</nav>	
	<div class="container">
			<div class="row">
					<div class="col-md-12">
							
						<form class="cuerp" action="../php/material.php"  method="post">
								<fieldset>
										<legend class="text-center header">ENTRADA DE MATERIAL</legend>

									<div class="row">
												<div class="col">
														<label>Nombre</label>
														<input name="name" type="text" placeholder="Nombre del material" class="form-control">
												</div>
												<div class="col">
														<label>Producto</label>
														<input name="Producto" type="text" placeholder="" class="form-control">
												</div>
										</div>

										<div class="row">
												<div class="col">
														<label>Marca</label>
														<input name="Marca" type="text" placeholder="" class="form-control">
												</div>
												<div class="col">
														<label>Cantidad</label>
															<input name="Cantidad" type="number" placeholder="" class="form-control">
													</div>
										</div>

										<div class="row">
												<div class="col">
													<label>Unidad de Medida</label>
														<input name="Medida" type="text" placeholder="" class="form-control">
												</div>
												<div class="col">
														<label>Fecha de entrada</label>
															<input name="fecha" type="datetime-local" placeholder="" class="form-control">
													</div>
										</div>

										<div class="row">																		
												<div class="col">
													<label>Provedor</label>
														<input name="provedor" type="text" placeholder="" class="form-control">
												</div>
										</div>
										
												<div class="col-md-12 text-center">
													<br>
														<button type="submit" class="boton ">Guardar</button>
												</div>
										
										</fieldset>
						</form>
				</div>
		</div>
	</div>
				 <script src="./js/jquery-3.3.1.min.js"></script>
      <script src="./js/bootstrap.min.js"></script>
	
</body>
</html>
