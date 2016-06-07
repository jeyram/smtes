<?php

//echo $_GET['id'];
$id=$_GET['id'];
 $link = mysql_connect("mysql13.000webhost.com", "a5250908_tmp", "doom.77");
mysql_select_db("a5250908_temp", $link);
$result = mysql_query("SELECT * FROM smte WHERE serviceNum=$id", $link);
 while($row = mysql_fetch_array($result)){
  $uno=$row[0];
$dos=$row[1];
$tres=$row[2];
$cuatro=$row[3];
$cinco=$row[4];
$seis=$row[5];
$siete=$row[6];
$ocho=$row[7];
$nueve=$row[8];
$diez=$row[9];
$once=$row[10];
$doce=$row[11];
$trece=$row[12];
$catorce=$row[13];
$quince=$row[14];
$diesiseis=$row[15];
$diesisiete=$row[16];
$diesiocho=$row[17];
$diesinueve=$row[18];
$veinte=$row[19];
$veintiuno=$row[20];
$veintidos=$row[21];
$veintitres=$row[22];
$veinticuatro=$row[23];
$veinticinco=$row[24];
$veintiseis=$row[25];
$veintisiete=$row[26];
$veintiocho=$row[27];
$veintinueve=$row[28];
$treinta=$row[29];
$treintauno=$row[30];
$treintados=$row[31];
$treintatres=$row[32];
$firma1=$id.".png";
$firma2=$id."a.png";
    }
require('fpdf.php');
//Create new pdf file
$pdf=new FPDF();
$pdf->SetTitle($uno);
//Disable automatic page break
$pdf->SetAutoPageBreak(false);

//Add first page
$pdf->AddPage('P','Legal');

//set initial y axis position per page
$y_axis_initial = 25;
$pdf->Image('logo.PNG',10,10);
$pdf->SetFont('Arial','B',10);
$pdf->SetY($y_axis_initial);
$pdf->SetX(25);
$pdf->Text(30,45,'Service Number:');
$pdf->Text(60,45,$uno);
$pdf->Text(30,55,'Purchase Order:');
$pdf->Text(60,55,$dos);
$pdf->Text(120,55,'Custoner:');
$pdf->Text(140,55,$cuatro);
$pdf->Text(30,65,'Date:');
$pdf->Text(50,65,$tres);

$pdf->Text(30,75,'Machine Type:');
$pdf->Text(60,75,$cinco);
$pdf->Text(30,85,'Product Tree Number:');
$pdf->Text(70,85,$seis);
$pdf->Text(120,85,'Service Required:');
$pdf->Text(120,90,$ocho);
$pdf->Text(30,95,'Serial Number:');
$pdf->Text(65,95,$siete);
$pdf->Text(70,102,'Action Taken/Recommendations/Problem Solved :');
$pdf->Text(30,107,$nueve);
$pdf->Text(90,122,'Parts Remplaced/Suggested:');
$pdf->Text(30,127,$diez);
$pdf->Text(100,142,'Overall Comments:');
$pdf->Text(30,147,$once);

$pdf->Text(30,165,'Date:');
$pdf->Text(40,165,$doce);
$pdf->Text(90,165,'Time in:');
$pdf->Text(105,165,$trece);
$pdf->Text(120,165,'Time out:');
$pdf->Text(140,165,$catorce);
$pdf->Text(30,170,'Traver hours:');
$pdf->Text(60,170,$quince);
$pdf->Text(90,170,'Time in:');
$pdf->Text(105,170,$diesiseis);
$pdf->Text(120,170,'Time out:');
$pdf->Text(140,170,$diesisiete);

$pdf->Text(30,180,'Date:');
$pdf->Text(40,180,$diesiocho);
$pdf->Text(90,180,'Time in:');
$pdf->Text(105,180,$diesinueve);
$pdf->Text(120,180,'Time out:');
$pdf->Text(140,180,$veinte);
$pdf->Text(30,185,'Traver hours:');
$pdf->Text(60,185,$veintiuno);
$pdf->Text(90,185,'Time in:');
$pdf->Text(105,185,$veintidos);
$pdf->Text(120,185,'Time out:');
$pdf->Text(140,185,$veintitres);

$pdf->Text(30,195,'Date:');
$pdf->Text(40,195,$veinticuatro);
$pdf->Text(90,195,'Time in:');
$pdf->Text(105,195,$veinticinco);
$pdf->Text(120,195,'Time out:');
$pdf->Text(140,195,$veintiseis);
$pdf->Text(30,200,'Traver hours:');
$pdf->Text(60,200,$veintisiete);
$pdf->Text(90,200,'Time in:');
$pdf->Text(105,200,$veintiocho);
$pdf->Text(120,200,'Time out:');
$pdf->Text(140,200,$veintinueve);

$pdf->Text(30,215,'Total Onsite Hours:');
$pdf->Text(65,215,$treinta);
$pdf->Text(30,220,'Total Hours To Be Billed Including travel:');
$pdf->Text(100,220,$treintauno);

$pdf->Text(30,230,'Field Enginner(s):');
$pdf->Text(30,235,$treintados);
$pdf->Text(30,245,'FE signature:');
$pdf->Image($firma1,28,250);
$pdf->Text(90,230,'Customer Maintenance Responsible:');
$pdf->Text(90,235,$treintatres);
$pdf->Text(90,245,'Acknowledge Signature:');
$pdf->Image($firma2,88,250);
$pdf->Output($uno,'I');

?>