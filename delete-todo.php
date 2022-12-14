<?php 
  include 'includes/config.php';
  session_start();
  if(!isset($_SESSION["user_username"])) {
    header("Location: index.php");
    die();
  }

  if (isset($_GET["id"])) {
    $todoId = mysqli_real_escape_string($conn, $_GET["id"]);

    // get user id based on user username
    $sql = "SELECT id FROM user WHERE username='{$_SESSION["user_username"]}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
      $row = mysqli_fetch_assoc($result);
      $user_id = $row["id"];
    }
    else {
      $user_id = 0;
    }

    $sql = "DELETE FROM todos WHERE id='{$todoId}' AND user_id='{$user_id}'";
    mysqli_query($conn, $sql);
    header("Location: dashboard-content.php");
  }
  else {
    header("Location: dashboard-content.php");
  }
?>