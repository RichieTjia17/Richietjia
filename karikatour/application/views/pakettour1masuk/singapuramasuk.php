<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>/fontawesome/css/all.css">


    <title>Singapura 3 Hari 2 Malam</title>

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

        .moto{
            margin-left:6%;
            margin-right:6%;
            font-size:24px;
            font-family:arial;
            margin-top:10px;
            color: royalblue;
        }

        .rasio {
            padding-top: 50%;
            width: 100%;
        }

        .edit {
            text-align: center;
            font-size: 20px;
            font-family: arial;
        }

        .namapaket {
            font-family: arial;
            font-size: 24px;
            color: black;
        }

        .paket:link{
            color:limegreen;
        }

        .paket:visited{
            color : darkturquoise;
        }

        .paket:hover{
            color:red;
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
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" onmouseover='color:red;'>

                    <li class="nav-item active">
                        <a class="menu nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('home/pilihanmasuk'); ?>">Pilihan</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('home/pemesananmasuk'); ?>">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('auth/history'); ?>">History Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('home/tentangkamimasuk'); ?>">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('home/hubungikamimasuk'); ?>">Hubungi Kami</a>
                    </li>
                </div>
            </div>
            &nbsp;&nbsp;
            <a href="<?= base_url('home')?>"><img src="<?= base_url();?>/gambar/logo.jpg" width="255" height="55"></img></a>

            <marquee scrollamount="8"><p class="moto">Kepuasan Anda adalah Kebanggaan Kami</p></marquee>
            <?php if (session_status() ===  PHP_SESSION_NONE) : ?>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <a href="<?= base_url('auth'); ?>"><button class="masuk btn btn-success btn-outline-dark my-2 my-sm-0">Masuk</button></a>
                    <a href="<?= base_url('auth/daftar'); ?>"><button class="daftar btn btn-success btn-outline-dark my-2 my-sm-0">Daftar</button></a>
                </ul>
            <?php else : ?>
                <ul class="navbar-nav mt-4 mt-lg-0 mr-2">
                    <a>Selamat Datang, <?= $user['nama_depan']; ?></a>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <a href="<?= base_url('auth/keluar'); ?>"><button class="masuk btn btn-success btn-outline-dark my-2 my-sm-0">Keluar</button></a>
                </ul>

            <?php endif; ?>
                <ul class="navbar-nav mt-4 mt-lg-0 mr-5">
                    <a>Selamat Datang, <?= $user['nama_depan']; ?></a>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <a href="<?= base_url('auth/keluar'); ?>"><button class="masuk btn btn-success btn-outline-dark my-2 my-sm-0">Keluar</button></a>
                </ul>

            <?php endif; ?>

            <div class="dropdown">
                <a class="pilihbahasa btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pilih Bahasa
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Bahasa Indonesia</a>
                    <a class="dropdown-item" href="<?= base_url('tourpacketlogin/singaporelogin')?>">Bahasa Inggris</a>

                </div>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col col-lg-4">
                <img src="<?= base_url()?>/gambar/singapura.jpg" width="350" height="350"></img>
            </div>

            <div class="col col-lg-8">
                <p class="judul">Paket 3 Hari 2 Malam</p>
            </div>

            <div class="col col-lg-12">
                <p class="deskripsi">Meskipun negaranya kecil, Singapura menawarkan suatu pengalaman 
                yang belum pernah dirasakan oleh turis mancanegara. Jadi, Let's Come to Singapore</p>
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
                            <td>GMT +8</td>
                            <td>Dollar Singapura (SGD)</td>
                            <td>Bahasa Inggris <br>
                            Bahasa Melayu <br>
                            Bahasa Mandarin <br>
                            Bahasa Tamil</td>
                        </tr>
                    </tbody>
                </table>

                <div class="col">
                    <p class="poin">Tempat Yang Dikunjungi : </p>
                    <p class="isi">1. Merlion Park <br>
                    2. Universal Studio Singapura <br>
                    3. Pulau Sentosa
                    </p>
                </div>
                <div class="col">
                    <p class="poin">Harga Paket Tour Ini : </p>
                    <p class="isi">USD$ 210 (Termasuk Tiket Pesawat dan Penginapan)</p>
                </div>
            </div>

            

            <a href="<?= base_url('home/pilihanmasuk')?>"><i class="fas fa-arrow-circle-left fa-3x">
            </i></a>
            <a href="<?= base_url('home/pilihanmasuk')?>"><font class="kiri">Kembali Ke Halaman Pilihan</font></a>
            <a href="<?= base_url('home/pemesananmasuk')?>"<font class="kanan">Ke Halaman Pemesanan</font></a>
            <a href="<?= base_url('home/pemesananmasuk')?>"><i class="fas fa-arrow-circle-right fa-3x">
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>

</html>