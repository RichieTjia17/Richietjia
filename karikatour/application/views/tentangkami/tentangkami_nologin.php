<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>/fontawesome/css/all.css">

    <title>Tentang Kami</title>
    <style>
        .judul{
            text-align:center;
            font-size:32px;
        }

        .penjelasan{
            text-align:center;
            font-size:20px;
            margin-top:3%;
        }

        .nama{
      margin-left:25px;
      margin-right:30px;
      font-size:36px;
      font-family:arial;
      color:#84FF00;
    }

    .moto{
            margin-left:11%;
            margin-right:8%;
            font-size:24px;
            font-family:arial;
            margin-top:10px;
            color: royalblue;
        }


    .menu{
      font-size:18px;
      font-family:arial;
      color:black;
    }

    .informasi{
      font-size : 32px;
      font-family:arial;
      text-align:center;
      margin-top:5%;

    }

    .masuk{
      margin-right:5px;
    }

    .daftar{
      margin-right:5px;
    }

    .pilihbahasa{
      margin-right:8px;
    }

    footer{
            text-align:center;
            background-color: #ffc107;
            color: white;
        }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

  <div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-bars"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
      <li class="nav-item active">
        <a class="menu nav-link" href="<?= base_url();?>">Beranda <span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item">
        <a class="menu nav-link" href="<?= base_url('home/pilihan');?>">Pilihan</a>
      </li>
      <li class="nav-item">
        <a class="menu nav-link" href="<?= base_url('home/pemesanan');?>">Pemesanan</a>
      </li>
      <li class="nav-item">
        <a class="menu nav-link" href="<?= base_url('home/tentangkami');?>">Tentang Kami</a>
      </li>
      <li class="nav-item">
        <a class="menu nav-link" href="<?= base_url('home/hubungikami');?>">Hubungi Kami</a>
      </li>
  </div>
</div>
    &nbsp;&nbsp;
    <a href="<?= base_url();?>"><img src="<?= base_url();?>/gambar/logo.jpg" width="255" height="55"></img></a>
    
    <marquee scrollamount="8"><p class="moto">Kepuasan Anda adalah Kebanggaan Kami</p></marquee>
  
    <ul class="navbar-nav mt-2 mt-lg-0">
        <a href="<?= base_url('auth'); ?>"><button class="masuk btn btn-success btn-outline-dark my-2 my-sm-0">Masuk</button></a>
        <a href="<?= base_url('auth/daftar'); ?>"><button class="daftar btn btn-success btn-outline-dark my-2 my-sm-0">Daftar</button></a>
    </ul>

      <div class="dropdown">
  <a class="pilihbahasa btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Pilih Bahasa
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Bahasa Indonesia</a>
    <a class="dropdown-item" href="<?= base_url('homes/aboutus')?>">Bahasa Inggris</a>
    
  </div>
      </div>
  </div>
</nav>

    <p class="judul">Sekilas Tentang <font style="color:#84FF09;">Karika Tour</font></p>

    <p class="penjelasan">Karika Tour merupakan sebuah Website yang dibuat untuk membantu pengguna dalam menentukan paket wisata baik di Indonesia maupun mancanegara</p>

    <p class="informasi">Informasi seputar Website Karikatour</p>


   <div class="container"> 
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Apa yang ditawarkan oleh Website Karikatour ?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Website Karikatour menawarkan kemudahan bagi pengguna dalam mencari paket tour yang mereka inginkan
        dan juga destinasi wisata yang beragam baik yang ada di wilayah Indonesia maupun mancanegara.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Bagaimana harga yang ditawarkan oleh Website Karikatour ?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Harga yang ditawarkan oleh Website Karikatour berdasarkan harga dari tiket penerbangan, akomodasi, serta
        biaya yang kira-kira diperlukan di suatu tempat yang akan dituju.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Bagaimana dengan pengurusan dokumen perjalanan yang saya lakukan ?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Harga yang tertera di halaman pilihan merupakan harga gabungan dari tiket pesawat, akomodasi serta 
        pengurusan dokumen seperti visa untuk negara yang memberlakukan visa kunjungan ke negaranya.
      </div>
    </div>
  </div>
  
</div>
</div>

<footer>
        <p>Copyright &copy; 2020 </p>
        <p> By Richie & Juan</p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>