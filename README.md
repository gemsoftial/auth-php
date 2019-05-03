# Login / Register Menggunakan PHP

<br />
<div lang="x-none" style="font-family: &quot;Yu Gothic&quot;; margin: 0in;">
<span style="font-size: small;">Dalam
sebuah website tentunya tidak asing lagi dengan Login ataupun Register, di
sebuah website banyak sekali sistem yang mereka pakai untuk membuat hal
tersebut, sistem Login sendiri mempunyai fungsi yang banyak, bisa di pakai
untuk Pendataan, di pakai untuk langganan, ataupun di pakai untuk keamanan. </span></div>
<span style="font-size: small;">

</span><br />
<div style="font-family: &quot;Yu Gothic&quot;; margin: 0in;">
<br /></div>
<span style="font-size: small;">

</span><br />
<div lang="x-none" style="font-family: &quot;Yu Gothic&quot;; margin: 0in;">
<span style="font-size: small;">Login
kalau dalam sistemnya hanya untuk memverifikasi apakah data yang di input sama
dengan data yang ada di database, biasanya login hanya mengunakan 2 data saja
yaitu berupa Email dan Password, jika data yang input tidak ada maka Users
tidak bisa masuk pada website tersebut. Lalu bagaimana dengan Register apa
gunanya?. Ya gunanya untuk mencantumkan / menambah data ke dalam database,
tentunya tidak ada dalam database. Kenapa ? , Jawabannya pasti agar tidak ada
data yang bertubrukan, dan juga tidak ada data duplikat, dengan begitu data
yang tersimpan di database akan ringan.</span></div>
<span style="font-size: small;">

</span><br />
<div style="font-family: &quot;Yu Gothic&quot;; margin: 0in;">
<br /></div>
<span style="font-size: small;">

</span><br />
<div lang="x-none" style="font-family: &quot;Yu Gothic&quot;; margin: 0in;">
<span style="font-size: small;">Sepertinya
sampai disana dulu penjelasanya, kita masuk pada Pemogramannya, Dalam Website
Berbagai bahasa pemograman tapi kita akan mengunakan PHP sebagai Bahasanya, Dan
Mysql Sebagai databasenya, seperti yang di atas kita akan membuat login dan
register. </span></div>
<span style="font-size: small;">

</span><br />
<div style="font-family: &quot;Yu Gothic&quot;; margin: 0in;">
<span style="font-size: small;"><br /></span></div>
<div style="font-family: &quot;Yu Gothic&quot;; margin: 0in;">
<span style="font-size: small;">1. <span lang="x-none">Langkah pertama kita akan membuat sebuah database untuk nantinya
dipakai untuk menyimpan</span><span lang="en-US"> data user</span></span></div>
<div style="font-family: &quot;Yu Gothic&quot;; margin: 0in;">
<span style="font-size: small;"><a href="https://4.bp.blogspot.com/-taeXSj_pkk0/XMvlQ9q_bnI/AAAAAAAABLU/BC-1HONTY4ksUPKStN9BtgYSqk1aqZpQgCLcBGAs/s1600/Untitled%2Bpicture.png" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="156" data-original-width="274" src="https://4.bp.blogspot.com/-taeXSj_pkk0/XMvlQ9q_bnI/AAAAAAAABLU/BC-1HONTY4ksUPKStN9BtgYSqk1aqZpQgCLcBGAs/s1600/Untitled%2Bpicture.png" /></a></span></div>
<div style="font-family: &quot;Yu Gothic&quot;; margin: 0in;">
<span style="font-size: small;"><span lang="en-US">2. </span><span style="font-family: &quot;calibri&quot;; font-style: normal; font-weight: normal;">Untuk Selanjutnya siapkan
     folder projek kita.</span></span></div>
<div style="font-family: &quot;Yu Gothic&quot;; margin: 0in;">
<br /></div>
<span style="font-size: small;"><span style="font-family: inherit;">Seperti
biasa karena kita memakai Xampp, kita pergi Ke Localdisk C &gt;&gt; Xampp
&gt;&gt; Htdocs &gt;&gt; buat tuh disana.</span>

