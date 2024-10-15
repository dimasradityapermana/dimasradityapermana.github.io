<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);

    if (!empty($username) && !empty($password) && !empty($email)) {
        if ($username === "admin" && $password === "123" && $email === "admin@gmail.com") {
            echo "<script type='text/javascript'>alert('Login berhasil! Selamat datang, $username');</script>";
            echo "<script > window.location.href = 'index.php'</script>";
        } else {
            echo "<script type='text/javascript'>alert('Login gagal! username atau password salah.');</script>";
            echo "<script > window.location.href = 'login.php'</script>";
        } 
    }
}
