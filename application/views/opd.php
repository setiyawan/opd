
<?php $this->view('header'); ?>

    <div class="row no-gutters mt-5">
      
      <?php $this->view('left_navbar'); ?>

      <div class="col-md-10 p-5 pt-2">
        <h5><i class="fas fa-user mr-2"></i>DAFTAR OPD</h5><hr>

          <a href="<?=base_url()?>opd/tambah" class=" btn btn-primary mb-3"><i class="fas fa-plus-circle mr-3"></i>Tambah OPD</a>
          <table class="table table-hover table-striped table-bordered myTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">HP</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th colspan="1" scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $row = 1; ?>
              <?php foreach ($opd as $key => $value) { ?>
              <tr>
                <th scope="row"> <?= $row++; ?></th>
                <td> <?= $value['nama']?> </td>
                <td> <?= $value['hp'] ?> </td>
                <td> <?= $value['email'] ?> </td>
                <td> <?= $value['alamat'] ?> </td>
                <td>
                  <a class="btn btn-secondary bg-success" href="<?= base_url()?>opd/edit?id=<?= $value['id_opd']?>">Edit</a>
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

