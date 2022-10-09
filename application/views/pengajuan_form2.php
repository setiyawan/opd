<?php $this->view('header2'); ?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?php $this->view('left_navbar2'); ?>

        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Pengajuan Belanja / Kegiatan</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <form action="<?= $form_action ?>" method="post" enctype="multipart/form-data"> 
                  <input type="hidden" name="id_pengajuan_opd" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['id_pengajuan_opd'])?>">
                  <div class="col-xl-12">
                    <div class="nav-align-top mb-4">
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <button
                            type="button"
                            class="nav-link active"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-top-home"
                            aria-controls="navs-top-home"
                            aria-selected="true"
                          >
                            Pengajuan
                          </button>
                        </li>
                        <li class="nav-item">
                          <button
                            type="button"
                            class="nav-link"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-top-result"
                            aria-controls="navs-top-result"
                            aria-selected="true"
                          >
                            Hasil Rapat
                          </button>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-name">Nama OPD</label>
                                <div class="col-sm-10">
                                  <select name="id_opd" class="form-control">
                                    <?php foreach ($opd as $key => $value) { ?>
                                      <option value="<?=$value['id']?>" <?= $this->Ternary->istrue_value($pengajuan['id_opd'] == $value['id'], 'selected')?> > <?=$value['nama_skpd']?> </option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-name">Nomor Surat</label>
                                <div class="col-sm-10">
                                  <input type="text" name="nomor_surat_opd" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['nomor_surat_opd'])?>" required>
                                </div>
                              </div>
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-name">File Surat <?php if ($pengajuan['file_surat'] != '') { ?>  <a target="blank" href="<?= base_url() . 'asset/images/berkas/' .$pengajuan['file_surat'] ?>"> <i class="fa fa-external-link mr-2"> Lihat File </i> </a>  <?php } ?></label>
                                <div class="col-sm-10">
                                  <input type="file" name="file_surat" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['file_surat'])?>">
                                </div>
                              </div>
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-name">Tanggal Surat</label>
                                <div class="col-sm-10">
                                  <input type="date" name="tgl_surat" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['tgl_surat'])?>" required>
                                </div>
                              </div>
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-name">Keterangan Surat</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" required rows="5" name="keterangan_surat"><?= $this->Ternary->isset_value($pengajuan['keterangan_surat'])?></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-company">Tahun Anggaran</label>
                                <div class="col-sm-10">
                                  <select name="tahun_anggaran" class="form-control">
                                    <?php foreach ($this->PengajuanConstant->get_tahun_anggaran() as $key => $value) { ?>
                                      <option value="<?=$key?>" <?= $this->Ternary->istrue_value($pengajuan['tahun_anggaran'] == $key, 'selected')?> > <?=$value?> </option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-company">Perubahan Ke-</label>
                                <div class="col-sm-10">
                                  <select name="perubahan_ke" class="form-control">
                                    <?php foreach ($this->PengajuanConstant->perubahan_ke() as $key => $value) { ?>
                                      <option value="<?=$key?>" <?= $this->Ternary->istrue_value($pengajuan['perubahan_ke'] == $key, 'selected')?> > <?=$value?> </option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-name">Dasar Hukum</label>
                                <div class="col-sm-10">
                                  <input type="text" name="dasar_hukum" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['dasar_hukum'])?>" required>
                                </div>
                              </div>
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-name">Sumber Dana</label>
                                <div class="col-sm-10">
                                  <select name="sumber_dana" class="form-control">
                                    <?php foreach ($this->PengajuanConstant->sumber_dana() as $key => $value) { ?>
                                      <option value="<?=$key?>" <?= $this->Ternary->istrue_value($pengajuan['sumber_dana'] == $key, 'selected')?> > <?=$value?> </option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-name">Nominal APBD</label>
                                <div class="col-sm-10">
                                  <input type="number" name="anggaran_apbd" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['anggaran_apbd'])?>" required>
                                </div>
                              </div>
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-name">Nominal Usulan RAPBD</label>
                                <div class="col-sm-10">
                                  <input type="number" name="anggaran_rapbd" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['anggaran_rapbd'])?>" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br>
                          <div class="justify-content-end">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="navs-top-result" role="tabpanel">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-name">Tanggal Rapat</label>
                                <div class="col-sm-10">
                                  <input type="date" name="tgl_rapat" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['tgl_rapat'])?>">
                                </div>
                              </div>
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-name">Keputusan Rapat</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" rows="4" name="keputusan_rapat"><?= $this->Ternary->isset_value($pengajuan['keputusan_rapat'])?></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-company">Nominal yang di ACC</label>
                                <div class="col-sm-10">
                                  <input type="number" name="anggaran_acc" class="form-control" value="<?= $this->Ternary->isset_value($pengajuan['anggaran_acc'])?>">
                                </div>
                              </div>
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-company">Status Pengajuan</label>
                                <div class="col-sm-10">
                                  <select name="status" class="form-control">
                                    <?php foreach ($this->PengajuanConstant->status_pengajuan() as $key => $value) { ?>
                                      <option value="<?=$key?>" <?= $this->Ternary->istrue_value($pengajuan['status'] == $key, 'selected')?> > <?=$value?> </option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br>
                          <div class="justify-content-end">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url()?>asset/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url()?>asset/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url()?>asset/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url()?>asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url()?>asset/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?= base_url()?>asset/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
