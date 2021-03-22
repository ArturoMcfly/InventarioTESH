<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/pres.css">
  <title>BUSQUEDAS</title>
</head>
<body>

<?php
  $mysqli=new mysqli("localhost","root","","sistemas");
  $salida="";
  $query="SELECT * FROM prestamo_inventario ORDER by id_prestamo";
  if(isset($_POST['consulta'])){
      $q=$mysqli->real_escape_string($_POST['consulta']);
      $query="SELECT id_prestamo, id_usuario,semestre, carrera, fecha_pres,fecha_dev,stock, id_material FROM prestamo_inventario 
      WHERE id_usuario LIKE '%".$q."%'  OR carrera LIKE '%".$q."%'OR fecha_pres LIKE '%".$q."%' "; 

  }
  $resultado=$mysqli->query($query);
  if($resultado->num_rows > 0){
      $salida.="<div id='main-container'>
<div id='main-container'>
      <table>
                  <thead>
                    <tr>
                    <th> Id</th>
                    <th>Nombre</th>
                    <th>Semestre</th>
                    <th>Carrera</th>
                    <th>Fecha de prestamo</th>
                    <th>Fecha de entrega</th>
                    
                    <th>Stock</th>
                    <th>
                    <a href='Pres_pdf.php' class='navbar-brand'><img alt='' height='80px' src='../img/adobe-pdf-logo.png'></a>
                    <br>
                    producto
                    </th>
                   
                    </tr>
                   </thead>";
                   //<tbody>;
                   while($fila=$resultado->fetch_assoc()){
                       $salida.="<tr>
                              <td>".$fila['id_prestamo']."</td>
                              <td>".$fila['id_usuario']."</td>
                              <td>".$fila['semestre']."</td>
                              <td>".$fila['carrera']."</td>
                              <td>".$fila['fecha_pres']."</td>
                              <td>".$fila['fecha_dev']."</td>
                              <td>".$fila['stock']."</td>
                              <td>".$fila['id_material']."</td>
                              
                              </tr>";
                   }
                   $salida.="</table></div>";
    
  }else{
      $salida.="No hay datos";

  }
  echo $salida;
  $mysqli->close();
?>
  
  </body>
</html>