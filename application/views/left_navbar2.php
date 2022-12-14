        <?php
          $slug = $this->uri->segment(1);
        ?>

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="<?=base_url()?>dashboard" class="app-brand-link">
              <h2 class="app-brand-text text-body fw-bolder">SI RATU</h2>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item <?= $slug == "dashboard" ? "active" : "" ?>">
              <a href="<?=base_url()?>dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <li class="menu-item <?= $slug == "opd" ? "active" : "" ?> <?= $id_opd > 0 ? "force-hidden" : "" ?>">
              <a href="<?=base_url()?>opd" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Tables">Daftar OPD</div>
              </a>
            </li>

            <li class="menu-item <?= $slug == "pengajuan" ? "active" : "" ?>">
              <a href="<?=base_url()?>pengajuan" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="Tables">Usulan Belanja / Kegiatan</div>
              </a>
            </li>

            <li class="menu-item <?= $slug == "laporan" ? "active" : "" ?> <?= $id_opd > 0 ? "force-hidden" : "" ?>">
              <a href="<?=base_url()?>laporan" class="menu-link">
                <i class="menu-icon tf-icons bx bx-printer"></i>
                <div data-i18n="Tables">Cetak Laporan</div>
              </a>
            </li>

            <li class="menu-item <?= $slug == "setting" ? "active" : "" ?> <?= $id_opd > 0 ? "force-hidden" : "" ?>">
              <a href="<?=base_url()?>setting/opd" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Tables">Setting Usulan Belanja</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="<?=base_url()?>user/ganti_password" class="menu-link">
                <i class="menu-icon tf-icons bx bx-lock"></i>
                <div data-i18n="Tables">Ganti Password</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="<?=base_url()?>user/logout" class="menu-link">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div data-i18n="Tables">Log Out</div>
              </a>
            </li>

          </ul>
        </aside>