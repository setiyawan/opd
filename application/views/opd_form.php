<?php $this->view('header'); ?>

    <div class="row no-gutters mt-5">
      <?php $this->view('left_navbar'); ?>

      <?php
          $alert = $this->session->flashdata('alert');
      ?>

      <div class="col-md-10 p-5 pt-2">
        <form action="<?= $form_action ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_opd" class="form-control" value="<?= $this->Ternary->isset_value($opd['id_opd'])?>">
        <div class="container text-left">
          <h5><i class="fas fa-user mr-2"></i>Data OPD</h5>
          <span style="color: green"> <i> <?= $alert['message'] ?> </i> </span>
          <hr>

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#umum" role="tab" aria-controls="umum">Umum</a>
            </li>
          </ul>

          <div class="tab-content">
            <br>
            <div class="tab-pane active" id="umum" role="tabpanel">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama OPD</label>
                    <input type="text" name="nama" class="form-control" value="<?= $this->Ternary->isset_value($opd['nama'])?>" required>
                  </div>
                  <div class="form-group">
                    <label>No HP</label>
                    <input type="text" name="hp" class="form-control" value="<?= $this->Ternary->isset_value($opd['hp'])?>" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?= $this->Ternary->isset_value($opd['email'])?>" required>
                  </div>
                  <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <textarea class="form-control" rows="4" name="alamat"><?= $this->Ternary->isset_value($opd['alamat'])?></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahKasus">
              <i class=" fas fa-plus-circle mr-3"></i>TAMBAH KONTAK ERAT</button> -->
            <div class="footer text-right mt-5">
              <button type="submit" class="btn btn-primary mt-8">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>