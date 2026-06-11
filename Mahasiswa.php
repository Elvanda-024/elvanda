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
        <tr>
            <td>1</td>
            <td>Elvanda Sri Utami</td>
            <td>13242520024</td>
            <td>Teknologi Informasi</td>
            <td>elvanda@gmail.com</td>
            <td>088894629472</td>
            <td><img src="aset/img/el.jpeg" width="70px"/></td>
            <td>
                <a href="editdata.php"><button>edit</button></a>
                <a href="deletedata.php"><button>hapus</button></a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Ilong</td>
            <td>13242520020</td>
            <td><img src="aset/img/nailong.webp" width="70px"/></td>
        </tr>


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