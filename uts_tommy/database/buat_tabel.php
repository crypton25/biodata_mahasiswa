<?php
include 'koneksi.php';

// sql to create table
$sql = "CREATE TABLE mahasiswa (
nim char(10) not null primary key,
nama varchar(30) not null,
prodi varchar(20) not null,
status varchar(20) not null
)";

if ($conn->query($sql) === TRUE) {
  echo "Berhasil Membuat Tabel Mahasiswa";
} else {
  echo "Berhasil Membuat Tabel Mahasiswa: " . $conn->error;
}

$conn->close();
?>

