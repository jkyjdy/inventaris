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
                        <h1 class="h3 mb-0 text-gray-800">Karyawan</h1>
                    </div>
                    
                    <!-- ---------------------------------- ISI KONTEN ------------------------------------------- -->
                    <div class="card show mb-4">
                        <div class="card-header bg-primary text-white">
                            Tambah Karyawan

                            <!-- Dropdown - User Information -->
                            <div class="card-body" style="background:Slate Blue">
                                <form action="koneksi/tambah_karyawan.php" method="POST">
                                    <div class="form-group">
                                        <label for="nama">Nama Karyawan :</label>
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Username :</label>
                                        <input type="text" class="form-control" name="username" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password :</label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>

                                    <div class="radio-inline">
										<label for="role">Role :</label>
                                        <select class="form-control" name="role"required>
                                            <option value="">--Pilih--</option>
                                            <option value="administrator">Administrator</option>
                                            <option value="direktorat medis">Direktorat Medis</option>
                                            <option value="direktorat keperawatan">Direktorat Keperawatan</option>
                                            <option value="direktorat umum">Direktorat Umum</option>
                                            <option value="direktorat keuangan">Direktorat Keuangan</option>
                                            <option value="direktorat sdm">Direktorat SDM</option>
                                            <option value="direktorat eksekutif">Direktorat Eksekutif</option>
                                            <option value="komite-komite">Komite-Komite</option>
                                            <option value="lain">Lain</option>
                                            <option value="inputer">Inputer</option>
                                            <option value="teknisi">Teknisi</option>

                                        </select>
                                        <!-- <label><input type="radio" name="role" value="administrator" >Administrator</label> -->
                                    </div>

                                    <!-- <div class="radio-inline">
                                        <label><input type="radio" name="role" value=user >User</label>
                                    </div> -->
                                    <br>
                                    <br>
                                    <input type="submit" class="btn btn-success" value="Simpan">

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
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <th width="100">Lakukan_Aksi</th>

                                    </tr>
                                </thead>

                                <tbody>
                                <?php
                                include 'koneksi/koneksi.php';
                                $no=0;
                                $data=mysqli_query($koneksi, "select * from add_karyawan order by ID desc");
                                while($isi=mysqli_fetch_array($data)){ 
                                    $no++;
                                    ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $isi['nama']; ?></td>
                                        <td><?php echo $isi['username']; ?></td>
                                        <td>******</td>
                                        <td><?php echo $isi['role']; ?></td>
                                        <td>
                                        <a href="edit_karyawan.php?ID=<?php echo $isi['ID']; ?>"class="btn btn-primary"  style="float:left"><i class="fas fa-file"></i></a> 
                                        <a href="koneksi/hapus_karyawan.php?ID=<?php echo $isi['ID']; ?>"class="btn btn-danger" style="float:right"><i class="fas fa-eraser"></i></a>   
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