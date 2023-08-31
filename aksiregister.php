<?php
include "koneksi.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$query1 = "select * from users where username='$username'";
$data1 = mysqli_query($koneksi,$query1);
$row = mysqli_fetch_array($data1);

if($row['username'] == $username) {
    header ("location:login.php?pesan=err");
}else {
    $query = "insert into users values(null,'$nama','$username','$password','3')";
    $data = mysqli_query($koneksi,$query);
    header ("location:../login.php?pesan=sukses");
}

?>