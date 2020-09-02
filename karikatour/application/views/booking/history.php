<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>/fontawesome/css/all.css">

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

        .pilihbahasa {
            margin-right: 8px;
        }

        .intro {
            text-align: center;
            font-size: 24px;
            font-family: arial;
        }

        .moto{
            margin-left:11%;
            margin-right:11%;
            font-size:24px;
            font-family:arial;
            margin-top:10px;
            color: royalblue;
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

        .riwayat {
            font-size: 48px;
            color: #ffc107;
            margin-top: 5%;
            margin-left: 5%;
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
                        <a class="menu nav-link" href="<?= base_url('homes');?>">Beranda <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('homes/choicelogin'); ?>">Choice</a>
                    </li>
                    <li class="nav-item">
                        <a class="menu nav-link" href="<?= base_url('homes/bookinglogin'); ?>">Booking</a>
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
            <a href="<?= base_url('homes');?>"><img src="<?= base_url(); ?>/gambar/logo.jpg" width="255" height="55"></img></a>

            <marquee scrollamount="8" width="46%"><p class="moto">Your Satisfaction is Our Pride</p></marquee>
            <?php if (session_status() ===  PHP_SESSION_NONE) : ?>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <a href="<?= base_url('author'); ?>"><button class="masuk btn btn-success btn-outline-dark my-2 my-sm-0">Login</button></a>
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
                    <a class="dropdown-item" href="<?= base_url('auth/history');?>">Indonesian</a>
                    <a class="dropdown-item" href="#">English</a>

                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();  ?>
            </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message');  ?>

        <p class="riwayat">Booking History</p>

        <table class="table table-bordered" style="text-align:center;">
            <thead class="table-warning">
                <th>Number</th>
                <th>Packet Name</th>
                <th>Picture</th>
                <th>Price</th>
                <th></th>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($paketan as $pak) :  ?>
                <tbody>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $pak['packet_name']; ?></td>
                        <td><img src="<?= base_url()?>/gambar/<?= $pak['source']; ?>" width="200"
                        height="200"></img></td>
                        <td><?= $pak['price']; ?> $</td>
                        <td>
                            <a href="" class="badge badge-pill badge-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="<?= $pak['packet_name'];  ?>" data-whatever1="<?= $pak['pesanan_id']; ?>">Edit</a>
                            <a href="<?= base_url('auth/deleteHistory1/' . $pak['pesanan_id']);  ?>" class="badge badge-pill badge-danger">Delete</a>

                        </td>
                    </tr>
                </tbody>
                <?php $i++;  ?>


            <?php endforeach;  ?>
        </table>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>

<!---Modal edit  -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Packet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php foreach ($noPesanan as $np) : ?>
            <?php endforeach; ?>
            <form method="POST" action="<?= base_url('Auth/history1');  ?>">
                <div class="modal-body01">
                    <div class="form-group">
                        <input type="text" class="form-control" id="pesanan_id" name="pesanan_id" value="<?= $np['pesanan_id']; ?>" hidden>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Previous Packet</label>
                        <input type="text" class="form-control" id="aa">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Replacement Packet</label>
                        <select class="form-control" name="menu_paket" id="menu_paket">
                            <option value="">Paket Tour</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['packet_name']; ?> </option>
                            <?php endforeach; ?>
                            <?= form_error('menu_paket', ' <small class="text-danger pl-3">', '</small>') ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Change Booking</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever')
        var noOrder = button.data('whatever1')
        // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        //modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
        modal.find('.modal-body01 input').val(noOrder)
    })
</script>