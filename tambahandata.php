<?php
require 'fungsi.php';

if(isset($_POST['tambah']))
{
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, "aset/img/" . $foto);

    global $koneksi;

    $query = "INSERT INTO mahasiswa
              (nama,nim,jurusan,email,no_hp,foto)
              VALUES
              ('$nama','$nim','$jurusan','$email','$no_hp','$foto')";

    mysqli_query($koneksi, $query);

    if(mysqli_affected_rows($koneksi) > 0)
    {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            window.location.href='Mahasiswa.php';
        </script>
        ";
    }
    else
    {
        echo "
        <script>
            alert('Data gagal ditambahkan');
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="aset/style.css">
</head>
<body>

<h2>Tambah Data Mahasiswa</h2>

<form action="" method="post" enctype="multipart/form-data">

<table cellpadding="5">

    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>
            <input type="text" name="nama" required>
        </td>
    </tr>

    <tr>
        <td>NIM</td>
        <td>:</td>
        <td>
            <input type="text" name="nim" required>
        </td>
    </tr>

    <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td>
            <input type="text" name="jurusan" required>
        </td>
    </tr>

    <tr>
        <td>Email</td>
        <td>:</td>
        <td>
            <input type="email" name="email" required>
        </td>
    </tr>

    <tr>
        <td>No HP</td>
        <td>:</td>
        <td>
            <input type="text" name="no_hp" required>
        </td>
    </tr>

    <tr>
        <td>Foto</td>
        <td>:</td>
        <td>
            <input type="file" name="foto" required>
        </td>
    </tr>

    <tr>
        <td colspan="3">
            <button type="submit" name="tambah">
                Simpan Data
            </button>

            <a href="Mahasiswa.php">
                <button type="button">
                    Kembali
                </button>
            </a>
        </td>
    </tr>

</table>

</form>

</body>
</html>