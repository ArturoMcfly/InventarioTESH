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
       
        <meta charset="UTF-8">
        <title>Menú</title>
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
      
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="Menu.html" class="navbar-brand"><img alt="" height="80px" src="../img/tecnmBlanco.png">
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
    <br>
<br>
<br>

<div class="container">
<div class="row">

<button type="button" class="btn btn-secondary btn-dark" onclick="window.location.href=''">BUSQUEDA POR NOMBRE</button>
<button type="button" class="btn btn-secondary btn-dark" onclick="window.location.href=''">BUSQUEDA POR FECHA</button>

<button type="button" class="btn btn-secondary btn-dark" onclick="window.location.href=''">BUSQUEDA POR MATRICULA</button>
<button type="button" class="btn btn-secondary btn-dark" onclick="window.location.href=''">AGREGAR NUEVO ALUMNO</button>
<button type="button" class="btn btn-secondary btn-dark" onclick="window.location.href=''">FORMATO FOTESH-100</button>
<button type="button" class="btn btn-secondary btn-dark" onclick="window.location.href=''"></button>

</div>
</div>




          </html>