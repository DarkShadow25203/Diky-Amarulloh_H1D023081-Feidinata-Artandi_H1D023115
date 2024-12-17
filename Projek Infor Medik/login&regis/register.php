<?php
session_start();
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username database Anda
$password = ""; // Sesuaikan dengan password database Anda
$dbname = "teman_sehat";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm-password'];

    // Validasi password dan konfirmasi password
    if ($pass != $confirm_pass) {
        echo "Password dan konfirmasi password tidak cocok.";
        exit();
    }

    // Cek apakah username sudah ada di database
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Username sudah terdaftar.";
    } else {
        // Hash password sebelum disimpan
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        // Menyimpan data pengguna baru
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $user, $hashed_password);
        if ($stmt->execute()) {
            // Redirect ke login.html setelah berhasil registrasi
            header("Location: login.html");
            exit();
        } else {
            echo "Terjadi kesalahan. Silakan coba lagi.";
        }
    }
}

$conn->close();
?>
