<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>/fontawesome/css/all.css">


    <title>Contact Us</title>
    <style>
        .hubungi{
            text-align:center;
            font-size:36px;
        }

        .richie{
            font-size:28px;
        }

        .nama{
      margin-left:25px;
      margin-right:30px;
      font-size:36px;
      font-family:arial;
      color:#84FF00;
    }

    .menu{
      font-size:18px;
      font-family:arial;
      color:black;
    }

    .moto{
            margin-left:11%;
            margin-right:11%;
            font-size:24px;
            font-family:arial;
            margin-top:10px;
            color: royalblue;
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
                        <a class="menu nav-link" href="<?= base_url('homes/choicelogin');?>">Choice</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('homes/bookinglogin');?>">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('auth/history1'); ?>">Booking History</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('homes/aboutuslogin');?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('homes/contactuslogin');?>">Contact Us</a>
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
                        <a class="dropdown-item" href="<?= base_url('home/hubungikamimasuk');?>">Indonesian</a>
                        <a class="dropdown-item" href="#">English</a>

                    </div>
                </div>
        </div>
    </nav>

    <p class="hubungi">Contact The Owner</p>
    <div class="container">
        
       

    <div class="row">
      
        <div class="col col-lg-6">
          <div class="card" style="width: 18rem;">
            <img src="<?= base_url()?>/gambar/richie.jpg" class="card-img-top" width="450" height="250">
          <div class="card-body">
          <p class="card-text">Instagram : @richietjia17</p>
          <p class="card-text">Whatsapp : +62-878-5978-6498</p>
          <p class="card-text">G-mail : richietjia@gmail.com</p>
          </div>
          </div>
        </div>

        <div class="col col-lg-6">
          <div class="card" style="width: 18rem;">
          <img src="<?= base_url()?>/gambar/juan.jpg" class="card-img-top" width="450" height="250">
          <div class="card-body">
          <p class="card-text">Instagram : @juanfernandowijaya</p>
          <p class="card-text">Whatsapp : +62-819-4600-1122</p>
          <p class="card-text">G-mail : juanfernandow@yahoo.com</p>
          </div>
          </div>
        </div>
    </div>

    </div>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>