</span><br />
<div style="font-family: Calibri; margin: 0in;">
<br /></div>
<span style="font-size: small;"></span><span style="font-size: small;"><span style="font-family: &quot;calibri&quot;; font-style: normal; font-weight: normal;">3. Untuk sekarang kita tidak
     memakai style yang bagus cukup buat aja sendiri, kita fokus ke
     strukturnya.&nbsp;</span></span><br />
<br />
<span style="font-size: small;"><span style="font-family: &quot;calibri&quot;; font-style: normal; font-weight: normal;">4. </span><span style="font-family: &quot;calibri&quot;;">Buat lah file index.php,
     login.php, register.php, koneksi.php, style.css</span></span><br />
<span style="font-size: small;"></span><span style="font-size: small;">Ada
dua cara untuk membuat hal tersebut, anda bisa langsung buat di Foldernya.</span><br />
<a href="https://1.bp.blogspot.com/-X5T1n3SHMMY/XMvmBomDE1I/AAAAAAAABLc/-ej7TpVhqgIWacVbb2MSAzRu9L_P_XtsgCLcBGAs/s1600/folder.png" imageanchor="1" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"><img border="0" data-original-height="513" data-original-width="914" height="358" src="https://1.bp.blogspot.com/-X5T1n3SHMMY/XMvmBomDE1I/AAAAAAAABLc/-ej7TpVhqgIWacVbb2MSAzRu9L_P_XtsgCLcBGAs/s640/folder.png" style="cursor: move;" width="640" /></a><span style="font-size: small;">Atau Anda Masuk Dalam Sofware Visual Studio Code.</span><br />
<div class="separator" style="clear: both; text-align: center;">
<a href="https://1.bp.blogspot.com/-E_AxzJc2PMo/XMvm0nhAfEI/AAAAAAAABLk/HK0JELs9dqwlvrAOlEIO_6og3Yd4WnyXQCLcBGAs/s1600/Untitled%2Bpictddure.png" imageanchor="1" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"><img border="0" data-original-height="537" data-original-width="637" height="538" src="https://1.bp.blogspot.com/-E_AxzJc2PMo/XMvm0nhAfEI/AAAAAAAABLk/HK0JELs9dqwlvrAOlEIO_6og3Yd4WnyXQCLcBGAs/s640/Untitled%2Bpictddure.png" width="640" /></a></div>
<span style="font-size: small;">5. </span><span style="font-size: small;">Setelah
filenya sudah dibuat, kita akan berurusan dulu dengan index.php dan styles.css</span><br />
<br />
<span style="font-size: small;">Index.php</span><br />
<br />
<div style="font-family: Calibri; font-size: 11pt; margin: 0in 0in 0in 0.375in; text-align: left;">
</div>
<pre class="code code-php"><label>PHP </label><code>	&lt;?php 
	//Menghilangkan Error
	error_reporting(0);
	//Memulai Session Untuk Penggunaan Data Login
	session_start();
	?&gt;
	&lt;!DOCTYPE html&gt;
	&lt;html lang="en"&gt;
	&lt;head&gt;
	    &lt;meta charset="UTF-8"&gt;
	    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
	    &lt;meta http-equiv="X-UA-Compatible" content="ie=edge"&gt;
	    &lt;link rel="stylesheet" href="styles.css"&gt;
	&lt;/head&gt;
	&lt;body&gt;
	    &lt;div class="menu"&gt;
	        &lt;ul&gt;
	            &lt;li&gt;&lt;a href="?page"&gt;Home&lt;/a&gt;&lt;/li&gt;
	            &lt;?php
	            //Manampilkan Nama Data Login
	            if($_SESSION['nama']){
	                echo "&lt;li&gt;&lt;a&gt;".$_SESSION['nama']."&lt;/a&gt;&lt;/li&gt;";
	            }else{
	            ?&gt;
	            &lt;li&gt;&lt;a href="?page=login"&gt;Login&lt;/a&gt;&lt;/li&gt;
	            &lt;li&gt;&lt;a href="?page=register"&gt;Register&lt;/a&gt;&lt;/li&gt;
	            &lt;?php }?&gt;
	        &lt;/ul&gt;
	    &lt;/div&gt;
	    &lt;div class="main"&gt;
	        &lt;!-- Konten --&gt;
	        &lt;?php 
	            //Koneksi Ke Database
	            include_once("koneksi.php");
	            $page = $_GET['page'];
	            if($page == "logout"){
	                //Menghapus Data Login
	                session_destroy();
	                echo '&lt;script type="text/javascript"&gt;
	                window.location ="index.php"&lt;/script&gt;';
	            }else if($page){
	                include($page.'.php');
	                echo "&lt;title&gt;$title&lt;/title&gt;";
	            }else if($_SESSION['nama']){
	                echo "&lt;title&gt;Source Code Login / Register&lt;/title&gt;";
	                echo "&lt;h3&gt;".$_SESSION['nama']."&lt;/h3&gt; &lt;a href='?page=logout'&gt; LOG OUT&lt;/a&gt;&lt;br/&gt;";
	                if($_SESSION['level']==1){
	                    echo "LEVEL : Administrator";
	                }else if($_SESSION['level']==2){
	                    echo "LEVEL : Users";
	                }
	            }else{
	                echo "&lt;title&gt;Source Code Login / Register&lt;/title&gt;";
	                echo "&lt;h4&gt;Terima Kasih Sudah Mencoba Open Source Auth Ini,&lt;br/&gt; Untuk Pengembangan Saya Berikan Pada Kalian.&lt;/h4&gt;&lt;br/&gt;";
	                echo "&lt;br/&gt;&lt;h4&gt; Source Code Ini Berupa Fungsi Register - Login - Logout,&lt;br/&gt; untuk tampilan mohon maaf kurang bagus&lt;/h4&gt;";
	            }
	        ?&gt;
	    &lt;/div&gt;
	    &lt;div class="footer"&gt;
	        &lt;h5&gt; Copyright &amp;copy 2019 &lt;a href="http://bisa-koding.blogspot.com"&gt;Bisa Koding&lt;/a&gt;&lt;/h5&gt;
	    &lt;/div&gt;
	&lt;/body&gt;
	&lt;/html&gt;
