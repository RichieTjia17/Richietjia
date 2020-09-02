<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title><?= $title; ?></title>
    <style>
        form {
            margin-left: 25%;
        }

        .login {
            text-align: center;
            font-size: 32px;
            font-family: Arial;
            margin-bottom: 5%;
        }

        button {
            margin-top: 5%;

        }
    </style>
</head>

<body style="background-color: #ffc007;">
    <div class="container">

        <p class="login">Login Here</p>
        <?= $this->session->flashdata('message'); ?>
        <form class="login" method="POST" action="<?= base_url('author'); ?>">
            <div class="form-row">
                <div class="form-group col-lg-8">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                    <?= form_error('email', ' <small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group col-lg-8">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    <?= form_error('password', ' <small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="col col-lg-8">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
                <div class="col col-lg-8">
                    <a class="small" href="<?= base_url('auth/registration'); ?>">Create Account</a>
                </div>
            </div>

        </form>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>