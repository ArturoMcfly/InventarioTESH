<?php
$mysqli=new mysqli('localhost','root','','sistemas');

?>
<!DOCTYPE html>
<html>
<head>
<tittle>Consulta</tittle> 
</head>
<body>
<center>
<table>
<thead>
<tr>
<th>Lista de usuarios</th>
</tr>
</thead>
<tbody>
<tr>
<td>Id</td>
<td>Usuario</td>
<td>Id_Prestamo</td>
<td>Fecha de prestamo</td>
<td>Fecha de devolucion</td>
<td>Stock</td>
<td>id_material</td>
<td>id_equipo</td>


</tr>
<?php
$consulta = "SELECT * FROM prestamo_inventario" ;  
$resultado = $mysqli -> query($consulta);
while ($mostrar=mysqli_fetch_array($resultado)){


    ?>
    <tr>
    <td><?php echo $mostrar['id_usuario'];?></td>
    <td><?php echo $mostrar['id_prestamo'];?></td>
    <td><?php echo $mostrar['fecha_pres'];?></td>
    <td><?php echo $mostrar['fecha_dev'];?></td>
    <td><?php echo $mostrar['stock'];?></td>
    <td><?php echo $mostrar['id_material'];?></td>
    <td><?php echo $mostrar['id_equipo'];?></td>
<?php 
}
?>





</body>
</table>

</center>

</html>
