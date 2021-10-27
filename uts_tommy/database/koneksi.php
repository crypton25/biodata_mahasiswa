<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kampus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Koneksi Gagal: " . $conn->connect_error);
}
echo "Koneksi Berhasil <br>";
?>