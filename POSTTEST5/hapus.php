<?php
require "koneksi.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $result = mysqli_query($conn, "SELECT gambar FROM barang WHERE id_barang = '$id'");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Hapus gambar terkait (jika ada) dari direktori "img"
        if ($row['gambar']) {
            unlink('img/' . $row['gambar']);
        }

        // Hapus data produk dari database
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
