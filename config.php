<?php
$host = "localhost";
$username = "root"; // Ganti sesuai username database Anda
$password = "";     // Ganti sesuai password database Anda
$database = "WarehouseSalesDB";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>