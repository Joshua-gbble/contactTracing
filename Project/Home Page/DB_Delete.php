<?php
include("../Others/DATABASE_Conn.php");

$getid = $_GET['deleteID'];

$del = "DELETE FROM contact_info WHERE Reference_Number = $getid";
$qry = mysqli_query($conn, $del);

if ($qry) {
	echo "<body bgcolor=silver><br><br><br><font size=5 face=arial><center>Deleted Successfuly</center></font>";
	echo "<style>.btn {color: black; font-size: 22px; padding: 5px 10px; border-style: solid;; border-radius: 5px; text-align: center;width: 30%;</style>";
	echo "<br><br><form action=HOME_Display_DB.php><center><input class='btn' type='submit' value='Go Back'/><center></form></body>";
	}

?>