<?php
  session_start();
?>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Homepage</title>
</head>
<body>
  <?php if(isset($_SESSION['username'])): ?>
    <h1>Welcome to the homepage,
      <?php echo $_SESSION['username']; ?>
    </h1>
  <?php else: ?>
    <h1>You are not logged in.</h1>
  <?php endif; ?>
</body>
</html>
