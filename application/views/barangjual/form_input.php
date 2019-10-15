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
                                <?php echo form_open('barangjual/post'); ?>
                                 <!-- <div class="form-group">
                                    <label>Kode Barang</label>
                                    <input class="form-control" name="kode" placeholder="Kode Barang" required="">
                                </div> -->
                                <div class="form-group">
                                    <label>Pilih Supplier</label>
                                    <select name="supplier" class="form-control">
                                        <?php foreach ($supplier as $s) {
                                            echo "<option value='$s->id_supplier'>$s->nama_supplier</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama Barang Jual</label>
                                    <input class="form-control" name="nama" placeholder="Nama Barang" required="">
                                </div>
                                <div class="form-group">
                                    <label>Harga Beli</label>
                                    <input class="form-control" type="number" name="beli" placeholder="Harga Beli" required="">
                                </div>
                                <div class="form-group">
                                    <label>Harga Jual</label>
                                    <input class="form-control" type="number" name="jual" placeholder="Harga Jual" required="">
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input class="form-control" type="number" name="stok" placeholder="Stok" required="">
                                </div>
                                <!-- <div class="form-group">
                                    <label>Merk</label>
                                    <input class="form-control" name="merk" placeholder="Merk" required="">
                                </div> -->
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
                                <?php echo anchor('barangjual','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                            

                        </div>
                        
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->