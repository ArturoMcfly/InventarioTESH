
<!DOCTYPE html>
<html lang="es-En">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/tabla.css">
    
    <title>Tesh-Devoluciones</title>
</head>


<?php
session_start();
?>
<?php
if(isset($_SESSION['usr'])){

}else{
    header("location: ../index.php");
}
?>

<body>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="./Menu.php" class="navbar-brand"><img alt="" height="80px" src="../img/tecnmBlanco.png">
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
                    <a href="./Dev_pdf.php" class="navbar-brand"><img alt="" height="80px" src="../img/adobe-pdf-logo.png"></a>
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
              /*$matricula = $row['id_usuario'];
              $ape_pat = $row['semestre'];*/
              $material = $row['id_material'];
              /* $nombre = $row['stock'];
              $usuario = $row['fecha_dev'];*/
              //$tipo_material=$row['tipo_material'];
              //if($tipo_material=='permanente'){
                $consulta1 = mysqli_query($mysqli,"SELECT *FROM materiales_inventario WHERE nombre_m='$material'");  
                while($row1 = mysqli_fetch_array($consulta1,MYSQLI_ASSOC)){
                  $tipo_material=$row1['tipo_material'];
                  if($tipo_material=='No consumible'){
                    echo "<tr>";
                echo "<td>"; echo $row['id_prestamo']; echo "</td>";
                echo "<td>"; echo $row['id_usuario']; echo "</td>";
                echo "<td>"; echo $row['semestre']; echo "</td>";
                echo "<td>"; echo $row['id_material']; echo "</td>";
                
                echo "<td>"; echo $row['stock']; echo "</td>";
                echo "<td>"; echo $row['fecha_dev']; echo "</td>";

                echo "<td> 
                       <a id='be' href='../php/eli.php?registro=".$row['id_prestamo']."''>
                       <button type='button' class='btn-danger'>Eliminar</button>
                       </a>
                     </td>";
               echo "</tr>";  
                  }

                }
                /*echo "<tr>";
                echo "<td>"; echo $row['id_prestamo']; echo "</td>";
                echo "<td>"; echo $row['id_usuario']; echo "</td>";
                echo "<td>"; echo $row['semestre']; echo "</td>";
                echo "<td>"; echo $row['id_material']; echo "</td>";
                
                echo "<td>"; echo $row['stock']; echo "</td>";
                echo "<td>"; echo $row['fecha_dev']; echo "</td>";

                echo "<td> 
                       <a id='be' href='../php/eli.php?registro=".$row['id_prestamo']."''>
                       <button type='button' class='btn-danger'>Eliminar</button>
                       </a>
                     </td>";
               echo "</tr>";  */
      ?>
              <!--<tr>
                <td><?//php echo $i;?></td>
                <td><?//php echo $matricula;?></td>
                <td><?//php echo $ape_pat;?></td>
                <td><?//php echo $ape_mat;?></td>
                <td><?//php echo $nombre;?></td>
                <td><?//php echo $usuario;?></td>
                <td>
                <a href="../php/eliminar.php?registro=".$filas['matricula']."'">
                        <button type='button' class='btn-danger'>Eliminar</button>
                        </a>
                  <a href="DevA.php?delete=<?php //echo $id; ?>" onclick="return confirm('eliminar?');">
                    <button type='button' class='btn-danger'>Eliminar</button>
                  </a>
                </td>  
              </tr>-->
<?php
            $i++;
              }
            //}
            /*if(isset($_GET['delete'])){
              $delete_id = $_GET['delete'];
              mysqli_query($mysqli,"DELETE FROM usuarios_inventario WHERE matricula = '$delete_id'"); 
            }*/
            ?>                           
        </table>
    </div>
    
    <form action="Menu.html" method="post">
<button type="submit" name="Regreso">
regresar

</button>
<br>



<br>   
</form>

</body>
</html>