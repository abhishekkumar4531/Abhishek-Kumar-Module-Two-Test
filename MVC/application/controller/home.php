<?php

require '../application/model/database.php';
  class Home extends Framework {

    /*function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }*/

    public function index() {
      if(isset($_GET['delete'])) {
        $obj = new Database();
        $delete = $obj->deleteData($_GET['delete']);
        if($delete) {
          $this->display();
          //echo "Success";
          header("location: /");
        }
        else {
          //echo "Error";
          header("location: /");
        }
      }
      else {
        $this->view("dashboard");
      }
    }

    public function todolist() {
      if(isset($_POST['addButtom'])) {
        $itemValue = $_POST['newItem'];
        //$itemValue = test_input($itemValue);
        $obj = new Database();
        $status = $obj->markStage($itemValue);
        if($status) {
          $this->display();
          header("location: /");
        }
        else {
          echo "Error";
        }
      }
    }

    public function display() {
      session_start();
      $obj = new Database();
      $markData = $obj->getMarkData();
      if($markData != null) {
        $_SESSION['markData'] = $markData;
      }
      else {
        header("location: /");
      }
    }

    public function finalDisplay() {
      session_start();
      $obj = new Database();
      $allData = $obj->getMarkData();
      $_SESSION['allData'] = $allData;
      include "../application/view/components/displayAllData.php";
    }

  }
?>