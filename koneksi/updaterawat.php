<?php
// koneksi ke database

include 'koneksi.php';

// menangkap data yang dikirm dari form

$ID = $_POST['ID'];
$no_inventaris = $_POST['no_inventaris'];
$unit = $_POST['unit'];
$tgl_pengadaan = $_POST['tgl_pengadaan'];
$tahun_operasional = $_POST['tahun_operasional'];
$jenis_barang = $_POST['jenis_barang'];
$merk = $_POST['merk'];
$lokasi = $_POST['lokasi'];
$kondisi = $_POST['kondisi'];
$harga = $_POST['harga'];
$status = $_POST['status'];
$no_seri = $_POST['no_seri'];
$type = $_POST['type'];


$data=mysqli_query($koneksi, "select *from input_barang where nama='$jenis_barang'");
$isi=mysqli_fetch_array($data);
$ID1=$isi['ID'];


// mengambil 3 hruf kalimat
$sub_unit=substr($unit,0,4);

$unit_new=strtoupper($sub_unit);

$sub_jenis_barang=substr($jenis_barang,0,4);

$jenis_barang_new=strtoupper($sub_jenis_barang);

$sub_tgl_pengadaan=substr($tgl_pengadaan,5,2);


//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE lain='$id' <- diambil dari inputan hidden id

mysqli_query($koneksi,"update dirrawat set no_inventaris='$no_inventaris/$ID/$jenis_barang_new/$unit_new/$sub_tgl_pengadaan/$tahun_operasional', unit='$unit', tgl_pengadaan='$tgl_pengadaan', tahun_operasional='$tahun_operasional', jenis_barang='$jenis_barang', merk='$merk', lokasi='$lokasi', kondisi='$kondisi', harga='$harga', status='$status', no_seri='$no_seri', type='$type' where ID='$ID'");

header("location:../dirrawat.php");

// echo "<script>alert('Data berhasil di edit!');history.go(-1);</script>";
?>