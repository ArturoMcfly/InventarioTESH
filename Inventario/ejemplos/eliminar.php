<?php
$mysqli=new mysqli('localhost','root','','inventariolab');
$id=$_REQUEST['id'];
$consulta="DELETE FROM usuarioss WERE id='$id' ";
$resultado = $mysqli -> query($consulta);
}
else{
    echo "Insercion exitosa";
}
?>