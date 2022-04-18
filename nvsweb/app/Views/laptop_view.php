<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Laptop Issued</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
<div class="d-flex bd-highlight mb-3">
  <div class="bd-highlight"><a href="<?php echo site_url('/laptop-issue-form') ?>" class="btn btn-success mb-2">Issue Laptop</a></div>
  <div class="ml-auto bd-highlight"><a href="<?php echo site_url('/logout') ?>" class="btn btn-danger mb-2">Logout</a></div>
</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="laptop-view">
       <thead>
          <tr>
             <th>Id</th>
             <th>Staff Name</th>
             <th>Laptop No</th>
             <th>Issue Date</th>
             <th>Return Date</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($lissue): ?>
          <?php foreach($lissue as $lissue): ?>
          <tr>
             <td><?php echo $lissue['Id']; ?></td>
             <td><?php echo $lissue['StaffName']; ?></td>
             <td><?php echo $lissue['LaptopNo']; ?></td>
             <td><?php echo $lissue['IssueDate']; ?></td>
             <td><?php echo $lissue['ReturnDate']; ?></td>
             <td>
              <a href="<?php echo base_url('laptop-edit-view/'.$lissue['Id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('laptop-delete/'.$lissue['Id']);?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#laptop-view').DataTable();
  } );
</script>
</body>
</html>