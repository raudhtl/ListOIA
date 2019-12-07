<!doctype html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="login" style="margin:150px; margin-left:500px; margin-right:500px">
    <div class="panel panel-default">
      <div class="panel-heading">Login</div>
      <div class="panel-body">
        <form method="post" action="<?php echo base_url('index.php/Login/auth'); ?>" >
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name = "email" class="form-control" id="email" required>
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" id="pwd" required>
          </div>
          <div class="form-group form-check">
          </div>
          <?php if ($this->session->flashdata('error') == TRUE) : ?>
                  <div class="alert alert-danger fade in" style="margin-top:15px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Info! </strong><?php echo $this->session->flashdata('error')?>
                  </div>
          <?php endif; ?>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
</div>
</body>
