<?php
include ('../Others/DATABASE_Conn.php');
if (isset($_POST['submit'])){
 $UP_ID = $_POST['ID'];
 $UP_Name = $_POST['Name'];
 $UP_Temp = $_POST['Temperature'];
 $UP_Phone = $_POST['Phone'];

$query = "UPDATE contact_info SET Reference_Number='$UP_ID',Name='$UP_Name',Temperature='$UP_Temp',Phone_Number='$UP_Phone' WHERE Reference_Number = $UP_ID";

$execute = mysqli_query($conn, $query);

if ($execute){
	
	echo "<body bgcolor=silver><br><br><br><font size=5 face=arial><center>Updated Successfuly</center></font>";
	echo "<style>.btn {color: black; font-size: 22px; padding: 5px 10px; border-style: solid;; border-radius: 5px; text-align: center;width: 30%;</style>";
	echo "<br><br><form action=HOME_Display_DB.php><center><input class='btn' type='submit' value='Go Back'/><center></form></body>";
	}
}else{
	echo "<body bgcolor=silver><br><br><br><font size=5 face=arial><center>Updated Failed</center></font>";
	echo "<style>.btn {color: black; font-size: 22px; padding: 5px 10px; border-style: solid;; border-radius: 5px; text-align: center;width: 30%;</style>";
	echo "<br><br><form action=HOME_Display_DB.php><center><input class='btn' type='submit' value='Go Back'/><center></form></body>";
	}
?>