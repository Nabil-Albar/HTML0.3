<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Contoh username dan password yang benar
$correct_username = "admin";
$correct_password = "1234";

if ($username == $correct_username && $password == $correct_password) {
    $_SESSION['username'] = $username;
    echo "Login berhasil! Selamat datang, " . $_SESSION['username'];
} else {
    echo "Username atau password salah!";
}
?>
