         <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            DUKANY <small>Tambah Data Penyewa</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('supplier/post'); ?>
                               <div class="form-group">
                                    <label>Nama supplier</label>
                                    <input class="form-control" name="nama_supplier" placeholder="Nama Supplier" required>
                                </div>
                              
                                <div class="form-group">
                                    <label>No.HP</label>
                                    <input class="form-control" name="no_hp" placeholder="089000000" required>
                                </div>
                                 <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control" name="alamat" placeholder="Alamat" required>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('supplier','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->
                