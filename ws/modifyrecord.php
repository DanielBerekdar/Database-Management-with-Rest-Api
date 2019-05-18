<html>
<title>Modify Record</title>
<head><link rel="stylesheet" href="style.css"></head>
<body>
 <div class="topnav">
  <a class="active" href="http://localhost/ws/welcome.html">Home</a>
  <a href="http://localhost/ws/new_record.php">Add Record</a>
	<a href="http://localhost/ws/modifyrecord.php">Modify Record</a>
  <a href="http://localhost/ws/removeRecord.php">Remove Record</a>
  <a href="http://localhost/ws/view.php">View Records</a>
  <a href="http://localhost/ws/index.html">StudentDB</a>
</div>
<br>
<br>
	<div class="form">
<form action="modify.php" method="post">
  Last name:<br>
  <input type="text" name="lastname"><br>
  <input type="submit">
 <input type ="reset">
</form> 



<?php
require_once('mysql_conn.php');

if (mysqli_connect_errno()) {    
	printf("Connect failed: %s\n", mysqli_connect_error());    
	exit();
}
	$query = "SELECT * FROM students";
	$result = mysqli_query($dbc, $query) or die ("Your search had no results.");
	echo "<table border = '1'>";
	echo "<tr> <td>First name</td> <td>Last name</td> <td>Email Address</td> <td>Street</td> <td>city</td> <td>State</td> <td>Zip code</td> <td>Phone Number</td> <td>Birth date</td> <td>Sex</td> <td>Date entered</td><td>Lunch cost</td> <td>Student ID</td></tr>";
		while($row = mysqli_fetch_assoc($result) ){
		echo "<tr> <td>{$row['first_name']}</td> <td>{$row['last_name']}</td>  <td>{$row['email']}</td> <td>{$row['street']}</td> <td>{$row['city']}</td>	<td>{$row['state']}</td> <td>{$row['zip']}</td> <td>{$row['phone']}</td><td>{$row['birth_date']}</td><td>{$row['sex']}</td>  <td>{$row['date_entered']}</td><td>{$row['lunch_cost']}</td> <td>{$row['student_id']}</td> </tr>";
		}
echo "</table>";
?>
</div>
</body>
</html>
