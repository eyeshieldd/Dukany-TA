
<table border="1">
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
    <?php $no=1; $total=0; foreach ($record->result() as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->no_nota ?></td>
                                                <td><?php echo $r->tanggal ?></td>
                                                <td><?php echo $r->kode_barang ?></td>
                                                <td><?php echo $r->nama_lengkap ?></td>
                                                <td><?php echo $r->lama_sewa ?></td>
                                                <td>Rp. <?php echo number_format($r->harga_sewa) ?></td>
                                                <td>Rp. <?php echo number_format($r->lama_sewa*$r->harga_sewa) ?>
                                            </tr>
                                        <?php $total=$total+($r->lama_sewa*$r->harga_sewa);
                                        $no++; } ?>
                                            <tr>
                                                <td colspan="7" align="right">Total</td>

                                                <td>Rp. <?php echo number_format($total);?></td>

                                            </tr>
</table>

