# Login / Register Menggunakan PHP
<div class="separator" style="clear: both; text-align: center;">
<a href="https://4.bp.blogspot.com/-e9CBKYV5WG4/XMATJ2cpiXI/AAAAAAAABIQ/6QAx6qtFC4A5ZrYhszZ59GtXR_T-KgjAwCLcBGAs/s1600/HTML%2B_%2BCSS%2B_%2BJAVASCRIPT%2B_%2BPHP.jpg" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="650" data-original-width="1350" height="308" src="https://4.bp.blogspot.com/-e9CBKYV5WG4/XMATJ2cpiXI/AAAAAAAABIQ/6QAx6qtFC4A5ZrYhszZ59GtXR_T-KgjAwCLcBGAs/s640/HTML%2B_%2BCSS%2B_%2BJAVASCRIPT%2B_%2BPHP.jpg" width="640" /></a></div>
<br />
<div lang="id" style="font-family: calibri; margin: 0in;">
Counting
atau disebut menghitung selalu digunakan untuk beberapa hal dari yang kecil
hingga besar counting juga sering digunakan untuk Voting, Menentukan Terbesar
Dan Terkecil. Dalam Blog /<span style="mso-spacerun: yes;">&nbsp; </span>Website
Memiliki Counting ini mungkin berupa Widget atau API dari penyedianya.</div>
<div lang="id" style="font-family: calibri; margin: 0in;">
<br /></div>
<div lang="id" style="font-family: calibri; margin: 0in;">
Untuk
Sekarang ini kita akan membuat Counting / Voting, Yang bisa kita buat dengan
menggunakan PHP, Kita langsung saja ke TKP -- Tempat Kerja Proggramer.</div>
<br />
<br />
1. Langkah Pertama Siapkan Database Yang Akan Di Gunakan.<br />
<br />
<br />
<div style="direction: ltr;">
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-color: #A3A3A3; border-style: solid; border-width: 1pt; direction: ltr;" summary="" title="" valign="top">
 <tbody>
<tr>
  <td style="border-color: #A3A3A3; border-style: solid; border-width: 1pt; padding: 4pt 4pt 4pt 4pt; vertical-align: top; width: .6673in;"><div lang="id" style="font-family: Calibri; font-size: 11.0pt; margin: 0in;">
Nama</div>
</td>
  <td style="border-color: #A3A3A3; border-style: solid; border-width: 1pt; padding: 4pt 4pt 4pt 4pt; vertical-align: top; width: .6673in;"><div lang="id" style="font-family: Calibri; font-size: 11.0pt; margin: 0in;">
Tipe</div>
</td>
  <td style="border-color: #A3A3A3; border-style: solid; border-width: 1pt; padding: 4pt 4pt 4pt 4pt; vertical-align: top; width: .5in;"><div lang="id" style="font-family: Calibri; font-size: 11.0pt; margin: 0in;">
Index</div>
</td>
 </tr>
<tr>
  <td style="border-color: #A3A3A3; border-style: solid; border-width: 1pt; padding: 4pt 4pt 4pt 4pt; vertical-align: top; width: .6673in;"><div lang="id" style="font-family: Calibri; font-size: 11.0pt; margin: 0in;">
Id</div>
</td>
  <td style="border-color: #A3A3A3; border-style: solid; border-width: 1pt; padding: 4pt 4pt 4pt 4pt; vertical-align: top; width: .6673in;"><div lang="id" style="font-family: Calibri; font-size: 11.0pt; margin: 0in;">
bigint</div>
</td>
  <td style="border-color: #A3A3A3; border-style: solid; border-width: 1pt; padding: 4pt 4pt 4pt 4pt; vertical-align: top; width: .6034in;"><div lang="id" style="font-family: Calibri; font-size: 11.0pt; margin: 0in;">
Primary</div>
</td>
 </tr>
<tr>
  <td style="border-color: #A3A3A3; border-style: solid; border-width: 1pt; padding: 4pt 4pt 4pt 4pt; vertical-align: top; width: .6673in;"><div lang="id" style="font-family: Calibri; font-size: 11.0pt; margin: 0in;">
yes</div>
</td>
  <td style="border-color: #A3A3A3; border-style: solid; border-width: 1pt; padding: 4pt 4pt 4pt 4pt; vertical-align: top; width: .6673in;"><div lang="id" style="font-family: Calibri; font-size: 11.0pt; margin: 0in;">
