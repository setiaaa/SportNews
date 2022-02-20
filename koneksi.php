<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "player";

$koneksi = mysqli_connect($server, $user, $password, $database);
if(!$koneksi) {
    die("Koneksi gagal");
}
?>