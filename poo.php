<?php
$servername = "localhost";
$username = "root";
$password = "";

// connection à la base de donnée
$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
  die("Connection échouée: " . $conn->connect_error);
}
echo "Connection réussie!";
?>