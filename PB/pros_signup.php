<?php
include('config.php');

$username=$_POST['username'];
$password=$_POST['password'];

echo"<br>";

$query="INSERT into table_login values ('$username','$password')";
mysql_query($query);

if(mysql_query($query))
{
header("Location:login.php");
}
else
{
echo"something went wrong";
}
?>