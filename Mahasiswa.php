<?php
require 'fungsi.php';

$query = "SELECT * FROM mahasiswa";
$mahasiswas = tampildata($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="aset/style.css">
</head>
<body>

<h1 align="center">
    WEB TI UNIMUS 2026
</h1>

<table border="1" align="center" cellspacing="0" cellpadding="10">
    <tr>
        <td><a href="index.php">Home</a></td>
        <td><a href="profil.php">Profil</a></td>
        <td><a href="kontak.php">Kontak</a></td>
        <td><a href="Mahasiswa.php">Data Mahasiswa</a></td>
    </tr>
</table>

<table width="100%">
    <tr>
        <td>
            <h2>Data Mahasiswa</h2>
        </td>
        <td align="right">
            <a href="tambahandata.php">
                <button type="button">+ Tambah Data</button>
            </a>
        </td>
    </tr>
</table>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach($mahasiswas as $mhs)
    {
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['nim']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['no_hp']; ?></td>
        <td>
            <img src="aset/img/<?= $mhs['foto']; ?>" width="70">
        </td>
        <td>
            <a href="editdata.php?id=<?= $mhs['id']; ?>">
                <button>Edit</button>
            </a>

            <a href="deletedata.php?id=<?= $mhs['id']; ?>">
                <button>Hapus</button>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>