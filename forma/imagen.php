<?php
if (empty($_POST["serviceN"]))
{
       echo "no se inserto nada";
}
else
{


$link = mysql_connect("mysql13.000webhost.com", "a5250908_tmp", "doom.77");
mysql_select_db("a5250908_temp", $link);
$uno=$_POST['serviceN'];
$dos=$_POST['po'];
$tres=$_POST['date1'];
$cuatro=$_POST['empresas'];
$cinco=$_POST['machineType'];
$seis=$_POST['productTree'];
$siete=$_POST['serialNumber'];
$ocho=$_POST['serviceR'];
$nueve=$_POST['actionTaken'];
$diez=$_POST['partsR'];
$once=$_POST['overallC'];
$doce=$_POST['date2'];
$trece=$_POST['timein'];
$catorce=$_POST['timeout'];
$quince=$_POST['traverh'];
$diesiseis=$_POST['timeinh'];
$diesisiete=$_POST['timeouth'];
$diesiocho=$_POST['date3'];
$diesinueve=$_POST['timein3'];
$veinte=$_POST['timeout3'];
$veintiuno=$_POST['traverh3'];
$veintidos=$_POST['timeinh3'];
$veintitres=$_POST['timeouth3'];
$veinticuatro=$_POST['date4'];
$veinticinco=$_POST['timein4'];
$veintiseis=$_POST['timeout4'];
$veintisiete=$_POST['traverh4'];
$veintiocho=$_POST['timeinh4'];
$veintinueve=$_POST['timeouth4'];
$treinta=$_POST['TotalHT'];
$treintauno=$_POST['TotalTraverH'];
$treintados=$_POST['enginner'];
$treintatres=$_POST['customerM'];
$firma1=$uno.".png";
$firma2=$uno."a.png";


mysql_query("INSERT INTO  smte (serviceNum,purchaseO,date1,empresas,machineType,productTree,serialNumber,serviceR,actionTaken,partsR,overallC,date2,timein,timeout,traverh,timeinh,timeouth,date3,timein3,timeout3,traverh3,timeinh3,timeouth3,date4,timein4,timeout4,traverh4,timeinh4,timeouth4,TotalHT,TotalTravelH,enginner,customerM,sketchpad,firma)
VALUES ('".$uno."','".$dos."','".$tres."','".$cuatro."','".$cinco."','".$seis."','".$siete."','".$ocho."','".$nueve."','".$diez."','".$once."','".$doce."','".$trece."','".$catorce."','".$quince."','".$diesiseis."','".$diesisiete."','".$diesiocho."','".$diesinueve."','".$veinte."','".$veintiuno."','".$veintidos."','".$veintitres."','".$veinticuatro."','".$veinticinco."','".$veintiseis."','".$veintisiete."','".$veintiocho."','".$veintinueve."','".$treinta."','".$treintauno."','".$treintados."','".$treintatres."','".$firma1."','".$firma2."')",$link);

mysql_close($link);

//mysql_query("INSERT INTO temp (numero,nombre,imagen)
//VALUES ('".$num."','".$nom."','".$num2."')",$link);
echo "Se insertaron con exito los datos";
 // echo $str;
//firma 1
  	$imageData=$_POST['tempf'];
    $filteredData=substr($imageData, strpos($imageData, ",")+1);
	if (!isset($_SESSION["imagen_final"])) { 
        $_SESSION["imagen_final"]=base64_decode($filteredData);
     }else{
		$_SESSION["imagen_final"]=base64_decode($filteredData);
	 }
$num=$_POST['serviceN'];
$num2= $num.".png";
$fp = fopen($num2, 'wb' );
	fwrite( $fp, $_SESSION["imagen_final"]); // GUARDA LA IMAGEN EN EL SERVIDOR
    fclose( $fp );
//fin firma1

//firma2
$imageData1=$_POST['tempf1'];
   $filteredData1=substr($imageData1, strpos($imageData1, ",")+1);
	if (!isset($_SESSION["imagen_final1"])) { 
        $_SESSION["imagen_final1"]=base64_decode($filteredData1);
     }else{
		$_SESSION["imagen_final1"]=base64_decode($filteredData1);
	 }
$num21= $num."a.png";
$fp = fopen($num21, 'wb' );
	fwrite( $fp, $_SESSION["imagen_final1"]); // GUARDA LA IMAGEN EN EL SERVIDOR
    fclose( $fp );
//fin firma 2
    }
    
   $link = mysql_connect("mysql13.000webhost.com", "a5250908_tmp", "doom.77");
mysql_select_db("a5250908_temp", $link);
$result = mysql_query("SELECT serviceNum FROM smte", $link);

if ($row = mysql_fetch_array($result)){


echo "<table border = '1'> \n";
echo "<tr> \n";
echo "<td><b>numero de servicios</b></td> \n";
echo "</tr> \n";
do {
echo "<tr> \n";
echo "<td>";
echo "<a href=pdf.php?id=".$row[0].">".$row[0]."</a>";
echo "</td> \n";

echo "</td>\n";

echo "</tr> \n";

} while ($row = mysql_fetch_array($result));

echo "</table> \n";

} else {

echo "¡ La base de datos está vacia !";

}
mysql_close($link);




 ?>
