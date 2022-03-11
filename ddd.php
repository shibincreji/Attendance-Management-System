<?php
$name = filter_input(INPUT_POST, 'name');
$usn = filter_input(INPUT_POST, 'usn');
$course = filter_input(INPUT_POST, 'course');
$semester = filter_input(INPUT_POST, 'semester');
$age = filter_input(INPUT_POST, 'age');
$gender = filter_input(INPUT_POST, 'gender');

if (!empty($name)){
if (!empty($usn)){
if (!empty($course)){
if (!empty($semester)){
if (!empty($age)){
if (!empty($gender)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "attendance";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO student (name, usn. course, semester, age, gender)
values ('$name','$usn','$course','$semester','$age','$gender')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "age is Required . . .";
die();
}
}
else{
echo "semester is Required . . . ";
die();
}
}
else{
echo "course is Required . . . ";
die();
}
}
else{
echo "usn is Required . . . ";
die();
}
}
else{
echo "name is Required . . .";
die();
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Form site</title>
</head>
<body>
<form method="post" action="desc.php">
Name : <input type="text" name="name"><br><br>
USN : <input type="text" name="usn"><br><br>
course : <input type="text" name="course"><br><br>
semester : <input type="number" name="semester"><br><br>
age : <input type="number" name="age"><br><br>
gender : <input type="char" name="gender"><br><br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>