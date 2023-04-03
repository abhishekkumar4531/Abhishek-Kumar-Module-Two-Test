<?php
  require_once 'connection.php';
  $obj = new Connection();
  session_start();
  if(isset($_SESSION['editId'])) {
    $listId = $_SESSION['editId'];
    $listValue = $_SESSION['itemValue'];

    $update = "UPDATE todolist SET listItem = '$listValue' WHERE listId = $listId";

    if ($obj->conn->query($update)) {
      header("location: /");
    }
  }
?>