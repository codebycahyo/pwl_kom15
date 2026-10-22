<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card" style="text-align: center;">
<?php
    $user = $_POST['user'] ?? '';
    $pass = $_POST['pass'] ?? '';

    if ($user == "" || $pass == "") {
        $pesan = "User dan Password anda KOSONG";
    } elseif ($user != "zizi") {
        $pesan = "User Tidak Terdaftar";
    } elseif ($user == "zizi" && $pass !== "1234") {
        $pesan = "Password anda SALAH";
    } else {
        $pesan = "LOGIN SUKSES! Selamat Datang $user";
    }

    echo "<h3>$pesan</h3><br>";
    echo "<a href='login_3680.php' class='btn'>Back</a>";
?>
    </div>
</body>
</html>
