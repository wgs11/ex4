<!DOCTYPE html>
<?php
session_start();
?>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/ex8/all.css">
  </head>
  <header><h2>Enter Username and Password</h2></header>
  <body>
    <?php
      if (isset($_SESSION["error"])){
        echo $_SESSION["error"];
      }
    ?>
    <div>
      <form class = "form-signin" role = "form" action = "process.php" method = "post">
        <input type = "text" class = "form-control" name = "username" placeholder = "username" required autofocus></br>
        <input type = "password" class = "form-control" name = "password" placeholder = "password" required>
        <button class="button" type = "submit" name = "login">Login</button>
      </form>
    </div>
  </body>
</html>