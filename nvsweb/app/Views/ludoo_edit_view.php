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
    <form method="post" id="update_user" name="update_user" action="<?= site_url('/ludoo-update') ?>">
      <div class="form-group">
        <input name="id" value="<?php echo $user_obj['Id']; ?>" >
      </div>
      <div class="form-group">
        <label>Team Members</label>
        <select name="tmembers" class="form-control" id="teammembers">
          <option selected="selected" value="<?php echo $user_obj['TeamMembers']; ?>"><?php echo $user_obj['TeamMembers']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label>Team Numbers</label>
        <select name="tno" class="form-control" id="teamno">
          <option selected="selected" value="<?php echo $user_obj['TeamNo']; ?>"><?php echo $user_obj['TeamNo']; ?></option>
        </select>
      </div>
      <div class="form-group">
        <label>Team Name</label>
        <select name="tname" class="form-control" id="teamname">
          <option selected="selected" value="<?php echo $user_obj['TeamName']; ?>"><?php echo $user_obj['TeamName']; ?></option>
        </select>
      </div>

      <div class="form-group">
        <label>Margin</label>
        <input type="number" name="margin" class="form-control" value="<?php echo $user_obj['Margin']; ?>">
      </div>
      <div class="form-group">
        <label>Win Date</label>
        <?php
        const HTML_DATETIME_LOCAL = 'Y-m-d\TH:i';
        $php_timestamp = strtotime($user_obj['WinDate']);
        $html_datetime_string = date(HTML_DATETIME_LOCAL, $php_timestamp);
        echo "<input type='datetime-local' name='wdate' class='form-control' value='{$html_datetime_string}'>";
        ?>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Update Entry</button>
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