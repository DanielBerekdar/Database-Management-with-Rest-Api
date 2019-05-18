<html>
<head>
	<meta charset="utf-8">
	<title>Students from JSON</title>
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


$lastname = $_POST["lastname"]; 

$lastnameQuery = "SELECT last_name, first_name FROM students WHERE last_name = '".$lastname."'";
$result = mysqli_query($dbc, $lastnameQuery);
$numRows = $result->num_rows;

if ($result->num_rows > 1) {
$lastname = $_POST["lastname"]; 
    echo "There are multiple people with the last name $lastname.";
	echo "<table border = '1'>";
	echo "<tr> <td>First Name</td> <td>Last Name</td> </tr>";
		while($row = mysqli_fetch_assoc($result)){
	  	echo "<tr> <td>{$row['first_name']}</td> <td>{$row['last_name']}</td></tr>";
		}
	echo "</table>";
	echo "Please enter the <b>First Name</b> of the person you would like to modify.";
	echo "<form action='modifyDuplicate.php' method='post'>";
	echo "Last Name: <input type='hidden' name='lastname' value ='$lastname'> <br>";
	
	echo "Firstname: <input type='text' name='firstname'><br>";
	echo "<input type='submit'>";
	echo "</form>";

exit;

} else if ($result->num_rows == 0){
	print ("The name $lastname was not found in the database. Please see records below: ");
	echo "<br>";
	$lastnameQuery = "SELECT last_name, first_name FROM students";
	$result = mysqli_query($dbc, $lastnameQuery) or die ("Your search had no results.");
	echo "<table border = '1'>";
	echo "<tr> <td>first name</td> <td>last name</td></tr>";
		while($row = mysqli_fetch_assoc($result) ){
		echo "<tr> <td>{$row['first_name']}</td> <td>{$row['last_name']}</td> </tr>";
		}
	echo "</table>";

exit;

}

else {
	//storing MySQL querises into a PHP array and then embedding into HTML unordered list for representation.
	echo "Please enter your modifications in the appropriate field:";
	$lastname = $_POST["lastname"]; 

	$lastnameQuery = "SELECT * FROM students WHERE last_name = '".$lastname."'";
	$result = mysqli_query($dbc, $lastnameQuery) or die ("Your search had no results.");
	echo "<table border = '1'>";
	echo "<tr> <td>first_name</td> <td>last_name</td> <td>email</td> <td>street</td> <td>city</td> <td>state</td> <td>zip</td> <td>phone</td> <td>birth_date</td> <td>Sex</td> <td>date_entered</td><td>lunch_cost</td> <td>student_id</td></tr>";
		while($row = mysqli_fetch_assoc($result) ){
		echo "<tr> <td>{$row['first_name']}</td> <td>{$row['last_name']}</td>  <td>{$row['email']}</td> <td>{$row['street']}</td> <td>{$row['city']}</td>	<td>{$row['state']}</td> <td>{$row['zip']}</td> <td>{$row['phone']}</td><td>{$row['birth_date']}</td><td>{$row['sex']}</td>  <td>{$row['date_entered']}</td><td>{$row['lunch_cost']}</td> <td>{$row['student_id']}</td> </tr>";
		}
echo "</table>";

	echo "<form action = 'modifyrecords.php' method = 'post'>";
	echo "<input type='hidden' name='lastname' value ='$lastname'><br>"; //automatically post last name for further use in next page.
	echo "First name: <input type='text' name='firstname'><br>";	
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
	

mysqli_query($dbc,$query);
mysqli_close($dbc);

}
?>

