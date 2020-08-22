<div class="container-fluid">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo base_url('assets/img/slider1.jpg')?>" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo base_url('assets/img/slider2.jpg')?>" alt="Second slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="row text-center mt-4">
    <?php foreach ($pakaian_anak as $brg) : ?>

      <div class="card ml-3 mb-3" style="width: 16rem;">
        <img src="<?php echo base_url() . '/upload/' . $brg->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-1"><?php echo ucfirst($brg->nama_brg) ?></h5>
          <small><?php echo $brg->keterangan ?></small><br>
          <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($brg->harga, 0,',','.')  ?></span>
          <a href="<?php echo site_url('dashboard/tambah_ke_keranjang/'.$brg->id_barang)?>" class="btn btn-sm btn-primary">Tambah Keranjang</a>
          <a href="<?php echo site_url('dashboard/detail/'.$brg->id_barang)?>" class="btn btn-sm btn-success">Detail</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</div>


<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Your Website 2019</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>