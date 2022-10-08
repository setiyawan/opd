<!doctype html>
<html lang="en">
  <head>
    <style type="text/css">
      body {
        background-image: url(<?= base_url()?>/asset/images/kantorbupati.jpg);
        background-position-y: -120px;
        background-repeat: no-repeat;
        background-size: cover;
        }
      .container {
        background: white;
        width: 30% !important;
        margin-top: 9%;
        box-shadow: 0 3px 20px rgba(0,0,0,0.3);
        padding: 40px; 
      }
      button {
        width: 49%
      }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <script src="https://kit.fontawesome.com/58b6e7182a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>asset/images/favicon.png">

    <title>SI RATU (Sistem Informasi Rekapitulasi Usulan Kegiatan / Belanja OPD) | Bidang Anggaran BPKAD Kab. Madiun</title>
  </head>
  <body>
    
    <div class="container text-center">
      <img src="<?= base_url()?>/asset/images/favicon.png" width="70px" height="85px" >
      <h6 class="text-center mt-3">SI RATU (Sistem Informasi Rekapitulasi Usulan Kegiatan / Belanja OPD)</h6>
      <h6 class="text-center">Bidang Anggaran BPKAD Kab. Madiun</h6><hr>

      <form method="post" action="<?= base_url()?>user/do_update_password">
        <div class="form-group text-left">
          <label>Password Lama</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-lock"></i></div>
            </div>
          <input type="password" name="password" class="form-control" placeholder="Masukkan Password Lama Anda">
        </div>
        </div>
        <div class="form-group text-left">
          <label>Password Baru</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-lock"></i></div>
            </div>
          <input type="password" name="new_password" class="form-control" placeholder="Masukkan Password Baru">
        </div>
        </div>
        <div class="form-group text-left">
          <label>Ulangi Password Baru</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fas fa-lock"></i></div>
            </div>
          <input type="password" name="confirm_password" class="form-control" placeholder="Ulangi Password Baru Anda">
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Update Password</button>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>