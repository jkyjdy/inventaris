<?php
//koneksi database//
include 'koneksi.php';

// menangkap data ID yang dikirim dari url //

$ID = $_GET['ID'];

// menghapus data dari database //

mysqli_query($koneksi ,"delete from lain where ID='$ID'");

// mengalihkan halaman kembali ke lain.php // 

echo"<script>alert('Data berhasil dihapus');window.location='../lain.php'</script>";
?>