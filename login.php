<?php 
  include 'includes/config.php';
  session_start();

  if(isset($_SESSION["user_username"])) {
    header("Location: dashboard.php");
    die();
  }

  if(isset($_POST["submit"])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

    if (usernameIsValid($username)) {

      if (checkLoginDetails($username, $password)) {
        $_SESSION["user_username"] = $username;
        header("Location: dashboard.php");
        die();
      }
      else {
        echo "<script>alert('Login details is invalid.');window.location.replace('index.php');</script>";
      }
    }
    else {
      $user_registration = createUser($username, $password);

      if ($user_registration) {
        $_SESSION["user_username"] = $username;
        header("Location: dashboard.php");
        die();
      }
      else {
        echo "User registration failed. Please try again.";
        die();
      }
    }
  }
  else {
    header("Location: index.php");
    die();
  }
?>