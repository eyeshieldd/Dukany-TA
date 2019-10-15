                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            DUKANY <small>Data Kasir</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                 <?php echo anchor('kasir/post','Tambah Data',array('class'=>'btn btn-success btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID Kasir</th>
                                                <th>Nama Lengkap</th>
                                                <th>Username</th>
                                                <th>No. Hp</th>
                                                <th>Login Trakhir</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->id_kasir ?></td>
                                                <td><?php echo $r->nama_lengkap ?></td>
                                                <td><?php echo $r->username ?></td>
                                                <td><?php echo $r->no_hp ?></td>
                                                <td><?php echo $r->last_login ?></td>
                                                <td class="center">
                                                    <?php echo anchor('kasir/edit/' .$r->id_kasir,'Edit',array('class'=>'btn btn-primary btn-sm')); ?> | 
                                                    <?php echo anchor('kasir/delete/' .$r->id_kasir,'Hapus',array('class'=>'btn btn-danger btn-sm', 'onclick' => "return confirmDialog()")); ?>
                                                     <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" >
                                                     delete
                                                    </button> -->
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->

              <script>
function confirmDialog() {
    return confirm("Apakah kamu yakin ingin menghapus data ini?")
}
</script
                <!-- /. ROW  -->




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Kasir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda yakin ingin menghapus data Kasir?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
       
         <?php echo anchor('kasir/delete/' .$r->id_kasir,'Hapus',array('class'=>'btn btn-danger btn-sm')); ?> 
      </div>
    </div>
  </div>
</div>