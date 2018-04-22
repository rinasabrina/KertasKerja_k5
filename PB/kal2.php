<html>
<style>
body{
	background-image: url("cal2.jpg");
background-color:#ff9966;
 height: 100%; 

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
#wrapper{
    width:960px;
    margin:0 auto;
}

#header{
    border: 1px solid black;
    height: 120px;
    font-size: 22px;
    background: ;
    border-top-right-radius: 25px;
    border-top-left-radius: 25px;
}

#kandungan{
    border: 1px solid black;
    height:650px;
    background-color:pink;

}
#footer{
    border: 1px solid black;
    position: relative;
    background: ;
    text-align: center;
    height: 60px;
    border-bottom-right-radius: 25px;
    border-bottom-left-radius: 25px;
}
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
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
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
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
.btn{
    text-align: center;
     background-color: #4CAF50;
    border: none;
    width: 100px;
    color: white;
   padding: 14px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 5px;
    cursor: pointer;
    
}
input[type=text], select {
    width: 300px;
    padding: 5px 9px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=text1], select {
    width: 50px;
    padding: 5px 9px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
table{
 border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;}
    
    input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 5px;
    margin: 5px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
textarea {
    width: 100%;
    height: 100px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    
}
input[type=submit] {
    width: 100px;
    background-color: #4CAF50;
    color: white;
    padding: 10px 0px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=button] {
    width: 100px;
    background-color: #88cc00;
    color: white;
    padding: 10px 1px;
    margin: 5px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width:50px;
    color:black;
}
input[type=reset] {
    width: 100px;
    background-color:red;
    color: white;
    padding: 10px 0px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
p{
color:black;
}
input[type=textfeild]{
    width: 300px;
    padding: 5px 9px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
</style>
<center>
<body>
    <div id="wrapper">

<div id="header"><br>
 <font face="jokerman" font size="35" <h1>KALKULATOR BOOBIES</h1></font>
         </div>
        <div id="kandungan">
        <br>
        <br>
        
<center><fieldset style="width: 0px">

        <font color="black" font face="MV Boli" font size="3"><form name="cal" action="pros_insert.php" method="POST">
        <p>Masukkan Nama Anda:</p><input type="text" name="nama">
       
        <p>Masukkan Nombor 1:</p><input type="text1" id="num1">
        <br>
        <p>Masukkan Nombor 2:</p><input type="text1" id="num2">
        <br>

        <input type="button" value="+" onclick="add()">
        <input type="button" value="-" onclick="minus()">
        <input type="button" value="*" onclick="sub()">
        <input type="button" value="/" onclick="div()">
        <input type="button" value="%" onclick="mod()">
        
        <br><br>
        Hasil:<input type="text" name="hasil" value="">
        <br><br>
        
        Catatan:<input type="textfeild" name="catatan"><br><br>
        <input type="submit" name="resetbtn" value="Hantar">
        <input type="reset" name="resetbtn" value="Padam">
    </form>
<br>
<script type="text/javascript">
    //operation 
    function add()
    {
        var num1,num2,result
        num1=parseInt(cal.num1.value);
        num2=parseInt(cal.num2.value);
        result=num1+num2;
        cal.hasil.value=result;
    }

    function minus()
{
        var num1,num2,result
        num1=parseInt(cal.num1.value);
        num2=parseInt(cal.num2.value);
        result=num1-num2;
        cal.hasil.value=result;
    }

    function sub()
{
        var num1,num2,result
        num1=parseInt(cal.num1.value);
        num2=parseInt(cal.num2.value);
        result=num1*num2;
        cal.hasil.value=result;
    }

    function div()
{
        var num1,num2,result
        num1=parseInt(cal.num1.value);
        num2=parseInt(cal.num2.value);
        result=num1/num2;
        cal.hasil.value=result;
    }

    function mod()
{
        var num1,num2,result
        num1=parseInt(cal.num1.value);
        num2=parseInt(cal.num2.value);
        result=num1%num2;
        cal.hasil.value=result;
    }

        
</script>
</font></fieldset><font color="black">
</font>
</center>
</div>
<div id="footer"><br>
  <font face="jokerman" font size="5" <h3>THANK YOU FOR USING MY SIMPLE CALCULATOR !</h3></font>
</div>
</div>
</body>
</center>
 
</html>