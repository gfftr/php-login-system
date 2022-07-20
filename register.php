<?php 
require_once 'includes/header.php';
?>

<div>
   
  <h1><?php echo "Register page" ?></h1>
  <a href="login.php">Login</a>

  


    <form action="" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confirm_password" placeholder="Confirm your password">
        <button type="submit">LOGIN</button>
    </form>
</div>

<?php 
require_once 'includes/footer.php';
?>

