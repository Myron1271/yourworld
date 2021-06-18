<?php

$servername = "145.220.75.78";
$username = "proftaak";
$password = "Crufkrerbol2";
$dbname = "yourworld";


$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Connection failed: " .mysqli_error());
}

?>