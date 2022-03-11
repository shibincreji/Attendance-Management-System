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

<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Description</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/statistics.js"></script>
  <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body style="align-content: center;">
   <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
<br>
<a class="navbar-brand" href="index.php" style="font-size:28px;">Rajarajeswari College Of Engineering</a><br />
          <a class="navbar-brand" href="index.php">Online Attendance</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="teacher.php">Dashboard</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="student.php">Students</a></li>
			<li><a href="statistics.php">Statistics</a></li>
			<li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
			<li class="active"><a href="description.php">Description</a></li>
			<li><a href="logout.php">Logout</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav></br></br></br></br>
   </div>
<br><br><div style="text-align:center; font-size:50px;"><i>Student Description</i></div><br><br>

<form method="post" action="description.php">
	<table class="table table-bordered table-striped">
		<tr>
			<td style="font-size: 25px;  font-weight: 500;">Name :</td>
			<td><input class="form-control" placeholder="Enter Student Name" type="text" name="name"></td>
		</tr>
		<tr>
			<td style="font-size: 25px;  font-weight: 500;">University Seat Number</td>
			<td><input class="form-control" placeholder="USN of the Student" type="text" name="usn"></td>
		</tr>
		<tr>
			<td style="font-size: 25px;  font-weight: 500;">Course</td>
			<td><input class="form-control" placeholder="Persuing Course" type="text" name="course"></td>
		</tr>
		<tr>
			<td style="font-size: 25px;  font-weight: 500;">Semester</td>
			<td><input class="form-control" placeholder="Current Semester" type="text" name="semester"></td>
		</tr>
		<tr>
			<td style="font-size: 25px;  font-weight: 500;">Age</td>
			<td><input class="form-control" placeholder="Enter the Age" type="text" name="age"></td>
		</tr>
		<tr>
			<td style="font-size: 25px;  font-weight: 500;">Gender</td>
			<td>
				<input type="radio" name="gender" value="M">Male
				<input type="radio" name="gender" value="F">Female
			</td>
		</tr>		
	</table><br>

		<table style="position: absolute; width: 50%; left: 34%; ">
			<tr>
			<td><input style="background-color: green; color: white; border: 0; padding: 17px; border-radius: 50%; " type="submit" name="submit-btn" value="Submit form"></td><br>
			<td><input style="background-color: orange; color: white; border: 0; padding: 17px; border-radius: 50%; " type="reset" name="reset-btn" value="Reset form"></td>
		</tr>
		</table>
</form>
</body>
</html>