                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Dukany <small>Data Barang Jual</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('barangjual/post','Tambah Data',array('class'=>'btn btn-success btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Supplier</th>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Harga Beli</th>
                                                <th>Harga Jual</th>
                                                <th>Stok</th>
                                                <th>Merk</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_supplier ?></td>
                                                <td><?php echo $r->kode_barang ?></td>
                                                <td><?php echo $r->nama_barangjual?></td>
                                                <td><?php echo $r->harga_beli ?></td>
                                                <td><?php echo $r->harga_jual ?></td>
                                                <td><?php echo $r->stok ?></td>
                                                <td><?php echo $r->nama_supplier ?></td>
                                                <td><?php echo $r->keterangan ?></td>
                                                <td class="center">
                                                    <?php echo anchor('barangjual/edit/' .$r->id_barangjual,'Edit',array('class'=>'btn btn-primary btn-sm')); ?> | 
                                                    <?php echo anchor('barangjual/delete/' .$r->id_barangjual,'Delete',array('class'=>'btn btn-danger btn-sm','onclick' => "return confirmDialog()")); ?>
                                                     <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" >
                                                     delete
                                                    </button> -->
                                                </td>

<!-- 
                                                <td>Rp. <?php echo number_format($r->harga,2) ?></td>
                                                <td class="center"> -->
                                                
                                                     <!-- <?php echo anchor('barang/edit/' .$r->id_barangjual,'Edit',array('class'=>'btn btn-primary btn-sm')); ?> | 
                                                     <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
                                                     delete
                                                    </button>
                                                    </td> -->
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
}
</script>
                <!-- /. ROW  -->

<script>
function confirmDialog() {
    return confirm("Apakah kamu yakin ingin menghapus data ini?")
}
</script>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda yakin ingin menghapus data barang?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
       
         <?php echo anchor('barangjual/delete/' .$r->id_barangjual,'delete',array('class'=>'btn btn-danger btn-sm')); ?> 
      </div>
    </div>
  </div>
</div>