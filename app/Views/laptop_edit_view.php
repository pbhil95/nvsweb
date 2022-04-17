<!DOCTYPE html>
<html>
<head>
  <title>Laptop Edit View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <form method="post" id="update_user" name="update_user" 
    action="<?= site_url('/laptop-update') ?>">
    <input type="hidden" name="Id" id="Id" value="<?php echo $user_obj['Id']; ?>">
    <div class="form-group">
        <label>Staff Name</label>
        <input type="text" name="sname" class="form-control" value="<?php echo $user_obj['StaffName'];?>">
      </div>
      <div class="form-group">
        <label>Laptop Number</label>
        <input type="number" name="lno" class="form-control" value="<?php echo $user_obj['LaptopNo'];?>">
      </div>
      <div class="form-group">
        <label>Issue Date</label>
        <input type="text" name="isd" class="form-control" value="<?php echo $user_obj['IssueDate'];?>" readonly>
      </div>
      <div class="form-group">
        <label>Return Date</label>
        <input type="datetime-local" name="rd" class="form-control" value="<?php echo $user_obj['ReturnDate'];?>">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Save Data</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_user").length > 0) {
      $("#update_user").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },
        },
      })
    }
  </script>
</body>
</html>