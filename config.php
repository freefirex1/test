<?php
$dsn = 'mysql:localhost;dbname=mvcontro_test';
$user = "mvcontro_test";
$pass = "b20uIskjTOt9";
$option = array(

PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

);

try{
	
	$con= new PDO('mysql:host=localhost;dbname=mvcontro_test','mvcontro_test','b20uIskjTOt9');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
}

catch(PDOException $e){
	echo 'Failed To Connect' . $e->getMessage();
}

$conn=mysqli_connect("localhost","mvcontro_test","b20uIskjTOt9","mvcontro_test");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>