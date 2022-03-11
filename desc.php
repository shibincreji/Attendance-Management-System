<?php

if(!empty($_POST)){

	$mysqli = new mysqli('localhost', 'root', '', 'attendance');

	if($mysqli->connect_error){
		die('connect_error: '.$mysqli->connect_errno. ': '.$mysqli->connect_error);
	}

	$sql = "INSERT INTO student(name, usn, course, semester, age, gender) VALUES('{$mysqli->real_escape_string($_POST['name'])}','{$mysqli->real_escape_string($_POST['usn'])}','{$mysqli->real_escape_string($_POST['course'])}','{$mysqli->real_escape_string($_POST['semester'])}','{$mysqli->real_escape_string($_POST['age'])}','{$mysqli->real_escape_string($_POST['gender'])}' )";

	$insert = $mysqli->query($sql);

	if($insert){
		echo "Success! Row ID:{$mysqli->insert_id}";
	} else{
		die("Error: {$mysqli->errno} : {$mysqli->error}");
	}

	$mysqli->close();
}
?>





<form class="" method="post" action="desc.php">

	<input type="text" name="name"><br>
	<input type="text" name="usn"><br>
	<input type="text" name="course"><br>
	<input type="number" name="semester"><br>
	<input type="number" name="age"><br>
	<input type="text" name="gender"><br><br>

	<input type="submit" value="Submit form">
	<input type="reset" value="Clear form">

</form>