<?php $this->view('header2'); ?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

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
              <h4 class="fw-bold py-3 mb-4"> Daftar OPD
                <a href="<?=base_url()?>opd/tambah" class="btn btn-primary btn-sm">
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
                        <th style="color: white;">Nama SKPD</th>
                        <th style="color: white;">Status</th>
                        <th style="color: white;">Nama Kepala</th>
                        <th style="color: white;">Pangkat Kepala</th>
                        <th style="color: white;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $row = 1; ?>
                      <?php foreach ($opd as $key => $value) { ?>
                      <tr>
                        <th scope="row"> <?= $row++; ?></th>
                        <td> <?= $value['nama_skpd']?> </td>
                        <td> <?= $value['status'] ?> </td>
                        <td> <?= $value['namakepala'] ?> </td>
                        <td> <?= $value['pangkatkepala'] ?> </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="<?= base_url()?>opd/edit?id=<?= $value['id']?>"
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
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
