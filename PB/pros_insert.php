<?php
include ('config.php');

$nama=$_POST['nama'];
$hasil=$_POST['hasil'];
$catatan=$_POST['catatan'];



echo"<br>";

$query="INSERT into catatan values('$nama','$hasil','$catatan')";
if(mysql_query($query)){
if ($result==TRUE) header("Location:papar.php");
if ($result==FALSE) header("Location:papar.php");}
	
else

echo " SALAH LAH ";

?>