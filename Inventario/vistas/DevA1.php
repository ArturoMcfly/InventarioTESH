
<!DOCTYPE html>
<html lang="es-En">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/tbl.css">
    
    <title>Tesh-Devoluciones</title>
</head>


<body>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="./index.php" class="navbar-brand"><img alt="" height="80px" src="../img/tecnmBlanco.png">
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
                    <th>Eliminar</th>
                </tr>
            </thead>  
            
      <?php   
       
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'sistemas');
        $consulta = mysqli_query($mysqli,"SELECT *FROM prestamo_inventario");
            while($row = mysqli_fetch_array($consulta,MYSQLI_ASSOC)){
              $i=$row['id_prestamo'];
              $matricula = $row['id_usuario'];
              $ape_pat = $row['semestre'];
              $ape_mat = $row['id_material'];
              $nombre = $row['stock'];
              $usuario = $row['fecha_dev'];
             
      ?>
              <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $matricula;?></td>
                <td><?php echo $ape_pat;?></td>
                <td><?php echo $ape_mat;?></td>
                <td><?php echo $nombre;?></td>
                <td><?php echo $usuario;?></td>
                <td>
                  <a href="DevA.php?delete=<?php echo $id; ?>" onclick="return confirm('eliminar?');">
                    <button type='button' class='btn-danger'>Eliminar</button>
                  </a>
                </td>  
              </tr>
<?php
 $i++;
            }
            if(isset($_GET['delete'])){
              $delete_id = $_GET['delete'];
              mysqli_query($mysqli,"DELETE FROM usuarios_inventario WHERE matricula = '$delete_id'"); 
            }
            ?>                           
        </table>
    </div>
    <form action="Menu.html" method="post">
<button type="submit" name="Regreso">
<h2>regresar</h2>

</button>
<br>    
</form>

</body>
</html>