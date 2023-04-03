<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home-Page</title>
  <?php include 'components/header.php' ?>
</head>
<body class="container">
  <h1 class="text-center p-2">Welcome to TODO game</h1>
  <div class="d-flex justify-content-between">
    <div class="w-50 ps-5 pe-5">
      <h5>Enter new item</h5>
      <form action="/home/todolist" method="post" class="">
        <div class="input-group">
          <input type="text" name="newItem" id="newItem" class="form-control" required>
          <button class="btn btn-primary" name="addButtom" id="addButton">Add</button>
        </div>
      </form>
      <div name="markItem" class="markItem">
        <?php include 'components/displayMarkData.php' ?>
      </div>
      <div>
        <button class="marked btn btn-primary" name="marked" id="marked">Mars as done</button>
      </div>
    </div>
    <div class="w-50">
      <h3 class="text-center">Already added item</h3>
      <div>
        <?php include 'components/displayAllData.php' ?>
      </div>
    </div>
  </div>
</body>
</html>