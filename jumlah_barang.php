<!DOCTYPE html>
<html lang="en">

<head>

   <?php
   include("halaman/head2.php");
   ?>

</head>

<body id="page-top">



    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <!-- memasukan sidebar  -->
       <?php
       include("halaman/sidebar.php");
       ?>
       
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- memasukan header -->
                <?php
                include("halaman/header.php");
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <!-- ------------------------ MEMASUKKAN JUDUL --------------------------------- -->
                        <h1 class="h3 mb-0 text-gray-800">Jumlah Data Global</h1>
                    </div>
                    
                    <!-- ---------------------------------- ISI KONTEN ------------------------------------------- -->

                    <div class="card shadow mb-4">
                        <div class="card-header bg-primary text-white">
                            Form Inventaris RS. Brayat Minulya

                            <!-- membuat tabel -->

                            <div class="card-body" style="background:Slate Blue">
                                <form action="jumlah_barang.php"method="POST">
                                    <?php
                                        include 'koneksi/koneksi.php';
                                        $data1=mysqli_query($koneksi, "select count(jenis_barang) from dir_medis where jenis_barang='".$_POST['jenis_barang']."'");
                                        $isi1=mysqli_fetch_array($data1);

                                        $data2=mysqli_query($koneksi, "select count(jenis_barang) from dirum where jenis_barang='".$_POST['jenis_barang']."'");
                                        $isi2=mysqli_fetch_array($data2);

                                        $data3=mysqli_query($koneksi, "select count(jenis_barang) from dirrawat where jenis_barang='".$_POST['jenis_barang']."'");
                                        $isi3=mysqli_fetch_array($data3);

                                        $data4=mysqli_query($koneksi, "select count(jenis_barang) from dir_keuangan where jenis_barang='".$_POST['jenis_barang']."'");
                                        $isi4=mysqli_fetch_array($data4);

                                        $data5=mysqli_query($koneksi, "select count(jenis_barang) from dirsdm where jenis_barang='".$_POST['jenis_barang']."'");
                                        $isi5=mysqli_fetch_array($data5);

                                        $data6=mysqli_query($koneksi, "select count(jenis_barang) from direksekutif where jenis_barang='".$_POST['jenis_barang']."'");
                                        $isi6=mysqli_fetch_array($data6);

                                        $data7=mysqli_query($koneksi, "select count(jenis_barang) from komite where jenis_barang='".$_POST['jenis_barang']."'");
                                        $isi7=mysqli_fetch_array($data7);

                                        $data8=mysqli_query($koneksi, "select count(jenis_barang) from lain where jenis_barang='".$_POST['jenis_barang']."'");
                                        $isi8=mysqli_fetch_array($data8);

                                    ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                        Jenis Barang
                                        <input type="text" value="<?php echo $_POST['jenis_barang']; ?>" name="jenis_barang" class="form-control" required>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            Total
                                            <input type="text"  value="<?php echo $isi1['count(jenis_barang)']+$isi2['count(jenis_barang)']+$isi3['count(jenis_barang)']+$isi4['count(jenis_barang)']+$isi5['count(jenis_barang)']+$isi6['count(jenis_barang)']+$isi7['count(jenis_barang)']+$isi8['count(jenis_barang)']; ?>" name="hasil" class="form-control" readonly>
                                        </div>
                                        
                                        
                                        <div class="col-md-4"><br>
                                            <!-- <input type="submit" class="btn btn-success"  value="Jumlah">  -->
                                            <button type="submit" class=" btn btn-success"  >
                                                <i class="fa fa-search"></i>  Jumlah 
                                            </button>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#cetak">
                                               <i class="fa fa-print"></i> Cetak
                                            </button> 
                                        
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="cetak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <form action="cetak_jumlah.php" target="_blank" method="POST">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel" style="color:black">Cetak Laporan</h5>
                                                
                                            </div>
                                            <div class="modal-body">
                                                <font color="black"> Jenis Barang</font> 
                                                <input type="text" class="form-control" value="<?php echo $_POST['jenis_barang']; ?>" name="jenis_barang" required>
                                                <br>
                                                <font color="black"> Total</font> 
                                                <input type="text" class="form-control" value="<?php echo $isi1['count(jenis_barang)']+$isi2['count(jenis_barang)']+$isi3['count(jenis_barang)']+$isi4['count(jenis_barang)']+$isi5['count(jenis_barang)']+$isi6['count(jenis_barang)']+$isi7['count(jenis_barang)']+$isi8['count(jenis_barang)']; ?>" readonly name="Total" required>
                                                             
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <input type="submit" value="Cetak" class="btn btn-warning">
                                                <!-- <a href="cetak_laporan.php" target="_blank" class="btn btn-warning">Cetak</a> -->
                                            </div>
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                    <!-- menampilkan daftar table -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Inventaris</th>
                                        <th>No Seri</th> 
                                        <th>Tgl Pengadaan</th>
                                        <th>Tahun Operasional</th>
                                        <th>Unit</th>
                                        <th width="200">Jenis_Barang</th>
                                        <th>Lokasi</th>
                                        <th>Kondisi</th>
                                        <th>Status</th>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    include 'koneksi/koneksi.php';
                                    $no=0;
                                    if (($_POST['jenis_barang']!="")) {
                                        $jenis_barang=$_POST['jenis_barang'];
                                        // jika kotakan ada isinya menjalankan query dibawah ini
                                        $data=mysqli_query($koneksi,"select * from dir_medis where  jenis_barang = '$jenis_barang'");
                                    }else{
                                        $data=mysqli_query($koneksi,"select * from dir_medis order by ID desc");
                                    }
                                    while($isi =mysqli_fetch_array($data)){
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $isi['no_inventaris']; ?></td>
                                            <td><?php echo $isi['no_seri']; ?></td>
                                            <td><?php echo $isi['tgl_pengadaan']; ?></td>
                                            <td><?php echo $isi['tahun_operasional']; ?></td>
                                            <td><?php echo $isi['unit']; ?></td>
                                            <td><?php echo $isi['jenis_barang']; ?></td>
                                            <td><?php echo $isi['lokasi']; ?></td>
                                            <td><?php echo $isi['kondisi']; ?></td>
                                            <td><?php echo $isi['status']; ?></td>
                                            <td><?php echo $isi['merk']; ?></td>
                                            <td><?php echo $isi['type']; ?></td>
                                            <td><?php echo $isi['harga']; ?></td>
                                            
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    include 'koneksi/koneksi.php';
                                    $no=0;
                                    if (($_POST['jenis_barang']!="")) {
                                        $jenis_barang=$_POST['jenis_barang'];
                                        // jika kotakan ada isinya menjalankan query dibawah ini
                                        $data2=mysqli_query($koneksi,"select * from dirum where  jenis_barang = '$jenis_barang'");
                                    }else{
                                        $data2=mysqli_query($koneksi,"select * from dirum order by ID desc");
                                    }
                                    while($isi2 =mysqli_fetch_array($data2)){
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $isi2['no_inventaris']; ?></td>
                                            <td><?php echo $isi2['no_seri']; ?></td>
                                            <td><?php echo $isi2['tgl_pengadaan']; ?></td>
                                            <td><?php echo $isi2['tahun_operasional']; ?></td>
                                            <td><?php echo $isi2['unit']; ?></td>
                                            <td><?php echo $isi2['jenis_barang']; ?></td>
                                            <td><?php echo $isi2['lokasi']; ?></td>
                                            <td><?php echo $isi2['kondisi']; ?></td>
                                            <td><?php echo $isi2['status']; ?></td>
                                            <td><?php echo $isi2['merk']; ?></td>
                                            <td><?php echo $isi2['type']; ?></td>
                                            <td><?php echo $isi2['harga']; ?></td>
                                            
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    include 'koneksi/koneksi.php';
                                    $no=0;
                                    if (($_POST['jenis_barang']!="")) {
                                        $jenis_barang=$_POST['jenis_barang'];
                                        // jika kotakan ada isinya menjalankan query dibawah ini
                                        $data3=mysqli_query($koneksi,"select * from dirrawat where  jenis_barang = '$jenis_barang'");
                                    }else{
                                        $data3=mysqli_query($koneksi,"select * from dirrawat order by ID desc");
                                    }
                                    while($isi3 =mysqli_fetch_array($data3)){
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $isi3['no_inventaris']; ?></td>
                                            <td><?php echo $isi3['no_seri']; ?></td>
                                            <td><?php echo $isi3['tgl_pengadaan']; ?></td>
                                            <td><?php echo $isi3['tahun_operasional']; ?></td>
                                            <td><?php echo $isi3['unit']; ?></td>
                                            <td><?php echo $isi3['jenis_barang']; ?></td>
                                            <td><?php echo $isi3['lokasi']; ?></td>
                                            <td><?php echo $isi3['kondisi']; ?></td>
                                            <td><?php echo $isi3['status']; ?></td>
                                            <td><?php echo $isi3['merk']; ?></td>
                                            <td><?php echo $isi3['type']; ?></td>
                                            <td><?php echo $isi3['harga']; ?></td>
                                            
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    include 'koneksi/koneksi.php';
                                    $no=0;
                                    if (($_POST['jenis_barang']!="")) {
                                        $jenis_barang=$_POST['jenis_barang'];
                                        // jika kotakan ada isinya menjalankan query dibawah ini
                                        $data4=mysqli_query($koneksi,"select * from dir_keuangan where  jenis_barang = '$jenis_barang'");
                                    }else{
                                        $data4=mysqli_query($koneksi,"select * from dir_keuangan order by ID desc");
                                    }
                                    while($isi4 =mysqli_fetch_array($data4)){
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $isi4['no_inventaris']; ?></td>
                                            <td><?php echo $isi4['no_seri']; ?></td>
                                            <td><?php echo $isi4['tgl_pengadaan']; ?></td>
                                            <td><?php echo $isi4['tahun_operasional']; ?></td>
                                            <td><?php echo $isi4['unit']; ?></td>
                                            <td><?php echo $isi4['jenis_barang']; ?></td>
                                            <td><?php echo $isi4['lokasi']; ?></td>
                                            <td><?php echo $isi4['kondisi']; ?></td>
                                            <td><?php echo $isi4['status']; ?></td>
                                            <td><?php echo $isi4['merk']; ?></td>
                                            <td><?php echo $isi4['type']; ?></td>
                                            <td><?php echo $isi4['harga']; ?></td>
                                            
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    include 'koneksi/koneksi.php';
                                    $no=0;
                                    if (($_POST['jenis_barang']!="")) {
                                        $jenis_barang=$_POST['jenis_barang'];
                                        // jika kotakan ada isinya menjalankan query dibawah ini
                                        $data5=mysqli_query($koneksi,"select * from dirsdm where  jenis_barang = '$jenis_barang'");
                                    }else{
                                        $data5=mysqli_query($koneksi,"select * from dirsdm order by ID desc");
                                    }
                                    while($isi5 =mysqli_fetch_array($data5)){
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $isi5['no_inventaris']; ?></td>
                                            <td><?php echo $isi5['no_seri']; ?></td>
                                            <td><?php echo $isi5['tgl_pengadaan']; ?></td>
                                            <td><?php echo $isi5['tahun_operasional']; ?></td>
                                            <td><?php echo $isi5['unit']; ?></td>
                                            <td><?php echo $isi5['jenis_barang']; ?></td>
                                            <td><?php echo $isi5['lokasi']; ?></td>
                                            <td><?php echo $isi5['kondisi']; ?></td>
                                            <td><?php echo $isi5['status']; ?></td>
                                            <td><?php echo $isi5['merk']; ?></td>
                                            <td><?php echo $isi5['type']; ?></td>
                                            <td><?php echo $isi5['harga']; ?></td>
                                            
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    include 'koneksi/koneksi.php';
                                    $no=0;
                                    if (($_POST['jenis_barang']!="")) {
                                        $jenis_barang=$_POST['jenis_barang'];
                                        // jika kotakan ada isinya menjalankan query dibawah ini
                                        $data6=mysqli_query($koneksi,"select * from direksekutif where  jenis_barang = '$jenis_barang'");
                                    }else{
                                        $data6=mysqli_query($koneksi,"select * from direksekutif order by ID desc");
                                    }
                                    while($isi =mysqli_fetch_array($data6)){
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $isi6['no_inventaris']; ?></td>
                                            <td><?php echo $isi6['no_seri']; ?></td>
                                            <td><?php echo $isi6['tgl_pengadaan']; ?></td>
                                            <td><?php echo $isi6['tahun_operasional']; ?></td>
                                            <td><?php echo $isi6['unit']; ?></td>
                                            <td><?php echo $isi6['jenis_barang']; ?></td>
                                            <td><?php echo $isi6['lokasi']; ?></td>
                                            <td><?php echo $isi6['kondisi']; ?></td>
                                            <td><?php echo $isi6['status']; ?></td>
                                            <td><?php echo $isi6['merk']; ?></td>
                                            <td><?php echo $isi6['type']; ?></td>
                                            <td><?php echo $isi6['harga']; ?></td>
                                            
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    include 'koneksi/koneksi.php';
                                    $no=0;
                                    if (($_POST['jenis_barang']!="")) {
                                        $jenis_barang=$_POST['jenis_barang'];
                                        // jika kotakan ada isinya menjalankan query dibawah ini
                                        $data7=mysqli_query($koneksi,"select * from komite where  jenis_barang = '$jenis_barang'");
                                    }else{
                                        $data7=mysqli_query($koneksi,"select * from komite order by ID desc");
                                    }
                                    while($isi7 =mysqli_fetch_array($data7)){
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $isi7['no_inventaris']; ?></td>
                                            <td><?php echo $isi7['no_seri']; ?></td>
                                            <td><?php echo $isi7['tgl_pengadaan']; ?></td>
                                            <td><?php echo $isi7['tahun_operasional']; ?></td>
                                            <td><?php echo $isi7['unit']; ?></td>
                                            <td><?php echo $isi7['jenis_barang']; ?></td>
                                            <td><?php echo $isi7['lokasi']; ?></td>
                                            <td><?php echo $isi7['kondisi']; ?></td>
                                            <td><?php echo $isi7['status']; ?></td>
                                            <td><?php echo $isi7['merk']; ?></td>
                                            <td><?php echo $isi7['type']; ?></td>
                                            <td><?php echo $isi7['harga']; ?></td>
                                            
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    include 'koneksi/koneksi.php';
                                    $no=0;
                                    if (($_POST['jenis_barang']!="")) {
                                        $jenis_barang=$_POST['jenis_barang'];
                                        // jika kotakan ada isinya menjalankan query dibawah ini
                                        $data8=mysqli_query($koneksi,"select * from lain where  jenis_barang = '$jenis_barang'");
                                    }else{
                                        $data8=mysqli_query($koneksi,"select * from lain order by ID desc");
                                    }
                                    while($isi8 =mysqli_fetch_array($data8)){
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $isi8['no_inventaris']; ?></td>
                                            <td><?php echo $isi8['no_seri']; ?></td>
                                            <td><?php echo $isi8['tgl_pengadaan']; ?></td>
                                            <td><?php echo $isi8['tahun_operasional']; ?></td>
                                            <td><?php echo $isi8['unit']; ?></td>
                                            <td><?php echo $isi8['jenis_barang']; ?></td>
                                            <td><?php echo $isi8['lokasi']; ?></td>
                                            <td><?php echo $isi8['kondisi']; ?></td>
                                            <td><?php echo $isi8['status']; ?></td>
                                            <td><?php echo $isi8['merk']; ?></td>
                                            <td><?php echo $isi8['type']; ?></td>
                                            <td><?php echo $isi8['harga']; ?></td>
                                            
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                </tbody>

                            </table>
                        </div>
                    </div>







                    <!-- ----------------------------------------------------------------------------------------------- -->
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php 
        include("halaman/footer2.php");
    ?>

</body>

</html>