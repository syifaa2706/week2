<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-9">
                <!-- form -->
                <div class="container-fluid">
        <div class="row mt-5">
            <!-- ini form -->
            <form method="post" action="index2.php">
  <div class="form-group row">
    <label for="Khoirunnisa Syifa Fadilah" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">DDP</option>
        <option value="PW2">PW2</option>
        <option value="Basis Data">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="100" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="text" name="uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="100" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="text" name="uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="100" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="text" name="tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
        </div>

            </div>


            <div class="col-3">
                <!-- daftar harga -->
            </div>
        </div>
    </div>






    </div>
</body>
</html>
