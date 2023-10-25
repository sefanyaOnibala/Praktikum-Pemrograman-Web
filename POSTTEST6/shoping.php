<?php
require "koneksi.php";

$result = mysqli_query($conn, "select * from barang");

$barang = [];

while ($row = mysqli_fetch_assoc($result)) {
    $barang[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTTEST5</title>
    <link rel="stylesheet" href="shoping.css">
</head>

<body> 

<?php

    include "koneksi.php";
    

    //Cek apakah ada kiriman form dari method post
    if (isset($_GET['id_barang'])) {
        $id_barang=htmlspecialchars($_GET["id_barang"]);

        $sql="delete from barang where id_barang='$id_barang' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>

    <center><h1>Data Barang</h1></center>
    <center><a href="tambah.php"> + &nbsp; Tambah</a></center>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
            <th>Gambar</th>
            <th>Waktu ditambahkan</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($barang as $brg) : ?>
            <tr>
                <td> <?= $i; ?> </td>
                <td> <?= $brg["nama_barang"] ?> </td>
                <td> <?= $brg["harga_barang"] ?> </td>
                <td> <?= $brg["stok_barang"] ?> </td>
                <td> <img src = "img/<?= $brg ['gambar'] ?>" alt ="ini gambar" width="80px" height="70px"></td>
                <td> <?= $brg['created_at'] . "<br></br>" ?> </td>
                <td><a href='edit.php?id=<?= $brg["id_barang"] ?>'>Edit</a></td>
                <td><a href='hapus.php?id=<?= $brg["id_barang"] ?>'>hapus</a>
                </td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </table><br>
    <center><a href="index.php">Kembali ke home</a></center>
</body>

</html>