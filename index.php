<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo-App</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="operation.js"></script>
</head>
<body>
  <?php
    if(isset($_GET['delete'])) {
      session_start();
      $_SESSION['deleteId'] = $_GET['delete'];
      header("location: database/delete.php");
    }
    if(isset($_GET['edit'])) {
      session_start();
      $_SESSION['editId'] = $_GET['edit'];
      $_SESSION['itemValue'] = $_SESSION["listItem". $row['listId']];
      header("location: database/edit.php");
    }
  ?>
  <div class="container">
    <h1 class="text-center pt-3">Welcome to ToDo App</h1>
    <form action="database/insert.php" method="post" class="p-5">
      <div class="input-group">
        <input type="text" name="itemValue" id="itemValue" class="form-control" required
        <?php if(isset($_POST['itemValue'])) { echo $_POST['itemValue']; } ?>
        >
        <button class="btn btn-primary" id="button" name="addBtn">Add</button>
      </div>
    </form>
    <div>
      <h2 class="text-center">Your Items</h2>
      <?php include 'database/display.php' ?>
    </div>
  </div>
</body>
</html>
