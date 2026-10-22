<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While dan Do While</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>Perulangan While &amp; Do While</h2>
        <?php
            echo "<b>Perulangan While:</b><br/>";
            $i = 1;
            while ($i <= 10) {
                echo "Ini Perulangan ke-$i <br/>";
                $i++;
            }
            echo "<hr>";
            echo "<b>Perulangan Do While:</b><br/>";
            $j = 5;
            do {
                echo "Perulangan ini kondisinya tidak terpenuhi<br>";
                $j++;
            }
            while ($j <= 3);
        ?>
    </div>
</body>
</html>
