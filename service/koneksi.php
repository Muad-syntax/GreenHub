<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "greenhub";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if (!$koneksi){
    die("koneksi gagal" . mysqli_connect_error());
}
?>