<?php
                                            $data2=mysqli_query($koneksi,"select*from input_barang order by ID desc");
                                            while($isi2=mysqli_fetch_array($data2)){
                                                ?>
                                            <option value="<?php echo $isi2['daftar_kode']?>"><?php echo $isi2['input_barang']?></option>
                                            <?php 
                                            }
                                            ?>