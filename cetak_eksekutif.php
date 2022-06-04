<!DOCTYPE html>
<html>
<head>
	<title>RSBM</title>
	
</head>
<body>

    <table border="0"  style="width:100%">
    <?php
     include 'koneksi/koneksi.php';
    $_GET['ID'];
    $urlid=$_GET['ID'];
    $data=mysqli_query($koneksi,"select * from direksekutif where ID='$urlid'");
    $isi=mysqli_fetch_array($data)
    ?>
		<thead>
			<tr>
                <th><img src="https://jecky.online/data_inventaris/logobrayat.png" width="70" alt="Sinyal Lemah"></th>
                
                <th> <h2 align="left">YAYASAN RS BRYAT MINULYA
                     <br> RUMAH SAKIT BRAYAT MINULYA SURAKARTA 
                     <br> <?php echo $isi['no_inventaris']; ?>
                    </h2>

                
                
            </th> 
               
                            
			</tr>
		</thead>
		
        <tbody>
        <?php
        
        // =================================================================
                    // Mengambil ID dari URL setelah tanda tanya ('?')

        
        // =================================================================

        $no=0;
        $data=mysqli_query($koneksi,"select * from direksekutif where ID='$urlid'"); 
        while($isi=mysqli_fetch_array($data)){
            $no++;
            ?>
            <tr align="left">
                <td><h2></h2></td>
               
               
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