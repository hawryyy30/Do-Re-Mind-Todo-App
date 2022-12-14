<?php 
  include 'includes/config.php';
  session_start();
  if(!isset($_SESSION["user_username"])) {
    header("Location: index.php");
    die();
  }

  if (isset($_GET["id"])) {
    $todoId = mysqli_real_escape_string($conn, $_GET["id"]);
  }
  else {
    header("Location: dashboard-content.php");
  }

  $msg = "";

  if (isset($_POST["updateTodo"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);

    // updating todo
    $sql = "UPDATE todos SET title='{$title}', description='{$desc}', date=CURRENT_TIMESTAMP WHERE id='{$todoId}'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $_POST["title"] = "";
      $_POST["desc"] = "";
      $msg = "<div class='alert alert-success'>Todo is updated</div>";
      header("refresh:1; url=dashboard-content.php");
    }
    else {
      $msg = "<div class='alert alert-danger'>Todo is not updated</div>";
    }
  }

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

  $sql = "SELECT * FROM todos WHERE id='{$todoId}' AND user_id='{$user_id}'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $todoData = mysqli_fetch_assoc($result);
  }
  else {
    header("Location: dashboard-content.php");
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
    <link rel="stylesheet" href="./assets/css/add.css" />
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
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-5 mx-auto">
          <div class="card bg-white rounded-border shadow">
            <div class="card-header px-4 py-3">
              <h4>Edit Todo</h4>
            </div>
            <div class="card-body p-4">
              <?php echo $msg; ?>
              <form action="" method="POST">
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="e.g. Do Homework Today" value="<?php echo $todoData["title"]; ?>" required>
                </div>
                <div class="mb-3">
                  <label for="desc" class="form-label">Description</label>
                  <textarea class="form-control" name="desc" id="desc" rows="3" required><?php echo $todoData['description']; ?></textarea>
                </div>
                <div>
                   <button type="submit" name="updateTodo">Update Todo</button>
                   <button type="reset">Reset</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
