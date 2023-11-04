<?php
require "koneksi.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $result = mysqli_query($conn, "SELECT gambar FROM barang WHERE id_barang = '$id'");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        
        if ($row['gambar']) {
            unlink('img/' . $row['gambar']);
        }

       
        $result = mysqli_query($conn, "DELETE FROM barang WHERE id_barang = '$id'");

        if ($result) {
            echo "
                <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'shoping.php';
                </script>
            ";
        } else {
            echo "
                <script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'shoping.php';
                </script>
            ";
        }
    } else {
        echo "Produk tidak ditemukan.";
    }
} else {
    echo "ID produk tidak diberikan.";
}
?>
