<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        #sidebar {
            width: 250px;
            height: 100%;
            background-color: #333;
            float: left;
        }
        #sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        #sidebar ul li {
            padding: 10px;
        }
        #sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
        }
        #sidebar ul li a:hover {
            background-color: #555;
        }
        #content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Profil</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Pesanan</a></li>
            <li><a href="#">Laporan</a></li>
        </ul>
    </div>
    <div id="content">
        <h1>Selamat datang di Dashboard</h1>
        <!-- Konten Dashboard akan ditampilkan di sini -->
    </div>
</body>
</html>
