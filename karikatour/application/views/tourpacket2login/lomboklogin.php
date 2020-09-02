<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>/fontawesome/css/all.css">

    <title>Lombok 3 Days 2 Nights</title>

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
            margin-right:11%;
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
            margin-left:50%
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

    <div class="container">
        <div class="row">
            <div class="col col-lg-4">
                <img src="<?= base_url()?>/gambar/lombok.jpg" width="350" height="350"></img>
            </div>

            <div class="col col-lg-8">
                <p class="judul">3 Days 2 Nights Packet</p>
            </div>

            <div class="col col-lg-12">
                <p class="deskripsi">Adjacent to the island of Bali, this one island is also dear for
                 You to miss its natural beauty</p>
            </div>

            <div class="col col-lg-12">
                <table class="table table-bordered" style="text-align:center;">
                    <thead class="table-success">
                        <th>Time</th>
                        <th>Currency</th>
                        <th>Language</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GMT +8</td>
                            <td>Rupiah (IDR)</td>
                            <td>Indonesian</td>
                        </tr>
                    </tbody>
                </table>

                <div class="col">
                    <p class="poin">Places that visited : </p>
                    <p class="isi">1. Gili Trawangan <br>
                    2. Gili Island <br>
                    3. Sendang Gile Waterfall
                    </p>
                </div>
                <div class="col">
                    <p class="poin">Price of this tour packet : </p>
                    <p class="isi">USD$ 220 (Including Flight and Accomodation)</p>
                </div>
            </div>

            

            <a href="<?= base_url('homes/choicelogin')?>"><i class="fas fa-arrow-circle-left fa-3x">
            </i></a>
            <a href="<?= base_url('homes/choicelogin')?>"><font class="kiri">Back to Choice Page</font></a>
            <a href="<?= base_url('homes/bookinglogin')?>"<font class="kanan">To Booking Page</font></a>
            <a href="<?= base_url('homes/bookinglogin')?>"><i class="fas fa-arrow-circle-right fa-3x">
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