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
	
	echo "Please enter the <b>First Name</b> of the person you would like to delete.";
	
	echo "<form action='removeDuplicate.php' method='post'>";
	echo "lastname: <input type= 'hidden' name='lastname' value = '$lastname'> <br>";
	echo "Firstname: <input type='text' name='firstname'><br>";
	echo "<input type='submit'>";
	echo "</form>";



exit;

} else if ($result->num_rows == 0){
	print ("The name $lastname was not found in the database. Please see records below: ");
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

	$query = "DELETE FROM students WHERE last_name = '".$lastname."'";
	if ($query == null){
	print($lastname + "is not in the database.");
	}
	echo $query;

	$lastnameQuery = "SELECT last_name, first_name FROM students WHERE last_name = '".$lastname."'";
	$result = mysqli_query($dbc, $lastnameQuery) or die ("Your search had no results.");

	echo "<table border = '1'>";
	echo "<tr> <td>first name</td> <td>last name</td> </tr>";

		while($row = mysqli_fetch_assoc($result)){
	  	echo "<tr> <td>{$row['first_name']}</td> <td>{$row['last_name']}</td> </tr>";
		}
	echo "</table>";
	print("Record deleted.");
	echo "<br>";
	

mysqli_query($dbc,$query);
mysqli_close($dbc);

}
?>

