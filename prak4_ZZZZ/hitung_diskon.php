<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h4>Hitung Diskon</h4>

<form method="post" action="">
    <table>
        <tr>
            <td>Harga Satuan</td>
            <td>: <input type="number" name="harga" required></td>
        </tr>
        <tr>
            <td>Jumlah Barang</td>
            <td>: <input type="number" name="jumlah" required></td>
        </tr>
        <tr>
            <td>Member</td>
            <td>: <input type="checkbox" name="member" value="yes"> Yes</td>
        </tr>
    </table>
    <input type="submit" name="submit" value="submit">
    <input type="reset" value="batal">
</form>

<?php
if (isset($_POST['submit'])) {
    $harga  = (float) $_POST['harga'];
    $jumlah = (int) $_POST['jumlah'];
    $member = isset($_POST['member']);

    // a. Total pembelian = harga satuan x jumlah barang
    $total = $harga * $jumlah;

    // b. Diskon
    if ($member && $total > 100000) {
        $persen = 20;
    } elseif ($member || $total > 100000) {
        $persen = 10;
    } else {
        $persen = 0;
    }
    $diskon = $total * $persen / 100;

    // c. Total bayar = total pembelian - diskon
    $bayar = $total - $diskon;

    echo "<br><h4>Total Pembayaran adalah</h4>";
    echo "<table>";
    echo "<tr><td>Harga Satuan</td><td>:" . $harga . "</td></tr>";
    echo "<tr><td>Jumlah Barang</td><td>:" . $jumlah . "</td></tr>";
    echo "<tr><td>Member</td><td>:" . ($member ? "yes" : "no") . "</td></tr>";
    echo "<tr><td>Total Pembelian</td><td>:" . $total . "</td></tr>";
    echo "<tr><td>Diskon</td><td>:" . $diskon . "</td></tr>";
    echo "<tr><td>Total Bayar</td><td>:" . $bayar . "</td></tr>";
    echo "</table>";
}
?>
</body>
</html>
