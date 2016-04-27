<!DOCTYPE html>
<?php
session_start();
unset($_SESSION["error"]);
unset($_SESSION["loggedin"]);
unset($_SESSION["user"]);
$_SESSION["loggedin"] = false;
if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
  $user = $_POST['username'];
  $pw = $_POST['password'];
  $pattern = $user . ":" . $pw;
  $file = "users.txt";
  $handle = fopen($file, "r");
  while (($line = fgets($handle)) !== false) {
    $line = trim($line);
    if ($line == $pattern) {
      $_SESSION["user"] = $user;
      $_SESSION["loggedin"] = true;

    }
  }
}
if (!$_SESSION["loggedin"]){
  $_SESSION["error"] = "Your id or password is incorrect. Please try again";
  header("Location: login.php");
}
else{
  header("Location: home.php");
}
?>