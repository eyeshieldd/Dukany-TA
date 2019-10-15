                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                           DUKANY <small>Tambah Data Barang</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('barangsewa/post'); ?>
                                 
                              
                                <div class="form-group">
                                    <label>Nama Barang sewa</label>
                                    <input class="form-control" name="nama" placeholder="Nama Barang" required="">
                                </div>
                                <div class="form-group">
                                    <label>Harga Sewa</label>
                                    <input class="form-control" name="sewa" placeholder="Harga Sewa" required="">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input class="form-control" name="status" placeholder="Status" required="">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input class="form-control" name="keterangan" placeholder="Keterangan">
                                </div>

<!-- 

                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input class="form-control" name="nama_barang" placeholder="nama barang" required="">
                                </div>

                                   <div class="form-group">
                                    <label>supplier</label>
                                    <select name="id_supplier" class="form-control" required="">
                                        <?php foreach ($supplier as $k) {
                                            echo "<option value='$k->id_supplier'>$k->nama</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori" class="form-control" required="">
                                        <?php foreach ($kategori as $k) {
                                            echo "<option value='$k->kategori_id'>$k->nama_kategori</option>";
                                        } ?>
                                    </select>
                                </div>
                                  
                                 
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" name="harga" placeholder="harga" required="">
                                </div> -->

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('barangsewa','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->