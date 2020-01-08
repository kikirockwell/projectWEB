<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>customer/tambah" class="btn btn-md btn-success">Add Client</a>
        <hr>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Date Activation</th>
                    <th>Phone</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    foreach($data_customer as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $hasil->id ?></td>
                    <td><?php echo $hasil->name ?></td>
                    <td><?php echo $hasil->address ?></td>
                    <td><?php echo $hasil->create_at ?></td>
                    <td><?php echo $hasil->phone ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>message?id=<?php echo $hasil->id ?>&token=<?php echo $hasil->token ?>" class="btn btn-md btn-success">Message</a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>
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