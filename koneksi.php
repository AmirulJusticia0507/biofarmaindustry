<?php
$host = "localhost"; // Ganti dengan host MySQL Anda
$username = "biofarma_industry";
$password = "biofarma123";
$database = "db_biofarma_industry";

$terkoneksi = new mysqli($host, $username, $password, $database);

if ($terkoneksi->connect_error) {
    die("Koneksi gagal: " . $terkoneksi->connect_error);
}
?>
