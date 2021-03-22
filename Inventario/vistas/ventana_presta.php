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
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title></title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="../php/cerrarsesion.php" class="navbar-brand"><img alt="" height="80px" src="../img/tecnmBlanco.png">
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
                <a href="php/cerrarsesion.php" class="navbar-brand"><img alt="" height="80px" src="../img/teshlogo.png">
                </a>
            </form>
          </div>
        </nav>

    <div class="container">
			<div class="row">
					<div class="col-md-12">
            
						<form class="cuerp" action="../php/venta_presta.php"  method="post">
								<fieldset>
										<legend class="text-center header">Prestamos</legend>

									
										<div class="row">																		
                      <div class="col">
                        <label>Nombre</label>
                          <input name="nombre" type="text" placeholder="Nombre del alumno" class="form-control">
                      </div>
                  </div>

										<div class="row">
												<div class="col">
														<label>Semestre</label>
														<select name="semestre" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
								<option value="10">10</option>
								<option value="10">11</option>
								<option value="10">12</option>
                              </select>
												</div>
												<div class="col">
														<label>Carrera</label>
                            <select name="carrera" class="form-control">
                                <option value="ISC">ING SISTEMAS COMPUTACIONALES</option>
                                <option value="IC">ING CIVIL</option>
                                <option value="IM">ING MECATRONICA</option>
                                <option value="II">ING INDUSTRIAL</option>
                                <option value="LA">LIC ADMINISTRACION</option>
                                <option value="LB">LIC BIOLOGIA</option>
                              </select>
													</div>
										</div>

										<div class="row">
												<div class="col">
													<label>Cantidad Solicitada</label>
														<input name="cantidad" type="number" placeholder="Cantidad" class="form-control">
												</div>
												<div class="col">
														<label>Fecha de Prestamo</label>
															<input name="fecha" type="datetime-local" placeholder="" class="form-control">
													</div>
										</div>

                    <div class="col">
                      <label>Fecha de Devolucion</label>
                        <input name="fechadevu" type="datetime-local" placeholder="" class="form-control">
                    </div>
              
                    <div class="row">																		
                      <div class="col">
                        <label>Material</label>
                          <input name="material" type="text" placeholder="Nombre del material" class="form-control">
                      </div>
                  </div>
                  <div class="row">																		
                      <div class="col">
                        <label>Nombre Admin</label>
                          <input name="user" type="text" placeholder="Nombre Admin" class="form-control">
                      </div>
                  </div>
                  <div class="row">																		
                    <div class="col">
                      <label>Contraseña Admin</label>
                        <input name="Contra" type="password" placeholder="Contraseña Admin" class="form-control">
                    </div>
                </div>
                
               

												<div class="col-md-12 text-center">
													<br>
														<button type="submit" class="boton ">Solicitar</button>
												</div>
										
										</fieldset>
						</form>
				</div>
		</div>
	</div>
    
</body>

</html>
