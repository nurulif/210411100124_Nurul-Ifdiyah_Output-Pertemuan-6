<?php
// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "web";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Succesfully ";
?>