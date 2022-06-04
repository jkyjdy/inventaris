<?php
// koneksi ke database

include 'koneksi.php';

// menangkap data yang dikirm dari form

$ID = $_POST['ID'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password =$_POST['password'];
$role =$_POST['role'];


//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE dir_medis='$id' <- diambil dari inputan hidden id

mysqli_query($koneksi,"update add_karyawan set nama='$nama', username='$username', password='$password', role='$role' where ID='$ID'");
echo"<script>alert('data masuk');window.location='../add_karyawan.php'</script>";
// ?>