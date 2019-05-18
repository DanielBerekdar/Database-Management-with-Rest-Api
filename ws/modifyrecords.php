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

if ($_POST["firstname"] != NULL){
$firstname = $_POST["firstname"];
$query = "UPDATE students SET first_name = '".$firstname."' WHERE last_name = '".$lastname."'";
$result = mysqli_query($dbc, $query) or die ("bad query");
echo "The first name record has been updated." ;
}



if ($_POST["email"] != NULL){
$email = $_POST["email"];
$query = "UPDATE students SET email = '".$email."' WHERE last_name = '".$lastname."'";
$result = mysqli_query($dbc, $query) or die ("bad query");
echo "The email record has been updated." ;
}

if ($_POST["street"] != NULL){
$street = $_POST["street"];
$query = "UPDATE students SET street = '".$street."' WHERE last_name = '".$lastname."'";
$result = mysqli_query($dbc, $query) or die ("bad query");
echo "The street record has been updated." ;
}

if ($_POST["city"] != NULL){
$city = $_POST["city"];
$query = "UPDATE students SET city = '".$city."' WHERE last_name = '".$lastname."'";
$result = mysqli_query($dbc, $query) or die ("bad query");
echo "The city record has been updated." ;
}

if ($_POST["state"] != NULL){
$state = $_POST["state"];
$query = "UPDATE students SET state = '".$state."' WHERE last_name = '".$lastname."'";
$result = mysqli_query($dbc, $query) or die ("bad query");
echo "The state record has been updated." ;
}

if ($_POST["zip"] != NULL){
$zip = $_POST["zip"];
$query = "UPDATE students SET zip = '".$zip."' WHERE last_name = '".$lastname."'";
$result = mysqli_query($dbc, $query) or die ("bad query");
echo "The zip record has been updated." ;
}

if ($_POST["phone"] != NULL){
$phone = $_POST["phone"];
$query = "UPDATE students SET phone = '".$phone."' WHERE last_name = '".$lastname."'";
$result = mysqli_query($dbc, $query) or die ("bad query");
echo "The phone record has been updated." ;
}

if ($_POST["birth_date"] != NULL){
$birth_date = $_POST["birth_date"];
$query = "UPDATE students SET birth_date = '".$birth_date."' WHERE last_name = '".$lastname."'";
$result = mysqli_query($dbc, $query) or die ("bad query");
echo "The birthday record has been updated." ;
}

if ($_POST["sex"] != NULL){
$sex = $_POST["sex"];
$query = "UPDATE students SET sex = '".$sex."' WHERE last_name = '".$lastname."'";
$result = mysqli_query($dbc, $query) or die ("bad query");
echo "The sex record has been updated." ;
}

if ($_POST["date_entered"] != NULL){
$date_entered = $_POST["date_entered"];
$query = "UPDATE students SET date_entered = '".$date_entered."' WHERE last_name = '".$lastname."'";
$result = mysqli_query($dbc, $query) or die ("bad query");
echo "The date entered record has been updated." ;
}

if ($_POST["lunch_cost"] != NULL){
$lunch_cost = $_POST["lunch_cost"]; 
$query = "UPDATE students SET lunch_Cost = '".$lunch_cost."' WHERE last_name = '".$lastname."'";
$result = mysqli_query($dbc, $query) or die ("bad query");
echo "The lunch cost record has been updated." ;
}

if ($_POST["student_id"] != NULL){
$student_id = $_POST["student_id"];
$query = "UPDATE students SET student_id = '".$student_id."' WHERE last_name = '".$lastname."'";
$result = mysqli_query($dbc, $query) or die ("bad query");
echo "The student id record has been updated." ;
} 
if ($_POST["newLastName"] != NULL){
$newLastName = $_POST["newLastName"];
$query = "UPDATE students SET last_name = '".$newLastName."' WHERE last_name = '".$lastname."'";
$result = mysqli_query($dbc, $query) or die ("bad query");
echo "The last name record has been updated." ;
}

?>
