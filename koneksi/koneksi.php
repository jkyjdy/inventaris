<?php 
 
 $koneksi = mysqli_connect("localhost","root","","inventaris");
//  $koneksi = mysqli_connect("localhost","u7718053_jecky","jkyhdy123","u7718053_inventaris");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>