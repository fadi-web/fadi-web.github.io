<!DOCTYPE html>
<html>
<body>
<?php 
$servername = "localhost";
$username = "root"; 
$password = "P@ssw0rd"; 
$database = "nvics"; 

//create connection
$mysqli = new mysqli($servername, $username, $password, $database); 
//check connection
if ($mysqli->connect_error) {
	die("Connection failed: " . $mysqli->connect_error);
}

//store the html form data into a variabe
$model = $_POST['model'];
$trim = $_POST['trim'];
$engine = $_POST['engine'];
$transmission = $_POST['transmission'];
$drivetrain = $_POST['drivetrain'];
$ext_color = $_POST['extColor'];
$int_color = $_POST['intColor'];
/*
//prevent sql injection
$model = mysql_real_escape_string($model);
$trim = mysql_real_escape_string($trim);
$engine = mysql_real_escape_string($engine);
$transmission = mysql_real_escape_string($transmission);
$drivetrain = mysql_real_escape_string($drivetrain);
$ext_color = mysql_real_escape_string($extColor);
$int_color = mysql_real_escape_string($intColor);
*/
echo "Here are the options you have selected:" . "<br>" . "<br>";
echo $model . "<br>";
echo $trim . "<br>";
echo $engine . "<br>";
echo $transmission . "<br>";
echo $drivetrain . "<br>";
echo $ext_color . "<br>";
echo $int_color . "<br>";

$sql = "SELECT * FROM honda WHERE model = '$model' AND trim = '$trim' AND engine = '$engine' ";
$result = mysqli_query($mysqli, $sql);

$row = mysqli_fetch_assoc($result);

mysqli_free_result($result);

echo "<br>" . "Here are the search results: " . "<br>" . "<br>";
echo $row['make'] . "<br>";
echo $row['model'] . "<br>";
echo $row['year'] . "<br>";
echo $row['trim'] . "<br>";
echo $row['engine'] . "<br>";
echo $row['transmission'] . "<br>";
echo $row['drivetrain'] . "<br>";
echo $row['ext_color'] . "<br>";
echo $row['int_color'] . "<br>";

mysqli_close($mysqli);
?>
</body>
</html>
