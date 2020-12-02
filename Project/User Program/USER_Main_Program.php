<html>
<head>
<title>Contact Tracing</title>
<style>
  body{
    background: #1690A7;
  }
input[type=text] {
  width: 180px;
  box-sizing: border-box;
  border: 2px solid;
  border-radius: 4px;
  font-size: 20px; 
  background-color: pink;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 5px 10px 5px 10px;
  transition: width .2s ease-in-out;
  text-align: center;
}
input[type=text]:focus {
  width: 30%;
}
form{
  padding-top: 50px;
  text-align: center;
  font-size: 40px;
}
.btn {
  color: black;
  font-size: 32px;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  width: 50%;
}
.btn:hover {
  background-color: black;
  color: white;
  }
  .btn2 {
  color: black;
  font-size: 22px;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  width: 30%;
}
.btn2:hover {
  background-color: black;
  color: white;
  }
</style>
</head>
<body bgcolor=lightblue>
<p style="text-align:center"><font size=20 face="Arial"><b>COVID-19 Contact Tracing</b></font></p>
<hr>
<form method="POST" action="USER_Insert.php" >

<FONT face="Century Gothic">Name </FONT><br>
<input type="text" name="name" ><br> 

<FONT face="Century Gothic">Body Temperature </FONT><br>
<input type="text" name="bodyTemp" ><br>

<FONT face="Century Gothic">Contact Number</FONT><br>
<input type="text" name="contactNo"> <br><br>


<input class=btn type="submit" value="Submit"><br><br>
<input class=btn2 type="reset" value="Clear">

</form>
</body>
</html>