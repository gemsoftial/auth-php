<h5>Silakan Login Dengan Data Yang Telah Di Daftarkan</h5>
<form method="post" class="login-form">
    <table>
        <thead>
            <th>Email</th>
            <td><input type="email" name="email"></td>
        </thead>
        <tbody>
            <th>Password</th>
            <td><input type="password" name="pass"></td>
        </tbody>
            <th></th>
            <td class="btn"><button name="login"> LOGIN</button></td>
    </table>
</form>
<?php
$title = "Login - Source Code";
if(isset($_POST['login'])){
    //Inialisasi Kolom
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    if($email && $pass){
        //Menyamakan Data Input Dengan Database - Inilah Fungsi Login
        $data_login = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND pass='$pass'") or die(mysql_error());
        $result = mysqli_fetch_assoc($data_login);
        $v_email = $result['email'];
        $v_pass = $result['pass'];
        //Verifikasi Email & Password
        if($email == $v_email){
            if($pass == $v_pass){
                $_SESSION['nama'] = $result['nama'];
                $_SESSION['level'] = $result['level'];
                echo '<script type="text/javascript">
                window.location ="index.php"</script>';
            }else{
                echo "Password Salah";
            }
        }else{
            echo "Email Tidak Ditemukan";
        }
    }
}
?>