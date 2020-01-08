<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('login/ceklogin') ?>

            <?php
              $info = $this->session->flashdata('info');
              if (!empty($info)){
                echo $info;
              }
            ?>

              <div class="form-group">
                <label for="text">User</label>
                <input type="text" name="user" class="form-control" placeholder="Masukkan Nama">
              </div>

              <div class="form-group">
                <label for="text">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
              </div>

              <button type="submit" class="btn btn-md btn-success">Login</button>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>