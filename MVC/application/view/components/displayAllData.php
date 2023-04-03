<div class="display-all-data" id="display-all-data">
  <?php if(isset($_SESSION['allData'])) { ?>
   <ul class="all-data-list">
    <?php foreach($_SESSION['allData'] as $data) { ?>
        <li class="all-data-list-li">
          <ul class="all-data">
            <li>
              <span class="bi bi-pen"></span>
            </li>
            <li>
              <?php echo $data['listItem']; ?>
            </li>
            <!-- <li>
              <button class="btn btn-danger"><span class="bi bi-trash"></span></button>
            </li> -->
          </ul>
        </li>
    <?php } ?>
   </ul>
  <?php } ?>
</div>