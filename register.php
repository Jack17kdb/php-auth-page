<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registration</title>
</head>
<body>
    <form class='form' action='registration.php' method='post'>
        <div class="login">
            <h1 id='header'>Jace App</h1>
            <label class='label' for='name'>Name:</label>
            <input class='input' type="text" name="username" placeholder="Enter Username">
            <label class='label' for='password'>Password:</label>
            <input class='input' type="password" name="password" placeholder="Password">
            <label class='label' for='password-confirm'>Confirm Password:</label>
            <input class='input' type="password" name="password-confirm" placeholder="Confirm Password">
        </div>
        <input class='button' type="submit" value="register">
        <span>Already have an account?
            <a id="link" href="index.php">login</a>
        </span>
    </form>
</body>
</html>