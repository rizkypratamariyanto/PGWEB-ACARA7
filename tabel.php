
<?php
$kecamatan = array("Moyudan", "Minggir", "Seyegan", "Godean", "Gamping");

$luas = array(
    "Moyudan" => 27.62,
    "Minggir" => 27.27,
    "Seyegan" => 26.63,
    "Godean" => 26.84,
    "Gamping" => 29.25
);

$jumlah_penduduk = array(
    "Moyudan" => 31497,
    "Minggir" => 29886,
    "Seyegan" => 47129,
    "Godean" => 72456,
    "Gamping" => 99887
);
?>

<table border="5">
    <tr>
        <th>Kecamatan</th>
        <th>Luas</th>
        <th>Jumlah Penduduk</th>
    </tr>

    <?php for ($i = 0; $i < 5; $i++) { ?>
        <tr>
            <td><?php echo $kecamatan[$i]; ?></td>
            <td><?php echo $luas[$kecamatan[$i]]; ?></td>
            <td><?php echo $jumlah_penduduk[$kecamatan[$i]]; ?></td>
        </tr>
    <?php } ?>
</table>
