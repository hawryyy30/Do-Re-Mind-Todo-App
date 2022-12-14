<?php

  // database connection
  function dbConnect() {
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "do_re_mind";

    $conn = mysqli_connect($hostname, $username, $password, $database) or die ("Database connection failed.");

    return $conn;
  }

  $conn = dbConnect();

  // check username is valid or not
  function usernameIsValid($username) {

    $conn = dbConnect();
    $sql = "SELECT username FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
      return true;
    }
    else {
      return false;
    }
  }

  // check login details is valid or not
  function checkLoginDetails($username, $password) {

    $conn = dbConnect();
    $sql = "SELECT username FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
      return true;
    }
    else {
      return false;
    }
  }

  // create user
  function createUser($username, $password) {

    $conn = dbConnect();
    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);

    return $result;
  }
?>