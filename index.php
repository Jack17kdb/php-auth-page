<?php
  session_start();
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Jace App</title>
  </head>
  <body>
    <form class='form' action='validate.php' method='post'>
      <div class='login'>
        <h1 id='header'>Jace App</h1>
        
        <?php if(isset($_SESSION['error'])): ?>
          <div id='error-message'>
            <?php echo $_SESSION['error']; ?>
            <?php unset($_SESSION['error']); ?>
          </div>
        <?php endif; ?>
        
        <label class='label' for='name'>Name:</label>
        <input class='input' type="text" name="username" placeholder="Enter Username">
        <br>
        <br>
        <label class='label' for='password'>Password:</label>
        <input class='input' type="password" name="password" placeholder="Password">
        <br>
        <br>
        <input class='button' type="submit" value="Log in">
      </div>
    </form>
  </body>
</html>
