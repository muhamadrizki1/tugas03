<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masukan Data</title>
    <link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>
<body>
<div class="card mt-2">
  <div class="card-header">
  <h5><strong>Form Register</strong></h5>
  </div>
  <form action="tampil.php" method="post">
  <div class="card-body">
  <form>
  <div class="row mb-3">
    <label for="txtnama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="txtnama" class="form-control" name="txtnama" id="txtnama">
    </div>
  </div>
  <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Iskan alamat</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="txtalamat" id="txtalamat" rows="3"></textarea>
        </div>
</div>
<div class="row mb-3">
    <label for="txttempat" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="txttempat" class="form-control" name="txttempat" id="txttempat">
    </div>
  </div>
  <div class="row mb-3">
    <label for="txtlahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="txtlahir" class="form-control" name="txtlahir" id="txtlahir">
    </div>
  </div>
  <div class="row mb-3">
    <label for="rjk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rjk" id="idl" value="Laki-laki">
  <label class="form-check-label" for="inlineRadio1">Laki-laki</Laki-laki></label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rjk" id="idp" value="Perempuan">
  <label class="form-check-label" for="inlineRadio2">Perempuan</label>
</div>
</div>
<div class="row mb-3">
    <label for="cpend" class="col-sm-2 col-form-label">Pendidikan</label>
    <div class="col-sm-10">
    <select class="form-select" name="cpend" id="cpend"  aria-label="Default select example">
  <option name="cpend" selected>S1</option>
  <option value="D1">D1</option>
  <option value="D2">D2</option>
  <option value="D3">D3</option>
</select>
    </div>
  </div>
  </div>
  <div class="card-footer text-body-secondary">

  </div>
</div>
<input class="btn btn-primary" type="submit" value="Submit">
        <input class="btn btn-primary" type="reset" value="Reset">
</body>
</html>