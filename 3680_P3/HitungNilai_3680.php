<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Kriteria Nilai Akhir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h1>Hitung Kriteria Nilai Akhir</h1>
        <?php
        $nama = $_POST['nama'] ?? '';
        $n1   = $_POST['nilai1'] ?? '';
        $n2   = $_POST['nilai2'] ?? '';
        $n3   = $_POST['nilai3'] ?? '';
        ?>
        <form action="HitungNilai_3680.php" method="POST">
            <table>
                <tr><td>Input Nama Anda</td><td>:</td>
                    <td><input type="text" name="nama" value="<?= htmlspecialchars($nama) ?>"></td></tr>
                <tr><td>Input Nilai 1</td><td>:</td>
                    <td><input type="number" step="any" name="nilai1" value="<?= htmlspecialchars($n1) ?>"></td></tr>
                <tr><td>Input Nilai 2</td><td>:</td>
                    <td><input type="number" step="any" name="nilai2" value="<?= htmlspecialchars($n2) ?>"></td></tr>
                <tr><td>Input Nilai 3</td><td>:</td>
                    <td><input type="number" step="any" name="nilai3" value="<?= htmlspecialchars($n3) ?>"></td></tr>
            </table>
            <br>
            <input type="submit" name="hitung" value="Hitung">
            <a href="HitungNilai_3680.php"><button type="button">Hapus</button></a>
        </form>
        <br>
        <?php
        if (isset($_POST['hitung'])) {
            if ($nama === '' || $n1 === '' || $n2 === '' || $n3 === '') {
                echo "<p style='color: #e53e3e;'><b>Semua kolom harus diisi.</b></p>";
            } else {
                $jumlah = $n1 + $n2 + $n3;
                $rata   = $jumlah / 3;

                if ($rata >= 90) {
                    $kriteria = "Nilai Memuaskan";
                } elseif ($rata >= 80) {
                    $kriteria = "Nilai Bagus";
                } elseif ($rata >= 65) {
                    $kriteria = "Nilai Cukup";
                } elseif ($rata >= 50) {
                    $kriteria = "Nilai Kurang";
                } else {
                    $kriteria = "Nilai Kurang Sekali";
                }
                $rata = round($rata, 2);
                ?>
                <hr>
                <h3>Hasil Penilaian</h3>
                <table>
                    <tr><td width="150">Nama</td><td>: <?= htmlspecialchars($nama) ?></td></tr>
                    <tr><td>Nilai 1</td><td>: <?= $n1 ?></td></tr>
                    <tr><td>Nilai 2</td><td>: <?= $n2 ?></td></tr>
                    <tr><td>Nilai 3</td><td>: <?= $n3 ?></td></tr>
                    <tr><td>Jumlah Nilai</td><td>: <?= $jumlah ?></td></tr>
                    <tr><td>Rata-Rata Nilai</td><td>: <?= $rata ?></td></tr>
                    <tr><td>Kriteria Nilai Anda</td><td>: <b><?= $kriteria ?></b></td></tr>
                </table>
                <?php
            }
        }
        ?>
    </div>
</body>
</html>
