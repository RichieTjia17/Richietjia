<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <title>Home</title>
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
            margin-right:14%;
            font-size:24px;
            font-family:arial;
            margin-top:10px;
            color: royalblue;
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
            <a href="<?= base_url('homes');?>"><img src="gambar/logo.jpg" width="255" height="55"></img></a>

            <marquee scrollamount="8"><p class="moto">Your Satisfaction is Our Pride</p></marquee>
            <ul class="navbar-nav mt-2 mt-lg-0">
                <a href="<?= base_url('author'); ?>"><button class="masuk btn btn-success btn-outline-dark my-2 my-sm-0">Login</button></a>
                <a href="<?= base_url('auth/register'); ?>"><button class="daftar btn btn-success btn-outline-dark my-2 my-sm-0">Register</button></a>
                <div class="dropdown">
                    <a class="pilihbahasa btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Choose Language
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="<?= base_url();?>">Indonesian</a>
                        <a class="dropdown-item" href="#">English</a>

                    </div>
                </div>
        </div>
    </nav>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url();?>/gambar/ad1.jpg" class="d-block w-100" width="400px" height="400px">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>/gambar/ad2.jpg" class="d-block w-100" width="400px" height="400px">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>/gambar/ad3.jpg" class="d-block w-100" width="400px" height="400px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <p class="intro">Welcome to Website <font style="color:#84FF09;">Karika Tour</font>
    </p>
    <p class="penjelasan">Website that help you to find a comfortable and easier tour destination</p>

    <p class="silakan">Please Click the Menu button on top left to explore the website further</p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>