<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <center><h1>Selamat Datang di Dashboard Web</h1></center>
    
    <div>
        <?php
        // Set zona waktu sesuai dengan zona waktu yang Anda inginkan
        date_default_timezone_set('Asia/Jakarta');

        // Mendapatkan informasi tanggal dan waktu saat ini
        $today = date("Y-m-d");
        $day = date("l");
        $time = date("H:i:s");
        $month = date("F");
        $year = date("Y");

        // Menampilkan informasi pada halaman dashboard
        echo "Hari: " . $day . "<br>";
        echo "Tanggal: " . $today . "<br>";
        echo "Bulan: " . $month . "<br>";
        echo "Tahun: " . $year . "<br>";
        echo "Zona Waktu: " . date_default_timezone_get() . "<br>";
        echo "Waktu: " . $time;
        ?>
    </div>
</body>
</html>

