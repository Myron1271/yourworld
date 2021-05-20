<?php

error_reporting(0);
include_once 'func/register.func.php';

if (isset($_SESSION['user']))
{
    header("location: account.php");
}
else
{
    session_destroy();
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Registreren</title>

</head>
<body>

<header id="header">
    <?php include_once 'inc/header.php'?>
</header>

<main>
    <br>
    <form class="text-center p-5 col-md-4 offset-md-4 rounded position-relative" style="background-color: #e0e0e05c" action="register.php" method="post" enctype="multipart/form-data">
        <p class="FormText mb-4">Registeren</p>
        <br>
        <div class="row">

            <div id="ErrorMessage" class="col-md-8 offset-md-2">
                <?= $_SESSION['message']?>
            </div>
            <div class="col-md-8 offset-md-2">
                <input type="text" name="Username_Register" class="form-control" placeholder="Gebruikersnaam" required>
            </div>
            <div class="col-md-8 offset-md-2" style="margin-top: 10px">
                <input type="text" name="School_Naam" class="form-control mb-4" placeholder="School Naam" required>
            </div>
            <div class="col-md-8 offset-md-2" style="margin-top: 10px">
                <input type="email" name="Email_Register" class="form-control mb-4" placeholder="Email" required>
            </div>
            <div class="col-md-8 offset-md-2" style="margin-top: 10px">
                <input type="password" name="Password_Register" class="form-control" placeholder="Wachtwoord" required>
            </div>
            <div class="col-md-8 offset-md-2" style="margin-top: 10px">
                <input type="password" name="Password_Register2" class="form-control" placeholder="Wachtwoord Herhalen" required>
            </div>
        </div>
        <button style="background-color: #3cc187; border-color: #3cc187; color: #FFF" class="btn btn-info my-4 btn-block col-md-8" type="submit" name="Submit_Registeren">Registreren</button>
    </form>
</main>

<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>
