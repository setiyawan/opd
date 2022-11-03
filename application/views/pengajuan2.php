<?php $this->view('header2'); ?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <div class="buy-now">
          <?php if ($perubahan_ke > 0) { ?>
          <p class="btn btn-danger btn-buy-now"> <a class="tf-icons bx bx-timer"></a> <strong> <?= $this->PengajuanConstant->perubahan_ke()[$perubahan_ke] ?> </strong> : <a id="countdown"></a></p>
          <?php } else { ?>
            <p class="btn btn-danger btn-buy-now"> <strong>Tidak Ada Fase Perubahan Anggaran </strong></p>
          <?php } ?>
        </div>

        <?php $this->view('left_navbar2'); ?>
        
        <?php
          if(isset($_SESSION['alert'])) {
              $alert = $this->session->flashdata('alert');
          }
        ?>

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
              <h4 class="fw-bold py-3 mb-4"> Daftar Usulan Belanja / Kegiatan
                <a href="<?=base_url()?>pengajuan/tambah" class="btn btn-primary btn-sm <?= $perubahan_ke > 0 ? '' : 'force-hidden'?>">
                  <span class="tf-icons bx bx-plus-circle"></span>&nbsp; Tambah
                </a>
              </h4>
              <div class="alert alert-primary alert-dismissible" <?= isset($alert['message']) ? "" : "hidden" ?> role="alert">
                <?= $alert['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <br>
                <!-- <div class="card-header"><button type="submit" class="btn btn-primary">Send</button></div> -->
                <div class="table-responsive text-nowrap">
                  <table class="table table-borderless myTable">
                    <thead class="bg-dark">
                      <tr>
                        <th style="color: white;">#</th>
                        <th style="color: white;">Nama OPD</th>
                        <th style="color: white;">Th. Anggaran</th>
                        <th style="color: white;">Fase</th>
                        <th style="color: white;">Tgl Surat</th>
                        <th style="color: white;">Anggaran APBD</th>
                        <th style="color: white;">Perubahan APBD</th>
                        <th style="color: white;">ACC</th>
                        <th style="color: white;">Status</th>
                        <th style="color: white;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $row = 1; ?>
                      <?php foreach ($pengajuan as $key => $value) { ?>
                      <tr>
                        <th scope="row"> <?= $row++; ?></th>
                        <td> <?= $value['nama_skpd']?> </td>
                        <td> <?= $value['tahun_anggaran'] ?> </td>
                        <td> <?= $this->PengajuanConstant->perubahan_ke()[$value['perubahan_ke']] ?> </td>
                        <td> <?= $this->Converter->to_indonesia_date($value['tgl_surat']) ?> </td>
                        <td> <?= $this->Converter->to_rupiah($value['anggaran_apbd']) ?> </td>
                        <td> <?= $this->Converter->to_rupiah($value['anggaran_rapbd']) ?> </td>
                        <td> <?= $this->Converter->to_rupiah($value['anggaran_acc']) ?> </td>
                        <td> <span class="badge <?= $this->PengajuanConstant->warna_status_pengajuan()[$value['status']] ?>"><?= $this->PengajuanConstant->status_pengajuan()[$value['status']] ?></span> </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="<?= base_url()?>pengajuan/edit?id=<?= $value['id_pengajuan_opd']?>"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <!-- <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              > -->
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

              <hr class="my-5" />
            </div>
            <!-- / Content -->

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
    <script src="<?= base_url()?>/asset/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url()?>/asset/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url()?>/asset/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url()?>/asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url()?>/asset/vendor/js/menu.js"></script>
    <script src="<?= base_url()?>asset/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
          $('.myTable').DataTable( {
              columnDefs: [
                  {
                      targets: ['_all'],
                      className: 'mdc-data-table__cell'
                  }
              ]
          } );
      } )

    </script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?= base_url()?>/asset/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
  </body>
</html>
