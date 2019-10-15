                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                           DUKANY <small>Edit Data Supplier</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('supplier/edit'); ?>
                                <input type="hidden" value="<?php echo $record['id_supplier']?>" name="id">
                                <div class="form-group">
                                    <label>Nama Supplier</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $record['nama_supplier']?>">
                                </div>
                                <div class="form-group">
                                    <label>Nomor HP</label>
                                    <input type="text" class="form-control" name="no_hp" value="<?php echo $record['no_hp']?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control"  name="alamat" placeholder="alamat" value="<?php echo $record['alamat']?>" >
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('supplier','kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->