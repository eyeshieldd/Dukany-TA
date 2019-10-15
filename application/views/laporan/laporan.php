                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            DUKANY <small>Laporan Transaksi</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('laporan/laporan', array('class'=>'form-inline')); ?>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Tanggal</label>
                                        <input type="date" name="tanggal1" class="form-control" placeholder="Tanggal Mulai">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2"> - </label>
                                        <input type="date" name="tanggal2" class="form-control" placeholder="Tanggal Selesai">
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="submit" name="submit"> Tampilkan</button>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>


                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered " id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>No Transaksi</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Nama Kasir</th>
                                                <th>Nama Barang</th>
                                                <th>Banyaknya</th>
                                                <th>Harga</th>
                                                <th>Total Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; $total=0; foreach ($record->result() as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->no_nota ?></td>
                                                <td><?php echo $r->tanggal ?></td>
                                                <td><?php echo $r->nama_lengkap ?></td>
                                                <td><?php echo $r->nama_barangjual ?></td>
                                                <td><?php echo $r->jumlah ?></td>
                                                <td>Rp. <?php echo number_format($r->harga_jual) ?></td>
                                                <td>Rp. <?php echo number_format($r->jumlah*$r->harga_jual) ?>
                                            </tr>
                                        <?php $total=$total+($r->jumlah*$r->harga_jual);
                                        $no++; } ?>
                                            



                                        </tbody>
                                        <td colspan="7" align="right">T O T A L</td>
                                        <td>Rp. <?php echo number_format($total);?></td>
                                         
                                    </table>

                                            
                                            <a href="<?php echo base_url().'laporan/excel'?>" class="btn btn-info btn-sm active" role="button">Laporan excell</a>

                                            <a href="<?php echo base_url().'laporan/pdf'?>" class="btn btn-warning btn-sm active" role="button">Laporan PDF</a>
                                </div>
                                <!-- /. TABLE  -->
                            </div>
                        </div>
                    </div>
                </div>


                <!-- /. ROW  -->