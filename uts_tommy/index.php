<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tommy Ryan Dwiputra</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script>
    // is numeric positive
    function onlyNumbers(event) {
      if (!(Number.isInteger(event.currentTarget.value) && event.currentTarget.value > 0)) {
        event.currentTarget.value = event.currentTarget.value.replace(/\D/g, '');
      }
    }

    // only words
    function onlyWords(event) {
      if (!(event.currentTarget.value.match(/^[a-zA-Z ]+$/))) {
        event.currentTarget.value = event.currentTarget.value.replace(/[^a-zA-Z ]/g, '');
      }
    }
  </script>
</head>

<body>

  <?php
  // define variables to empty values  
  $nimErr = $namaErr = $prodiErr = $statusErr = "";
  $nim = $nama = $prodi = $status = "";

  //Input fields validation  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
      $namaErr = "Name is required";
    } else {
      $nama = input_data($_POST["nama"]);
      // check if name only contains letters and whitespace  
      if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
        $namaErr = "Only alphabets and white space are allowed";
      }
    }

    if (empty($_POST["nim"])) {
      $nimErr = "Mobile no is required";
    } else {
      $nim = input_data($_POST["nim"]);
      // check if mobile no is well-formed  
      if (!preg_match("/^[0-9]*$/", $nim)) {
        $nimErr = "Only numeric value is allowed.";
      }
      //check mobile no length should not be less and greator than 10  

    }
  }
  function input_data($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <div class="container mt-3">
    <h1>Form Biodata Kampus</h1>
    <form method="POST" action="tambah_data.php">

      <div class="form-group row">
        <label for="text" class="col-3 col-form-label">NIM <span style="color: red;">
            *
          </span></label>
        <span style="color: red;"> <?php echo $nimErr; ?></span>
        <div class="col-9">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-book-o"></i>
              </div>
            </div>
            <input id="text" name="nim" type="text" onkeyup="return onlyNumbers(event)" class="form-control" required="required">
          </div>
          <span id="textHelpBlock" class="form-text text-muted">Masukkan Angka Saja</span>
        </div>
      </div>

      <div class="form-group row">
        <label for="text1" class="col-3 col-form-label">Nama Lengkap <span style="color: red;">
            *
          </span></label>
        <span style="color: red;"> <?php echo $namaErr; ?></span>
        <div class="col-9">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-book"></i>
              </div>
            </div>
            <input id="text1" name="nama" type="text" onkeyup="return onlyWords(event)" class="form-control" required="required">
          </div>
          <span id="textHelpBlock" class="form-text text-muted">Masukkan Huruf Saja</span>
        </div>
      </div>

      <div class="form-group row">
        <label for="select" class="col-3 col-form-label">Program Studi <span style="color: red;">
            *
          </span></label>
        <span style="color: red;"> </span>
        <div class="col-9">
          <select id="select" name="prodi" class="custom-select" required="required">
            <option value="">Pilih Prodi</option>
            <option value="Teknik Listrik">Teknik Listrik</option>
            <option value="Teknik Elektronika">Teknik Elektronika</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-3">Status <span style="color: red;">
            *
          </span></label>
        <span style="color: red;"> </span>
        <div class="col-9">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="status" id="radio_0" type="radio" class="custom-control-input" value="Aktif" required="required">
            <label for="radio_0" class="custom-control-label">Aktif</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="status" id="radio_1" type="radio" class="custom-control-input" value="Tidak Aktif" required="required">
            <label for="radio_1" class="custom-control-label">Tidak Aktif</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-3 col-9">
          <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
          <a href="view_data.php"><button type="button" class="btn btn-success">Lihat Data</button></a>
        </div>
      </div>
    </form>

  </div>

</body>

</html>