<?php
  session_start();
  $isIndex = 0;
  if(!(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id']))) {
    session_destroy();
    if(!$isIndex) header('Location: index.php');
  }
?>
<?php include 'php/node_class.php'; ?>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>About</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
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
          <a class="navbar-brand" href="index.php" style="font-size:28px;">Rajarajeswari college of Engineering</a><br />
          <a class="navbar-brand" href="index.php">Online Attendance</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
			<a href="teacher.php">Dashboard</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="student.php">Students</a></li>
           	<li><a href="statistics.php">Statistics</a></li>
			<li class="active"><a href="about.php">About</a></li>
            	<li><a href="contact.php">Contact</a></li>
			<!-- <li><a href="description.php">Description</a></li> -->
			<li><a href="logout.php">Logout</a>
		</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav></br></br></br></br>
  </div>
<br>

<h3><div>
      <dl class="dl-horizontal">
        <dd><h1 style="font-size: 50px;"><strong><b>Rajarajeswari college of Engineering</b></strong></h1></dd>
        <dd><h3>#14 Ramohalli Cross,<br>Kumbalgudo Mysore Road,<br>Bangalore 560-074,<br>Karnataka, INDIA</h3></dd>
<br>

<dd><h2><strong>Our Location:</strong></h2></dd>
<dd>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.327053961928!2d77.44741171461098!3d12.886679090911661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae38bc2bb37a81%3A0xcef960a370d38901!2sRajarajeswari%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1641094465626!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</dd><br />
</div>
</h3>
</body>
</html>
