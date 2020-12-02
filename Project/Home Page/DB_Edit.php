<?php 
//establish connection to database
include('../Others/DATABASE_Conn.php');
error_reporting(0);
//print in textboxes
$id = $_GET['id'];
$name = $_GET['name'];
$temp = $_GET['temp'];
$phone = $_GET['phone'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style type="text/css">
		td {
			text-align: left;
		}
		.btn {
  color: black;
  font-size: 22px;
  padding: 5px 10px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  border: solid;
  width: 50%;
}
	</style>
</head>
<body>
      <form method="POST" action="DB_Update.php">
      	<table align="center">
      		<tr><td>Reference Number::</td> <td><input type="text" name="ID" value="<?php echo $id; ?>">
      		<tr><td>Name ::</td> <td><input type="text" name="Name" value="<?php echo $name; ?>">
      		<tr><td>Temperature :: </td><td><input type="text" name="Temperature" value="<?php echo $temp; ?>">
      		<tr><td>Phone Number :: </td><td><input type="text" name="Phone" value="<?php echo $phone; ?>">
      	</table>
         <center><input type="submit" class="btn" name="submit" value="Update"></center>
      </form>
</body>
</html>
