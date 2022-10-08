<?php $this->view('header'); ?>

    <div class="row no-gutters mt-5">
     
      <?php $this->view('left_navbar'); ?>
      
      <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</h3><hr>

        <div class="row text-white">
          <div class="card bg-secondary ml-5" style="width: 15rem;">
              <div class="card-body">
              <h5 class="card-title"><i class="fas fa-calendar mr-2"></i>Tahun Anggaran</h5>
              <div class="display-4"><?= $this->TimeConstant->get_current_year(); ?></div>
          </div>
        </div>

          <div class="card bg-info ml-5" style="width: 15rem;">
              <div class="card-body">
              <h5 class="card-title"><i class="fas fa-users mr-2"></i>Usulan OPD</h5>
              <div class="display-4"><?= $jumlah_opd ?></div>
              <a href="<?=base_url()?>pengajuan?filter=thn-anggaran"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
        </div>

        <div class="card bg-success ml-5" style="width: 15rem;">
              <div class="card-body">
              <h5 class="card-title"><i class="fas fa-check mr-2"></i>Sudah di ACC</h5>
              <div class="display-4"><?= $jumlah_acc ?></div>
              <a href="<?=base_url()?>pengajuan?filter=thn-anggaran-acc"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
        </div>

        <div class="card bg-danger ml-5" style="width: 15rem;">
              <div class="card-body">
              <h5 class="card-title"><i class="fas fa-hourglass-start mr-2"></i>Belum di Bahas</h5>
              <div class="display-4"><?= $jumlah_blm_bahas ?></div>
              <a href="<?=base_url()?>pengajuan?filter=thn-anggaran-blm-bahas"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
        </div>
       
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>