<?php 
session_start(); 
include "../Others/DATABASE_Conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
	$uname = $_POST['uname'];
	$pass = $_POST['password'];
		$result = mysqli_query($conn,"SELECT * FROM admin_login WHERE username='$uname' AND password='$pass'");
		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
           echo"Success<br>";
           header("Location: ADMIN_Home.php");
		        exit();
            }else{
                    echo "<body bgcolor='#1690A7'><br><br><br><font size=5 face=arial><center>Login Failed</center></font>";
					echo "<style>.btn {color: black; font-size: 22px; padding: 5px 10px; border-style: solid;; border-radius: 5px; text-align: center;width: 30%;</style>";
					echo "<br><br><form action=ADMIN_Index.php><center><input class= 'btn' type='submit' value='Go Back'/><center></form></body>";
	        exit();
            }
			}
		?>