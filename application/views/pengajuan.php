<?php $this->view('header'); ?>

    <div class="row no-gutters mt-5">
      
      <?php $this->view('left_navbar'); ?>

      <div class="col-md-10 p-5 pt-2">
        <h5><i class="fas fa-user mr-2"></i>DAFTAR PENGAJUAN RAPD OPD</h5><hr>

          <a href="<?=base_url()?>pengajuan/tambah" class=" btn btn-primary mb-3"><i class="fas fa-plus-circle mr-3"></i>Tambah Pengajuan</a>
          <table class="table table-hover table-striped table-bordered myTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama OPD</th>
                <th scope="col">Th. Anggaran</th>
                <th scope="col">Perubahan Ke-</th>
                <th scope="col">APBD</th>
                <th scope="col">RAPBD</th>
                <th scope="col">ACC</th>
                <th scope="col">Status</th>
                <th colspan="1" scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $row = 1; ?>
              <?php foreach ($pengajuan as $key => $value) { ?>
              <tr>
                <th scope="row"> <?= $row++; ?></th>
                <td> <?= $value['nama']?> </td>
                <td> <?= $value['tahun_anggaran'] ?> </td>
                <td> <?= $value['perubahan_ke'] ?> </td>
                <td> <?= $this->Converter->to_rupiah($value['anggaran_apbd']) ?> </td>
                <td> <?= $this->Converter->to_rupiah($value['anggaran_rapbd']) ?> </td>
                <td> <?= $this->Converter->to_rupiah($value['anggaran_acc']) ?> </td>
                <td> <?= $this->PengajuanConstant->status_pengajuan()[$value['status']] ?> </td>
                <td>
                  <a class="btn btn-secondary bg-success" href="<?= base_url()?>pengajuan/edit?id=<?= $value['id_pengajuan_opd']?>">Edit</a>
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

