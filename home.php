<!DOCTYPE html>
<?php
  session_start();
  if (!$_SESSION["loggedin"]){
    $_SESSION["error"] = "You have not logged in. Please log in first.";
    header("Location: login.php");
  }
  else{

  }
?>
<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="/ex8/all.css">
  </head>
  <body>
  <div id="welcome">Welcome to the Show</div>
  </body>
</html>