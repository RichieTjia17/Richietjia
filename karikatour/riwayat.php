<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>/fontawesome/css/all.css">

    <title>Beranda</title>
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

        .intro {
            text-align: center;
            font-size: 24px;
            font-family: arial;
        }

        .penjelasan {
            text-align: center;
            font-size: 20px;
            font-family: arial;
        }

        .silakan {
            text-align: center;
            font-size: 20px;
            font-family: arial;
            color: green;
        }

        .riwayat{
            font-size:48px;
            color:#ffc107;
            margin-top:5%;
            margin-left:5%;
        }
    </style>
</head>

<body style="background-color:MEDIUMSEAGREEN;">

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
                        <a class="menu nav-link" href="<?= base_url('home/pemesananmasuk');?>">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('home/tentangkamimasuk');?>">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('home/hubungikamimasuk');?>">Hubungi Kami</a>
                    </li>
                </div>
            </div>
            &nbsp;&nbsp;
            <a href="#"><img src="<?= base_url();?>/gambar/logo.jpg" width="255" height="55"></img></a>

            <form class="form-inline my-2 my-lg-0 ml-auto mr-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
                <button class="btn btn-success btn-outline-succes my-2 my-sm-0" type="submit">Cari</button>
            </form>
            <?php if (session_status() ===  PHP_SESSION_NONE) : ?>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <a href="<?= base_url('auth'); ?>"><button class="masuk btn btn-success btn-outline-dark my-2 my-sm-0">Masuk</button></a>
                    <a href="<?= base_url('auth/daftar'); ?>"><button class="daftar btn btn-success btn-outline-dark my-2 my-sm-0">Daftar</button></a>
                </ul>
            <?php else : ?>
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
                    <a class="dropdown-item" href="#">Bahasa Inggris</a>

                </div>
            </div>
        </div>
    </nav>

    <div class="container">

    <p class="riwayat">Riwayat Pemesanan</p>

    <table class="table table-bordered" style="text-align:center;">
        <thead class="table-warning">
            <th>Nomor</th>
            <th>Nama Pembeli</th>
            <th>Pilihan Paket</th>
            <th>Nama Paket</th>
            <th>Gambar</th>
            <th>Harga Paket (USD)</th>
            <th>Jumlah yang Dibeli</th>
            <th>Harga Total (USD)</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Juan</td>
                <td>1</td>
                <td>Jepang 8 Hari 7 Malam</td>
                <td><img src="jepang.jpg"></img></td>
                <td>$ 560</td>
                <td>2</td>
                <td>$ 1120</td>
            </tr>
        </tbody>
    </table>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>