<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Nilai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>Penilaian Mahasiswa</h2>
        <form action="SwitchNilai_3680.php" method="POST">
            <label style="display:block; margin-bottom:8px; font-weight:500;">Masukkan Nilai Huruf (A-E):</label>
            <div style="display: flex; gap: 8px; margin-bottom: 15px;">
                <input type="text" name="nilai" required maxlength="1" style="text-align: center; font-weight: bold; font-size: 16px;">
                <button type="submit" style="white-space: nowrap;">Periksa Nilai</button>
            </div>
        </form>

        <?php
        if (isset($_POST['nilai'])) {
            $nilai = strtoupper(trim($_POST['nilai']));
            switch ($nilai) {
                case 'A':
                    $predikat = "Sangat Baik";
                    $keterangan = "Lulus";
                    break;
                case 'B':
                    $predikat = "Baik";
                    $keterangan = "Lulus";
                    break;
                case 'C':
                    $predikat = "Cukup";
                    $keterangan = "Lulus";
                    break;
                case 'D':
                    $predikat = "Kurang";
                    $keterangan = "Perlu perbaikan";
                    break;
                case 'E':
                    $predikat = "Sangat Kurang";
                    $keterangan = "Tidak lulus";
                    break;
                default:
                    $predikat = "Tidak valid";
                    $keterangan = "Masukkan nilai A sampai E";
            }
            ?>
            <div class="result-box">
                <h3 style="margin-bottom: 8px; text-align: left;">Hasil Penilaian</h3>
                Nilai: <b><?= htmlspecialchars($nilai) ?></b><br>
                Predikat: <b><?= $predikat ?></b><br>
                Keterangan: <b><?= $keterangan ?></b>
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>
