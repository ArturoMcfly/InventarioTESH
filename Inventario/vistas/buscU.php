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
  $query="SELECT * FROM usuarios_inventario ORDER by matricula";
  if(isset($_POST['consulta'])){
      $q=$mysqli->real_escape_string($_POST['consulta']);
      $query="SELECT matricula, ape_pat,ape_mat, nombre, usuario FROM usuarios_inventario 
      WHERE ape_pat LIKE '%".$q."%' OR matricula LIKE '%".$q."%'"; 

  }
  $resultado=$mysqli->query($query);
  if($resultado->num_rows > 0){
      $salida.="<div id='main-container'>
<div id='main-container'>
      <table>
                  <thead>
                    <tr>
                    <th>matricula</th>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>apellido materno</th>
                    <th>
                    <a href='Pres_pdf.php' class='navbar-brand'><img alt='' height='80px' src='../img/adobe-pdf-logo.png'></a>
                    <br>
                    usuario
                    </th>
                   
                    </tr>
                   </thead>";
                   //<tbody>;
                   while($fila=$resultado->fetch_assoc()){
                       $salida.="<tr>
                              <td>".$fila['matricula']."</td>
                              <td>".$fila['ape_pat']."</td>
                              <td>".$fila['ape_mat']."</td>
                              <td>".$fila['nombre']."</td>
                              <td>".$fila['usuario']."</td>
                              
                              
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