<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('pelanggan/update') ?>

              <div class="form-group">
                <label for="text">Id</label>
                <input type="text" name="id" value="<?php echo $data_pelanggan->id ?>" class="form-control" placeholder="Masukkan No. id">
                <input type="hidden" value="<?php echo $data_pelanggan->id ?>" name="id">
              </div>

              <div class="form-group">
                <label for="text">kode</label>
                <input type="text" name="kode" value="<?php echo $data_pelanggan->kode ?>" class="form-control" placeholder="Masukkan kode anda">
              </div>

              <div class="form-group">
                <label for="text">nama</label>
                <input type="text" name="nama" value="<?php echo $data_pelanggan->nama ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">hp</label>
                <input type="number" name="hp" value="<?php echo $data_pelanggan->hp ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">alamat</label>
                <input type="text" name="alamat" value="<?php echo $data_pelanggan->alamat ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">gender</label>
                <input type="options" name="gender" value="<?php echo $data_pelanggan->gender ?>" class="form-control" >
              </div>

              <button type="submit" class="btn btn-md btn-success">Update</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>