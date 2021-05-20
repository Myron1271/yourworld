<?php

    include_once 'database.func.php';

    session_start();
    if ($_SERVER['REQUEST_METHOD']== 'POST')
    {
        if ($_POST['Password_Register'] == $_POST['Password_Register2'])
        {
            $Username = $conn->real_escape_string($_POST['Username_Register']);
            $School = $conn->real_escape_string($_POST['School_Naam']);
            $Email = $conn->real_escape_string($_POST['Email_Register']);
            $Password = password_hash($_POST['Password_Register'], PASSWORD_DEFAULT);

            $sql ="INSERT INTO users(username, school, email, password)" . "VALUES ('$Username', '$School' ,'$Email', '$Password')";

            if ($conn ->query($sql) === true)
            {
                $_SESSION['user'] = $Username;
                header("location: account.php");
            }
            else
            {
                $_SESSION['message'] = "Er is iets fout gegaan, neem contact op met de admin";
            }
        }
        else
        {
            $_SESSION['message'] = "Het ingevoerde wachtwoord komt niet overeen!";
        }
    }
?>