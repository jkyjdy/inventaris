<?php
// koneksi database
include 'koneksi.php';

//menangkap data yang dikirm dari form

$nama = $_POST['nama'];
$username = $_POST['username'];
$password =$_POST['password'];
$role =$_POST['role'];


//menginput data ke database

mysqli_query($koneksi,"insert into add_karyawan values('','$nama','$username','$password','$role')");

// mengalihkan halaman kembali ke direksekutif.php
header("location:../add_karyawan.php");

?>