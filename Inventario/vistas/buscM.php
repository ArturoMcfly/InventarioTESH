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
  $query="SELECT * FROM materiales_inventario ORDER by id_material";
  if(isset($_POST['consulta'])){
      $q=$mysqli->real_escape_string($_POST['consulta']);
      $query="SELECT * FROM materiales_inventario 
      WHERE nombre_m LIKE '%".$q."%' OR marca LIKE '%".$q."%' OR tipo_material LIKE '%".$q."%'"; 

  }
  $resultado=$mysqli->query($query);
  if($resultado->num_rows > 0){
      $salida.="<div id='main-container'>
<div id='main-container'>
      <table>
                  <thead>
                    <tr>
                    <th>material</th>
                    <th>Nombre</th>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>Cantidad</th>
                    <th>unidad de medida</th>
                    <th>
                   
                    <br>
                    Proveedor
                    </th>
                   
                    </tr>
                   </thead>";
                   //<tbody>;
                   while($fila=$resultado->fetch_assoc()){
                       $salida.="<tr>
                              <td>".$fila['id_material']."</td>
                              <td>".$fila['nombre_m']."</td>
                              <td>".$fila['producto']."</td>
                              <td>".$fila['marca']."</td>
                              <td>".$fila['cantidad']."</td>
                              <td>".$fila['unidad_med']."</td>
                              <td>".$fila['proveedor']."</td>
                              
                              
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