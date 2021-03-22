<?php
require('pdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/Logo_TecNM.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);//poscicion de la celda
    // Título
    $this->Cell(70,10,'REPORTE DE MATERIALES',1,0,'C');//Tamaño de la clda y mensaje, el 1 y 0 son el borde 
    $this->Image('../img/logo_TESH_J.png',160,8,33);
    // Salto de línea
    $this->Ln(20);
    $this->SetFont('Arial','B',8);
    $this->Cell(4,4,utf8_decode('ID'),1,0,'c',0); 
    $this->Cell(36,4,utf8_decode('Nombre'),1,0,'c',0); 
    $this->Cell(16,4,utf8_decode('marca'),1,0,'c',0);
    $this->Cell(15,4,utf8_decode('Cantidad'),1,0,'c',0);  
    $this->Cell(25,4,utf8_decode('Unidad de medida'),1,0,'c',0); 
    $this->Cell(16,4,utf8_decode('Proveedor'),1,0,'c',0); 

    $this->Cell(25,4,utf8_decode('tipo de material'),1,0,'c',0); 
    $this->Cell(10,4,utf8_decode('activo'),1,1,'c',0);
    $this->Cell(10,4,utf8_decode('fecha'),1,1,'c',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Page ').$this->PageNo().'/{nb}',0,0,'C');
}
}
require '../php/conexion.php';
$consulta= "SELECT * FROM materiales_inventario";
$resultado=$mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();//numero de pagina
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
//$pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!'));
   
while($row=$resultado->fetch_assoc()){
   $pdf->Cell(4,4,$row['id_material'],1,0,'c',0); 
   $pdf->Cell(36,4,$row['nombre_m'],1,0,'c',0); 
   
   $pdf->Cell(16,4,$row['marca'],1,0,'c',0);  
   $pdf->Cell(15,4,$row['cantidad'],1,0,'c',0); 
   $pdf->Cell(25,4,$row['unidad_med'],1,0,'c',0); 
   $pdf->Cell(16,4,$row['proveedor'],1,0,'c',0); 
   $pdf->Cell(25,4,$row['tipo_material'],1,1,'c',0); 
   $pdf->Cell(10,4,$row['activo'],1,1,'c',0); 
   $pdf->Cell(10,4,$row['fecha'],1,1,'c',0); 

}
$pdf->Output();

?>