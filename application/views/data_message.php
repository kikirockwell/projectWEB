<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/style.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <hr>
        <div class="col-md-12">
        <?php echo form_open('message/simpan?id='.$id_customer) ?>
                <thead>
                  <tr>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    foreach($data_message as $hasil){ 
                ?>
                <div class="msg_client">
                  <tr>
                    <td><?php echo $hasil->message ?></td><br>
                    <td><?php echo $hasil->create_at ?></td><br>  
                    </td>
                  </tr>
                </div>

                <?php } ?><br>
                </tbody>
                <div class="form-group">
                <input type="text" name="message" class="form-control" placeholder="Masukkan Pesan">
              </div>
              <button type="submit" class="btn btn-md btn-success">Send</button>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>