<!--Here we will display the contents of the table contactinfo -->
<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<style type="text/css">
    .btn {
      color: black; 
      font-size: 22px; 
      padding: 5px 10px; 
      border-style: solid; 
      border-radius: 5px; 
      text-align: center;
      width: 30%;
    }
		table{
		  border-collapse: collapse;
      width: 100%;
   }
		td {
    text-align: left;
    padding: 15px/**Up**/ 15px/**right**/ 15px/**down**/ 15px/**left**/;
   }
		th{
		 background-color: #4CAF50;
     color: white;
     padding: 10px;
	}
	tr:nth-child(even) {background-color: #f2f2f2;}
  a{
    background: pink;
    padding: 5px 20px;
    border: none;
    text-decoration-color: black;
    color:black;
    }
    a:hover{
      opacity: .7;
    }
    h1 {
    text-align: center;
    margin-bottom: 20px;
    margin-top: 10px;
  }
	</style>
</head>
<body bgcolor="lightblue">
  <h1>[COMPANY NAME]</h1>
	<table align="center">
		<tr>
			<tr>
        <th align="left">Reference Number</th>
        <th align="left">Name</th>
        <th align="left">Temperature</th>
        <th align="left">Phone Number</th>
        <th align="center" colspan="2">Operations</th></tr>
<?php
include("../Others/DATABASE_Conn.php");


$select = "SELECT * FROM contact_info ";
$displayQuery = mysqli_query($conn, $select);
while($row = mysqli_fetch_array($displayQuery)){
         $id = $row['Reference_Number'];
         $name = $row['Name']; 
         $temperature = $row['Temperature']; 
         $phone = $row['Phone_Number']; 

   
          
    echo "<tr><td>".$id."</td><td>".$name."</td><td>".$temperature."</td><td>".$phone."</td>
              <td><a href='DB_Edit.php?id=$row[Reference_Number]&name=$row[Name] &temp=$row[Temperature] &phone=$row[Phone_Number] '>Edit</a></td>
              <td><a href='DB_Delete.php?deleteID=$id'>Delete</a></td>
              </tr>";
          
       
}
?>
</table>
<br><br><form action="../Admin Program/ADMIN_HOME.php"><center><input class='btn' type='submit' value='Go Back'/><center></form>
</body>
</html>