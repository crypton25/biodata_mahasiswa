<?php
//Menggabungkan dengan file koneksi yang telah kita buat
include 'koneksi.php';

// Create database
$sql = "CREATE DATABASE kampus";
if ($conn->query($sql) === TRUE) {
  echo "Berhasil membuat database";
} else {
  echo "Gagal membuat database: " . $conn->error;
}

$conn->close();
?>