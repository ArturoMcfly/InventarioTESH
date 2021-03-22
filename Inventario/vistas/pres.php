<?php
include 'plantilla/heder.php';
?>

<!DOCTYPE html>
<html lang="es-En">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/pres.css">
    
    <title>Reporte Prestamos</title>
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="./Menu.html" class="navbar-brand"><img alt="" height="80px" src="../img/tecnmBlanco.png">
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
                <a href="#" class="navbar-brand"><img alt="" height="80px" src="../img/teshlogo.png"></a>
            </form>
          </div>
        </nav>
    <form action="pres.php" method="post">  
    <h1>Devoluciones</h1>
    <br>
    <h2>ingresa la fecha</h2>
    <br>
    <input type="text" name="fecha">
    <h1></h1>
    <button>buscar</button>
    <br>
    </form>  
    <h1></h1>

    <?php
    
    /*if(isset($_GET['fecha'])){*/
    ?>


    <div id="main-container">
    <table>
            <thead>
                <tr>
                    <th> Id</th>
                    <th>Nombre</th>
                    <th>Semestre</th>
                    <th>producto</th>
                    <th>Stock</th>
                    <th>Fecha de entrega</th>

                    <th>

                    <button type="submit" name="pdf">
                       PDF
                      </button>
                      <br>
                      Eliminar
                    
                    </th>
                   
                    
                </tr>
            </thead>  
            
      <?php   
      
    

        $mysqli = new mysqli('localhost', 'root', '', 'sistemas');
        $consulta = mysqli_query($mysqli,"SELECT *FROM prestamo_inventario");
            while($row = mysqli_fetch_array($consulta,MYSQLI_ASSOC)){

              $i=$row['id_prestamo'];
              $matricula = $row['id_usuario'];
              $ape_pat = $row['semestre'];
              $ape_mat = $row['id_material'];
              $nombre = $row['stock'];
              $usuario = $row['fecha_dev'];
              $tipo_material=$row['tipo_material'];
              
             
      ?>
              <tr>
                 
                <td><?php echo $i;?></td>
                <td><?php echo $matricula;?></td>
                <td><?php echo $ape_pat;?></td>
                <td><?php echo $ape_mat;?></td>
                <td><?php echo $nombre;?></td>
                <td><?php echo $usuario;?></td>
                <td>
                  <a href="pres.php?delete=<?php $i; ?>" onclick="return confirm('eliminar?');">
                    <button type='button' class='btn-danger'>Eliminar</button>
                  </a>
                </td>  
              </tr>
<?php
            $i++;
              
            }
            if(isset($_GET['delete'])){
              $delete_id = $_GET['delete'];
              mysqli_query($mysqli,"DELETE FROM prestamo_inventario WHERE matricula = '$delete_id'"); 
            }
    /*}*/
            ?>                           
        </table>
        </div>
</body>
<?php
include 'plantilla/footer.php';
header("location:index.php");
    ?>
</html>