<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <form action="action_login_3680.php" method="POST">
            <h2>Masukkan User dan Password Anda</h2>
            <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td colspan="3" style="padding-top: 10px;">
                        <input type="submit" value="Login">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
