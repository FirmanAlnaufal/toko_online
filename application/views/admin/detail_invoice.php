<div class="container-fluid">
    <div class="mt-4">
        <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice
                <?php echo $invoice->id_invoice ?>
            </div>
        </h4>
    </div>

    <table class="box-body table-responsive">
        <table class="table table-bordered table-striped" id="table1">
            <thead>
                <tr>
                    <th>ID Barang</th>
                    <th>Nama Produk</th>
                    <th>Jumlah Pesanan</th>
                    <th>Harga Satuan</th>
                    <th>Sub-Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0;
                foreach ($pesanan as $data) {
                    $subtotal = $data->jumlah * $data->harga;
                    $total += $subtotal;
                ?>

                    <tr>
                        <td><?php echo $data->id_brg ?></td>
                        <td><?php echo $data->nama_brg ?></td>
                        <td><?php echo $data->jumlah ?></td>
                        <td>Rp. <?php echo number_format($data->harga, 0, ',', '.') ?></td>
                        <td>Rp. <?php echo number_format($subtotal, 0, ',', '.') ?></td>
                    </tr>
                <?php } ?>

                <tr>
                    <th colspan="4" class="text-right">Grand Total :</th>
                    <td>Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
                </tr>
            </tbody>
        </table>
    </table>
    <div class="mt-4">
        <a href="<?php echo base_url('admin/invoice/index') ?>" class="btn btn-warning btn-social" title="Tambah Data" data-toggle="tooltip">
            <i class="fa fa-undo"></i> Kembali
        </a>
    </div>

</div>