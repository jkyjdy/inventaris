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
                        <h1 class="h3 mb-0 text-gray-800">Direktorat Medis</h1>
                    </div>
                    
                    <!-- ---------------------------------- ISI KONTEN ------------------------------------------- -->
                    <div class="card shadow mb-4">
                        <div class="card-header bg-primary text-white">
                        Form Inventaris RS. Brayat Minulya

						<?php
						include 'koneksi/koneksi.php';
						$ID = $_GET['ID'];
						$data = mysqli_query($koneksi,"select * from dir_medis where ID='$ID'");
						while($isi=mysqli_fetch_array($data)){
							?>
						
                        
                            <!-- Dropdown - User Information -->
                            <div class="card-body" style="background:Slate Blue"> 
                                <form action="koneksi/update.php"method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        No Urut 
                                        <?php
                                        $no_inventaris=$isi['no_inventaris'];
                                        $sub_no_inventaris=substr($no_inventaris,0,2);
                                        ?>
										<input type="hidden" class="form-control" name="ID" value="<?php echo $isi['ID']; ?>">
                                        <input type="text" name= "no_inventaris" value = "<?php echo $sub_no_inventaris ?>" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        No Seri
                                        <input type="number" name="no_seri" class="form-control" value="<?php echo $isi['no_seri']; ?>">
                                    </div>
                                    <div class="col-md-4">
                                        Tgl Pengadaan
                                        <input type="date" name="tgl_pengadaan" class="form-control"value="<?php echo $isi['tgl_pengadaan']; ?>">
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        Tahun Operasional 
                                        <input type="number" name="tahun_operasional" class="form-control" value="<?php echo $isi['tahun_operasional']; ?>">
                                    </div>
                                    <div class="col-md-4">
                                         Unit 
                                        <select class="form-control" name="unit" value="<?php echo $isi['unit']; ?>"> 
                                            <option>--Pilih--</option>
                                            <option value ="IGD" <?php if($isi['unit']=="IGD"){ echo"selected";} ?>>IGD</option>
                                            <option value ="PONEK" <?php if($isi['unit']=="PONEK"){ echo"selected";} ?>>PONEK</option>
                                            <option value ="IBS" <?php if($isi['unit']=="IBS"){ echo"selected";} ?>>IBS</option>
                                            <option value ="ICU" <?php if($isi['unit']=="ICU"){ echo"selected";} ?>>ICU</option>
                                            <option value ="Poliklinik" <?php if($isi['unit']=="Poliklinik"){ echo"selected";} ?>>Poliklinik</option>
                                            <option value ="Haemodialisa" <?php if($isi['unit']=="Haemodialisa"){ echo"selected";} ?>>Haemodialisa</option>
                                            <option value ="PKRS" <?php if($isi['unit']=="PKRS"){ echo"selected";} ?>>PKRS</option>
                                            <option value ="Bidang Penunjang Medis" <?php if($isi['unit']=="Bidang Penunjang Medis"){ echo"selected";} ?>>Bidang Penunjang Medis</option>
                                            <option value ="Laboratorium" <?php if($isi['unit']=="Laboratorium"){ echo"selected";} ?>>Laboratorium</option>
                                            <option value ="Radiologi" <?php if($isi['unit']=="Radiologi"){ echo"selected";} ?>>Radiologi</option>
                                            <option value ="Farmasi" <?php if($isi['unit']=="Farmasi"){ echo"selected";} ?>>Farmasi</option>
                                            <option value ="Rekam Medis" <?php if($isi['unit']=="Rekam Medis"){ echo"selected";} ?>>Rekam Medis</option>
                                            <option value ="Fisioterapi" <?php if($isi['unit']=="Fisioterapi"){ echo"selected";} ?>>Fisioterapi</option>
                                            <option value ="Tempat Pendaftaran Pasien" <?php if($isi['unit']=="Tempat Pendaftaran Pasien"){ echo"selected";} ?>>Tempat Pendaftaran Pasien</option>
                                            <option value ="Gizi" <?php if($isi['unit']=="Gizi"){ echo"selected";} ?>>Gizi</option>
                                        </select>             
                                    </div>
                                    <div class="col-md-4">
                                             Jenis Barang 
                                             
                                            <input type = "text" class = "form-control" name = "jenis_barang" id = "jenis_barang" placeholder ="Isikan" required>
                                            <div id  = "jenis_baranglist" style="position:absolute;z-index:1; color:white; background-color:blue; padding:5px"></div>
                                            
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Lokasi</label> <br>
                                        <textarea class = "form-control" name = "lokasi" ><?php echo $isi['lokasi']; ?></textarea>
                                        <!-- <input type="text" name="lokasi" class="form-control" value="<?php echo $isi['lokasi']; ?>"> -->
                                    </div>
                                    <div class="col-md-4">
                                        Kondisi
                                        <select class="form-control" name="kondisi" value="<?php echo $isi['kondisi']; ?>">
                                            <option>--Pilih--</option>
                                            <option value ="Baik"<?php if($isi['kondisi']=="Baik"){ echo"selected";} ?>>Baik</option>
                                            <option value="Layak Pakai"<?php if($isi['kondisi']=="Layak Pakai"){ echo"selected";} ?>>Layak Pakai</option>
                                            <option value="Tidak Layak Pakai"<?php if($isi['kondisi']=="Tidak Layak Pakai"){ echo"selected";} ?>>Tidak Layak Pakai</option>
                                        </select>         
                                        
                                    </div> 
                                    <div class="col-md-4">
                                        Status
                                        <select class="form-control" name="status" value="<?php echo $isi['status']; ?>">
                                            <option>--Pilih--</option>
                                            <option value ="Baru"<?php if($isi['status']=="Baru"){echo"selected";} ?>>Baru</option>
                                            <option value="Bekas"<?php if($isi['status']=="Bekas"){echo"selected";} ?>>Bekas</option>
                                            <option value="Rusak"<?php if($isi['status']=="Rusak"){echo"selected";} ?>>Rusak</option>
                                            <option value="Repair"<?php if($isi['status']=="Repair"){echo"selected";} ?>>Repair</option>
                                            <option value ="Hibah"<?php if($isi['status']=="Hibah"){echo"selected";} ?>>Hibah</option>
                                            <option value ="Pinjam"<?php if($isi['status']=="Pinjam"){echo"selected";} ?>>Pinjam</option>
                                        </select>
                                    </div> 
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        Merk <br>
                                        <input type="text" name="merk" class="form-control" value="<?php echo $isi['merk']; ?>">
                                    </div>
                                    <div class="col-md-4">
                                        Type <br>
                                        <input type="text" name="type" class="form-control" value="<?php echo $isi['type']; ?>">
                                    </div>
                                    <div class="col-md-4">
                                        Harga
                                        <input type="number" name="harga" class="form-control" value="<?php echo $isi['harga']; ?>">
                                    </div> 
                                    <div class="col-md-4"><br>
                                        <input type="submit" class="btn btn-success" value="Simpan">
										<a href="dirmedis.php"><button type="button" class="btn btn-warning" data-dismiss="modal" name="kembali">Kembali</button></a>
                                    </div>
                                </div>
                                </form>
                            </div> 
						<?php
						} 
						?>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                        <tr>
											<th>No </th>
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
                                            <th width="200">Lakukan_Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                    include 'koneksi/koneksi.php';
									$no=0;
                                    $data =mysqli_query($koneksi,"select * from dir_medis order by ID desc");
                                    while($isi =mysqli_fetch_array($data)){
										$no++;
                                        ?>
                                        <tr>
											<td><?php echo $no ?> </td>

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
                                            <td >
                                                <a href="edit.php?ID=<?php echo $isi['ID']; ?>"class="btn btn-primary"  style="float:left"><i class="fas fa-file"></i></a> 
                                                <a href="koneksi/hapus.php?ID=<?php echo $isi['ID']; ?>"class="btn btn-danger" style="float:right"><i class="fas fa-eraser"></i></a>
                                            </td>
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
                        <span aria-hidden="true">??</span>
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
                     url:"search5.php",  
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