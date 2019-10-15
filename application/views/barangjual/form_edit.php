                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            DUKANY <small>Edit Data Barang</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('barangjual/edit'); ?>
                                <input type="hidden" name="id" value="<?php echo $record['id_barangjual']?>">
                                <input type="hidden" class="form-control" name="id_supplier" value="<?php echo $record['id_supplier']?>">
                                <div class="form-group">
                                    <label>Kode Barang</label>
                                    <input class="form-control" value="<?php echo $record['kode_barang']?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input class="form-control" value="<?php echo $record['nama_barangjual']?>" disabled>
                                </div>

                                <!-- <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori" class="form-control">
                                        <?php foreach ($kategori as $k) {
                                            echo "<option value='$k->kategori_id'";
                                            echo $record['kategori_id']==$k->kategori_id?'selected':'';
                                            echo">$k->nama_kategori</option>";
                                        } ?>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <label>Harga Beli</label>
                                    <input class="form-control" value="<?php echo $record['harga_beli']?>" disabled >
                                </div>
                                <div class="form-group">
                                    <label>Harga Jual</label>
                                    <input class="form-control" name="jual" value="<?php echo $record['harga_jual']?>">
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input class="form-control" type="number" name="stok" value="<?php echo $record['stok']?>" >
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input class="form-control" name="keterangan" value="<?php echo $record['keterangan']?>" >
                                </div>
                                <button onclick="sweet()"></button>

                                <button type="submit"  name="submit" class="btn btn-primary btn-sm" onclick="sweet()">Update</button> | 
                                <?php echo anchor('barang','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>

               
                <!-- /. ROW  -->
<script>
                function sweet (){
swal("Good job!");
}

</script>