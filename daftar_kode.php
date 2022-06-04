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
                        <h1 class="h3 mb-0 text-gray-800">Daftar Kode Aset</h1>
                    </div>
                    
                    <!-- ---------------------------------- ISI KONTEN ------------------------------------------- -->
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Keterangan</th>
                                        <th>Kode</th>
                                        <th>Satuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <tr> 
                                        <td>1</td>
                                        <td>Lokasi</td>
                                        <td></td>
                                        <td>m2</td>
                                    </tr>
                                    <tr> 
                                        <td>2</td>
                                        <td>Kendaraan</td>
                                        <td>01</td>
                                        <td>Unit</td>
                                    </tr>
                                    <tr> 
                                        <td>3</td>
                                        <td>Alat-Alat Kesehatan</td>
                                        <td>02</td>
                                        <td>Unit</td>
                                    </tr>
                                    <tr> 
                                        <td>4</td>
                                        <td>Alat-Alat Kantor</td>
                                        <td>03</td>
                                        <td>Unit</td>
                                    </tr>
                                    <tr> 
                                        <td>5</td>
                                        <td>Mebelair</td>
                                        <td>04</td>
                                        <td>Unit</td>
                                    </tr>
                                    <tr> 
                                        <td>6</td>
                                        <td>Elektronik & Listrik</td>
                                        <td>05</td>
                                        <td>Unit</td>
                                    </tr>
                                    <tr> 
                                        <td>7</td>
                                        <td>Linen</td>
                                        <td>06</td>
                                        <td>Lembar</td>
                                    </tr>
                                    <tr> 
                                        <td>8</td>
                                        <td>Alat-Alat Rumah Tangga & Pertukangan</td>
                                        <td>07</td>
                                        <td>Unit</td>
                                    </tr>
                                    <tr> 
                                        <td>9</td>
                                        <td>Sanitair</td>
                                        <td>08</td>
                                        <td>Unit</td>
                                    </tr>
                                    <tr> 
                                        <td>10</td>
                                        <td>Perpustakaan</td>
                                        <td>09</td>
                                        <td>Unit</td>
                                    </tr>
                                    <tr> 
                                        <td>11</td>
                                        <td>Mesin</td>
                                        <td>10</td>
                                        <td>Unit</td>
                                    </tr>
                                    <tr> 
                                        <td>12</td>
                                        <td>Alat Proteksi Bencana</td>
                                        <td>11</td>
                                        <td>Unit</td>
                                    </tr>
                                    <tr> 
                                        <td>13</td>
                                        <td>Alat Pelindung Diri & Alat Peraga</td>
                                        <td>12</td>
                                        <td>Unit</td>
                                    </tr>
                                    <tr> 
                                        <td>14</td>
                                        <td>Lain-Lain</td>
                                        <td>13</td>
                                        <td>Unit</td>
                                    </tr>
                                </tbody>
                            </table>
                     
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