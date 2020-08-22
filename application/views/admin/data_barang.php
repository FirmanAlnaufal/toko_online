<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahbarang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>
    <div class="box-body table-responsive">
        <table class="table table-bordered table-striped" id="table1">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Barang</th>
                    <th>Keterangan</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($barang->result() as $key => $data) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data->nama_brg ?></td>
                        <td><?php echo $data->keterangan ?></td>
                        <td><?php echo $data->kategori ?></td>
                        <td>Rp. <?php echo number_format($data->harga, 0, ',', '.') ?></td>
                        <td><?php echo $data->stok ?></td>
                        <td class="text-center" width="160px">
                            <a href="" class="btn btn-success btn-sm">
                                <i class="fa fa-search-plus"></i>
                            </a>
                            <a href="<?php echo site_url('admin/data_barang/edit/' . $data->id_barang) ?>" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="<?php echo site_url('admin/data_barang/hapus/' . $data->id_barang) ?>" onclick="return confirm('apakah anda yakin hapus data? ')" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="tambahbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select class="form-control" name="kategori">
                            <option></option>
                            <option value="">Elektronik</option>
                            <option value="">Pakaian Pria</option>
                            <option value="">Pakaian Wanita</option>
                            <option value="">Pakaian anak</option>
                            <option value="">Pakaian Olahraga</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>