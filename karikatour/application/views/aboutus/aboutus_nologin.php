<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>/fontawesome/css/all.css">

    <title>About Us</title>
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

    .menu{
      font-size:18px;
      font-family:arial;
      color:black;
    }

    .moto{
            margin-left:11%;
            margin-right:14%;
            font-size:24px;
            font-family:arial;
            margin-top:10px;
            color: royalblue;
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
                        <a class="dropdown-item" href="<?= base_url('home/tentangkami');?>">Indonesian</a>
                        <a class="dropdown-item" href="#">English</a>

                    </div>
                </div>
        </div>
    </nav>

    <p class="judul">About <font style="color:#84FF09;">Karika Tour</font></p>

    <p class="penjelasan">Karika Tour is a Website that is created to help the user to find a tour packet
    whether in Indonesia or International</p>

    <p class="informasi">Information about Karikatour</p>

    <div class="container"> 
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          What is provided by the Karikatour Website ?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Karikatour Website provide an easier access for the user to find tour packet that they want
        and also the various destination whether in Indonesia or International.
        
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          How about the price that is provided by the Karikatour ?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        The price that is provided by Karikatour is based on the price of the airline ticket, accomodation,
        also a cost that is required in certain place.
        
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          How about the document for the travel that i would do ?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        The price that is on the choice page is a joint price from the airline ticket, accomodation also a 
        document handling like visa for a country that enact visitor visas to their countries.
        
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