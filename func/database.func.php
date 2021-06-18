<?php

$servername = "10.10.10.6";
$username = "proftaak";
$password = "Crufkrerbol2";
$dbname = "yourworld";


$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Connection failed: " .mysqli_error());
}

?>