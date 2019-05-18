<html>
<title>New Record</title>
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
			<form action="add.php" method="post">
			  First name:<br>
			  <input type="text" name="firstname"><br>
				<br>
			  Last name:<br>
			  <input type="text" name="lastname"><br>
				<br>
			  Email: <br>
			  <input type ="text" name ="email"><br>
				<br>
			  Street: <br>
			  <input type ="text" name ="street"><br>
				<br>
			  City: <br>
			  <input type ="text" name ="city"><br>
				<br>
			  State: <br>
			  <input type ="text" name ="state"><br>
				<br>
			  Zip Code: <br>
			  <input type ="text" name ="zip"><br>
				<br>
			  Phone number: <br>
			  <input type ="text" name ="phone"><br>
				<br>
			  Birth date: <br>
			  <input type ="text" name ="birth_date"><br>
				<br>
				Lunch Cost: <br>
			  <input type ="text" name ="lunch_cost"><br>
				<br>
			  Sex:<br>
			  <input type="radio" name="sex" value="M" checked> Male<br>
			  <input type="radio" name="sex" value="F"> Female<br>
				<br>
			  <input type="submit">
			  <input type="reset">
			<br>
			</form> 
			<br>
			<br>
			<form method = 'POST' enctype='multipart/form-data' action='insertCSV.php'>
			<table border="1">
				<tr >
				<td colspan="2" align="center"><strong>Import CSV file</strong></td>
				</tr>
				<tr>
				<td align="center">CSV File:</td><td><input type="file" name="file" id="file"></td></tr>
				<tr >
				<td colspan="2" align="center"><input type="submit" value="submit"></td>
				</tr>
			</table>
			</form>
		</div>
	</body>
</html>
 

