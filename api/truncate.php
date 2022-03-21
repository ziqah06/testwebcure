<?php
$servername = "localhost";
$username = "root";
$password = "R00t@!23";
$dbname = "webcure";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "truncate table crypto";
  $sth = $conn->prepare($sql);
  $sth->execute();


} 
catch(PDOException $e) {

}

$conn = null;
?>