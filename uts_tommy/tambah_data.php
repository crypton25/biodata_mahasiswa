<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kampus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$status = $_POST['status'];


$sql = "INSERT INTO mahasiswa (nim, nama, prodi, status)
VALUES ('$nim', '$nama', '$prodi', '$status')";

if ($conn->query($sql) === TRUE) {
  echo " ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tommy Ryan Dwiputra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    
</head>

<body>
    <div class="container mt-3">
        <h1>Biodata Kampus</h1>
        <a href="index.php"><button type="button" class="btn btn-outline-danger">Kembali ke Form</button></a>
        <br>
        <br>
    <?php
        $sql = 'SELECT nim, nama, prodi, status 
        FROM mahasiswa';
        
$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table class="table">
        <thead>
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>';
        
while ($row = mysqli_fetch_array($query))
{
    echo '<tr>
            <td>'.$row['nim'].'</td>
            <td>'.$row['nama'].'</td>
            <td>'.$row['prodi'].'</td>
            <td>'.$row['status'].'</td>
        </tr>';
}
echo '
    </tbody>
</table>';
$conn->close();
    ?>
  
      
    </div>

</body>

</html>