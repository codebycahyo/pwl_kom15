<?php
// Variabel array yang ditambahkan agar program dapat dijalankan
$kategoribuku = array(
    "Pemrograman Web",
    "Database",
    "Desain Grafis",
    "Internet",
    "Office Application"
);

echo "<strong>Daftar Kategori Buku: </strong><br>";
for ($i=0; $i < sizeof($kategoribuku); $i++) {
    echo "Nama Buku $i : " . $kategoribuku[$i] . "<br>";
}
?>
