<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTTEST 5</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <input type="checkbox" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
          
        <a class="logo">XmasLom<span>.</span></a>
        <script>
            alert("Klik OK untuk melanjutkan");
        </script>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">About</a>
            <a href="#produk">Products</a>
        </nav>

        <div class="icons">
            <a href="#home" class="fas fa-home"></a>
            <a href="shoping.php" class="fas fa-shopping-cart"></a>
            <a href="#about" class="fas fa-user"></a>
        <button id="toggleThemeButton"><i id="themeIcon" class="fas fa-sun"></i>
            <span></span>
        </button>
        </div>
    </header>

    <section class="home" id="home">
        <div class="content">
            <h3>WELCOME TO CHRISTMAS STORE</h3>
            <span>Sambut Natalmu dengan Keindahan dan Kebahagiaan</span>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </section>

    <section class="produk" id="produk">
        <h3>PRODUK POPULER</h3>
        <div class="produk-item">
            <img src="IMG/POHON.jpeg" alt="Aksesoris Natal 1">
            <h2>Aksesoris Natal 1</h2>
            <p>Pohon Natal indah untuk pojok rumah anda</p>
            <p class="harga">Rp 500.000,00</p>
        </div>
        <div class="produk-item">
            <img src="IMG/RING.jpeg" alt="Aksesoris Natal 2">
            <h2>Aksesoris Natal 2</h2>
            <p>Hiasan Natal cantik</p>
            <p class="harga">Rp 75.000,00</p>
        </div>
        <div class="produk-item">
            <img src="IMG/TOPINATAL.jpeg" alt="Aksesoris Natal 3">
            <h2>Aksesoris Natal 3</h2>
            <p>Topi Santa yang lucu untuk anak-anak</p>
            <p class="harga">Rp 50.000,00</p>
        </div>
    </section>

    <section class="Icons-container">
        <div class="Icons">
            <div class="info">
                <h3>free delivery</h3>
                <span>on all orders</span>
            </div>
        </div>

        <div class="Icons">
            <div class="info">
                <h3>10 days returns</h3>
                <span>moneyback guarantee</span>
            </div>
        </div>

        <div class="Icons">
            <div class="info">
                <h3>offer & gifts</h3>
                <span>on all orders</span>
            </div>
        </div>

        <div class="Icons">
            <div class="info">
                <h3>secure paymens</h3>
                <span>protected by paypal</span>
            </div>
        </div>
    </section>
    
    <section class="about" id="about">
        <h1 class="heading"> <span> ABOUT </span> US </h1>
        <div class="about-content">
            <img src="IMG/santalagi.jpg" alt="" class="image">
            <table class="biodata">
                <tr>
                    <td>Nama</td>
                    <td> : </td>
                    <td>Salom sefanya onibala</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td> : </td>
                    <td>2209106084</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> : </td>
                    <td>lomeyonibala@gmail.com</td>
                </tr>
                <tr>
                    <td>Instagram</td>
                    <td> : </td>
                    <td>@sy.lom_m4</td>
                </tr>
            </table>
        </div>
    </section>
    <footer>
        <p>Copyright © 2023 sefanya onibala</p>
    </footer> 
    <script src="script.js" defer></script>
</body>
</html>