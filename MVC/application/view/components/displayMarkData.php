<div class="mt-5">
  <?php session_start(); ?>
  <?php if(isset($_SESSION['markData'])) { ?>
    <?php foreach($_SESSION['markData'] as $rowWise) { ?>
      <div>
        <form action="">
          <ul class="mark-form-url">
            <li>
              <input type="text" class="form-control" value="<?php echo $rowWise['listItem']; ?>">
            </li>
            <li>
              <button class="btn btn-primary"><span class="bi bi-pencil"></span></button>
            </li>
            <li>
              <button class="btn btn-danger" id="delete" name="delete" value="<?php echo $rowWise['listId']; ?>"><span class="bi bi-trash"></span></button>
            </li>
          </ul>
        </form>
      </div>
    <?php } ?>
  <?php } ?>
</div>