<?php
session_start();
$servername = "localhost";  // Server MySQL
$username = "root";         // Nama pengguna MySQL
$password = "";             // Password MySQL (biasanya kosong untuk XAMPP)
$dbname = "teman_sehat";     // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
