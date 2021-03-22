<?php
if(isset($_POST['Regreso'])){
Header('Location: ../index.php');
}else if(isset($_POST['Generar'])){
    Header('Location:../vistas/DevA.php');
}
?>