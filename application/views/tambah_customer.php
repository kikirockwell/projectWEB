<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('customer/simpan') ?>

              <div class="form-group">
                <label for="text">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama">
              </div>

              <div class="form-group">
                <label for="text">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Masukkan Alamat">
              </div>

              <div class="form-group">
                <label for="text">Date Activation</label>
                <input type="date" name="create_at" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">Phone</label>
                <input type="text" name="phone" class="form-control" >
              </div>

              <button type="submit" class="btn btn-md btn-success">Save</button>
              <a href="<?php echo base_url() ?>customer" class="btn btn-md btn-success">Cancel</a>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>