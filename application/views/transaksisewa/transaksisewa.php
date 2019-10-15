<div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            DUKANY <small>Transaksi</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body form-horizontal">

                                <?php echo form_open('transaksisewa'); ?>
                                <form>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama Barang</label>
                                        <div class="col-sm-4">
                                        <input list="barang" name="barang" placeholder="masukan nama barang" class="form-control" required="" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Lama sewa</label>
                                        <div class="col-sm-4">
                                        <input type="text" name="jumlah" placeholder="lama sewa" class="form-control" required="" >
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-2 control-label">keterangan</label>
                                        <div class="col-sm-4">
                                        <input type="text" name="keterangan" placeholder="lama sewa" class="form-control" required="" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm">TAMBAH</button>  
                                        </div>
                                    </div>
                                </form>
                                <datalist id="barang">
                                <?php foreach ($barang->result() as $b) {
                                echo "<option value='$b->nama_barangsewa'>";
                                } ?>
                                                        
                                </datalist>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kode barang</th>
                                                <th>Nama Barang</th>
                                                 <th>keterangan</th>
                                               
                                                <th>jumlah</th>
                                                <th>Harga</th>
                                                <th>Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; $total=0; foreach ($detail as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->kode_barang ?></td>
                                                <td><?php echo $r->nama_barangsewa.' - '.anchor('transaksisewa/hapusitem/'.$r->id_transaksisewadetail,'Hapus',array('style'=>'color:red;')) ?></td>
                                              
                                                <td><?php echo $r->keterangan?></td>
                                                <td><?php echo $r->lama_sewa ?></td>
                                                <td>Rp. <?php echo number_format($r->harga_sewa) ?></td>
                                                <td>Rp. <?php echo number_format($r->lama_sewa*$r->harga_sewa) ?>
                                                </td>
                                            </tr>
                                            <?php $total=$total+($r->lama_sewa*$r->harga_sewa);
                                            $no++; } ?>
                                            <tr class="gradeA">
                                                <td colspan="6" align="right">T O T A L</td>
                                                <td>Rp. <?php echo number_format($total);?></td>
                                                <input type="hidden" id="total" value="<?php echo $total ?>">
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> 
                                <form class="col-sm-6">


                                    <?php echo form_open('transaksijual/selesai_belanja'); ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Bayar</label>
                                    <div class="col-sm-4">
                                    <input type='text' name='cash' id='UangCash' class='form-control' required="" onchange='kembalian(this.value)'>
                                    
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Kembali</label>
                                    <div class="col-sm-4">
                                    <input type='text' id='UangKembali' class='form-control' disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        
                                        <?php echo anchor('transaksisewa/selesai_belanja','SIMPAN',array('class'=>'btn btn-success btn-sm'))?>
                                    </div>
                                </div>
                                </form>      
                             </div>
                        </div>
                    </div>
                </div>
                                    
                    <script>
                        function kembalian(kembalian)  {
                          var total = document.getElementById("total").value;

                          var kembalian = kembalian - total;
                                
                            if (kembalian > total) {
                                alert('Masukan Jumlah uang lebih dari total');
                                document.getElementById("UangKembali").value = '';
                                document.getElementById("UangCash").focus();
                            }else{
                             document.getElementById("UangKembali").value = kembalian;
                            }
                        }



                        function diskon(diskon)  {
                          var total = document.getElementById("total").value;

                          var diskon = diskon - total;
                                
                            if (kembaliandiskon > total) {
                                alert('Masukan Jumlah uang lebih dari total');
                                document.getElementById("Diskon").value = '';
                                document.getElementById("UangCash").focus();
                            }else{
                             document.getElementById("UangKembalidiskon").value = kembaliandiskon;
                            }
                        }
                    </script>
                    </div>
                </div>
                <!-- /. ROW  -->
                
     
