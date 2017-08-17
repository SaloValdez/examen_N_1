<?php
	include 'pdf_plantilla.php';
	require 'a_conexion2.php';

	$query = "SELECT alu.idAlumno,alu.nombre,alu.apellido,no.n1,no.n2,no.n3,no.n4, re.mayor,re.menor,re.adicional,re.promedio,re.observacion FROM nota AS no INNER JOIN alumno AS alu ON no.idAlumno=alu.idAlumno INNER JOIN resultado AS re ON no.idResultado=re.idResultado";
	$resultado = $mysqli->query($query);

	$pdf = new PDF('L');
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(10,6,'ID',1,0,'C',1);
	$pdf->Cell(30,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(40,6,'APELLIDO',1,0,'C',1);
	$pdf->Cell(14,6,'NOTA 1',1,0,'C',1);
  $pdf->Cell(14,6,'NOTA 2',1,0,'C',1);
  $pdf->Cell(14,6,'NOTA 3',1,0,'C',1);
  $pdf->Cell(14,6,'NOTA4',1,0,'C',1);
  $pdf->Cell(25,6,'NOTA MAYOR',1,0,'C',1);
  $pdf->Cell(25,6,'NOTA MENOR',1,0,'C',1);
  $pdf->Cell(28,6,'ADICIONAL',1,0,'C',1);
  $pdf->Cell(20,6,'PROMEDIO',1,0,'C',1);
  $pdf->Cell(25,6,'OBSERVACION',1,1,'C',1);


	$pdf->SetFont('Arial','',8);

	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(10,6,utf8_decode($row['idAlumno']),1,0,'C');
		$pdf->Cell(30,6,$row['nombre'],1,0,'L');
		$pdf->Cell(40,6,$row['apellido'],1,0,'L');
		$pdf->Cell(14,6,$row['n1'],1,0,'C');
    $pdf->Cell(14,6,$row['n2'],1,0,'C');
    $pdf->Cell(14,6,$row['n3'],1,0,'C');
    $pdf->Cell(14,6,$row['n4'],1,0,'C');
    $pdf->Cell(25,6,$row['mayor'],1,0,'C');
    $pdf->Cell(25,6,$row['menor'],1,0,'C');
    $pdf->Cell(28,6,$row['adicional'],1,0,'C');
    $pdf->Cell(20,6,$row['promedio'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['observacion']),1,1,'C');
	}
	$pdf->Output();
?>
