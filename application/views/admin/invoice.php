<div class="container-fluid">
    <h4>Invoice Pemesanan</h4>
    <br>
    <div class="box-body table-responsive">
        <table class="table table-bordered table-striped" id="table1">
            <thead>
                <tr>
                    <th>Id Invoice</th>
                    <th>Nama pemesan</th>
                    <th>Alamat Pengiriman</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Batas Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($invoice as  $data) { ?>
                    <tr>
                        <td><?php echo $data->id_invoice ?></td>
                        <td><?php echo $data->nama ?></td>
                        <td><?php echo $data->alamat ?></td>
                        <td><?php echo $data->tgl_pesan ?></td>
                        <td><?php echo $data->batas_bayar ?></td>
                        <td class="text-center" width="160px">
                            <a href="<?php echo site_url('admin/invoice/detail/'.$data->id_invoice)?>" class="btn btn-primary btn-sm">
                                <i class="fa fa-search-plus"> Detail</i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>