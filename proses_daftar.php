<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $Username=$_POST['username'];
    $Password=$_POST['password'];

    $sql = "INSERT INTO intan9nov('username', 'password') VALUES ('$Username', '$Password')";
    $query= mysqli_query($koneksi, $sql); 
}else{
    ('akses dilarang');
}
?>