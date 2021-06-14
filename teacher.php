<?php

    include_once 'func/register.student.func.php';
    error_reporting(0);
    session_start();

    if (!isset($_SESSION['userAdmin']))
    {
        header("location: teacherlogin.php");
    }
    if (isset($_SESSION['userStudent']))
    {
        header("location: student.php");
    }

?>

<!doctype html>
<html lang="en">
<head>

    <!-- Favicons -->
    <link href="assets/img/faviconlearnit.jpg" rel="icon">
    <link href="assets/img/learnit.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Inloggen</title>

</head>

<body>

<!--HEADER-->
<header id="header">
    <?php include_once 'inc/header.php' ?>
</header>

<main>
    <div class="container">
        <div class="row">
            <div style="text-align: center" class="col-xs-12">
                <h1 style="margin-top: 10px;">Welkom Terug!</h1>
                <h2 style="color: #3cc187; margin-top: -14px;" class="user"><?= $_SESSION['userAdmin']?></h2>
            </div>
            <div class="col-md-5">
                <form class="text-center col-md-12 rounded position-relative" style="background-color: #0000001f; height: 97%;" action="teacher.php" method="post" enctype="multipart/form-data">
                    <p style="color: #444444" class="FormText">Registreer leerlingen hier</p>
                    <div class="row">

                        <?php foreach($_SESSION['messages'] as $message): ?><
                            <div class="alert alert-danger col-md-8">
                                <?= $message ?>
                            </div>
                        <?php endforeach; ?>

                        <div class="col-md-12">
                            <input type="text" name="Username_Register" class="form-control" placeholder="Naam" required>
                        </div>
                        <div class="col-md-12" style="margin-top: 10px">
                            <input type="text" name="School_Naam" class="form-control" placeholder="Klasnaam" required>
                        </div>
                        <div class="col-md-12" style="margin-top: 10px">
                            <input type="email" name="Email_Register" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-md-12" style="margin-top: 10px">
                            <input type="password" name="Password_Register" class="form-control" placeholder="Wachtwoord" required>
                        </div>
                        <div class="col-md-12" style="margin-top: 10px">
                            <input type="password" name="Password_Register2" class="form-control" placeholder="Wachtwoord herhalen" required>
                        </div>
                    </div>
                    <button style="background-color: #3cc187; border-color: #3cc187; color: #FFF" class="btn btn-info my-4 btn-block col-md-12" type="submit" name="Submit_Registeren">Registreren</button>
                </form>
            </div>
            <div class="col-md-4 offset-3">
                <button style="background-color: #3cc187; border-color: #3cc187; color: #FFF" class="btn btn-info my-4 btn-block col-md-12" type="submit" name="Submit_Registeren">Bekijk hier alle klassen</button>
            </div>
        </div>
    </div>
</main>

<!-- Vendor JS Files -->
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