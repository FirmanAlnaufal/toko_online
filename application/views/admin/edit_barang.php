<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>

    <?php foreach ($barang as $data) { ?>

        <form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>">
        <input type="hidden" name="id" class="form-control" value="<?php echo $data->id_barang ?>">
            <div class="for-group">
                <label for=""> Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" value="<?php echo $data->nama_brg ?>">
            </div>

            <div class="for-group">
                <label for=""> Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $data->keterangan ?>">
            </div>
            <div class="for-group">
                <label for=""> Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $data->kategori ?>">
            </div>
            <div class="for-group">
                <label for=""> Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $data->harga ?>">
            </div>
            <div class="for-group">
                <label for=""> Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $data->stok ?>">
            </div>

            <button type="sumbit" class="btn btn-primary btn-sm mt-3"> Simpan</button>
        </form>


    <?php } ?>