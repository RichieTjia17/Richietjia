<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>/fontawesome/css/all.css">


    <title>Choice</title>

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
            margin-right:11%;
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
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" onmouseover='color:red;'>

                    <li class="nav-item active">
                        <a class="menu nav-link" href="<?= base_url('homes');?>">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('homes/choicelogin'); ?>">Choice</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('homes/bookinglogin'); ?>">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('auth/history1'); ?>">Booking History</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('homes/aboutuslogin'); ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('homes/contactuslogin'); ?>">Contact Us</a>
                    </li>
                </div>
            </div>
            &nbsp;&nbsp;
            <a href="<?= base_url('homes');?>"><img src="<?= base_url();?>gambar/logo.jpg" width="255" height="55"></img></a>

            <marquee scrollamount="8" width="46%"><p class="moto">Your Satisfaction is Our Pride</p></marquee>
            <?php if (session_status() ===  PHP_SESSION_NONE) : ?>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <a href="<?= base_url('author'); ?>"><button class="masuk btn btn-success btn-outline-dark my-2 my-sm-0">Log In</button></a>
                    <a href="<?= base_url('auth/register'); ?>"><button class="daftar btn btn-success btn-outline-dark my-2 my-sm-0">Register</button></a>
                </ul>
            <?php else : ?>
                <ul class="navbar-nav mt-4 mt-lg-0 mr-2">
                    <a>Welcome, <?= $user['nama_depan']; ?></a>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <a href="<?= base_url('auth/logout'); ?>"><button class="masuk btn btn-success btn-outline-dark my-2 my-sm-0">Log Out</button></a>
                </ul>

            <?php endif; ?>


            <div class="dropdown">
                <a class="pilihbahasa btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Choose Language
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('home/pilihanmasuk');?>">Indonesian</a>
                    <a class="dropdown-item" href="#">English</a>

                </div>
            </div>
        </div>
    </nav>

    <?php 
		$desti = "";
        
        if (isset($_POST['search'])) {
            $desti = $_POST['desti'];
            
        }
	?>
    <p class="silakan">Please Choose The Tour Paket here</p>
    <p class="gunakan">You can use the Filter Assistance to help you </p>

    <div class="container">
    <form method="POST" action ="">
        <div class="row">
         <div class="col col-lg">
         <div class="form-group">
		    <select name="desti" id="desti" class="form-control">
            <option value="">Choose Tour Packet</option>
		        <option value="Indonesia" <?php if ($desti=="Indonesia"){ echo "selected"; } ?>>--- Indonesia ---</option>
		        <option value="Bali" <?php if ($desti=="Bali"){ echo "selected"; } ?>>Bali</option>
                <option value="North Sumatra" <?php if ($desti=="North Sumatra"){ echo "selected"; } ?>>North Sumatra</option>
                <option value="West Nusa Tenggara" <?php if ($desti=="West Nusa Tenggara"){ echo "selected"; } ?>>West Nusa Tenggara</option>
                <option value="Papua" <?php if ($desti=="Papua"){ echo "selected"; } ?>>Papua</option>
                <option value="North Sulawesi" <?php if ($desti=="North Sulawesi"){ echo "selected"; } ?>>North Sulawesi</option>
                <option value="International">--- International ---</option>
                <option value="Japan" <?php if ($desti=="Japan"){ echo "selected"; } ?>>Japan</option>
                <option value="South Korea" <?php if ($desti=="South Korea"){ echo "selected"; } ?>>South Korea</option>
                <option value="Malaysia" <?php if ($desti=="Malaysia"){ echo "selected"; } ?>>Malaysia</option>
                <option value="Singapore" <?php if ($desti=="Singapore"){ echo "selected"; } ?>>Singapore</option>
                <option value="China" <?php if ($desti=="China"){ echo "selected"; } ?>>China</option>
                <option value="United Kingdom" <?php if ($desti=="United Kingdom"){ echo "selected"; } ?>>United Kingdom</option>
                <option value="France" <?php if ($desti=="France"){ echo "selected"; } ?>>France</option>
		    </select>
        </div>
		</div>
        <div class="col col-lg" >
		        <button id="search" name="search" class="btn btn-success">Search</button>
		</div>
        </div>
    </form>
    </div>

    <?php
                include 'koneksi.php';
                $des = '%'. $desti .'%';
                
	            $query = "SELECT * FROM destination WHERE country LIKE ?";
	            $desti1 = $db1->prepare($query);
	            $desti1->bind_param('s', $des);
	            $desti1->execute();
	            $res1 = $desti1->get_result();
 
	            if ($res1->num_rows > 0) {
	                while ($row = $res1->fetch_assoc()) {
	                    $id = $row['id'];
	                    $name = $row['packet_name'];
                        $country = $row['country'];
                        $source = $row['source'];
                        $pagebeforelogin = $row['pagebeforelogin'];
                        $pageafterlogin = $row['pageafterlogin'];

    ?>
    <div class="container">
    <div class="row">
        <div class="col col-lg-4">
    <div class="card" style="width:45rem;">
        <div class="card-body">
            <a href="<?= base_url()?>tourpacketlogin/<?= $pageafterlogin;?>">
            <img src="<?= base_url();?>/gambar/<?= $source;?>" width="200px" height="200px"></img></a>
            <a class="paket" href="<?= base_url()?>tourpacketlogin/<?= $pageafterlogin;?>">
            <font class="info"><?= $name;?></font></a>
            
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