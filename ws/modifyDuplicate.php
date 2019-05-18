<html>
<head>
	<meta charset="utf-8">
	<title>ModifyDuplicateRecords</title>
	<link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
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
</html>

<?php

require_once('mysql_conn.php');

if (mysqli_connect_errno()) {    
	printf("Connect failed: %s\n", mysqli_connect_error());    
	exit();
}

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];



	echo "Please make modifications in the appropriate fields: ";
	echo "<form action = 'modifyduplicaterecords.php' method = 'post'>";
	echo "<input type='hidden' name='lastname' value ='$lastname'><br>"; 
	echo "<input type='hidden' name='firstname' value ='$firstname'><br>";
	echo "First name: <input type='text' name='newFirstName'><br>";
	echo "Last name: <input type='text' name='newLastName'><br>"; 
	echo "Email: <input type='text' name='email'><br>";
	echo "Street: <input type='text' name='street'><br>";
	echo "City: <input type='text' name='city'><br>";
	echo "State: <input type='text' name='state'><br>";
	echo "Zip: <input type='text' name='zip'><br>";
	echo "Phone: <input type='text' name='phone'><br>";
	echo "Birth date: <input type='text' name='birth_date'><br>";
	echo "Sex: <input type='text' name='sex'><br>";
	echo "Lunch Cost: <input type='text' name='lunch_cost'><br>";
	echo "<input type='submit'>";
	echo "<input type='reset'>";
	echo "</form>";

?> 
