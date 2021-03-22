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
        <title>Agregar Usuario</title>
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
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
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
              <form class="cuerp" action="../php/agregarnuevoad.php" method="post">
                  <fieldset>
                      <legend class="text-center header">Agregar Nuevo Administrador</legend>
  
                    <div class="row">
                          <div class="col">
                              <label>Nombre</label>
                              <input name="name" type="text" placeholder="Nombre " class="form-control">
                          </div>
                          <br>
                          <div class="col">
                              <label>Apellido Paterno</label>
                              <input name="ape_pat" type="text" placeholder="" class="form-control">
                          </div>
                      </div>
  
                      <div class="row">
                          <div class="col">
                              <label>Apellido Materno</label>
                              <input name="ape_mat" type="text" placeholder="" class="form-control">
                          </div>
                          <br>
                          <div class="col">
                              <label>Usuario</label>
                              <input name="user" type="text" placeholder="" class="form-control">
                            </div>
                      </div>
  
                      <div class="row">s
                          <div class="col">
                              <label>Contraseña</label>
                              <input name="pass" type="password" placeholder="" class="form-control">
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
    </body>
</html>


          
