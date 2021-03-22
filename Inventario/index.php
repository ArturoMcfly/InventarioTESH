<!DOCTYPE html>
<html lang="es">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Inventario</title>
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
    </head>  
</head>
  <body>
  <?php include("./php/modal_registro.php");?>
  <?php include("./php/modal_login.php");?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand"><img alt="" height="80px" src="./img/tecnmBlanco.png">
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
                  <a href="#" class="navbar-brand"><img alt="" height="80px" src="./img/teshlogo.png">
              </form>
            </div>
					</nav>
					<br>
      <br>
      <div class="tranpsrents text-center">
          <div class="header ">
              <h1 class="display-4">Sistema  De Reporte De <br>FOTESH 100 Para Asesoria <br>De Los Alumnos</h1>
          </div>
          <div class="card-body">
              <button type="button" class="btnn" data-toggle="modal" data-target="#dataRegister">
                  Registrarte
                </button> 
                <button type="button" class="btnn" data-toggle="modal" data-target="#Iniciar">Iniciar sesion
                </button>
          </div>
        </div>
      <br>
      <br>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="./js/jquery-3.3.1.min.js"></script>
      <script src="./js/bootstrap.min.js"></script>
 </body>
</html>