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

  // Text Limit Function 
  function textLimit($string, $limit)
  {
    if (strlen($string) > $limit) {
        return substr($string, 0, $limit) . "...";
    } else {
        return $string;
    }
  }

  // get Todo function
  function getTodo($todo)
  {
      $output = '<div class="card shadow-sm">
          <div class="card-body">
              <h4 class="card-title">'.textLimit($todo['title'], 28).'</h4>
              <p class="card-text">'.textLimit($todo['description'], 75).'</p>
              <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <a href="view-todo.php?id='. $todo['id'] .'" class="btn btn-sm btn-outline-secondary">View</a>
                      <a href="edit-todo.php?id='. $todo['id'] .'" class="btn btn-sm btn-outline-secondary">Edit</a>
                  </div>
                  <small class="text-muted">'. $todo['date'] .'</small>
              </div>
          </div>
      </div>';
  
      echo $output;
    }
?>