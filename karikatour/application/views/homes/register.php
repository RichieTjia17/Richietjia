<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title><?= $title;?></title>

    <style>
        .daftarkan {
            font-size: 36px;
            font-family: arial;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body style="background-color:#ffc107;">
    <div class="container">
        <p class="daftarkan">Register Your Account Now</p>
        <br>
        <form method="POST" action="<?= base_url('auth/register'); ?>">
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="first_name" name="first_name" placeholder="First Name" value="<?= set_value('first_name') ?>">
                <?= form_error('first_name', ' <small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="last_name" name="last_name" placeholder="Last Name" value="<?= set_value('last_name') ?>">
                <?= form_error('last_name', ' <small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <input type="date" class="form-control form-control-user" id="dateofbirth" name="dateofbirth" placeholder="Date of Birth" value="<?= set_value('dateofbirth') ?>">
                <?= form_error('dateofbirth', ' <small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="nickname" name="nickname" placeholder="Nickname" value="<?= set_value('nickname') ?>">
                <?= form_error('nickname', ' <small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email') ?>">
                <?= form_error('email', ' <small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Password" value="<?= set_value('password2') ?>">
                <?= form_error('password2', ' <small class="text-danger pl-3">', '</small>') ?>
            </div>


            <br><br>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>

</html>