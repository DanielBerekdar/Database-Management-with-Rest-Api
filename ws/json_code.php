<?php

require_once('StudentDB.php');
require_once('mysql_conn.php');

if (mysqli_connect_errno()) {    
	printf("Connect failed: %s\n", mysqli_connect_error());    
	exit();
}

$query = "SELECT * FROM students";
$student_array = array();
if($result = $dbc->query($query)){
//read from database
while ($obj = $result->fetch_object()){
	$temp_student = new StudentDB($obj->first_name, 
		$obj->last_name, $obj->email, $obj->street,$obj->city, 
		$obj->state, $obj->zip, $obj->phone, $obj->birth_date, 
		$obj->sex, $obj->date_entered, $obj->lunch_cost, 
		$obj->student_id);

	$student_array[] = $temp_student;
}

//prepare JSON response
echo '{"students":[';

$x = 0;
for ($x = 0; $x < sizeof($student_array) - 1; $x++){
	$data = json_encode($student_array[$x]);
	echo $data.',';
}

//process the last item in the array
echo json_encode($student_array[$x]);
echo ']}';

// Close the database connection
$result->close();
$dbc->close();
}

?>
