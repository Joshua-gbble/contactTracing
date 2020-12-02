<?php

$name = filter_input(INPUT_POST, 'name');
$bodyTemp = filter_input(INPUT_POST, 'bodyTemp');
$contactNo = filter_input(INPUT_POST, 'contactNo');

        if(!empty($name)){
        if(!empty($bodyTemp)){
        if(!empty($contactNo)){

            $host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname  = "ctdb";
			
			$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
            if (mysqli_connect_error()){
            	die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
            }
            else{
            	$sql = "INSERT INTO contact_info(Name, Temperature, Phone_Number) values ('$name', '$bodyTemp', '$contactNo')";
            	if($conn->query($sql)){
					echo "<body bgcolor=silver><br><br><br><font size=5 face=arial><center>New Record Inserted</center></font>";
					echo "<style>.btn {color: black; font-size: 22px; padding: 5px 10px; border-style: solid;; border-radius: 5px; text-align: center;width: 30%;</style>";
					echo "<br><br><form action=USER_Main_Program.php><center><input class= 'btn' type='submit' value='Go Back'/><center></form></body>";
				}
				else{
					echo "Error: ". $sql ."<br>". $conn->error;
				}
            $conn->close();
            }
            }else{
			echo "<body bgcolor=silver><br><br><br><font size=5 face=arial><center>Contact Number should not be empty</center></font>";
			echo "<br><br><form action=USER_Main_Program.php><center><input type='submit' value='Go Back'/><center></form></body>";
			die();
		    }
        	    }else{
			echo "<body bgcolor=silver><br><br><br><font size=5 face=arial><center>Body Temperature should not be empty</center></font>";
			echo "<br><br><form action=USER_Main_Program.php><center><input type='submit' value='Go Back'/><center></form></body>";
			die();
		    }
        }else{
			echo "<body bgcolor=silver><br><br><br><font size=5 face=arial><center>Name should not be empty</center></font>";
			echo "<br><br><form action=USER_Main_Program.php><center><input type='submit' value='Go Back'/><center></form></body>";
			die();
		     }
	    
 ?>