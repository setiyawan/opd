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
              <h4 class="fw-bold py-3 mb-4">Data OPD</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <form action="<?= $form_action ?>" method="post" enctype="multipart/form-data"> 
                  <input type="hidden" name="id_opd" class="form-control" value="<?= $this->Ternary->isset_value($opd['id'])?>">
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
                            Home
                          </button>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-name">Nama SKPD</label>
                                <div class="col-sm-10">
                                  <input type="text" name="nama_skpd" class="form-control" value="<?= $this->Ternary->isset_value($opd['nama_skpd'])?>" required>
                                </div>
                              </div>
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-name">Status</label>
                                <div class="col-sm-10">
                                  <input type="text" name="status" class="form-control" value="<?= $this->Ternary->isset_value($opd['status'])?>" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-company">Nama Kepala</label>
                                <div class="col-sm-10">
                                  <input type="text" name="namakepala" class="form-control" value="<?= $this->Ternary->isset_value($opd['namakepala'])?>" required>
                                </div>
                              </div>
                              <div class="form-gorup mb-3">
                                <label class="col-form-label" for="basic-default-company">Pangkat Kepala</label>
                                <div class="col-sm-10">
                                  <input type="text" name="pangkatkepala" class="form-control" value="<?= $this->Ternary->isset_value($opd['pangkatkepala'])?>" required>
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
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
  </body>
</html>
