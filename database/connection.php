<?php
  class Connection {

    public $host = "localhost";
    public $user = "root";
    public $pwd = "Abhi4531@my";
    public $db = "TODO";
    public $conn;

    function __construct() {
      $this->conn = new mysqli($this->host, $this->user, $this->pwd, $this->db);
    }

  }
?>