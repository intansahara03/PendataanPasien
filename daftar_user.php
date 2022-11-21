<html>
    <head>
        <title> Membuat Login</title>
</head>
<body>
    <h2>Daftar User Anda</h2>
    <br/>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "DAFTAR GAGAL! USERNAME ATAU PASSWORD SALAH!";
        }else if($_GET['pesan'] == "daftar"){
            echo "ANDA TELAH BERHASIL DAFTAR-!!";
        }else if ($_GET['pesan'] == "belum_daftar"){
            echo "ANDA HARUS DAFTAR UNRUK MENGAKSES HALAMAN ADMIN";
        }
    }
    ?>
    <br/>
    <br/>
    <form method="POST" action="cek_login.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukan username"></td>
</tr>
<tr>
    <td>password</td>
    <td>:</td>
    <td><input type="password" name="password" placeholder="Masukan password"></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><a href="login.php"><input type="button" name="daftar" value="daftar"/></a></td>
   </tr>
  </table>
</form>
</body>
</html>