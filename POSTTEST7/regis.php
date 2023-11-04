<?php
    require "koneksi.php";

    if(isset($_POST['regis'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $result = mysqli_query($conn, 'SELECT * FROM user WHERE username = "$username"');

        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('Username telah digunakan!');
                    document.location.href = 'regis.php';
                </script>
            ";
        } else {
            // 92
            if($password === $cpassword){
                $password = password_hash($password, PASSWORD_DEFAULT);

                $result = mysqli_query($conn, "INSERT INTO user (id, username, password) VALUES ('', '$username', '$password')");
                if(mysqli_affected_rows($conn) > 0){
                    echo "
                        <script>
                            alert('Registrasi Berhasil!');
                            document.location.href = 'login.php' ;
                        </script>
                    ";
                } else {
                    echo "
                        <script>
                            alert('Registrasi Gagal!');
                            document.location.href = 'regis.php';
                        </script>
                    ";
                }
            } else {
                echo "
                    <script>
                        alert('Konfirmasi Password tidak sesuai!');
                        document.location.href = 'regis.php';
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
    <title>REGISTRASI</title>
    <link rel="stylesheet" href='regis.css'>
</head>
<body>  
    <div class="container">
        <h1>REGISTRASI</h1>
        <form action="" method="post">
            <label>Username</label><br>
            <input type="text" name="username" id=""><br>
            <label>Password</label><br>
            <input type="password" name="password" id=""><br>
            <label>Konfirmasi Password</label><br>
            <input type="password" name="cpassword" id=""><br>
            <button type="submit" name="regis">Registrasi</button>
        </form>
    </div>
</body>
</html>