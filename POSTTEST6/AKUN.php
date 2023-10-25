<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKUN BERHASIL</title>
    <link rel="stylesheet" href="akun.css">
</head>
<body>
    <div class="container">
    <p>Akun berhasil dibuat!<br>
        Halo <?php echo $_POST["username"]; ?>, silahkan cek kembali Data anda<br>
        <?php echo $_POST["name"]; ?> <br>
        <?php echo $_POST["phone"]; ?> <br>
        Your email address is <?php echo $_POST["email"]; ?> 
    </p>
    </div>
</body>
</html>