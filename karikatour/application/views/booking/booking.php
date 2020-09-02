<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>/fontawesome/css/all.css">

    <title><?= $title;?></title>

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

        .moto{
            margin-left:11%;
            margin-right:11%;
            font-size:24px;
            font-family:arial;
            margin-top:10px;
            color: royalblue;
        }

        .masuk1 {

            margin-left: 48%;
        }

        .daftar1 {
            margin-left: 48%;

        }

        .atau {
            text-align: center;
            font-size: 40px;
            font-family: arial;
            font-weight: bold;
            color: turquoise;
            margin-top: 1%;
            margin-bottom: 1%;
        }

        .pilihbahasa {
            margin-right: 8px;
        }

        .pesan {
            font-size: 24px;
            text-align: center;
            color: darkorange;
            margin-top: 5%;
        }

        .pesan1 {
            font-size: 24px;
            text-align: center;
            color: darkorange;
            margin-top: 5%;
            margin-bottom: 3%;
        }
    </style>

  </head>
  <body style="background-color:#26F6BA;">
    
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
                    <a class="dropdown-item" href="<?= base_url('home/pemesananmasuk');?>">Indonesian</a>
                    <a class="dropdown-item" href="#">English</a>

                </div>
            </div>
        </div>
    </nav>

    <?= $this->session->flashdata('message');  ?>
    <div class="container">
        <p class="pesan">Please Order the Tour Package of Your Choice Here <br> If you are still in doubt or confused about the Tour Package
             of your choice, you can see the available Tour Package options via the menu button in the upper left corner
             nor the button below.</p>
        <center><i class="fas fa-arrow-down fa-5x"></i></center>
        <center><a href="<?= base_url('homes/choicelogin'); ?>"><button class="btn btn-success btn-outline-dark my-2 my-sm-0">Click Here</button></a></center>
        <p class="pesan1">If you are sure about your choice, please fill in the following requirements</p>

        <form method="POST" action="<?= base_url('homes/bookinglogin/') . $user['id']; ?>">
            <div class="form-group">
                <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="<?= $user['nama_depan']; ?> <?= $user['nama_belakang']; ?>" readonly>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="id_user" name="id_user" placeholder="<?= $user['nama_depan']; ?> <?= $user['nama_belakang']; ?> v " value="<?= $user['id']; ?>" hidden>
            </div>
            <div class="form-group">
                <select class="form-control" name="menu_paket" id="menu_paket">
                    <option value="">Tour Packet</option>
                    <?php foreach ($menu as $m) : ?>
                        <option value="<?= $m['id']; ?>"><?= $m['packet_name']; ?> </option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('menu_paket', ' <small class="text-danger pl-3">', '</small>') ?>
            </div>


            <br>
            <div class=" form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user['email']; ?> " readonly>
                <?= form_error('email', ' <small class="text-danger pl-3">', '</small>') ?>
            </div>

            <div class="form-group">
                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Password" value="<?= set_value('password1') ?>">
                <?= form_error('password2', ' <small class="text-danger pl-3">', '</small>') ?>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="centang" name="centang">
                <?= form_error('centang', ' <small class="text-danger pl-3">', '</small>') ?>
                <label class="form-check-label" for="syarat">I accept the terms and condition</label>
            </div>

            <button type="submit" class="btn btn-primary">Pesan</button>


        </form>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>