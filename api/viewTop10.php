<?php
$servername = "localhost";
$username = "root";
$password = "R00t@!23";
$dbname = "webcure";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "select * from crypto order by circulating_supply desc limit 10";
  $sth = $conn->prepare($sql);
  $sth->execute();
  $result=$sth->fetchAll();

  echo json_encode($result);

} 
catch(PDOException $e) {
  return false;
}

$conn = null;
?>