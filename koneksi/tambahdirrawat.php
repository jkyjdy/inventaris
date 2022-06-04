<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
</head>

<body>
<?php
// koneksi database
include 'koneksi.php';

//menangkap data yang dikirm dari form

$no_inventaris = $_POST['no_inventaris'];
$no_seri = $_POST['no_seri'];
$tgl_pengadaan =$_POST['tgl_pengadaan'];
$tahun_operasional = $_POST['tahun_operasional'];
$unit = $_POST['unit'];
$jenis_barang = $_POST['jenis_barang'];
$lokasi = $_POST['lokasi'];
$kondisi = $_POST['kondisi'];
$status = $_POST['status'];
$merk = $_POST['merk'];
$type = $_POST['type'];
$harga = $_POST['harga'];

$data=mysqli_query($koneksi, "select *from input_barang where nama='$jenis_barang'");
$isi=mysqli_fetch_array($data);
$ID=$isi['ID'];

// mengambil 3 hruf kalimat
$sub_unit=substr($unit,0,4);

$unit_new=strtoupper($sub_unit);

$sub_jenis_barang=substr($jenis_barang,0,4);

$jenis_barang_new=strtoupper($sub_jenis_barang);

$sub_tgl_pengadaan=substr($tgl_pengadaan,5,2);

//menginput data ke database

$data=mysqli_query($koneksi, "select * from dirrawat where no_inventaris = '$no_inventaris/$jenis_barang_new/$unit_new/$sub_tgl_pengadaan/$tahun_operasional'") or die (mysqli_error());
$isi=mysqli_fetch_array($data);


if(mysqli_num_rows($data) > 0){

  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>";
  echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>";
  echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js'></script>";

  echo"<script>
    swal({ title: 'Gagal',
       text: 'Data Sudah Ada',
       showConfirmButton: false,
       timer: 1500,
       type: 'error'}).then(okay => {
         if (okay) {
          window.location.href = '../dirrawat.php';
        }
      });
    </script>";
} else {

//menginput data ke database

mysqli_query($koneksi,"insert into dirrawat values('','$no_inventaris/$jenis_barang_new/$unit_new/$sub_tgl_pengadaan/$tahun_operasional','$unit','$tgl_pengadaan','$tahun_operasional','$jenis_barang','$merk','$lokasi','$kondisi','$harga','$status','$no_seri','$type','')");
// mengalihkan halaman kembali ke lain.php

    echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>";
    echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>";
    echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js'></script>";

    echo"<script>
      swal({ title: 'Berhasil',
         text: 'Data Berhasil Tersimpan',
         showConfirmButton: false,
         timer: 1500,
         type: 'success'}).then(okay => {
           if (okay) {
            window.location.href = '../dirrawat.php';
          }
        });
      </script>";
}

//header("location:../dirrawat.php");

?>
</body>

</html>
