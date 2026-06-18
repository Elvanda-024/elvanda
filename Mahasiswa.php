<?php
   // API
  $koneksi = mysqli_connect("localhost", "root", "","ellweekly");

    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($koneksi, $query);

    // while$mhs($mhs = mysqli_fetch_assoc($result))
    // {
    // var_dump($mhs)
    // }
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

    <table border="1" align="center" cellspacing="0" cellpadding="10px">
        <tr>
                <td>
                    <a href="index.php">Home</a> 
                </td>
                <td>
                    <a href="profil.php">Profil</a> 
                </td>
                <td>
                    <a href="kontak.php">Kontak</a>
                </td>
                <td>
                    <a href="Mahasiswa.php">Data Mahasiswa</a>
                </td>
                 <td>
                    <a href="tambahandata.php">Data</a>
                </td>
        </tr>
    </table>
    <h2>
        Data Mahasiswa
    </h2>
    <table border="1" cellpadding="10px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>jurusan</th>
            <th>Email</th>
            <th>N0_hp</th>
            <th>Foto</th>
            <th>Aksi</th>

            <!-- <td>Baris 1, Kolom 2<td>  -->
        </tr>
        <?php
$no = 1;
while($mhs = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $mhs["nama"]; ?></td>
    <td><?php echo $mhs["nim"]; ?></td>
    <td><?php echo $mhs["jurusan"]; ?></td>
    <td><?php echo $mhs["email"]; ?></td>
    <td><?php echo $mhs["no_hp"]; ?></td>
    <td>
       <img src="aset/img/<?php echo $mhs['foto']; ?>" width="70px">
    </td>
    <td>
        <a href="editdata.php?id=<?php echo $mhs['id']; ?>">
            <button>Edit</button>
        </a>

        <a href="deletedata.php?id=<?php echo $mhs['id']; ?>">
            <button>Hapus</button>
        </a>
    </td>
</tr>
<?php
}
?>

    </table>
 <hr>
        <table border="1" cellspacing="5px" cellpadding="10px">
            <tr>
                <td>1,1</td>
                <td>1,2</td>
                <td>1,3</td>
                <td>1,4</td>
            </tr>
            <tr>
                <td>2,1</td>
                <td colspan="2" rowspan="2" align="center">?</td>
                <!-- <td>2,3</td> -->
                <td>2,4</td>
            </tr>
            <tr>
                <td>3,1</td>
                <!-- <td>3,2</td> -->
                <!-- <td>3,3</td> -->
                <td>3,4</td>
            </tr>
            <tr>
                <td>4,1</td>
                <td>4,2</td>
                <td>4,3</td>
                <td>4,4</td>
            </tr>
        </table>


</body>
</html>