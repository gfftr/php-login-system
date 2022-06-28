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
   <form class="uk-form-stacked js-register"> 
<h1>REGISTER</h1>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="email...">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="password" required='required' placeholder="password...">
        </div>
    </div>

    <div class="uk-margin">
       <div class="uk-button uk-button-default" type="submit">Login</div>
    </div>

    

    

</form>

  </div>

  <?php require_once "inc/footer.php" ?>

</body>
</html>