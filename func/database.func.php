<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourworld";

/*
$servername = "localhost";
$username = "proftaak";
$password = "Crufkrerbol2";
$dbname = "yourworld";
*/

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Connection failed: " .mysqli_error());
}

?>