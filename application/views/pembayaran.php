<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "Baayar Jangan Ngutang!!! Rp. " . number_format($grand_total, 0, ',', '.');
                ?>
            </div><br><br>
            <h3>Input Alamat Pengiraman Pembayaran</h3>
            <form action="<?php echo base_url('dashboard/proses_pesanan') ?>" method="post">
                <div class="form-group">
                    <label for=""> Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Anda">
                </div>
                <div class="form-group">
                    <label for=""> Alamat Lengkap</label>
                    <input class="form-control" type="text" name="alamat" placeholder="Alamat Lengkap Anda">
                </div>

                <div class="form-group">
                    <label for=""> No. Telepon</label>
                    <input class="form-control" type="text" name="no_telp" placeholder="No. Telepon Anda">
                </div>

                <div class="form-group">
                    <label for=""> Jasa Pengiriman</label>
                    <select class="form-control">
                        <option value="">JNE</option>
                        <option value="">TIKI</option>
                        <option value="">Pos Indonesia</option>
                        <option value="">Gojek</option>
                        <option value="">Grab</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for=""> Pilih Bank</label>
                    <select class="form-control">
                        <option value="">BCA - xxxxxxx</option>
                        <option value="">BNI - xxxxxxx</option>
                        <option value="">BRI - xxxxxxx</option>
                        <option value="">MANDIRI - xxxxxxx</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>

            </form>
        <?php
                } else {
                    echo "<script>alert('Maaf Anda Belom Memiliki Pesanan!');";
                    echo "window.location='" . site_url('dashboard/detail_keranjang') . "';
                        </script>";
                }

        ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>