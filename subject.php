<?php
// connect to database
$db = mysqli_connect('localhost', 'testphp', 'password', 'authentication');
// Check connection
if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
echo "connected";

$sql="INSERT INTO subjects (subject) VALUES ('$_POST[subject]')";

if (!mysqli_query($db,$sql))
 {
 die('Error: ' . mysqli_error($db));
 }
 if ($_POST[subject] == $_POST[subject]) {
   array_push($errors, "The already exits");
 }
echo "1 record added";

header("location: test.php");
echo "<a href= # >view the data</a>";
?>
