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
			<!-- <li class="active"><a href="description.php">Description</a></li> -->
			<li><a href="logout.php">Logout</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav></br></br></br></br>
   </div>

<br><br><div style="text-align:center; font-size:50px;"><i>Student Description</i></div>

<div>
      <dl class="dl-horizontal"><br><br>

<dd>

<table border="2" cellspacing="4" cellpadding="10" width="100%" bgcolor="#E8E8E8">
<tr>
<th bgcolor="#000" style="color:white;"><b><i>Sl. No</i></b><br></th>
<th bgcolor="#000" style="color:white;"><b><i>Student Name</></b></th>
<th bgcolor="#000" style="color:white;"><b><i>University Seat Number</></b></th>
<th bgcolor="#000" style="color:white;"><b><i>Course</i></b><br></th>
<th bgcolor="#000" style="color:white;"><b><i>Present Semester</i></b><br></th>
<th bgcolor="#000" style="color:white;"><b><i>Age</i></b><br></th>
<th bgcolor="#000" style="color:white;"><b><i>Gender</i></b><br></th>
</tr>

<tr>
<th>1</th><th>ABUBAKKAR SIDDIQUE</th><th><a href="http://localhost/Attendance/usn/1cs17.php" title="View this Student Details">001/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>21</th><th>Male</th>
</tr>

<tr>
<th>2</th><th>AFREEN</th><th><a href="http://localhost/Attendance/usn/2cs17.php" title="View this Student Details">002/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>FEMALE</th>
</tr>

<tr>
<th>3</th><th>AFROOZ SAEED</th><th><a href="http://localhost/Attendance/usn/3cs17.php" title="View this Student Details">003/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>MALE</th>
</tr>

<tr>
<th>4</th><th>ARBINA M</th><th><a href="http://localhost/Attendance/usn/4cs17.php" title="View this Student Details">004/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>FEMALE</th>
</tr>

<tr>
<th>5</th><th>ARSHIYA TABASSUM </th><th><a href="http://localhost/Attendance/usn/5cs17.php" title="View this Student Details">005/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>FEMALE</th>
</tr>

<tr>
<th>6</th><th>NASREEN TAJ</th><th><a href="http://localhost/Attendance/usn/6cs17.php" title="View this Student Details">006/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>22</th><th>FEMALE</th>
</tr>

<tr>
<th>7</th><th>JAVERIYA BEGUM</th><th><a href="http://localhost/Attendance/usn/7cs17.php" title="View this Student Details">007/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>FEMALE</th>
</tr>

<tr>
<th>8</th><th>MISBA ANJUM</th><th><a href="http://localhost/Attendance/usn/8cs17.php" title="View this Student Details">008/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>FEMALE</th>
</tr>

<tr>
<th>9</th><th>MUSKAN MUSFIRAH</th><th><a href="http://localhost/Attendance/usn/9cs17.php" title="View this Student Details">009/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>FEMALE</th>
</tr>

<tr>
<th>10</th><th>NIGAR FATHIMA</th><th><a href="http://localhost/Attendance/usn/10cs17.php" title="View this Student Details">010/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>FEMALE</th>
</tr>

<tr>
<th>11</th><th>NOORA T T</th><th><a href="http://localhost/Attendance/usn/11cs17.php" title="View this Student Details">011/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>FEMALE</th>
</tr>

<tr>
<th>12</th><th>PRANAY KAKATI</th><th><a href="http://localhost/Attendance/usn/12cs17.php" title="View this Student Details">012/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>21</th><th>MALE</th>
</tr>

<tr>
<th>13</th><th>RUKSAR TAJ</th><th><a href="http://localhost/Attendance/usn/13cs17.php" title="View this Student Details">013/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>FEMALE</th>
</tr>

<tr>
<th>14</th><th>SAAD VIKHAR</th><th><a href="http://localhost/Attendance/usn/14cs17.php" title="View this Student Details">014/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>MALE</th>
</tr>

<tr>
<th>15</th><th>SAJIDA TAJ</th><th><a href="http://localhost/Attendance/usn/15cs17.php" title="View this Student Details">015/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>FEMALE</th>
</tr>

<tr>
<th>16</th><th>SANIYA FATHIMA</th><th><a href="http://localhost/Attendance/usn/16cs17.php" title="View this Student Details">016/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>FEMALE</th>
</tr>

<tr>
<th>17</th><th>SIMRAN A</th><th><a href="http://localhost/Attendance/usn/17cs17.php" title="View this Student Details">017/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>FEMALE</th>
</tr>

<tr>
<th>18</th><th>SUMAIYA KHANUM</th><th><a href="http://localhost/Attendance/usn/18cs17.php" title="View this Student Details">018/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>FEMALE</th>
</tr>

<tr>
<th>19</th><th>SYED MASOOD AHMED</th><th><a href="http://localhost/Attendance/usn/19cs17.php" title="View this Student Details">019/CS/17</a></th><th>BE</th><th>5<sup>th</sup></th><th>20</th><th>MALE</th>
</tr>

<tr>
<th>20</th><th>RUFIA BANU</th><th><a href="http://localhost/Attendance/usn/14cs16.php" title="View this Student Details">014/CS/16</a></th><th>BE</th><th>5<sup>th</sup></th><th>22</th><th>FEMALE</th>
</tr>


</table>

</dd>


</div>
</body>
</html>
