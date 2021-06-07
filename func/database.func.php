<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourworld";


/*$servername = "localhost";
$username = "proftaak";
$password = "Crufkrerbol2";
$dbname = "yourworld";*/


/*ssh2_connect($servername);*/
$conn = new mysqli($servername, $username, $password, $dbname);
/*
$connection = ssh2_connect($servername, 22);
ssh2_auth_password($connection, $username, $password);
$stream=ssh2_exec($connection, 'usr/local/bin/php -i');
*/


if(!$conn)
{
    die("Connection failed: " .mysqli_error());
}

?>