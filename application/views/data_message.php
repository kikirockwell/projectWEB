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
        <a href="<?php echo base_url() ?>customer" class="btn btn-md btn-success">Back</a>
        <hr>
        <div class="col-md-12">
        <?php echo form_open('message/simpan?id='.$id_customer.'&token='.$token) ?>
        
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
                    <br>
                    <td>from : <?php echo $hasil->frm ?></td><br>
                  </tr>
                </div>

                <?php } ?><br>
                </tbody>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-11">  
                      <input type="text" name="message" class="form-control" placeholder="Masukkan Pesan">
                    </div>
                    <div class="col-md-1">
                      <button type="submit" class="btn btn-md btn-success">Send</button>
                    </div>
                  </div>
              </div>
        <?php echo form_close() ?>
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