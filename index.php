<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="?page=home">Home</a></li>
            <li><a href="?page=login">Login</a></li>
            <li><a href="?page=register">Register</a></li>
        </ul>
    </div>
    <div class="main">
        <!-- Konten -->
        <?php 
            $page = $_GET['page'];
            if($page){
                include($page.'.php');
            }else{
                echo " Halaman Index";
            }
        ?>
    </div>
    <div class="footer">
        <h5> Copyright &copy</h5>
    </div>
</body>
</html>