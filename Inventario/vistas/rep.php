<?php 
	$mysqli=new mysqli('localhost','root','','sistemas');
	$materiall = 'SELECT * FROM materiales_inventario ORDER BY id_material DESC';	
	$material=$mysqli->query($materiall);

if(isset($_POST['create_pdf'])){
	require_once('../tcpdf/tcpdf/tcpdf.php');

	$pdf = new TCPDF('P', 'mm', 'A4', true, false);

	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Miguel Caro');
	$pdf->SetTitle($_POST['reporte_name']);

	$pdf->setPrintHeader(false); 
	$pdf->setPrintFooter(false);
	$pdf->SetMargins(20, 20, 20, false); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->addPage();

	$content = '';

	$content .= '
		<div class="row">
        	<div class="col-md-12">
            	<h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>

      <table border="1" cellpadding="5">
        <thead>
          <tr>
            <th>id_material</th>
            <th>nombre_m</th>
            <th>producto</th>
            <th>marca</th>
            <th>cantidad</th>
            <th>unidad_med</th>
            <th>proveedor</th>
          </tr>
        </thead>
	';

	while ($row=$material->fetch_assoc()) { 
			if($row['activo']=='A'){  $color= '#f5f5f5'; }else{ $color= '#fbb2b2'; }
	$content .= '
		<tr bgcolor="'.$color.'">
            <td>'.$row['id_material'].'</td>
            <td>'.$row['nombre_m'].'</td>
            <td>'.$row['producto'].'</td>
            <td>'.$row['marca'].'</td>
            <td>'.$row['cantidad'].'</td>
            <td>'.$row['cantidad'].'</td>
            <td>S/. '.$row['proveedor'].'</td>
            
        </tr>
	';
	}

	$content .= '</table>';

	$content .= '
		<div class="row padding">
        	<div class="col-md-12" style="text-align:center;">
            	<span>Documento con validez oficial por el</span> <a href="">TECNOLOGICO DE ESTUDIOS SUPERIORES DE HUIXQUILUCAN</a>
            </div>
        </div>

	';

	$pdf->writeHTML($content, true, 0, true, 0);

	$pdf->lastPage();
	$pdf->output('Reporte.pdf', 'I');
}

?>

<!doctype html>
<html >
<head>


<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
</head>

<body class="cuerpo">
	<div class="container-fluid">
        <div class="row padding">
        	<div class="col-md-12">
              <?php $h1 = "Reporte de material"; 
            	 echo '<h1>'.$h1.'</h1>'
				?>
            </div>
        </div>
    	<div class="row">
      <table class="table table-hover">
        <thead>
          <tr>
          <th>id_material</th>
            <th>nombre_m</th>
            <th>producto</th>
            <th>marca</th>
            <th>cantidad</th>
            <th>unidad_med</th>
            <th>proveedor</th>
          </tr>
        </thead>
        <tbody>
        <?php 
      while ($row=$material->fetch_assoc()) {   ?>
          <tr class="<?php if($row['activo']=='A'){ echo 'active';}else{ echo 'danger';} ?>">
            <td><?php echo $row['id_material']; ?></td>
            <td><?php echo $row['nombre_m']; ?></td>
            <td><?php echo $row['producto']; ?></td>
            <td><?php echo $row['marca']; ?></td>
            <td><?php echo $row['cantidad']; ?></td>
            <td><?php echo $row['unidad_med']; ?></td>
            <td>S/. <?php echo $row['proveedor']; ?></td>
          </tr>
         <?php } ?>
        </tbody>
      </table>
              <div class="col-md-12">
              	<form method="post">
                	<input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                	<input type="submit" name="create_pdf" class="btn btn-danger pull-right" value="Generar PDF">
                </form>
              </div>
      	</div>
    </div>
</body>
</html>
