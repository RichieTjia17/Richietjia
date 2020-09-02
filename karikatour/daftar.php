<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>Daftar Akun</title>

    <style>
      .daftarkan{
        font-size:36px;
        font-family:arial;
        font-weight:bold;
        text-align:center;
      }
    </style>
  </head>
  <body style="background-color:#ffc107;">
<div class="container">
  <p class="daftarkan">Daftarkan Akun Anda Disini Sekarang</p>

      <br>

  <form method="POST" action="kontroldaftar.php">
  <div class="form-group">
    <label for="Nama Depan">Nama Depan</label>
    <input type="text" class="form-control" id="namadepan" name="namadepan">
  </div>
  <div class="form-group">
    <label for="Nama Belakang">Nama Belakang</label>
    <input type="text" class="form-control" id="namabelakang" name="namabelakang">
  </div>
  <div class="form-group">
    <label for="Nama Belakang">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tanggallahir" name="tanggallahir">
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin : </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jeniskelamin" id="lakilaki" value="lakilaki">
          <label class="form-check-label" for="gridRadios1">
            Laki-laki
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="perempuan">
          <label class="form-check-label" for="gridRadios2">
            Perempuan
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>
  <div class="form-group">
    <label for="Username">Nama Akun</label>
    <input type="text" class="form-control" id="namaakun" name="namaakun">
  </div>
  <div class="form-group">
    <label for="Alamat Email">Alamat Email</label>
    <input type="email" class="form-control" id="alamatemail" name="alamatemail">
  </div>
  <div class="form-group">
    <label for="Kata Sandi">Kata Sandi</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
  <br><br>
  <button type="submit" class="btn btn-primary">Daftar</button>
</form>


</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>