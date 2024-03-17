<?php
ob_start();
require_once('includes/load.php');
if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<style>
  /* Additional CSS to center and adjust login page */
  html, body {
    overflow: hidden; /* Remove scrollbar from both html and body */
    background-color: #532C1F; /* Change main background color to #532C1F */
  }
  .login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 80vh; /* Adjusted height */
  overflow: hidden; /* Remove scrollbar */
  margin-top: 20px; /* Adjust margin from the top */
  margin-right: 200px; /* Adjust margin from the right as needed */
}


  .login-page {
    width: 300px; /* Adjust width as needed */
    border: 1px solid #ddd; /* Optional border */
    border-radius: 5px; /* Optional rounded corners */
    padding: 20px; /* Optional padding */
    background-color: #fff; /* Set background color to white */
  }
  .text-center {
    text-align: center;
  }
  .login-btn {
    width: 100%; /* Make button full width */
    border-radius: 5px; /* Add border-radius */
    background-color: #532C1F; /* Set button background color to match main background color */
    color: #ffffff; /* Set button text color to white */
    margin-top: 15px; /* Add margin to top */
    margin-left: auto; /* Center the button horizontally */
    margin-right: auto; /* Center the button horizontally */
    display: block; /* Ensure button is displayed as block element */
  }
</style>
<div class="login-container">
  <div class="login-page">
    <div class="text-center">
      <h1>Login Panel</h1>
      <h4>Inventory Management System</h4>
    </div>
    <?php echo display_msg($msg); ?>
    <form method="post" action="auth.php" class="clearfix">
      <div class="form-group">
        <label for="username" class="control-label">Username</label>
        <input type="name" class="form-control" name="username" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="Password" class="control-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>
      <div class="form-group">
        <button type="submit" class="btn login-btn">Login</button>
      </div>
    </form>
  </div>
</div>
<?php include_once('layouts/footer.php'); ?>
