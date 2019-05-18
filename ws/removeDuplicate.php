<html>
<head>
	<meta charset="utf-8">
	<title>RemoveDuplicates</title>
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
$query = "DELETE FROM students WHERE first_name = '".$firstname."' AND last_name = '".$lastname."'";
$result = mysqli_query($dbc, $query) or die ("Your search had no results.");
echo "The name $firstname $lastname has been deleted from the database. " ;
?>
