<?php
?>

<!-- Animate.Style -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- Template Main CSS File -->
<link href="/assets/css/style.css" rel="stylesheet">

<!-- ======= Header ======= -->
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="index.php">YourWorld<span style="color: #3cc187">.</span></a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="index.php#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Over Ons</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li class="nav-item dropdown">
                    <a class="account nav-link dropdown-toggle" href="#" id="Account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
                    <div style="text-align: center;" id="DropdownMenuShow" class="dropdown-menu animate__animated animate__flipInX" aria-labelledby="AccountIcon">
                        <a class="dropdown-item" id="NavBarTextDropDown" href="./login.php">Inloggen</a>
                        <a class="dropdown-item" id="NavBarTextDropDown" href="./register.php">Registeren</a>

                        <?php if(isset($_SESSION['user'])): ?>
                            <hr class="FooterLine " style="margin: 0 0%; height: 2px">
                        <a class="dropdown-item" id="NavBarTextDropDown" href="func/logout.func.php">Uitloggen</a>
                        <?php endif; ?>
                    </div>
                </li>
                <?php if(isset($_SESSION['user'])): ?>
                <li class="nav-item">
                    <a class="nav-link" id="AccountName" href="./account.php"></a>
                </li>
                <?php endif; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <script type="text/javascript">
            var AccountName = '<?php echo $_SESSION['user'];?>';
            document.getElementById('AccountName').innerHTML= AccountName;
        </script>
    </div>