<?php

    include_once 'database.func.php';

    $successfull = true;

    session_start();
    if ($_SERVER['REQUEST_METHOD']== 'POST')
    {

        $username = isset($_POST['Username_Register']) ? htmlentities($_POST['Username_Register']) : false;
        $school = isset($_POST['School_Naam']) ? htmlentities($_POST['School_Naam']) : false;
        $email = isset($_POST['Email_Register']) ? htmlentities($_POST['Email_Register']) : false;
        $password = isset($_POST['Password_Register']) ? htmlentities($_POST['Password_Register']) : false;
        $password2 = isset($_POST['Password_Register2']) ? htmlentities($_POST['Password_Register2']) : false;

        $fields = [
            $username, $school, $email, $password, $password2
        ];

        if(in_array(false, $fields)) {
            $successfull = false;
            $_SESSION['messages'][] = 'Je hebt iets niet goed ingevuld';
        }


        if($password != $password2) {
            $successfull = false;
            $_SESSION['messages'][] = 'De wachtwoorden komen niet overeen';
        }

        if ($successfull)
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
                $_SESSION['message'][] = "Er is iets foutgegaan, neem contact op met de admin";
            }
        }

    }
?>