int</div>
</td>
  <td style="border-color: #A3A3A3; border-style: solid; border-width: 1pt; padding: 4pt 4pt 4pt 4pt; vertical-align: top; width: .5in;"><div lang="id" style="font-family: Calibri; font-size: 11.0pt; margin: 0in;">
<br /></div>
</td>
 </tr>
<tr>
  <td style="border-color: #A3A3A3; border-style: solid; border-width: 1pt; padding: 4pt 4pt 4pt 4pt; vertical-align: top; width: .6673in;"><div lang="id" style="font-family: Calibri; font-size: 11.0pt; margin: 0in;">
no</div>
</td>
  <td style="border-color: #A3A3A3; border-style: solid; border-width: 1pt; padding: 4pt 4pt 4pt 4pt; vertical-align: top; width: .6673in;"><div lang="id" style="font-family: Calibri; font-size: 11.0pt; margin: 0in;">
int</div>
</td>
  <td style="border-color: #A3A3A3; border-style: solid; border-width: 1pt; padding: 4pt 4pt 4pt 4pt; vertical-align: top; width: .5in;"><div lang="id" style="font-family: Calibri; font-size: 11.0pt; margin: 0in;">
<br /></div>
</td>
 </tr>
</tbody></table>
<br /></div>
<div style="direction: ltr;">
2. Siapkan folder untuk menyimpan project anda, bila anda memakai XAMPP, anda harus pergi ke Localdisk C &gt;&gt; xampp &gt;&gt; htdocs</div>
<div style="direction: ltr;">
<br /></div>
<div style="direction: ltr;">
3. Agar tampilannya lebih bagus dan menarik kita pakai Material Design Lite untuk Stylenya. Klik link ini untuk mendownload <a href="http://4to.xyz/NVe" rel="nofollow" target="_blank">MDL&nbsp;</a></div>
<div style="direction: ltr;">
<br /></div>
<div style="direction: ltr;">
4. Buatlah Folder Css, Js untuk menampung file dari MDL seperti dibawah ini :</div>
<div style="direction: ltr;">
<br /></div>
<div class="separator" style="clear: both; text-align: center;">
<a href="https://4.bp.blogspot.com/-M7C1Dh1YEg8/XMAM0Xu7-nI/AAAAAAAABHc/qL_WV1_4Kooj2q_HUnbR_xHzthnlbmoOQCLcBGAs/s1600/Gambar%2Btidak%2Bberjudul.png" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="98" data-original-width="625" height="100" src="https://4.bp.blogspot.com/-M7C1Dh1YEg8/XMAM0Xu7-nI/AAAAAAAABHc/qL_WV1_4Kooj2q_HUnbR_xHzthnlbmoOQCLcBGAs/s640/Gambar%2Btidak%2Bberjudul.png" width="640" /></a></div>
<div class="separator" style="clear: both; text-align: center;">
</div>
<div style="direction: ltr;">
<br /></div>
<div style="direction: ltr;">
5.Buatlah Folder Database untuk menyimpang file koneksi ke mysql<br />
<div class="separator" style="clear: both; text-align: center;">
<a href="https://1.bp.blogspot.com/-88tlf3YSD9M/XMAUbojOdkI/AAAAAAAABIc/IFPtw6iy4W8TMc25Iej9YRjbZ20eC7nugCLcBGAs/s1600/Gambar%2Btidak%2Bberjsaudul.png" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="94" data-original-width="630" height="94" src="https://1.bp.blogspot.com/-88tlf3YSD9M/XMAUbojOdkI/AAAAAAAABIc/IFPtw6iy4W8TMc25Iej9YRjbZ20eC7nugCLcBGAs/s640/Gambar%2Btidak%2Bberjsaudul.png" width="640" /></a></div>
<br />
6. Di dalam folder Database anda buat file connect.php<br />
<br />
<pre class="code code-php"><label>PHP </label><code>&lt;?php
    error_reporting(0);
    //Data Koneksi Ke Database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "count";
    //Koneksi Database
    $conn = mysqli_connect($host, $user, $pass);
    mysqli_select_db($conn, $database)or die(mysqli_error());
