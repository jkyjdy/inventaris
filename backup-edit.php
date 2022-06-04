<!DOCTYPE html>
<html>
<head>
	<title>Inventory Rs.Brayat Minulya</title>
	<?php
   include("halaman/head2.php");
   ?>
   <?php
	include("halaman/head.php");
   ?>
</head>

<body id="page-top">
	<div id="content-wrapper" class="d-flex flex-column">
		<div id="content">
	</div>
 
	<h2>Inventory Rs.Brayat Minulya</h2>
	
	<h3>EDIT DATA Inventory</h3>
 
	<?php
	include 'koneksi/koneksi.php';
	$ID = $_GET['ID'];
	$data = mysqli_query($koneksi,"select * from dir_medis where ID='$ID'");
	while($isi = mysqli_fetch_array($data)){
		?>
	<div class="card shadow mb-4">
		<div class="card-body" style="background:Silver">
			<form method="post" action="koneksi/update.php">
				<table>
					<tr>			
						<td>no_inventaris </td>
						<td>
							<input type="hidden" class="form-control" name="ID" value="<?php echo $isi['ID']; ?>">
							<input type="text" class="form-control" name="no_inventaris" value="<?php echo $isi['no_inventaris']; ?>">
						</td>
					</tr>
					<tr>
						<td>unit</td>
						<td> 
							<select class="form-control" name="unit"value="<?php echo $isi['unit']; ?>">
								<option value="Anna">Anna</option>
								<option value="Theresia">Theresia </option>
								<option value="Pastoral Care">Pastoral Care</option>
								<option value="Yoseph">Yoseph</option>
								<option value="Maria">Maria</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>tgl_pengadaan</td>
						<td><input type="date" class="form-control" name="tgl_pengadaan" value="<?php echo $isi['tgl_pengadaan']; ?>"></td>
					</tr>
                	<tr>
						<td>tahun_produksi</td>
						<td><input type="text" class="form-control" name="tahun_produksi" value="<?php echo $isi['tahun_produksi']; ?>"></td>
					</tr>
                	<tr>
						<td>jenis_barang</td>
						<td><input type="text" class="form-control" name="jenis_barang" value="<?php echo $isi['jenis_barang']; ?>"></td>
					</tr>
                	<tr>
						<td>merk</td>
						<td><input type="text" class="form-control" name="merk" value="<?php echo $isi['merk']; ?>"></td>
					</tr>
                	<tr>
						<td>jumlah</td>
						<td><input type="text" class="form-control" name="jumlah" value="<?php echo $isi['jumlah']; ?>"></td>
					</tr>
                	<tr>
						<td>kondisi</td>
						<td><input type="text" class="form-control" name="kondisi" value="<?php echo $isi['kondisi']; ?>"></td>
					</tr>
                	<tr>
						<td>harga</td>
						<td><input type="text" class="form-control" name="harga" value="<?php echo $isi['harga']; ?>"></td>
					</tr>
                	<tr>
						<td>status</td>
						<td>
							<select class="form-control" name="status">
                                <option value ="Baru">Baru</option>
                                <option value="Bekas">Bekas</option>
                                <option value="Rusak">Rusak</option>
                                <option value="Repair">Repair</option>
                            </select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<br>
							<button type="submit" class="btn btn-success" name="simpan">Simpan</button>
					
							<a href="dirmedis.php"><button type="button" class="btn btn-warning" data-dismiss="modal" name="kembali">Kembali</button></a>
						</td>
					</tr>		
				</table>
			</form>
		</div>
	</div>
		
		
		<?php 
	}
	?>
 
</body>

</html>