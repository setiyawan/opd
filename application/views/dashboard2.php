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
              <h4 class="fw-bold py-3 mb-4"> Dashboard </h4>
                <div class="col-lg-12 col-md-12 order-1">
                  <div class="row">
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="<?= base_url()?>asset/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                            </div>
                          </div>
                          <span>Tahun Anggaran</span>
                          <h1 class="card-title mb-2"><?= $this->TimeConstant->get_current_year(); ?></h1>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="<?= base_url()?>asset/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a href="<?=base_url()?>pengajuan" class="dropdown-item">Lihat Detail</a>
                              </div>
                            </div>
                          </div>
                          <span>Usulan OPD</span>
                          <h1 class="card-title mb-2"><?= $jumlah_opd ?></h1>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="<?= base_url()?>asset/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a href="<?=base_url()?>pengajuan?status=1" class="dropdown-item">Lihat Detail</a>
                              </div>
                            </div>
                          </div>
                          <span>Sudah di ACC</span>
                          <h1 class="card-title mb-2"><?= $jumlah_acc ?></h1>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="<?= base_url()?>asset/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                            </div>
                            <div class="dropdown">
                              <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a href="<?=base_url()?>pengajuan?status=0" class="dropdown-item">Lihat Detail</a>
                              </div>
                            </div>
                          </div>
                          <span>Belum di Bahas</span>
                          <h1 class="card-title mb-2"><?= $jumlah_blm_bahas ?></h1>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
