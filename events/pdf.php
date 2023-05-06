<?php

include('../includes/connect.php');
require_once 'FPDF/fpdf.php';
$query="select * from eventregistrations";
$result= mysqli_query($con,$query);
session_start();

  $pdf= new FPDF('p','mm','a4');
  $pdf->SetFont('arial','b','14');
  $pdf->AddPage();
  $pdf->cell('192','10',"Registeration Details" ,'1','1','C');
  //$pdf->cell('15','10','ID', '1','0','C');
  $pdf->cell('52','10','Name', '1','0','C');
  $pdf->cell('90','10','JntuNo', '1','0','C');
  $pdf->cell('35','10','EventName', '1','1','C');

  $pdf->SetFont('arial','','12');
  //$pdf->Output();
  while($k=mysqli_fetch_array($result))
  {
    $pdf->SetFont('arial','b','14');
    //$pdf->cell('15','10',$k['id'], '1','0','c');
    $pdf->cell('52','10',$k['Name'], '1','0','C');
    $pdf->cell('90','10',$k['JntuNo'], '1','0','C');
    $pdf->cell('35','10',$k['EventName'], '1','1','C');
  }
   $pdf->Output();
?> 