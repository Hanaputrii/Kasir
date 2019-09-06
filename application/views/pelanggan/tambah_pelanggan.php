<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('pelanggan/simpan') ?>

            
              <div class="form-group">
                <label for="text">kode</label>
                <input type="text" name="kode" class="form-control" placeholder="Masukkan kode anda" readonly="" value="<?php echo 'P0'.time() ?>" >
              </div>

              <div class="form-group">
                <label for="text">nama</label>
                <input type="text" name="nama" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">hp</label>
                <input type="number" name="hp" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">alamat</label>
                <input type="text" name="alamat" class="form-control" >
              </div>

              <div class="form-group">
                <label for="gender">gender</label>
               <select class="form-control" id="gender" name="gender">
                <option>laki-laki</option>
                <option>Perempuan</option>
              </select>
              </div>


              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>