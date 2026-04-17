<?php
session_start();
include '../config/koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email tidak valid";
    exit;
}

$q = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' AND password='$password'");

if (mysqli_num_rows($q) > 0) {
    $_SESSION['login'] = true;
    header("Location: ../views/dashboard.php");
} else {
    echo "Login gagal";
}
?>