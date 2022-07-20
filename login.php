<?php 
require_once 'includes/header.php';
?>

<div>
   
  <h1><?php echo "Login page" ?></h1>
  <a href="login.php">Login</a>
  <a href="register.php">Register</a>
  


    <form action="" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">LOGIN</button>
    </form>
</div>

<?php 
require_once 'includes/footer.php';
?>

