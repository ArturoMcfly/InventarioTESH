<html>
    <head>
<title>Generar PDF con JsPDF Ejemplo con AutoTable</title>

<script src="../jspdf/dist/jspdf.min.js"></script>
<script src="../js/jspdf.plugin.autotable.min.js"></script>
</head>

    <body>
        
    
<?php
    $mysqli=new mysqli('localhost','root','','sistemas');
    $consulta="SELECT * FROM materiales_inventario";
    $resul = $mysqli -> query($consulta);
    $materiales_inventario = array();
    $n=0;
        while($r = $resul->fetch_object()){ $materiales_inventario[] = $r;
            $n++;
        }
?>
    <div class="col-md-4">  
        <button id="clickbind" function class="btn btn-default">REPORTE</button>
    </div>
  

<script>
  var element = document.getElementById("clickbind");
element.addEventListener("click", onClick);
function onClick() {
  var pdf = new jsPDF();
  pdf.text(20,20,"Mostrando una Tabla con PHP y MySQL");
 
  var columns = ["id_material", "nombre_m", "producto", "marca", "cantidad", "unidad_med","proveedor"];
  var data = [
      <?php foreach($materiales_inventario as $c):?>
      [
          <?php echo $n; ?>,
         "<?php echo $c->id_material; ?>",
         "<?php echo $c->nombre_m; ?>",
         "<?php echo $c->producto; ?>",
         "<?php echo $c->marca; ?>" ,
         "<?php echo $c->unidad_med;?> ",
        "<?php echo $c->proveedor; ?> "
    ],
<?php endforeach; ?>
];

  pdf.autoTable(columns,data,{ margin: { top: 25  } });
  pdf.save('MiTabla.pdf');
};
</script>
</body>
</html>