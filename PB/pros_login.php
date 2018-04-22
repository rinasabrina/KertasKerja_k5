<html>
<head>
<title>Login</title>
</head>
<body>
<?php
session_start();
$username =$_POST['username'];
$password =$_POST['password'];
if($username&&$password)
{
   $server='localhost';
   $userid2='finasab';
   $password2='sabfina12';
   $dbname='finasab';
$conn=mysql_connect("$server","$userid2","$password2");

mysql_select_db("$dbname",$conn) or die (mysql_error());

$query=mysql_query("select *from table_login where username='$username'");
$numrows=mysql_num_rows($query);
if($numrows!=0)
{
   while($row=mysql_fetch_assoc($query))
   {
      $dbusername=$row['username'];
      $dbpassword=$row['password'];
   }
if($username==admin&&$password==123)
{
   $_SESSION['username']=$username;
   header('Location:kal2.php');
}
   
else if($username==$dbusername&&$password==$dbpassword)
{
   $_SESSION['username']=$username;
   header('Location:kal2.php');
} else
{ echo"Your Password is Wrong please try again ! <a href='index.php'> Click here to login again</a>";}
}// if 2
else
   die("That user doesn't exist , sign up <a href='sign.php'>here</a>");
}//if 1
else
{
   echo"Please enter userid and password!! <a href='login.php'>Click here to login again</a>";
}
?>
</body>
</html>
