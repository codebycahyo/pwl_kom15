<?php

    $no = array (1,2,3,4,5);
    $namanya = array ("Kansha", "Ghanesa","Sasa","Zora","Bintang");
    $jabatannya = array ("Staff", "Direktur", "Manager", "Sekretaris", "Staf");
    $statusnya = array ("aktif", "aktif", "tidak Aktif", "aktif", "aktif");

    echo "<table border='1' width='300'>";
    echo "<tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Status</th>
        </tr>";
    for ($i=0; $i<count($no);$i++){
    echo "<tr>
            <td>{$no[$i]}</td>
            <td>{$namanya[$i]}</td>
            <td>{$jabatannya[$i]}</td>
            <td>{$statusnya[$i]}</td>
        </tr>";
    };
    echo "</table>";
?>
