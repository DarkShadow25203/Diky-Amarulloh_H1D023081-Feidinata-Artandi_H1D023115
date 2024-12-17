<?php
session_start();
session_destroy(); // Menghapus semua data session
header("Location: login&regis/login.html"); // Redirect ke halaman login
exit();
?>
