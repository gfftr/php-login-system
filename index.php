<?php 
// allow the config
define('__CONFIG__', true);
// required the config
require_once "inc/config.php"; 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/css/uikit.min.css" />


 <title>Document</title>
  </head>
  <body>
  <div class="uk-section uk-container">
   
  <?php echo "Login page" ?>
  <a href="login.php">Login</a>
  <a href="register.php">Register</a>
  </div>

  <?php require_once "inc/footer.php" ?>

</body>
</html>