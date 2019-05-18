<?php 
	require_once('mysql_conn.php');

	if (mysqli_connect_errno()) {    
		printf("Connect failed: %s\n", mysqli_connect_error());    
		exit();
	}
	
	$cancel = $_POST["cancel"];
	

	if ($cancel == 'yes'){
		$query = "ROLLBACK"; 
	mysqli_query($dbc,$query); 
	mysqli_close($dbc);
	}
	else {

	$url = 'http://localhost/ws/welcome.html';
	echo "$url ";


?>
