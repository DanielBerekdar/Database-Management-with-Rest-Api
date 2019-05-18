<html>
<head>
	<meta charset="utf-8">
	<title>AddRecord</title>
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
	$email = $_POST["email"];
	$street = $_POST["street"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zip = $_POST["zip"];
	$phone = $_POST["phone"];
	$birth_date = $_POST["birth_date"];
	$sex = $_POST["sex"];
	$lunch_cost = $_POST["lunch_cost"];
	$student_id = $_POST["student_id"];

	$query = "INSERT INTO students
	(first_name, last_name, email, street, city, state, zip, phone, birth_date, sex, date_entered, lunch_cost) 
	VALUES('".$firstname."', '".$lastname."', '".$email."', '".$street."', '".$city."', '".$state."', '".$zip."', '".$phone."', '".$birth_date."', '".$sex."', CURDATE(), '".$lunch_cost."')";
	echo $query;
		mysqli_query($dbc,$query); 
		mysqli_close($dbc);
	echo "Done! <br>";
?>
