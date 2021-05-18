<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>YourWorld</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Animate.Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

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
</head>

<body>

<header id="header">
    <?php include_once 'inc/header.php'?>
</header>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
                <h1>YourWorld, your life.</h1>
                <h2 style="margin-left: 6px">Wij vinden het belangrijk om op jonge leeftijd al bewustzijn te creeëren.
                    We willen kinderen en jongeren stimuleren om verstandig met hun geld om te gaan,
                    en tegelijkertijd iets goeds te doen voor het klimaat.</h2>
                <a href="#pricing" class="btn-get-started scrollto">Aan de slag!</a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                <img id="mainlogo" src="assets/img/hero-img.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">
            <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <a href="https://pvanhorne.nl/" target="_blank">
                        <img style="width: 80%; height: 80%" src="assets/img/clients/pvhlogo.svg" class="img-fluid" alt="" data-aos="flip-right"></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <a  href="https://www.ogvo.nl/valuascollege/" target="_blank">
                            <img style="width: 100%; height: 100%" src="assets/img/clients/valuascollegelogo.png" class="img-fluid" alt="" data-aos="flip-right"></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <a  href="https://theresialyceum.nl/" target="_blank">
                            <img style="width: 100%; height: 100%" src="assets/img/clients/theresialyceumlogo.png" class="img-fluid" alt="" data-aos="flip-right"></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <a  href="http://helenpark.nl/" target="_blank">
                            <img style="width: 80%; height: 80%" src="assets/img/clients/helenparkhurstlogo.png" class="img-fluid" alt="" data-aos="flip-right"></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <a  href="https://fontys.nl/Studeren/Opleidingen/HBO-ICT.htm" target="_blank">
                            <img style="width: 70%; height: 70%" src="assets/img/clients/fontysictlogo.png" class="img-fluid" alt="" data-aos="flip-right"></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <a  href="https://dacapokijktnaarmij.nl/" target="_blank">
                            <img style="width: 100%; height: 100%" src="assets/img/clients/dacapo-logo.png" class="img-fluid" alt="" data-aos="flip-right"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-in">Pricing</h2>
                <p data-aos="fade-in">Vibe jij niet zo met onze prijzen? Laat het ons dan gerust weten!</p>
            </div>

            <div class="row no-gutters">

                <div class="col-lg-4 box" data-aos="zoom-in">
                    <h3>Student</h3>
                    <h4>€0<span>per maand</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Een account voor één persoon</li>
                        <li><i class="bx bx-check"></i> Zelfstandig leren om verantwoordelijk met je geld om te gaan </li>
                        <li><i class="bx bx-check"></i> Te gebruiken op maximaal één apparaat</li>
                        <br><br><br>
                    </ul>
                    <a href="#" class="get-started-btn">Get Started</a>
                </div>

                <div class="col-lg-4 box featured" data-aos="zoom-in">
                    <span class="featured-badge">Featured</span>
                    <h3>Standaard onderwijspakket</h3>
                    <h4>€15<span>per maand</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Studentenaccounts voor een hele klas tot en met 35 personen</li>
                        <li><i class="bx bx-check"></i> In groepsverband leren om verantwoordelijk met je geld om te gaan</li>
                        <li><i class="bx bx-check"></i> Te gebruiken op maximaal 5 verschillende apparaten</li>
                        <li><i class="bx bx-check"></i> Een docentenaccount als klassebeheerder</li>
                    </ul>
                    <a href="#" class="get-started-btn">Get Started</a>
                </div>

                <div class="col-lg-4 box" data-aos="zoom-in">
                    <h3>Voortgezet onderwijspakket</h3>
                    <h4>€30<span>per maand</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Studentenaccounts voor meerdere klassen tot en met 175 personen </li>
                        <li><i class="bx bx-check"></i> In groepsverband leren om verantwoordelijk met je geld om te gaan</li>
                        <li><i class="bx bx-check"></i> Te gebruiken op maximaal 5 verschillende apparaten </li>
                        <li><i class="bx bx-check"></i> 5 docenten accounts als klassenbeheerder</li>
                    </ul>
                    <a href="#" class="get-started-btn">Get Started</a>
                </div>

            </div>

        </div>
    </section>

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-in">Veelgestelde vragen</h2>
            </div>

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
                <div class="col-lg-5">
                    <i class="bx bx-help-circle"></i>
                    <h4>Kan ik ook spelen zonder account?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Nee. Een account wordt gebruikt om jouw data te versturen tussen verschillende apparaten.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-5">
                    <i class="bx bx-help-circle"></i>
                    <h4>Hoe wordt mijn bestelling geleverd?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Nadat je een studentenaccount hebt aangemaakt kun je inloggen in de game. Wanneer je een docentenaccount hebt aangemaakt, zullen er activatiecodes voor het aantal bestelde accounts naar je gemaild worden.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-5">
                    <i class="bx bx-help-circle"></i>
                    <h4>Hoeveel mensen kan ik toevoegen aan mijn klas?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Bij aankoop van een standaard onderwijspakket krijg je 35 verschillende studentenaccounts. In dit geval kun je dus maximaal 35 verschillende studenten toevoegen aan je klas.
                    </p>
                    <p>
                        Bij aankoop van een voortgezet onderwijspakket krijg je 175 verschillende studentenaccounts.In dit geval kun je dus maximaal 125 verschillende studenten toevoegen aan 5 verschillende klassen.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-5">
                    <i class="bx bx-help-circle"></i>
                    <h4>Kan ik mijn aankoop refunden?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Nee, dat kan helaas niet. Doordat je alle accounts al in je email hebt ontvangen is het niet mogelijk om te refunden.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">
            <div class="row">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
                    <div class="content d-flex flex-column justify-content-center">
                        <h3 data-aos="fade-in" data-aos-delay="100">Over ons</h3>
                        <p data-aos="fade-in">
                            Wij zijn een gepassioneerd team van HBO-ICT studenten met als missie om de wereld op een positieve manier te veranderen.
                        </p>
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="bx bx-receipt"></i>
                                <h4><a href="#">Corporis voluptates sit</a></h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-cube-alt"></i>
                                <h4><a href="#">Ullamco laboris nisi</a></h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-images"></i>
                                <h4><a href="#">Labore consequatur</a></h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-shield"></i>
                                <h4><a href="#">Beatae veritatis</a></h4>
                                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-in">Team</h2>
                <p data-aos="fade-in">Ontmoet de gezichten achter onze innovatie, maak kennis met ons team!</p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up">
                        <div class="pic"><img src="assets/img/team/fotomyron.png" alt=""></div>
                        <h4>Myron Seelen</h4>
                        <span>Media Designer</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="pic"><img src="assets/img/team/fotomette.png" alt=""></div>
                        <h4>Mette Ghijsen</h4>
                        <span>Media Designer</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="pic"><img src="assets/img/team/team-3.jpg" alt=""></div>
                        <h4>Cas Esselink</h4>
                        <span>Software Developer</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="pic"><img src="assets/img/team/team-4.jpg" alt=""></div>
                        <h4>Toby Melskens</h4>
                        <span>Software Developer</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="pic"><img src="assets/img/team/fotojulian.png" alt=""></div>
                        <h4>Julian Janssen</h4>
                        <span>Software Developer</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="pic"><img src="assets/img/team/fototeddy.png" alt=""></div>
                        <h4>Teddy Kuijs</h4>
                        <span>Server and Securiy Developer</span>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p> Heb je vragen, of wil je meer informatie over onze onderwijspakketen, neem dan vooral contact met ons op!</p>
            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box" data-aos="fade-up">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p> Rachelsmolen 5612, 5623 PE Eindhoven </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@yourworld.nl</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+31 0495 123456</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form w-100" data-aos="fade-up">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Jouw naam" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Jouw email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Onderwerp" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Bericht" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Jouw bericht is verzonden, dankjewel!</div>
                        </div>
                        <div class="text-center"><button type="submit">Verstuur bericht</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- ======= Footer ======= -->
<footer id="footer">
    <?php include_once 'inc/footer.php'?>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



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

<!-- Sticky navbar on scroll -->
<script>
    window.onscroll = function () {stickyHeader()};

    var header = document.getElementById("header");
    var sticky = header.offsetTop;

    function stickyHeader()
    {
        if(window.pageYOffset > sticky)
        {
            header.classList.add("sticky");
        }
        else
        {
            header.classList.remove("sticky");
        }
    }
</script>
</body>
</html>

