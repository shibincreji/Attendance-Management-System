<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css">
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>

   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
  <div class="bg-image"></div>

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
	     <a class="navbar-brand" href="index.php" style="font-size:28px;"><br>Rajarajeswari College of Engineering</a><br />
          <a class="navbar-brand" href="index.php">Online Attendance Management</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
             <li class="active"><a href="index.php">Home</a></li>
             <li><a href="student.php">Students</a></li>
			       <li><a href="statistics.php">Statistics</a></li>
		  	     <li><a href="about.php">About</a></li>
           	 <li><a href="contact.php">Contact</a></li>
   			     <li><a href="#">Login</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <div class="container">
    <h2><br><br><br><br>For Students</h2>
    <h4>Click here for <a href="student.php">Student Dashboard</a></h4>
    <hr>
    <h2>For Faculty</h2>
    <div class="alert alert-warning hidden">
      <span></span>
      <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
    </div>

    <span id="lblError" style="color: red"></span>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#txtName").keypress(function (e) {
                var keyCode = e.keyCode || e.which;

                $("#lblError").html("");

                //Regex for Valid Characters i.e. Alphabets.
                var regex = /^[A-Za-z ]+$/;

                //Validate TextBox value against the Regex.
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    $("#lblError").html("Only Alphabets allowed For Name.");
                }

                return isValid;
            });
        });
    </script>

<script type="text/javascript">
        $(function () {
            $("#num").keypress(function (e) {
                var keyCode = e.keyCode || e.which;

                $("#lblError").html("");

                //Regex for Valid Characters i.e. Numbers.
                var regex = /^[0-9]+$/;

                //Validate TextBox value against the Regex.
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    $("#lblError").html("Only Numbers are allowed for Phone.");
                }

                return isValid;
            });
        });
    </script>
    <br>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th><b>Login</b></th>
          <th>Sign Up</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>

            <form id="login">

              <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email" required>
              </div>
              <br>

              <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password" required>
              </div>

              <button class="btn btn-primary pull-right">Login</button>
            </form>
          </td>

          <td>
            <form id="signup">
              <div class="form-group">
                <label>Name</label><br>
                <input class="form-control" size="30" type="text" id="txtName" placeholder=" Name" maxlength="30" name="name" required><span class="help-block"><small>Only Alphabets are allowed.</small></span>
              </div>

              <div class="form-group">
                <label>Phone</label>
                <input class="form-control" placeholder="Phone" type="text" id="num" name="phone" maxlength="10" required><span class="help-block"><small>Only Numbers are allowed.</small></span>
              </div>

              <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password">
                <span class="help-block">Password should be 6 characters long.</span>
              </div>
              <div class="form-group">
                <label>Re-type Password</label>
                <input class="form-control" placeholder="Re-type Password" type="password" name="password2">
              </div>
              <button class="btn btn-primary pull-right">Sign Up</button>
            </form>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

     <!-- FOOTER -->
      <footer style="background; height:140%;">
        <p class="pull-right"><a href="index.php">Back to top</a></p>
        <p>&copy; 2022 , Inc. &middot;  developed by  <a href="#">Sanskar Drolia & Shibin C Reji </a><a href="#"> &middot; Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div>
 </body>
</html>
