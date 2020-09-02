<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>/fontawesome/css/all.css">


    <title>Pilihan</title>

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
            margin-left:11%;
            margin-right:8%;
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
                        <a class="menu nav-link" href="<?= base_url('home/pilihan')?>">Pilihan</a>
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
                    <a class="dropdown-item" href="<?= base_url('homes/choice');?>">Bahasa Inggris</a>

                </div>
            </div>
        </div>
    </nav>
    <?php 
		$desti = "";
        
        if (isset($_POST['cari'])) {
            $desti = $_POST['desti'];
            
        }
	?>
    <p class="silakan">Silakan Pilih Paket Tour Kami Di Bawah Ini</p>
    <p class="gunakan">Gunakan Bantuan Filter di bawah ini untuk mempermudah Anda </p>

    <div class="container">
    <form method="POST" action ="">
        <div class="row">
         <div class="col col-lg">
         <div class="form-group">
		    <select name="desti" id="desti" class="form-control">
            <option value="">Pilih Paket Tour</option>
		        <option value="Indonesia" <?php if ($desti=="Indonesia"){ echo "selected"; } ?>>--- Indonesia ---</option>
		        <option value="Bali" <?php if ($desti=="Bali"){ echo "selected"; } ?>>Bali</option>
                <option value="Sumatera Utara" <?php if ($desti=="Sumatera Utara"){ echo "selected"; } ?>>Sumatera Utara</option>
                <option value="Nusa Tenggara Barat" <?php if ($desti=="Nusa Tenggara Barat"){ echo "selected"; } ?>>Nusa Tenggara Barat</option>
                <option value="Papua" <?php if ($desti=="Papua"){ echo "selected"; } ?>>Papua</option>
                <option value="Sulawesi Utara" <?php if ($desti=="Sulawesi Utara"){ echo "selected"; } ?>>Sulawesi Utara</option>
                <option value="mancanegara">--- Mancanegara ---</option>
                <option value="Jepang" <?php if ($desti=="Jepang"){ echo "selected"; } ?>>Jepang</option>
                <option value="Korea Selatan" <?php if ($desti=="Korea Selatan"){ echo "selected"; } ?>>Korea Selatan</option>
                <option value="Malaysia" <?php if ($desti=="Malaysia"){ echo "selected"; } ?>>Malaysia</option>
                <option value="Singapura" <?php if ($desti=="Singapura"){ echo "selected"; } ?>>Singapura</option>
                <option value="China" <?php if ($desti=="China"){ echo "selected"; } ?>>China</option>
                <option value="Inggris" <?php if ($desti=="Inggris"){ echo "selected"; } ?>>Inggris</option>
                <option value="Perancis" <?php if ($desti=="Perancis"){ echo "selected"; } ?>>Perancis</option>
		    </select>
        </div>
		</div>
        <div class="col col-lg" >
		        <button id="cari" name="cari" class="btn btn-success">Cari</button>
		</div>
        </div>
    </form>
    </div>

    <?php
                include 'koneksi.php';
                $des = '%'. $desti .'%';
                
	            $query = "SELECT * FROM destinasi WHERE negara LIKE ?";
	            $desti1 = $db1->prepare($query);
	            $desti1->bind_param('s', $des);
	            $desti1->execute();
	            $res1 = $desti1->get_result();
 
	            if ($res1->num_rows > 0) {
	                while ($row = $res1->fetch_assoc()) {
	                    $id = $row['id'];
	                    $nama = $row['nama_paket'];
                        $negara = $row['negara'];
                        $gambar = $row['gambar'];
                        $lamantanpalogin = $row['lamantanpalogin'];
                        $lamansetelahlogin = $row['lamansetelahlogin'];

    ?>
    <div class="container">
    <div class="row">
        <div class="col col-lg-4">
    <div class="card" style="width:45rem;">
        <div class="card-body">
            <a href="<?= base_url()?>pakettour/<?= $lamantanpalogin;?>">
            <img src="<?= base_url();?>/gambar/<?= $gambar;?>" width="200px" height="200px"></img></a>
            <a class="paket" href="<?= base_url()?>pakettour/<?= $lamantanpalogin;?>">
            <font class="info"><?= $nama;?></font></a>
            
        </div>
        
    </div>
        </div>
    </div>
    </div>

    <?php 
                    }}
    ?>


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>

</html>