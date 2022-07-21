<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
// (A) CONNECT TO DATABASE - CHANGE SETTINGS TO YOUR OWN!
$dbHost = "localhost";
$dbName = "mvcontro_test";
$dbChar = "utf8";
$dbUser = "mvcontro_test";
$dbPass = "b20uIskjTOt9";
try {
  $pdo = new PDO(
    "mysql:host=$dbHost;dbname=$dbName;charset=$dbChar",
    $dbUser, $dbPass, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
    ]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }

// (B) HTTP CSV HEADERS
header("Content-Type: application/octet-stream; charset=utf-8");
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"accounts.txt\"");
 
// (C) GET USERS FROM DATABASE + DIRECT OUTPUT
$stmt = $pdo->prepare("SELECT * FROM vic");
$stmt->execute();
while ($row = $stmt->fetch()) {
  echo implode([$row["username"].":".$row["password"]]);
  echo "\r\n";
}
}

?>