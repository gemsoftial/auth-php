<h5>Silakan Register Dengan Data Yang Akan Di Daftarkan</h5>
<form method="post" class="register-form">
    <table>
        <thead>
            <th>Nama</th>
            <td><input type="text" name="nama"></td>
            <th>Email</th>
            <td><input type="email" name="email"></td>
        </thead>
        <tbody>
            <th>Password</th>
            <td><input type="password" name="pass"></td>
            <th>Level</th>
            <td><select name="level">
                <option value="1">Admin</option>
                <option value="2">Users</option>
            </select></td>
        </tbody>
            <th></th>
            <td class="btn"><button name="register">REGISTER</button></td>
    </table>
</form>
<?php
$title = "Register - Source Code";
if(isset($_POST['register'])){
    //Inisialisasi Kolom
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    //MD5 Berfungsi Merandom Password
    $pass = md5($_POST['pass']);
    $level = $_POST['level'];
    if($nama && $email && $pass && $level){
        //Verifikasi Data Yang Sama
        $dt_register = mysqli_query($conn, "SELECT * FROM users")or die(mysqli_error());
        $r_reg = mysqli_fetch_assoc($dt_register);
        $r_email = $r_reg['email'];
        if($email == $r_email){
            echo"Data Sudah Digunakan";
        }else{
            //Menyimpan Data Ke Query / Database
            $simpan = mysqli_query($conn, "INSERT INTO users (id,email,pass,nama,level) VALUES (NULL,'$email','$pass','$nama','$level')");
            if($simpan){
            echo "<script>window.alert('Data Berhasil Di Tambah')</script>";
            echo '<script type="text/javascript">
            window.location ="index.php"</script>';
            }else{
            echo"Data Tidak Berhasil Di Tambah";
            }
        }      
    }else{
        echo"Masih Ada Kolom Yang Belum Di Isi.";
    }
}
?>