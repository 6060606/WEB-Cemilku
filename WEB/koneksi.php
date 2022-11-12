<?php
$server         = "localhost";
$username       = "root";
$password       = "";
$dp             = "user";
$koneksi        = mysqli_connect($server, $username, $password, $dp);
if (!$koneksi) {
    die("koneksi gagal : ".mysqli_connect_error()) ;
}
?>