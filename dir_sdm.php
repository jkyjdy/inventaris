<!DOCTYPE html>
<html lang="en">

<head>

   <?php
   include("halaman/head2.php");
   ?>

    <?php
    include("halaman/head.php");
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
                                        No Urut
                                        <input type="number" name="no_inventaris" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                        No Seri
                                        <input type="number" name="no_seri" class="form-control">
                                    </div>
                                    
                                    <div class="col-md-4">
                                        Tgl Pengadaan 
                                        <input type="date" name="tgl_pengadaan" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        Tahun Operasional 
                                        <input type="number" name="tahun_operasional" class="form-control" requied>
                                    </div>
                                    <div class="col-md-4">
                                        Unit
                                        <select class="form-control" name="unit" required>
                                            <option value="">--Pilih--</option>
                                            <option value="Rekrutmen & Penempatan">Rekrutmen & Penempatan</option>
                                            <option value="Pendidikan & Pelatihan">Pendididkan & Pelatihan</option>
                                            <option value="Kesejahteraan">Kesejahteraan</option>
                                        <select>
                                    </div>
                                    <div class="col-md-4">
                                        Jenis Barang 
										<input type = "text" class = "form-control" name = "jenis_barang" id = "jenis_barang" placeholder ="Isikan" required>
										<div id  = "jenis_baranglist" style="position:absolute;z-index:1; color:white; background-color:blue; padding:5px"></div>
                                        
                                    </div>   
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        Lokasi
                                        <textarea class = "form-control" name = "lokasi" required></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        Kondisi
                                        <select class="form-control" name="kondisi" required>
                                            <option value="">--Pilih--</option>
                                            <option value ="Baik">Baik</option>
                                            <option value ="Layak Pakai">Layak Pakai</option>
                                            <option value ="Tidak Layak Pakai">Tidak Layak Pakai</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                            Status
                                            <select class="form-control" name="status" required>
                                            <option value="">--Pilih--</option>
                                            <option value ="Baru">Baru</option>
                                            <option value ="Bekas">Bekas</option>
                                            <option value ="Rusak">Rusak</option>
                                            <option value ="Repair">Repair</option>
                                            <option value ="Hibah">Hibah</option>
                                            <option value ="Pinjam">Pinjam</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        Merk
                                        <input type="text" name="merk" class="form-control">
                                    </div>
                                    
                                    <div class="col-md-4">
                                            Type
                                            <input type="text" name="type" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                            Harga
                                            <input type="number" name="harga" class="form-control">
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
                                                <br>
                                                <font color="black"> Unit</font>
                                                <select class="form-control" name="unit" required>
                                                    <option value="">--Pilih--</option>
                                                    <option value="Rekrutmen & Penempatan">Rekrutmen & Penempatan</option>
                                                    <option value="Pendidikan & Pelatihan">Pendididkan & Pelatihan</option>
                                                    <option value="Kesejahteraan">Kesejahteraan</option>
                                                </select>
                                                
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
                        <form action="dir_sdm.php" method="POST">
                            <?php
                            include 'koneksi/koneksi.php';
                            $data1=mysqli_query($koneksi, "select count(jenis_barang) from dirsdm where unit='".$_POST['unit']."' and jenis_barang='".$_POST['jenis_barang']."'");
                            $isi1=mysqli_fetch_array($data1);
                            ?>
                            <div class="row">
                                <div class="col-md-4">
                                    Cari Unit :
                                    <select class="form-control" name="unit" > 
                                        <option>--Pilih--</option>
                                        <option value ="Rekrutmen & Penempatan" <?php if($_POST['unit']=="Rekrutmen & Penempatan"){ echo"selected";} ?>>Rekrutmen & Penempatan</option>
                                        <option value ="Pendidikan & Pelatihan" <?php if($_POST['unit']=="Pendidikan & Pelatihan"){ echo"selected";} ?>>Pendidikan & Pelatihan</option>
                                        <option value ="Kesejahteraan" <?php if($_POST['unit']=="Kesejahteraan"){ echo"selected";} ?>>Kesejahteraan</option>
                                    </select>  
                                   
                                </div>
                            
                                <div class="col-md-4">
                                    Jenis Barang :
                                    <input type="text" value="<?php echo $_POST['jenis_barang']; ?>" name="jenis_barang" class="form-control" required>
                                    
                                </div>

                                <div class="col-md-4">
                                    Total :
                                    <input type="text"  value="<?php echo $isi1['count(jenis_barang)']; ?>" name="hasil" class="form-control" readonly>
                                    
                                    
                                </div>
                                
                                <div class="col-md-4"> <br>
                                    <input type="submit" value="Klik" class="btn btn-warning">
                                </div>
                            </div>
                            </form>
                            <br><br>
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
                                            <?php
                                                if(($_SESSION['role']=="administrator") or ($_SESSION['role']=="direktorat sdm")) {
                                            ?>
                                            <th width="200">Lakukan_Aksi</th>
                                            <?php
                                                }
                                            ?>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    include 'koneksi/koneksi.php';
                                    $no=0;
                                    if (($_POST['unit']!="")&&($_POST['jenis_barang']!="")) {
                                        $unit=$_POST['unit'];
                                        $jenis_barang=$_POST['jenis_barang'];
                                        // jika kotakan ada isinya menjalankan query dibawah ini
                                        $data=mysqli_query($koneksi,"select * from dirsdm where unit = '$unit' and jenis_barang = '$jenis_barang'");
                                    }else{
                                        $data=mysqli_query($koneksi,"select * from dirsdm order by ID desc");
                                    }
                                    while($isi=mysqli_fetch_array($data)){
                                        $no++;
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo  $isi['no_inventaris']; ?>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#permintaan<?php echo $isi['ID'];?>">
                                            Maintenance
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="permintaan<?php echo $isi['ID'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <form action="koneksi/tambah5.php"method="POST">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>No Inventaris</label>
                                                                    <input type="text" class="form-control" placeholder="Nomor Harus Sesuai" name ="no_inventaris" required value="<?php echo $isi['no_inventaris']; ?>" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Direktorat</label>
                                                                    <input type = "text" class = "form-control" name = "direktorat"  placeholder ="Isikan" required value="<?php echo $_SESSION['role']; ?>" >          
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Unit</label>
                                                                    <input type = "text" class = "form-control" name = "unit"  placeholder ="Isikan" required value="<?php echo $isi['unit']; ?>">
                                                                            
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Jenis Barang</label>
                                                                    <input type = "text" class = "form-control" name = "jenis_barang"  placeholder ="Isikan" required value="<?php echo $isi['jenis_barang']; ?>">
                                                                            
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Merk</label>
                                                                    <input type = "text" class = "form-control" name = "merk" placeholder = "Merk" required value="<?php echo $isi['merk']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Inputer</label>
                                                                    <input type = "text" class = "form-control" name = "inputer" placeholder ="Inputer" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>Kerusakan</label>
                                                                    <textarea class = "form-control" name = "kerusakan" placeholder ="Tolong Diisi" required></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                                </div>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                            </td>

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
                                            <?php
                                                if($_SESSION['role']=="administrator"){
                                            ?>
                                            <td>
                                                <a href="editsdm.php?ID=<?php echo $isi['ID']; ?>" class="btn btn-primary" style="float:left"><i class="fa fa-file"></i></a>
                                                <a href="koneksi/hapussdm.php?ID=<?php echo $isi['ID']; ?>" class="btn btn-danger" style="float:right"><i class="fa fa-eraser"></i></a>
                                                <br>
                                                <br>
                                                <a href="cetak_sdm.php?ID=<?php echo $isi['ID']; ?>"class="btn btn-warning"  style="float:left"><i class="fa fa-print"></i></a>
                                                
                                            </td>
                                            <?php
                                                }
                                                ?>

                                                <?php
                                                if ($_SESSION['role']=="direktorat sdm"){
                                                ?>
                                            <td>
                                                <a href="cetak_sdm.php?ID=<?php echo $isi['ID']; ?>"class="btn btn-warning"  style="float:left"><i class="fa fa-print"></i></a>
                                            
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
                        <span>Copyright &copy; RSBM 2021</span>
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

<script>
    $(document).ready(function(){  
      $('#jenis_barang').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search4.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#jenis_baranglist').fadeIn();  
                          $('#jenis_baranglist').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#jenis_barang').val($(this).text());   
           $('#jenis_baranglist').fadeOut();  
      });  
 });  
</script>