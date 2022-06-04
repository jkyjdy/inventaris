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
                        <h1 class="h3 mb-0 text-gray-800">Daftar Kode Direktorat</h1>
                    </div>
                    
                    <!-- ---------------------------------- ISI KONTEN ------------------------------------------- -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Urutan</th>
                                        <th>Keterangan</th>
                                        <th>Kode</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <tr> 
                                        <td>1</td>
                                        <td>1</td>
                                        <td>Direktorat Medis</td>
                                        <td>01.00.00</td>
                                    </tr>
                                    <tr> 
                                        <td>2</td>
                                        <td>--</td>
                                        <td>Bidang Pelayanan Medis</td>
                                        <td>01.01.00</td>
                                    </tr>
                                    <tr>
                                        <td>3</td> 
                                        <td>--</td>
                                        <td>IGD</td>
                                        <td>01.01.01</td>
                                    </tr>
                                    <tr> 
                                        <td>--</td>
                                        <td>PONEK</td>
                                        <td>01.01.02</td>
                                    </tr>
                                    <tr>
                                        <td>--</td> 
                                        <td>IBS</td>
                                        <td>01.01.03</td>
                                    </tr>
                                    <tr>
                                        <td>--</td> 
                                        <td>ICU</td>
                                        <td>01.01.04</td>
                                    </tr>
                                    <tr>
                                        <td>--</td> 
                                        <td>Poliklinik</td>
                                        <td>01.01.05</td>
                                    </tr>
                                    <tr>
                                        <td>--</td> 
                                        <td>Haemodialisa</td>
                                        <td>01.01.06</td>
                                    </tr>
                                    <tr>
                                        <td>--</td> 
                                        <td>PKRS</td>
                                        <td>01.01.07</td>
                                    </tr>
                                    <tr>
                                        <td>--</td> 
                                        <td>Bidang Penunjang Medis</td>
                                        <td>01.02.00</td>
                                    </tr>
                                    <tr>
                                        <td>--</td> 
                                        <td>Laboratorium</td>
                                        <td>01.02.01</td>
                                    </tr>
                                    <tr>
                                        <td>--</td> 
                                        <td>Radiologi</td>
                                        <td>01.02.02</td>
                                    </tr>
                                    <tr>
                                        <td>--</td> 
                                        <td>Farmasi</td>
                                        <td>01.02.03</td>
                                    </tr>
                                    <tr>
                                        <td>--</td> 
                                        <td>Rekam Medis</td>
                                        <td>01.02.04</td>
                                    </tr>
                                    <tr>
                                        <td>--</td> 
                                        <td>Fisioterapi</td>
                                        <td>01.02.05</td>
                                    </tr>
                                    <tr>
                                        <td>--</td> 
                                        <td>Tempat Pendaftaran Pasien</td>
                                        <td>01.02.06</td>
                                    </tr>
                                    <tr>
                                        <td>---</td> 
                                        <td>Direktorat Keperawatan</td>
                                        <td>02.00.00</td>
                                    </tr>
                                    <tr>
                                        <td>---</td> 
                                        <td>Bidang Keperawatan</td>
                                        <td>02.01.01</td>
                                    </tr>
                                    <tr>
                                        <td>---</td> 
                                        <td>Maria</td>
                                        <td>02.01.02</td>
                                    </tr>
                                    <tr>
                                        <td>---</td> 
                                        <td>Anna</td>
                                        <td>02.01.03</td>
                                    </tr>
                                    <tr>
                                        <td>---</td> 
                                        <td>Theresia</td>
                                        <td>02.01.04</td>
                                    </tr>
                                    <tr>
                                        <td>---</td> 
                                        <td>Yoseph</td>
                                        <td>02.01.05</td>
                                    </tr>
                                    <tr>
                                        <td>---</td> 
                                        <td>Pastoral Care</td>
                                        <td>02.01.06</td>
                                    </tr>
                                    <tr>
                                        <td>----</td> 
                                        <td>Direktorat Umum</td>
                                        <td>03.00.00</td>
                                    </tr>
                                    <tr>
                                        <td>----</td> 
                                        <td>Pemeliharaan & Sarana</td>
                                        <td>03.01.01</td>
                                    </tr>
                                    <tr>
                                        <td>----</td> 
                                        <td>Pemeliharaan Alkes</td>
                                        <td>03.01.02</td>
                                    </tr>
                                    <tr>
                                        <td>----</td> 
                                        <td>Bangunan Dan Pertukangan</td>
                                        <td>03.01.03</td>
                                    </tr>
                                    <tr>
                                        <td>----</td> 
                                        <td>Utility</td>
                                        <td>03.01.04</td>
                                    </tr>
                                    <tr>
                                        <td>----</td> 
                                        <td>Kendaraan</td>
                                        <td>03.01.05</td>
                                    </tr>
                                    <tr>
                                        <td>----</td> 
                                        <td>Keamanan</td>
                                        <td>03.01.06</td>
                                    </tr>
                                    <tr>
                                        <td>----</td> 
                                        <td>Kebersihan & Pertamanan</td>
                                        <td>03.01.07</td>
                                    </tr>
                                    <tr>
                                        <td>----</td> 
                                        <td>Sanitasi</td>
                                        <td>03.01.08</td>
                                    </tr>
                                    <tr>
                                        <td>----</td> 
                                        <td>Pengadaan & Pemeliharaan Linen</td>
                                        <td>03.01.09</td>
                                    </tr>
                                    <tr>
                                        <td>----</td> 
                                        <td>Bagian Gizi</td>
                                        <td>03.01.10</td>
                                    </tr>
                                    <tr>
                                        <td>-----</td> 
                                        <td>Direktorat Keuangan</td>
                                        <td>04.01.00</td>
                                    </tr>
                                    <tr>
                                        <td>-----</td> 
                                        <td>Bagian Akutansi & Piutang</td>
                                        <td>04.02.01</td>
                                    </tr>
                                    <tr>
                                        <td>-----</td> 
                                        <td>Bagian Keuangan</td>
                                        <td>04.02.02</td>
                                    </tr>
                                    <tr>
                                        <td>-----</td> 
                                        <td>Billing & penerimaan</td>
                                        <td>04.02.03</td>
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