</code></pre>
<br />
Styles.css<br />
<br />
<pre class="code code-css"><label>CSS </label><code>
body{
    margin: 0;
    padding: 0;
}
.menu{
    text-align: center;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
.menu ul li {
    float: left;
  }
  
.menu ul li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  /* Change the link color to #111 (black) on hover */
.menu ul li a:hover {
    background-color: #111;
  }
.main{
    height: 400px;
    justify-items: center;
    align-items: center;
    padding:10.1% 0 0px 35%;
}
.footer{
    background-color: #333;
    text-align: center;
    padding: 5px 5px;
    color: white;
    font-size: 1.4 em;
}
.footer a{
  color: white;
  text-decoration: none;
}
.btn{
  text-align: end;
}
.login-form{
  text-align: end;
  padding-left:5%;
}
.register-form{
  text-align: end;
}
</code></pre>
<br />
6. Setelah&nbsp; keduanya Selesai kita pindah pada fungsinya, kita buat koneksi databasenya ke mysql, buat file koneksi.php<br />
<br />
<br />
<pre class="code code-php"><label>PHP </label><code>&lt;?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "auth";

$conn = mysqli_connect($host, $user, $pass)or die(mysqli_error());
mysqli_select_db($conn, $database)or die(mysqli_error());
?&gt;</code></pre>
<br />
7. Sesudah itu buat file Login.php<br />
<pre class="code code-php"><label></label><code>&lt;h5&gt;Silakan Login Dengan Data Yang Telah Di Daftarkan&lt;/h5&gt;
&lt;form method="post" class="login-form"&gt;
    &lt;table&gt;
        &lt;thead&gt;
            &lt;th&gt;Email&lt;/th&gt;
            &lt;td&gt;&lt;input type="email" name="email"&gt;&lt;/td&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;th&gt;Password&lt;/th&gt;
            &lt;td&gt;&lt;input type="password" name="pass"&gt;&lt;/td&gt;
        &lt;/tbody&gt;
            &lt;th&gt;&lt;/th&gt;
            &lt;td class="btn"&gt;&lt;button name="login"&gt; LOGIN&lt;/button&gt;&lt;/td&gt;
    &lt;/table&gt;
&lt;/form&gt;
&lt;?php
$title = "Login - Source Code";
if(isset($_POST['login'])){
    //Inialisasi Kolom
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    if($email &amp;&amp; $pass){
        //Menyamakan Data Input Dengan Database - Inilah Fungsi Login
        $data_login = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND pass='$pass'") or die(mysql_error());
        $result = mysqli_fetch_assoc($data_login);
        $v_email = $result['email'];
        $v_pass = $result['pass'];
        //Verifikasi Email &amp; Password
        if($email == $v_email){
            if($pass == $v_pass){
                $_SESSION['nama'] = $result['nama'];
                $_SESSION['level'] = $result['level'];
                echo '&lt;script type="text/javascript"&gt;
                window.location ="index.php"&lt;/script&gt;';
            }else{
                echo "Password Salah";
            }
        }else{
            echo "Email Tidak Ditemukan";
        }
    }
}
?&gt;</code></pre>
<br />
8.Buatlah File register.php<br />
<pre class="code code-php"><label></label><code>&lt;h5&gt;Silakan Register Dengan Data Yang Akan Di Daftarkan&lt;/h5&gt;
&lt;form method="post" class="register-form"&gt;
    &lt;table&gt;
        &lt;thead&gt;
            &lt;th&gt;Nama&lt;/th&gt;
            &lt;td&gt;&lt;input type="text" name="nama"&gt;&lt;/td&gt;
            &lt;th&gt;Email&lt;/th&gt;
            &lt;td&gt;&lt;input type="email" name="email"&gt;&lt;/td&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;th&gt;Password&lt;/th&gt;
            &lt;td&gt;&lt;input type="password" name="pass"&gt;&lt;/td&gt;
            &lt;th&gt;Level&lt;/th&gt;
            &lt;td&gt;&lt;select name="level"&gt;
                &lt;option value="1"&gt;Admin&lt;/option&gt;
                &lt;option value="2"&gt;Users&lt;/option&gt;
            &lt;/select&gt;&lt;/td&gt;
        &lt;/tbody&gt;
            &lt;th&gt;&lt;/th&gt;
            &lt;td class="btn"&gt;&lt;button name="register"&gt;REGISTER&lt;/button&gt;&lt;/td&gt;
    &lt;/table&gt;
&lt;/form&gt;
&lt;?php
$title = "Register - Source Code";
if(isset($_POST['register'])){
    //Inisialisasi Kolom
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    //MD5 Berfungsi Merandom Password
    $pass = md5($_POST['pass']);
    $level = $_POST['level'];
    if($nama &amp;&amp; $email &amp;&amp; $pass &amp;&amp; $level){
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
            echo "&lt;script&gt;window.alert('Data Berhasil Di Tambah')&lt;/script&gt;";
            echo '&lt;script type="text/javascript"&gt;
            window.location ="index.php"&lt;/script&gt;';
            }else{
            echo"Data Tidak Berhasil Di Tambah";
            }
        }      
    }else{
        echo"Masih Ada Kolom Yang Belum Di Isi.";
    }
}
?&gt;</code></pre>
<br />
9. Setelah itu selesai tinggal anda run dalam xampp.<br />
<br />
<br />
Demikian Source code Login / Register dengan PHP semoga source code ini membantu anda.<br />
