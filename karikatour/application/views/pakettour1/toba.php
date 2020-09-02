<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>/fontawesome/css/all.css">

    <title>Danau Toba 3 Hari 2 Malam</title>

    <style>
        .nama {
            margin-left: 25px;
            margin-right: 30px;
            font-size: 36px;
            font-family: arial;
            color: #84FF00;
        }

        .menu {
            font-size: 18px;
            font-family: arial;
            color: black;
        }

        .masuk {
            margin-right: 5px;
        }

        .daftar {
            margin-right: 5px;
        }

        .pilihbahasa {
            margin-right: 8px;
        }

        .silakan {
            font-size: 40px;
            font-family: arial;
            color: #84ff09;
            text-align: center;
            margin-top: 5%;
        }

        .gunakan {
            font-size: 24px;
            font-family: arial;
            
            text-align: center;
            margin-top: 1%;
        }
        .info {
            font-size: 22px;
            font-family: arial;
            margin-top: 5%;
            text-align: center;
            margin-left:2%;
        }

        .rasio {
            padding-top: 50%;
            width: 100%;
        }

        .moto{
            margin-left:11%;
            margin-right:8%;
            font-size:24px;
            font-family:arial;
            margin-top:10px;
            color: royalblue;
        }

        .edit {
            text-align: center;
            font-size: 20px;
            font-family: arial;
        }

        .judul{
            font-size:36px;
            color:lawngreen;
            margin-top:15%;
            margin-left:10%;
        }

        .deskripsi{
            font-size:28px;
            text-align:center;

        }

        tbody{
            font-size:24px;
            font-weight:bold;
            color : darkcyan;
        }

        .kiri{
            font-size:25px;
            margin-left:8px;
        }

         .kanan{
            font-size:25px;
            margin-right:8px;
            margin-left:40%
         }
         
         .kiri:hover{
             color:red;
         }
         .kanan:hover{
             color:red;
         }

         .poin{
             font-size:20px;
             font-family:arial;
         }

         .isi{
             font-size:16px;
             color:#ffc107;
             font-weight:bold;
             font-family:arial;
             margin-left:5%;
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
                    <a class="dropdown-item" href="<?= base_url('tourpacket/toba')?>">Bahasa Inggris</a>

                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col col-lg-4">
                <img src="<?= base_url()?>/gambar/toba.jpg" width="350" height="350"></img>
            </div>

            <div class="col col-lg-8">
                <p class="judul">Paket 3 Hari 2 Malam</p>
            </div>

            <div class="col col-lg-12">
                <p class="deskripsi">Sebagai salah satu danau vulkanis yang unik, tidak ada salahnya jika Anda
                merencakan liburan Anda ke Danau Toba ini</p>
            </div>

            <div class="col col-lg-12">
                <table class="table table-bordered" style="text-align:center;">
                    <thead class="table-success">
                        <th>Waktu Yang Digunakan</th>
                        <th>Mata Uang Yang Digunakan</th>
                        <th>Bahasa Yang Digunakan</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GMT +7</td>
                            <td>Rupiah (IDR)</td>
                            <td>Bahasa Indonesia</td>
                        </tr>
                    </tbody>
                </table>

                <div class="col">
                    <p class="poin">Tempat Yang Dikunjungi : </p>
                    <p class="isi">1. Danau Toba <br>
                    2. Pulau Samosir
                    </p>
                </div>
                <div class="col">
                    <p class="poin">Harga Paket Tour Ini : </p>
                    <p class="isi">USD$ 120 (Termasuk Tiket Pesawat dan Penginapan)</p>
                </div>
            </div>

            

            <a href="<?= base_url('home/pilihan')?>"><i class="fas fa-arrow-circle-left fa-3x">
            </i></a>
            <a href="<?= base_url('home/pilihan')?>"><font class="kiri">Kembali Ke Halaman Pilihan</font></a>
            <a href="<?= base_url('home/pemesanan')?>"<font class="kanan">Ke Halaman Pemesanan</font></a>
            <a href="<?= base_url('home/pemesanan')?>"><i class="fas fa-arrow-circle-right fa-3x">
            </i></a>
            
        </div>
    </div>

    <footer>
        <p>Copyright &copy; 2020 </p>
        <p> By Richie & Juan</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>