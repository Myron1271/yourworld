<?php


$servername = "127.0.0.1";
$username = "proftaak";
$password = "U0o1#m1q";
$dbname = "yourworld";


$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Connection failed: " .mysqli_error());
}

?>