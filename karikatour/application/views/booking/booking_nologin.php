<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>/fontawesome/css/all.css">

    <title>Booking No Login</title>

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

        .masuk1 {
            
            margin-left:48%;
        }

        .daftar1 {
            margin-left: 48%;
            
        }

        .atau{
            text-align:center;
            font-size:40px;
            font-family:arial;
            font-weight:bold;
            color:turquoise;
            margin-top:1%;
            margin-bottom:1%;
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

        .moto{
            margin-left:11%;
            margin-right:14%;
            font-size:24px;
            font-family:arial;
            margin-top:10px;
            color: royalblue;
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

        .peringatan{
            font-size:48px;
            font-family:arial;
            color:firebrick;
            text-align:center; 
        }

        .pemberitahuan{
            font-size:28px;
            font-family:arial;
            color:yellowgreen;
            text-align:center; 
        }

        .panduan{
            font-size:28px;
            font-family:arial;
            color:limegreen;
            text-align:center;
        }
    </style>

  </head>
  <body >
    
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
                        <a class="menu nav-link" href="<?= base_url('homes/choice');?>">Choice</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('homes/booking');?>">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('homes/aboutus');?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('homes/contactus');?>">Contact Us</a>
                    </li>
                </div>
            </div>
            &nbsp;&nbsp;
            <a href="<?= base_url('homes');?>"><img src="<?= base_url();?>gambar/logo.jpg" width="255" height="55"></img></a>

            <marquee scrollamount="8"><p class="moto">Your Satisfaction is Our Pride</p></marquee>
            <ul class="navbar-nav mt-2 mt-lg-0">
                <a href="<?= base_url('author'); ?>"><button class="masuk btn btn-success btn-outline-dark my-2 my-sm-0">Login</button></a>
                <a href="<?= base_url('auth/register'); ?>"><button class="daftar btn btn-success btn-outline-dark my-2 my-sm-0">Register</button></a>
                <div class="dropdown">
                    <a class="pilihbahasa btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Choose Language
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="<?= base_url('home/pemesanan');?>">Indonesian</a>
                        <a class="dropdown-item" href="#">English</a>

                    </div>
                </div>
        </div>
    </nav>

    <p class="peringatan">Sorry about the inconvenience</p>
    <p class="pemberitahuan">To book a tour packet, you should register your account first or login if you already
    have an account in this website</p>
    <p class="panduan">You can clik the <b>Log In</b> or <b>Register</b> button on top right of this
    website or below</p>
    
    <a href="<?= base_url('author'); ?>"><button class="masuk1 btn btn-success btn-outline-dark  my-sm-0">Log In</button></a>
    <p class="atau">Or</p>
    <a href="<?= base_url('auth/register'); ?>"><button class="daftar1 btn btn-success btn-outline-dark my-sm-0">Register</button></a>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>