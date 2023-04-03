<?php

  class Connection {

    public $user = "root";
    public $host = "localhost";
    public $db = "TODO";
    public $pwd = "Abhi4531@my";
    public $conn;

    function __construct() {
      $this->conn = new mysqli($this->host, $this->user, $this->pwd, $this->db);
    }

  }

?>
