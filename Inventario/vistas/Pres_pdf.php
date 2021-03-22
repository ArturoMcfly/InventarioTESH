<?php
require('pdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
  
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);//poscicion de la celda
    // Título
    $this->Cell(70,10,'reporte de prestamos',1,0,'C');//Tamaño de la clda y mensaje, el 1 y 0 son el borde 

    // Salto de línea
    $this->Ln(20);
    $this->SetFont('Arial','B',8);
    $this->Cell(4,4,utf8_decode('id'),1,0,'c',0); 
    $this->Cell(46,4,utf8_decode('usuario'),1,0,'c',0); 
    $this->Cell(16,4,utf8_decode('semestre'),1,0,'c',0);
    $this->Cell(31,4,utf8_decode('carrera'),1,0,'c',0);  
    $this->Cell(25,4,utf8_decode('fecha prestamo'),1,0,'c',0); 
    $this->Cell(25,4,utf8_decode('fecha devolucion'),1,0,'c',0); 

    $this->Cell(16,4,utf8_decode('stock'),1,0,'c',0); 
    $this->Cell(30,4,utf8_decode('material'),1,1,'c',0);
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
$consulta= "SELECT * FROM prestamo_inventario";
$resultado=$mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();//numero de pagina
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
//$pdf->Cell(40,10,utf8_decode('¡Hola, Mundo!'));
   
while($row=$resultado->fetch_assoc()){
   $pdf->Cell(4,4,$row['id_prestamo'],1,0,'c',0); 
   $pdf->Cell(46,4,$row['id_usuario'],1,0,'c',0); 
   $pdf->Cell(16,4,$row['semestre'],1,0,'c',0);
   $pdf->Cell(31,4,$row['carrera'],1,0,'c',0);  
   $pdf->Cell(25,4,$row['fecha_pres'],1,0,'c',0); 
   $pdf->Cell(25,4,$row['fecha_dev'],1,0,'c',0); 
   $pdf->Cell(16,4,$row['stock'],1,0,'c',0); 
   $pdf->Cell(30,4,$row['id_material'],1,1,'c',0); 

}
$pdf->Output();

?>