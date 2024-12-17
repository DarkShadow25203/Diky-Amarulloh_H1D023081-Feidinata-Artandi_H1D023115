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

    // Mengecek apakah username ada di database
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();

        // Memeriksa password yang dimasukkan dengan password yang ada di database (hashed)
        if (password_verify($pass, $user_data['password'])) {
            // Set session username
            $_SESSION['username'] = $user_data['username'];
            header("Location: ../index.php"); // Pastikan ke index.php, bukan index.html
            exit();
        } else {
            echo "Nama pengguna atau password salah!";
        }
    } else {
        echo "Nama pengguna atau password salah!";
    }
}

$conn->close();
?>
