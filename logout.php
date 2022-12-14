<?php 
  session_start();
  unset($_SESSION["user_username"]);
  session_destroy();
  header("Location: index.php");
?>