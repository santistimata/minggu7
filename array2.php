<?php
    $mahasiswa = [
        ["Raffli", "20510015", "Sistem Informasi", "raffli_20510015@stimata.ac.id"],
        ["Firmansyah", "20511212", "Teknik Informasi", "firman@stimata.ac.id"],
        ["Baru", "28931237", "Manajemen Informasi", "baru@stimata.ac.id"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) { ?>
        <ul>
            <?php foreach ($mhs as $m) { ?>
                <li><?= $m; ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
</body>
</html>