<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourworld";

/*
$servername = "145.220.75.78";
$username = "applicatie";
$password = "Crufkrerbol2";
$dbname = "yourworld";
*/

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Connection failed: " .mysqli_error());
}

?>