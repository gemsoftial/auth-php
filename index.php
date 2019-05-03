<?php 
//Menghilangkan Error
error_reporting(0);
//Memulai Session Untuk Penggunaan Data Login
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="?page">Home</a></li>
            <?php
            //Manampilkan Nama Data Login
            if($_SESSION['nama']){
                echo "<li><a>".$_SESSION['nama']."</a></li>";
            }else{
            ?>
            <li><a href="?page=login">Login</a></li>
            <li><a href="?page=register">Register</a></li>
            <?php }?>
        </ul>
    </div>
    <div class="main">
        <!-- Konten -->
        <?php 
            //Koneksi Ke Database
            include_once("koneksi.php");
            $page = $_GET['page'];
            if($page == "logout"){
                //Menghapus Data Login
                session_destroy();
                echo '<script type="text/javascript">
                window.location ="index.php"</script>';
            }else if($page){
                include($page.'.php');
                echo "<title>$title</title>";
            }else if($_SESSION['nama']){
                echo "<title>Source Code Login / Register</title>";
                echo "<h3>".$_SESSION['nama']."</h3> <a href='?page=logout'> LOG OUT</a><br/>";
                if($_SESSION['level']==1){
                    echo "LEVEL : Administrator";
                }else if($_SESSION['level']==2){
                    echo "LEVEL : Users";
                }
            }else{
                echo "<title>Source Code Login / Register</title>";
                echo "<h4>Terima Kasih Sudah Mencoba Open Source Auth Ini,<br/> Untuk Pengembangan Saya Berikan Pada Kalian.</h4><br/>";
                echo "<br/><h4> Source Code Ini Berupa Fungsi Register - Login - Logout,<br/> untuk tampilan mohon maaf kurang bagus</h4>";
            }
        ?>
    </div>
    <div class="footer">
        <h5> Copyright &copy 2019 <a href="http://bisa-koding.blogspot.com">Bisa Koding</a></h5>
    </div>
</body>
</html>