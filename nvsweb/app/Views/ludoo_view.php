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
  <div class="bd-highlight"><a href="<?php echo site_url('/ludoo-entry-form') ?>" class="btn btn-success mb-2">Ludoo Entry</a></div>
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
             <th>Team Members</th>
             <th>Team No</th>
             <th>Team Name</th>
             <th>Margin</th>
             <th>Win Date</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($ludoo): ?>
          <?php foreach($ludoo as $ludoo): ?>
          <tr>
             <td><?php echo $ludoo['TeamMembers']; ?></td>
             <td><?php echo $ludoo['TeamNo']; ?></td>
             <td><?php echo $ludoo['TeamName']; ?></td>
             <td><?php echo $ludoo['Margin']; ?></td>
             <td><?php echo $ludoo['WinDate']; ?></td>
             <td>
              <a href="<?php echo base_url('ludoo-edit-view/'.$ludoo['Id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('ludoo-delete/'.$ludoo['Id']);?>" class="btn btn-danger btn-sm">Delete</a>
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