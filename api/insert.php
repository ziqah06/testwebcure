<?php
$servername = "localhost";
$username = "root";
$password = "R00t@!23";
$dbname = "webcure";

$symbol = $_POST['symbol'];
$current_price = $_POST['current_price'];
$circulating_supply = $_POST['circulating_supply'];


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO crypto (symbol, current_price, circulating_supply) VALUES (? , ?, ?)";
  $sth = $conn->prepare($sql);
  $sth->bindParam(1, $symbol);
  $sth->bindParam(2, $current_price);
  $sth->bindParam(3, $circulating_supply);
  $sth->execute();

  echo "New record created successfully";

} 
catch(PDOException $e) {
  	echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>