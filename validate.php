<?php
  session_start();

  $username = $_POST['username'];
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

  $users = [];
  $file = fopen('users.csv', "r");
  $header = fgetcsv($file);

  while(($row = fgetcsv($file)) !== false) {
    $users[] = [
      'username' => trim($row[0]),
      'password' => trim($row[1])
    ];
  }
    fclose($file);

    foreach($users as $user) {
      if($user['username'] === $username && $user['password'] === $password){
        $_SESSION['username'] = $username;
        header('Location: home.php');
        exit();
      }
    }
    $_SESSION['error'] = 'Invalid username or password.';
    header('Location: index.php');
    exit();
  
?>
