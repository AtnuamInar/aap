<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<script src="test/test.js">
</script>
!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="test/style.css">
    <link rel="stylesheet" type="text/javascript" href="login/test.css">
<script src="test/test.js">
</script>
    <title></title>
  </head>
  <body>
    <div class="split left">
      <div class="topnav">
         <div class="centered">
           <h1>Hello <b><?php echo htmlspecialchars($_SESSION["username"]); ?><b></h1>
      <a href="#home">Department</a>


<a href="https://www.arthakoartha.com/">ArthakoArtha</a>
        </div>

</div>
<div class="split right">
   <div class="centered">
    <div class="topnav">
    <a href="#home">Home</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
    <!-- <a href="assign.php" class="btn btn-danger">Assign Task</a> -->
    <a href="logout.php" class="btn btn-danger">Log Out</a>
   </div>

</div>

</div>
</div>
  </body>
</html>
