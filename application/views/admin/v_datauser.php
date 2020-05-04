<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.css') ?>">
    <script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/js/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/all.min.js') ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css') ?>" >
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Aidok | Admin</title>
    <style>
      .bodiadm{
        margin-top: 90px;
      }
      .button_tambah{
  			background-color: #FFFFFF;
  			color: #ec4638;
  			border: 2px solid #ec4638;
  			padding: 5px 10px;
  			margin: 0px 0px 4px 0px;
  			font-size: 15px;
  			border-radius: 25px;
  		}
  		.button_tambah:hover{
  			background-color: #ec4638;
  			color: #FFFFFF;
  		}
    </style>
  </head>
  <body class="bodiadm">
    <div class="container">
      <div class="box">
        <h3>Daftar User</h3>
        <br>
        <!-- <button type="button" class="button_tambah" data-toggle="modal" data-target="#edit1">Tambah User</button>
        <br></br> -->
        <table class="table table-bordered" id="table">
          <thead>
            <tr>
              <th>No</th>
              <th>ID User</th>
              <th>Nama Lengkap</th>
              <th>Email User</th>
             <!--  <th>Edit</th>
              <th>Hapus</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            $no=1;
            foreach ($u as $u) {

                ?>
            <tr>
              <form>
                <td><?= $no++; ?></td>
                <td><?php echo $u['id_user'] ?></td>
                <td><?php echo $u['nama_user']; ?></td>
                <td><?php echo $u['email_user'] ?></td>
                <!-- <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-user-edit"></i></button></td>
                <td><a type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fas fa-user-times"></i></a></td> -->
              </form>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
