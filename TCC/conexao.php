<?php 


$servername = "localhost";
$username = "id19693905_alisson";
$password = "Ca_9404394043";
$db = "id19693905_contatos";


$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>