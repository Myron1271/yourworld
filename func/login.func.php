<?php

    include_once 'database.func.php';

    session_start();
    $Username_Login = $_POST['Username_Login'];
    $Password_Login = $_POST['Password_Login'];

    $sqlselect = "SELECT * FROM users WHERE username = '$Username_Login'";
    $result = mysqli_query($conn, $sqlselect);
    $CheckResult = mysqli_num_rows($result);

    if ($CheckResult > 0)
    {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if (password_verify($Password_Login, $row['password']))
        {
            $_SESSION['userAdmin'] = $Username_Login;
            header("Location: yourworldgame.nl/teacher.php");
            exit();
        }
        else echo "Het ingevoerde wachtwoord klopt niet!";
    }
    else echo $S_SESSION["NoUser"] = "Gebruiker bestaat niet";
?>