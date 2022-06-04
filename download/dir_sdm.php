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
                        <h1 class="h3 mb-0 text-gray-800">Direktorat SDM</h1>
                    </div>
                    
                    <!-- ---------------------------------- ISI KONTEN ------------------------------------------- -->
                    <div class="card show mb-4">
                        <div class="card-header bg-primary text-white">
                            Form Inventaris RS. Brayat Minulya
                        

                            <!-- Dropdown - User Information -->
                            <div class="card-body" style="background:Slate Blue">
                                <form action="koneksi/tambahdirsdm.php" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        No Inventaris
                                        <input type="text" name="no_inventaris" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                        Unit 
                                        <select class="form-control" name="unit" required>
                                            <option value="">--Pilih--</option>
                                            <option value="Rekrutmen & Penempatan">Rekrutmen & Penempatan</option>
                                            <option value="Pendidikan & Pelatihan">Pendididkan & Pelatihan</option>
                                            <option value="Kesejahteraan">Kesejahteraan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        Tgl Pengadaan
                                        <input type="date" name="tgl_pengadaan" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        Tahun Produksi
                                        <input type="number" name="tahun_produksi" class="form-control" requied>
                                    </div>
                                    <div class="col-md-4">
                                        Jenis Barang
                                        <select class="form-control"name="jenis_barang" required>
                                            <option value="">--Pilih--</option>
                                            <?php
                                            include 'koneksi/koneksi.php';
                                            $data2=mysqli_query($koneksi,"select * from input_barang");
                                            while($isi2=mysqli_fetch_array($data2)){
                                                ?>
                                            <option value="<?php echo $isi2['daftar_kode'] ?>"><?php echo $isi2['daftar_kode'] ?> <?php echo $isi2['kode'] ?> <?php echo $isi2['nama'] ?></option>
                                            <?php
                                            } 
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        Merk
                                        <input type="text" name="merk" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        Jumlah
                                        <input type="number" name="jumlah" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                        Kondisi
                                        <select class="form-control" name="kondisi" required>
                                            <option value="">--Pilih--</option>
                                            <option value="Baik">Baik</option>
                                            <option value="Layak Pakai">Layak Pakai</opotion>
                                            <option value="Tidak Layak Pakai">Tidak Layak Pakai</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        Harga
                                        <input type="number" name="harga" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        Status
                                        <select class="form-control" name="status" required>
                                            <option value="">--pilih--</option>
                                            <option value="Baru">Baru</option>
                                            <option value="Bekas">Bekas</option>
                                            <option value="Rusak">Rusak</option>
                                            <option value="Repair">Repair</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4"><br>
                                        <input type="submit" class="btn btn-success" value="Simpan">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                        Cetak
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <form action="cetak_laporan5.php" target="_blank" method="POST">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel" style="color:black">Filter Tanggal</h5>
                                                
                                            </div>
                                            <div class="modal-body">
                                                <font color="black"> Tanggal Awal</font> 
                                                <input type="date" class="form-control" name="TanggalAwal" required>
                                                <br>
                                                <font color="black"> Tanggal Akhir</font>
                                                <input type="date" class="form-control" name="TanggalAkhir" required>
                                                
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
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Inventaris</th>
                                            <th>Unit</th>
                                            <th>Tgl Pengadaan</th>
                                            <th>Tahun Produksi</th>
                                            <th width=200>Jenis_Barang</th>
                                            <th>Merk</th>
                                            <th>Jumlah</th>
                                            <th>Kondisi</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <?php
                                                if($_SESSION['role']=="user"){
                                            ?>
                                            <th width="200">Lakukan_Aksi</th>
                                            <?php
                                                }
                                            ?>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $no=0;
                                    $data=mysqli_query($koneksi,"select * from dirsdm order by ID desc");
                                    while($isi=mysqli_fetch_array($data)){
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo  $isi['no_inventaris']; ?></td>
                                            <td><?php echo $isi['unit']; ?></td>
                                            <td><?php echo $isi['tgl_pengadaan']; ?></td>
                                            <td><?php echo $isi['tahun_produksi']; ?></td>
                                            <td><?php echo $isi['jenis_barang']; ?></td>
                                            <td><?php echo $isi['merk']; ?></td>
                                            <td><?php echo $isi['jumlah']; ?></td>
                                            <td><?php echo $isi['kondisi']; ?></td>
                                            <td><?php echo $isi['harga']; ?></td>
                                            <td><?php echo $isi['status']; ?></td>
                                            <?php
                                                if($_SESSION['role']=="user"){
                                            ?>
                                            <td>
                                                <a href="editsdm.php?ID=<?php echo $isi['ID']; ?>" class="btn btn-primary" style="float:left"><i class="fa fa-file"></i></a>
                                                <a href="koneksi/hapussdm.php?ID=<?php echo $isi['ID']; ?>" class="btn btn-danger" style="float:right"><i class="fa fa-eraser"></i></a>
                                            </td>
                                            <?php
                                                }
                                            ?>

                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
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