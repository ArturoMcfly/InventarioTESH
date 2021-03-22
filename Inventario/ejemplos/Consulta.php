<?php
$mysqli=new mysqli('localhost','root','','inventariolab');

?>
<!DOCTYPE html>
<html>
<head>
<center><tittle>Consulta</tittle></center> 
</head>
<body>
<center>
<table border="3">
<thead>
<tr>
<th>Lista de usuarios</th>
</thead>
<tbody>
<tr>
<td>Id</td>
<td>Nombre</td>
<td>Apellido Paterno</td>
<td>Apellido Materno</td>
<td>Usuario</td>
<td>Contraseña</td>
<td>Eliminar</td>

</tr>
<?php
$consulta = "SELECT * FROM usuarioss" ;  
$resultado = $mysqli -> query($consulta);
while ($mostrar=mysqli_fetch_array($resultado)){


    ?>
    <tr>
    <td><?php echo $mostrar['matricula'];?></td>
    <td><?php echo $mostrar['ape_pat'];?></td>
    <td><?php echo $mostrar['ape_mat'];?></td>
    <td><?php echo $mostrar['nombre'];?></td>
    <td><?php echo $mostrar['usuario'];?></td>
    <td><?php echo $mostrar['contrasena'];?></td>
    <td><a href="eliminar.php?id=<?php echo $mostrar['matricula']; ?>">Eliminar</a></td>
    
<?php 
}
?>





</body>
</table>

</center>

</html>
