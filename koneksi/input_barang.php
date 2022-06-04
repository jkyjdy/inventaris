<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
</head>

<body>

<?php

//koneksi database

include 'koneksi.php';

//menangkap data yang dikirm dari form

$daftar_kode =$_POST['daftar_kode'];
$nama=$_POST['nama'];
$kode=$_POST['kode'];
$satuan=$_POST['satuan'];

//menginput data ke database

//$sql = $koneksi,"select * FROM input_barang WHERE nama='$nama'";
$query = mysqli_query($koneksi, "select * from input_barang where nama='$nama'") or die (mysqli_error());

if(mysqli_num_rows($query) > 0){

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
            window.location.href = '../input_barang.php';
          }
        });
      </script>";
} else {

mysqli_query($koneksi,"insert into input_barang value('','$daftar_kode', '$nama', '$kode', '$satuan')");
 
//$query = mysqli_query($sql) or die (mysqli_error());

//mengalihkan halaman kemnali

echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>";
    echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>";
    echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js'></script>";

    echo"<script>
      swal({ title: 'Berhasil',
         text: 'Data Berhasil Disimpan',
         showConfirmButton: false,
         timer: 1500,
         type: 'success'}).then(okay => {
           if (okay) {
            window.location.href = '../input_barang.php';
          }
        });
      </script>";

}

?>

</body>

</html>