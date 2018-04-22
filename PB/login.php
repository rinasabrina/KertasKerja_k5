<html>
<style>
body {
font-family: Arial, Helvetica, sans-serif;
background-color: white;}

body,td,th {
  color: #000;
}
</style>
<body>
<style>
body{
	background-image: url("cal2.jpg");
background-color:#ff9966;
 height: 100%; 

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 10px;
    margin: 2px 0 10px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
     border-radius: 4px;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: pink;
    color: black;
    padding: 14px 20px;
    margin: 5px 0;
    border: none;
    cursor: pointer;
    width: 100px;
    opacity: 0.9;
     border-radius: 4px;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: pink;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
input[type=submit2] {
    width: 50px;
    background-color:pink;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>
<head>
	<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>
	</head>
<body bgcolor="pink">
<form action="pros_login.php" method="post">
<center>
<!DOCTYPE html>
<html>
<body>
<font face="GOUDY STOUT" font size="20" <h1>SELAMAT DATANG KE KALKULATOR NOOBIES</h1> </font>
 </center></h4>
 <center>
<img src="kal1.gif" width="350" height="250">
</body>
</html>
</center>
<br>
<center>
<font face="forte" font size="30" <h1>Sila Masukkan Nama Pengguna dan Kata Laluan</h1> </font>
 </center></h4>
<fieldset>
<center>
<table width="100" border="0" align="center" cellpadding="5">
<tr>
<th width="100" nowrap="nowrap" scope="col">Username :</th>
<th width="274" nowrap="nowrap" scope="col"><div align="left">
<input type="text" name="username" size="30" placeholder="Enter Username"/> 
</div>
</th>
</tr>
<tr>
<th nowrap="nowrap" scope="col">Password :</th>
<th nowrap="nowrap" scope="col"><div align="left">
<input type="password" name="password" size="20" placeholder="Enter Password"/>
</div> 
</th>
</tr>
</table>
<table width="20" border="0" align="center" cellspacing="10">
<div class="clearfix">
      <button type="reset" class="resetbtn">Reset</button>
      <button type="submit" class="resetbtn">Log In</button>
    </div>
</table>

  </div>
</form>
</center>
</fieldset>
</html>
