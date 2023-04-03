<?php
  require_once 'connection.php';
  $obj = new Connection();

  $read = "SELECT * FROM todolist";
  $result = $obj->conn->query($read);
?>
<div class="added-items" id="added-items">
  <?php if($result->num_rows > 0) { ?>
      <ul class="list-container">
      <?php while($row = $result->fetch_assoc()) { ?>
        <li>
          <form action="" method="get">
            <ul class="list-content">
              <li>
                <input type="text" name="listId" value="<?php echo $row['listId'] ."."; ?>" class="form-control">
              </li>
              <li>
                <?php
                  $_SESSION["listItem". $row['listId']] = $row['listItem'];
                ?>
                <input type="text" name="itemValue" value="<?php echo $row['listItem']; ?>" class="form-control">
              </li>
              <li>
                <input type="checkbox" class="form-check-input p-2" name="mark<?php echo $row['listId']; ?>">
              </li>
              <li>
                <button id="editButton" name="edit" value="<?php echo $row['listId']; ?>" class="btn btn-primary">
                  <span class="bi bi-pencil"></span>
                </button>
              </li>
              <li>
                <button id="deleteButton" name="delete" value="<?php echo $row['listId']; ?>" class="btn btn-danger">
                  <span class="bi bi-trash"></span>
                </button>
              </li>
            </ul>
          </form>
        </li>
      <?php } ?>
      </ul>
  <?php  } ?>
</div>
