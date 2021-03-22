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
<html lang="es-En">
<head>
    <meta charset="UTF-8">
     <title>Usuarios</title>
     <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/pres.css">

</head>
<body>
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
                <a href="../php/cerrarsesion.php" class="navbar-brand"><img alt="" height="80px" src="../img/teshlogo.png"></a>
            </form>
          </div>
        </nav>

        
  <section class="principal">
    <h1>Busca Usuarios</h1>
    <div class="form-1-2">
      <label for="caja_busqueda">Buscar</label>
      <input type="text" name="caja_busqueda" id="caja_busqueda">

    </div>

    <div id="datos">
    </div>
    
  
  </section>
  <script src="../js/js/jquery.min.js"></script>
  <script src="../js/js/mainU.js"></script>

    
</body>
</html>