<?php 
include 'includes/config.php';
  session_start();
  if(!isset($_SESSION["user_username"])) {
    header("Location: index.php");
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/dashboard.css" />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200;1,300;1,400;1,700&display=swap" rel="stylesheet" />
    <!-- Javascript -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous" defer></script>
    <!-- font awesome's kit code -->
    <script src="https://kit.fontawesome.com/bc44dd7ee2.js" crossorigin="anonymous" defer></script>
    <!-- Title and icons -->
    <link rel="icon" type="image/x-icon" href="./assets/image/favicon.png" />
    <title>Do-re-mind | Productivity on point</title>
  </head>
  <body>
    <div class="dashboard-container mx-auto">
      <!-- sidebar -->
      <aside>
        <div class="top">
          <div class="logo text-center">
            <i class="fa-regular fa-user mb-2"></i>
            <h4>Yo, <?php echo $_SESSION["user_username"] ?></h4>
            <p>Welcome back</p>
          </div>
        </div>

        <div class="sidebar">
          <div class="menu-icons">
            <div class="icon">
                <a href="dashboard-content.php"><i class="fa-solid fa-list-ul"></i></a>
              <div class="hide">
                <p>List</p>
              </div>
            </div>
            <div class="icon">
                <a href="add-todo.php"><i class="fa-solid fa-circle-plus"></i></a>
              <div class="hide">
                <p>Add</p>
              </div>
            </div>
            <div class="icon">
                <a href="#"><i class="fa-solid fa-tags"></i></a>
              <div class="hide">
                <p>Category</p>
              </div>
            </div>
          </div>
          <div class="logout">
            <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            <div class="hide">
              <p>Logout</p>
            </div>
          </div>
        </div>
      </aside>
      <!-- sidebar -->

      <!-- main content -->
      <main>
        <div class="container">
          <div class="row d-flex justify-content-between">
            <div class="col-md-6 my-auto">
              <h1 class="dashtitle fw-bold" >Editing Task</h1>

            </div>
            <div class="col-md-4 my-auto ">
              <img src="./assets/image/illustration.png" alt="">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col">
              <h3 class="dashsubtitle"></h3>
              <hr>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <?php
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
                $sql1 = "SELECT * FROM todos WHERE id='{$todoId}' AND user_id='{$user_id}'";
                $result1 = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($result1) > 0){
                      foreach($result1 as $todo){
                ?>
                <main>
                  <h1 class="card-title" ><?php echo $todo["title"]; ?></h1>
                  <p  class="card-text fs-5 col-md-8 "><?php echo $todo["description"]; ?></p>
                  <div class="mb-5">
                    <a href="<?php echo 'edit-todo.php?id='. $todo['id']; ?>" class="btn btn-primary btn-lg px-4 me-2">Edit</a>
                    <a href="<?php echo 'delete-todo.php?id='. $todo['id']; ?>" class="btn btn-danger btn-lg px-4">Delete</a>
                  </div>
                </main>
                <?php } 
                } else {
                  header("location: dashboard.php");
                } ?>                   
            </div>
          </div>
        </div>
      </main>
      <!-- main content -->
    </div>
  </body>
</html>
