<?php
  include('connection.php');
  $obj = new Connection();
  session_start();
  if(isset($_SESSION['deleteId'])){
    $id= $_SESSION['deleteId'];
    session_destroy();
    delete_data($obj->conn, $id);
  }
  // delete data query
  function delete_data($connection, $id){
    $query="DELETE FROM todolist WHERE listId = '$id'";
    $exec= mysqli_query($connection,$query);
    if($exec){
      header("location: /");
    }
  }
?>
