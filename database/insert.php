<?php
  require_once 'connection.php';
  $obj = new Connection();

  if(isset($_POST['addBtn'])) {
    $itemValue = $_POST['itemValue'];
    $itemValue = test_input($itemValue);
    $post = "INSERT INTO todolist (listItem) VALUES('$itemValue')";
    if($obj->conn->query($post)) {
      header("location: /");
    }
    else {
      echo "Error";
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>