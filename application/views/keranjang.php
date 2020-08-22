<div class="container-fluid">
   <h4>Keranjang Belanja</h4>
    <div class="box-body table-responsive">
        <table class="table table-bordered table-striped" id="table1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Sub-Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($this->cart->contents() as $items) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $items['name'] ?></td>
                        <td><?php echo $items['qty'] ?></td>
                        <td>Rp. <?php echo number_format($items['price'], 0,',','.')  ?></td>
                        <td>Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
                    </tr>
                    
                <?php } ?>
                <tr>
                    <td colspan="4"></td>
                        <td>Rp. <?php echo number_format($this->cart->total(), 0,',','.')?></td>
                    </tr>
            </tbody>
        </table>

        <div align="right">
            <a href="<?php echo base_url('dashboard/hapus_keranjang')?>"><div class="btn btn-sm btn-danger">
                Hapus keranjang
            </div></a>
            <a href="<?php echo base_url('dashboard/index')?>"><div class="btn btn-sm btn-primary">
                Lanjutkan Belanja
            </div></a>
            <a href="<?php echo base_url('dashboard/pembayaran')?>"><div class="btn btn-sm btn-success">
                Pembayaran
            </div></a>
        </div>
    </div>
</div>