?&gt;</code></pre>
<br />
5. Buatlah File Index.php untuk memulai tujuan kita untuk membuat vote.</div>
<div style="direction: ltr;">
<br /></div>
<div style="direction: ltr;">
<br /></div>
<br />
<pre class="code code-html"><label>HTML</label><code>&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;meta http-equiv="X-UA-Compatible" content="ie=edge"&gt;
    &lt;title&gt;Counting Source Code&lt;/title&gt;
    &lt;link rel="stylesheet" href="Css/material.css"/&gt;
    &lt;link rel="stylesheet" href="Css/styles.css"/&gt;
    &lt;link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css"&gt;
    &lt;link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="mdl-grid"&gt;
        &lt;div class="mdl-cell mdl-cell--4-col"&gt;&lt;/div&gt;
        &lt;div class="mdl-cell mdl-cell--4-col center"&gt;
            &lt;h5 class="text-center"&gt;
                Halo, Terima Kasih Sudah Datang, Silakan Klik Tombol Manapun Yang Kalian Sukai.
            &lt;/h5&gt;
            &lt;?php
            include_once("Database/connect.php");
            //Pengambilan Data Dari Database
            $sql = "SELECT * FROM count";
            $panggil_data = mysqli_query($conn, $sql);
            $data_count = mysqli_fetch_assoc($panggil_data);
            ?&gt;
            &lt;div class="mdl-grid"&gt;
                &lt;div class="mdl-cell mdl-cell--1-col"&gt;&lt;/div&gt;
                &lt;div class="mdl-cell mdl-cell--10-col"&gt;
                    &lt;span class="mdl-chip mdl-chip--contact"&gt;
                        &lt;span class="mdl-chip__contact mdl-color--green mdl-color-text--white"&gt;Y&lt;/span&gt;
                        &lt;span class="mdl-chip__text"&gt;&lt;?php echo $data_count['yes'];?&gt;&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;span class="mdl-chip mdl-chip--contact float-right"&gt;
                        &lt;span class="mdl-chip__contact mdl-color--red mdl-color-text--white"&gt;N&lt;/span&gt;
                        &lt;span class="mdl-chip__text"&gt;&lt;?php echo $data_count['no'];?&gt;&lt;/span&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="mdl-cell mdl-cell--1-col"&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="mdl-grid"&gt;
                &lt;div class="mdl-cell mdl-cell--4-col"&gt;&lt;/div&gt;
                &lt;div class="mdl-cell mdl-cell--7-col"&gt;
                    &lt;form method="get"&gt;
                        &lt;button name="yes" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"&gt;
                            &lt;i class="material-icons"&gt;done&lt;/i&gt; YES&lt;/button&gt;
                        &lt;button name="no"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"&gt;       
                            &lt;i class="material-icons"&gt;report&lt;/i&gt; NO&lt;/button&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
                &lt;div class="mdl-cell mdl-cell--1-col"&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;?php
                if(isset($_GET['yes'])){
                    //Pemanggilan Data
                    $yes = $data_count['yes'] +1;
                    $update_data = mysqli_query($conn, "UPDATE count SET yes='$yes'");
                    echo '&lt;script type="text/javascript"&gt;
                                window.location = "index.php"
                            &lt;/script&gt;';
                }else if(isset($_GET['no'])){
                    //Pemanggilan Data
                    $no = $data_count['no'] +1;
                    $update_data = mysqli_query($conn, "UPDATE count SET no='$no'");
                    echo '&lt;script type="text/javascript"&gt;
                                window.location = "index.php"
                            &lt;/script&gt;';
                }
            ?&gt;
        &lt;/div&gt;
        &lt;div class="mdl-cell mdl-cell--4-col"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;script src="Js/material.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
<br />
<br />
6. Setelah itu anda bisa lansung mencobanya.
<br />
<div class="separator" style="clear: both; text-align: center;">
<a href="https://2.bp.blogspot.com/-nJwVkeH5yM4/XMAP8IV-qbI/AAAAAAAABH4/PSlYEF2sBZY8EYeCwbeAfzAmjRbu5ybmwCLcBGAs/s1600/SC1.png" imageanchor="1" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"><img border="0" data-original-height="260" data-original-width="480" height="172" src="https://2.bp.blogspot.com/-nJwVkeH5yM4/XMAP8IV-qbI/AAAAAAAABH4/PSlYEF2sBZY8EYeCwbeAfzAmjRbu5ybmwCLcBGAs/s320/SC1.png" width="320" /></a></div>
