<?php
	$name = $_POST['name'];
	$usn = $_POST['usn'];
	$course = $_POST['course'];
	$semester = $_POST['semester'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];

	if(!empty($name) || !empty($usn) || !empty($course) || !empty($semester) || !empty($age) || !empty($gender)) 

	$conn = new mysqli('localhost','root','','attendance');
	if(mysqli_connect_error()){
		die('Connection Error('.mysqli_connect_error().')'.mysqli_connect_error());
	}else{
		$SELEcT = "SELECT usn From student Where usn = ? Limit 1";
		$INSERT = "INSERT Into student (name, usn, course, semester, age, gender) Values (?, ?, ?, ?, ?, ?)";
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("b",$usn);
		$stmt->execute();
		$stmt->bind_result($usn);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if($rnum==0){
			$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssiis", $name, $usn, $course, $semester, $age, $gender);
			$stmt->execute();

			echo "New recorded Successfully";
		}else{
			echo "USN alredy Exists";
		}
		$stmt->close();
		$conn->close();
	}
?>