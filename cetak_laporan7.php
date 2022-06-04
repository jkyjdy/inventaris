<!DOCTYPE html>
<html>
<head>
	<title>RSBM</title>
	
</head>
<body>
    <center>
        <h2>DATA LAPORAN INVENTARIS</h2>
		<h4>BRAYAT MINULYA</h4>
        <?php
            $awal=$_POST['TanggalAwal'];
            $akhir=$_POST['TanggalAkhir'];
            $unit=$_POST['unit']
            
        ?>
        TanggalAwal:<?php echo $awal;?><br>
        TanggalAkhir:<?php echo $akhir;?>
 
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
        $data=mysqli_query($koneksi,"select * from komite where tgl_pengadaan between '$awal' and '$akhir' and unit='$unit'");
        while($isi=mysqli_fetch_array($data)){
            $no++;
            ?>
            <tr align="center">
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
        </tbody>
	</table>
    <script>
		window.print();
	</script>
</body>
</html>