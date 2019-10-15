                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            DUKANY <small>Data Supplier</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('supplier/post','Tambah Data',array('class'=>'btn btn-success btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID Supplier</th>
                                                <th>Nama Supplier</th>
                                                <th>No.HP</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->id_supplier ?></td>
                                                <td><?php echo $r->nama_supplier ?></td>
                                                <td><?php echo $r->no_hp ?></td>
                                                <td><?php echo $r->alamat ?></td>
                                        
                                                <td class="center">
                                                   
                                                      <?php echo anchor('supplier/edit/' .$r->id_supplier,'Edit',array('class'=>'btn btn-primary btn-sm')); ?> | 
                                                     <?php echo anchor('supplier/delete/'.$r->id_supplier,'Delete',array('class'=>'btn btn-danger btn-sm', 'onclick' => "return confirmDialog()")); ?>
                                                   
                                                </td>
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
                <!-- /. ROW  -->
<script>
function confirmDialog() {
    return confirm("Apakah kamu yakin ingin menghapus data ini?")
}
</script

