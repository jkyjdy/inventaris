<!DOCTYPE html>
<html>
<head>
	<title>RSBM</title>
	
</head>
<body>
    <center>
        <h2>DATA LAPORAN INVENTARIS</h2>
		<h4>BRAYAT MINULYA</h4>
        
 
    </center>
	<br>
	<table border="1"  style="width:100%">
		<thead>
			<tr>
                <th>No</th>
                <th>No Inventaris</th>
                <th>No Seri</th> 
                <th>Tgl Pengadaan</th>
                <th>Tahun Operasional</th>
                <th>Unit</th>
                <th>Jenis_Barang</th>
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
                <td><?php echo $no ?><?php echo $_POST['jenis_barang']; ?></td> 
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
    <script>
		window.print();
	</script>
</body>
</html>