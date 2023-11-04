<?php
date_default_timezone_set('Asia/Jakarta');
require "koneksi.php";

if (isset($_POST["tambah"])) {
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $gambar = $_FILES['gambar']['name'];
    $explode = explode('.', $gambar);
    $ekstensi=strtolower(end($explode));
    $tanggal_sekarang = date('Y-m-d');
    $nama_file_baru = $tanggal_sekarang. ' ' . str_replace(' ', '-', $nama) . '.' . $ekstensi;
    $tmp = $_FILES['gambar']['tmp_name'];
    $created_at = date('Y-m-d H:i:s');

    if (move_uploaded_file($tmp, 'img/' . $nama_file_baru)){
        $result = mysqli_query($conn, "insert into barang 
        (id_barang, nama_barang, harga_barang, stok_barang, gambar, created_at) 
        values ('', '$nama', '$harga', '$stok', '$nama_file_baru', '$created_at')");

    if ($result) {
        echo "
                <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'shoping.php';
                </script>
            ";
    } else {
        echo error_log($result)."
            <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'tambah.php';
            </script>
        ";
    }

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="tambah.css">
</head>

<body>
    <center><h1>Tambah Barang</h1></center>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Nama barang</label><br>
        <input type="text" name="nama" id=""> <br>
        <label for="">Harga</label><br>
        <input type="number" name="harga" id=""> <br>
        <label for="">Stok</label><br>
        <input type="text" name="stok" id=""> <br>
        <label for="">Upload gambar</label>
        <input type="file" name="gambar" id=""> <br>
        <button type="submit" name="tambah">Tambah</button><br>
        <a href="shoping.php">Kembali ke home</a>
    </form>
    
</body>

</html>