<?php
// Informasi koneksi
$servername = "localhost";
$username = "ken";
$password = "Kenzie0708";
$database = "zeesh_theme";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
