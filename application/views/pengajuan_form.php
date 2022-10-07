<?php $this->view('header'); ?>

    <div class="row no-gutters mt-5">
      <?php $this->view('left_navbar'); ?>

      <?php
          $alert = $this->session->flashdata('alert');
      ?>

      <div class="col-md-10 p-5 pt-2">
        <form action="<?= $form_action ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_pengajuan_opd" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['id_pengajuan_opd'])?>">
        <div class="container text-left">
          <h5><i class="fas fa-user mr-2"></i>Data Pengajuan RAPBD - OPD</h5>
          <span style="color: green"> <i> <?= $alert['message'] ?> </i> </span>
          <hr>

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#umum" role="tab" aria-controls="umum">Pengajuan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#kgb" role="tab" aria-controls="kgb">Keterangan & Hasil Rapat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#kp" role="tab" aria-controls="kp">Keputusan</a>
            </li>
          </ul>

          <div class="tab-content">
            <br>
            <div class="tab-pane active" id="umum" role="tabpanel">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama OPD</label>
                      <select name="id_opd" class="form-control">
                        <?php foreach ($opd as $key => $value) { ?>
                          <option value="<?=$value['id_opd']?>" <?= $this->Ternary->istrue_value($pengajuan['id_opd'] == $value['id_opd'], 'selected')?> > <?=$value['nama']?> </option>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>Nomor Surat</label>
                    <input type="text" name="nomor_surat_opd" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['nomor_surat_opd'])?>" required>
                  </div>
                  <div class="form-group">
                    <label>File Surat <?php if ($pengajuan['file_surat'] != '') { ?>  <a target="blank" href="<?= base_url() . 'asset/images/berkas/' .$pengajuan['file_surat'] ?>"> <i class="fa fa-external-link mr-2"> Lihat File </i> </a>  <?php } ?></label>
                    <input type="file" name="file_surat" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['file_surat'])?>">
                  </div>
                  <div class="form-group">
                    <label>Dasar Hukum</label>
                    <input type="text" name="dasar_hukum" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['dasar_hukum'])?>" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tahun Anggaran</label>
                    <select name="tahun_anggaran" class="form-control">
                      <?php foreach ($this->PengajuanConstant->get_tahun_anggaran() as $key => $value) { ?>
                        <option value="<?=$key?>" <?= $this->Ternary->istrue_value($pengajuan['tahun_anggaran'] == $key, 'selected')?> > <?=$value?> </option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Perubahan Ke</label>
                    <select name="perubahan_ke" class="form-control">
                      <?php foreach ($this->PengajuanConstant->perubahan_ke() as $key => $value) { ?>
                        <option value="<?=$key?>" <?= $this->Ternary->istrue_value($pengajuan['perubahan_ke'] == $key, 'selected')?> > <?=$value?> </option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Sumber Dana</label>
                    <select name="sumber_dana" class="form-control">
                      <?php foreach ($this->PengajuanConstant->sumber_dana() as $key => $value) { ?>
                        <option value="<?=$key?>" <?= $this->Ternary->istrue_value($pengajuan['sumber_dana'] == $key, 'selected')?> > <?=$value?> </option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Nominal APBD</label>
                    <input type="number" name="anggaran_apbd" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['anggaran_apbd'])?>" required>
                  </div>
                  <div class="form-group">
                    <label>Nominal Usulan RAPBD</label>
                    <input type="number" name="anggaran_rapbd" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['anggaran_rapbd'])?>" required>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="kgb" role="tabpanel">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                     <div class="form-group">
                        <label>Keterangan Surat</label>
                        <textarea class="form-control" rows="4" name="keterangan_surat"><?= $this->Ternary->isset_value($pengajuan['keterangan_surat'])?></textarea>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <div class="form-group">
                        <label>Keputusan Rapat</label>
                        <textarea class="form-control" rows="4" name="keputusan_rapat"><?= $this->Ternary->isset_value($pengajuan['keputusan_rapat'])?></textarea>
                      </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="kp" role="tabpanel">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   <div class="form-group">
                      <label>Nominal yang di ACC</label>
                      <input type="number" name="anggaran_acc" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['anggaran_acc'])?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Status Pengajuan</label>
                    <select name="status" class="form-control">
                      <?php foreach ($this->PengajuanConstant->status_pengajuan() as $key => $value) { ?>
                        <option value="<?=$key?>" <?= $this->Ternary->istrue_value($pengajuan['status'] == $key, 'selected')?> > <?=$value?> </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-group">
                      <label>Tanggal Rapat</label>
                      <input type="date" name="tgl_rapat" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['tgl_rapat'])?>">
                    </div>
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