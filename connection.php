<?php
# Nastavljeno za šolski strežnik
$dbhost = "localhost";
$dbuser = "udelezenec115";
$dbpassword = "...";
$dbname = "udelezenec115";

if (!$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname)) {
    die("Ni povezave.");
}
