<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourworld";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Connection failed: " .mysqli_error());
}
?>