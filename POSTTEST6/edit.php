<?php
date_default_timezone_set('Asia/Jakarta');
require "koneksi.php";

if (isset($_POST["edit"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $created_at = date('Y-m-d H:i:s');
    
    //jika gambar diunggah, proses gambar
    if ($_FILES['gambar']['name']) {
        $gambar = $_FILES['gambar']['name'];
        $explode = explode('.', $gambar);
        $ekstensi = strtolower(end($explode));
        $tanggal_sekarang = date('Y-m-d');
        $nama_file_baru = $tanggal_sekarang. ' ' . str_replace(' ', '-', $nama) . '.' . $ekstensi;
        $tmp = $_FILES['gambar']['tmp_name'];

        //pindahkan gambar baru ke direktori "img"
        if (move_uploaded_file($tmp, 'img/' . $nama_file_baru)) {
            $result = mysqli_query($conn, "UPDATE barang SET 
                nama_barang = '$nama',
                harga_barang = '$harga',
                stok_barang = '$stok',
                gambar = '$nama_file_baru',
                created_at = '$created_at'
                WHERE id_barang = '$id'
            ");

            if ($result) {
                echo "
                    <script>
                    alert('Data Berhasil Diubah!');
                    document.location.href = 'shoping.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                    alert('Data Gagal Diubah!');
                    document.location.href = 'edit.php?id=$id';
                    </script>
                ";
            }
        }
    } else {
        //jika tidak ada gambar baru diunggah, proses data tanpa mengubah gambar
        $result = mysqli_query($conn, "UPDATE barang SET 
            nama_barang = '$nama',
            harga_barang = '$harga',
            stok_barang = '$stok',
            created_at = '$created_at'
            WHERE id_barang = '$id'
        ");

        if ($result) {
            echo "
                <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'shoping.php';
                </script>
            ";
        } else {
            echo "
                <script>
                alert('Data Gagal Diubah!');
                document.location.href = 'edit.php?id=$id';
                </script>
            ";
        }
    }
}

//mengambil data barang berdasarkan ID yang diberikan
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $result = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang = '$id'");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Produk tidak ditemukan.";
        exit; //atau alihkan pengguna ke halaman lain
    }
} else {
    echo "ID produk tidak diberikan.";
    exit; //atau alihkan pengguna ke halaman lain
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tambah.css">
    <title>Edit Data</title>
</head>

<body>

    <center><h1>UPDATE DATA</h1></center>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id_barang']; ?>">
        <label for="nama">Nama barang</label><br>
        <input type="text" name="nama" id="nama" value="<?php echo $row['nama_barang']; ?>"> <br>
        <label for="harga">Harga</label><br>
        <input type="number" name="harga" id="harga" value="<?php echo $row['harga_barang']; ?>"> <br>
        <label for="stok">Stok</label><br>
        <input type="text" name="stok" id="stok" value="<?php echo $row['stok_barang']; ?>"> <br>
        <label for="gambar">Upload gambar</label>
        <input type="file" name="gambar" id="gambar"> <br>
        <button type="submit" name="edit">Edit</button><br>
        <a href="shoping.php">Kembali ke home</a>
    </form>
    
</body>

</html>
