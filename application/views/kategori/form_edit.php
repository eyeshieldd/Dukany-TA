				<div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
 						DUKANY<h3>Edit Data Kategori</h3>

<?php echo form_open('kategori/edit');
?>

<div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('kategori/edit'); ?>

                                <input type="hidden" value="<?php echo $record['kategori_id']?>" name="id">

                                <input type="hidden" name="id" value="<?php echo $record['kategori_id']?>">
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                   <input type="text" name="kategori" placeholder="kategori" class="form-control"
            				       value="<?php echo $record['nama_kategori']?>">

                                </div>
                                 <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
       							 <?php echo anchor('kategori','Kembali',array('class'=>'btn btn-danger btn-sm'))?></td></tr
                                </div>
                            </div>
                        </div>
                    </div>



