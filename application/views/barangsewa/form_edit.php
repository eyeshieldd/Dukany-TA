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
                                <?php echo form_open('barangsewa/edit'); ?>
                                <input type="hidden" name="id" value="<?php echo $record['id_barangsewa']?>">
                                <input type="hidden" class="form-control" name="id_supplier" value="<?php echo $record['id_supplier']?>">
                                <div class="form-group">
                                    <label>Kode Barang</label>
                                    <input class="form-control" value="<?php echo $record['kode_barang']?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input class="form-control" value="<?php echo $record['nama_barangsewa']?>" disabled>
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
                                    <label>Harga sewa</label>
                                    <input class="form-control" name="sewa" value="<?php echo $record['harga_sewa']?>">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input class="form-control" name="status" value="<?php echo $record['status']?>" >
                                </div>
                          


                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('barangsewa','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->