<?php $this->view('header'); ?>

    <div class="row no-gutters mt-5">
      
      <?php $this->view('left_navbar'); ?>

      <div class="col-md-10 p-5 pt-2">
        <h5><i class="fas fa-user mr-2"></i>PEGAWAI</h5><hr>

          <a href="<?=base_url()?>pegawai/tambah" class=" btn btn-primary mb-3"><i class="fas fa-plus-circle mr-3"></i>Tambah Pegawai</a>
          <table class="table table-hover table-striped table-bordered myTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Golongan</th>
                <th scope="col">Gaji</th>
                <th scope="col">Tgl KGB Berikutnya</th>
                <th scope="col">Tgl KP Berikutnya</th>
                <th scope="col">Berkas</th>
                <th scope="col">Status</th>
                <th colspan="1" scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $row = 1; ?>
              <?php foreach ($pegawai as $key => $value) { ?>
              <tr>
                <th scope="row"> <?= $row++; ?></th>
                <td> <?= $value['nip']?> </td>
                <td> <?= $value['nama'] ?> </td>
                <td> <?= $value['golongan'] ?> </td>
                <td> <?= $this->Converter->to_rupiah($value['gaji']) ?> </td>
                <td> <?= $this->Converter->to_indonesia_date_full($value['tgl_mengajukan_kgb']) ?> </td>
                <td> <?= $this->Converter->to_indonesia_date_full($value['tmt_jabatan_berikutnya']) ?> </td>
                <td> <?= $value['berkas_url'] != '' ? 'Telah Diupload' : 'Belum Diupload' ?> </td>
                <td> <?= $this->PegawaiConstant->verifikasi_data()[$value['status']] ?> </td>
                <td>
                  <?php if ($id_upk == $value['id_upk']) { ?>
                  <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle bg-success" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Ubah Data
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="<?= base_url()?>pegawai/edit?id=<?= $value['id_pegawai']?>">Edit Profil</a>
                      <?php if ($value['berkas_url'] != '') { ?>
                      <a class="dropdown-item" href="<?= base_url()?>asset/images/berkas/<?= $value['berkas_url']?>" target="blank">Lihat Berkas</a>
                      <?php } ?>
                    </div>
                  </div>
                  <?php } ?>
                </td>
              </tr>
              <?php } ?>
       
            </tbody>
          </table>
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="<?= base_url()?>asset/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('.myTable').DataTable( {
            autoWidth: false,
            columnDefs: [
                {
                    targets: ['_all'],
                    className: 'mdc-data-table__cell'
                }
            ]
        } );
    } )

  </script>

  </body>
</html>

