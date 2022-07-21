<?php
$db = mysqli_connect('localhost', 'mvcontro_test', 'b20uIskjTOt9', 'mvcontro_test');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $uid = $session;
    $id = $_POST['id'];
	$query = "DELETE FROM `vic` '";
  	mysqli_query($db, $query);
  	 header('Location:index_admin.php');
}
?>