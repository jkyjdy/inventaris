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
                        <h1 class="h3 mb-0 text-gray-800">Form Input Barang</h1>
                    </div>
                    
                    <!-- ---------------------------------- ISI KONTEN ------------------------------------------- -->

                    <div class="card shadow mb-4">
                        <div class="card-header bg-primary text-white">
                            Form Inventaris RS. Brayat Minulya

                            <!-- membuat tabel -->

                            <div class="card-body" style="background:Slate Blue">
                                <form action="koneksi/input_barang.php"method="POST">
                                    <div class="row">
                                        <div class="col-md-4">
                                            Daftar Asset
                                            <select class="form-control" name="daftar_kode" required>
                                                <option value="">--Pilih--</option>
                                                <option value="Kendaraan">Kendaraan</option>
                                                <option value="Alat Kesehatan">Alat Kesehatan</option>
                                                <option value="Alat Kantor">Alat Kantor</option>
                                                <option value="Mebelair">Mebelair</option>
                                                <option value="Elektronik & Listrik">Elektronik & Listrik</option>
                                                <option value="Linen">Linen</option>
                                                <option value="Alat Rumah Tangga & Pertukangan">Alat Rumah Tangga & Pertukangan</option>
                                                <option value="Sanitair">Sanitair</option>
                                                <option value="Perpustakaan">Perpustakaan</option>
                                                <option value="Mesin">Mesin</option>
                                                <option value="Alat Proteksi Bencana">Alat Proteksi Bencana</option>
                                                <option value="Alat Pelindung Diri & Alat Peraga">Alat Pelindung Diri & Alat Peraga</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            Nama
                                            <input type="text" name="nama" class="form-control" required>
                                        </div>
                                        <!-- <div class="col-md-4">
                                            Kode
                                            <select class="form-control" name="kode" required>
                                                <option value="">--Pilih--</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>

                                            </select>
                                        </div> -->
                                        <div class="col-md-4">
                                            Satuan
                                            <select class="form-control" name="satuan" required>
                                                <option value="">--Pilih--</option>
                                                <option value="Unit">Unit</option>
                                                <option value="Lembar">Lembar</option>
                                                <option value="Buah">Buah</option>

                                            </select>
                                            
                                        </div>
                                        <div class="col-md-4"><br>
                                            <input type="submit" class="btn btn-success" value="Simpan"> 
                                        </div>
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
                                        <th>No </th>
                                        <th>Daftar Asset</th>
                                        <th>Nama</th>
                                        <!-- <th>Kode</th> -->
                                        <th>Satuan</th>
                                        <th>Lakukan_Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    include 'koneksi/koneksi.php';
                                    $no=0;
                                    $data=mysqli_query($koneksi,"select * from input_barang  order by kode asc");
                                    while($isi =mysqli_fetch_array($data)){
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $isi['daftar_kode']; ?></td>
                                            <td><?php echo $isi['nama']; ?></td>
                                            <!-- <td><?php echo $isi['kode']; ?></td> -->
                                            <td><?php echo $isi['satuan']; ?></td>
                                            <td>
                                                <a href="koneksi/hapus_input_barang.php?ID=<?php echo $isi['ID']; ?>"class="btn btn-danger"><i class="fa fa-eraser"></i></a>
                                            </td>
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