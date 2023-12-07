<div class="row">
  <?php
  require_once "views/sidebar.php";
  ?>
  <!--singer start-->
  <div class="col-8 d-block me-auto ms-auto">
    <div class="row ">
      <?php
      foreach($singers as $singer):
        ?>
        <!-- singer start -->
        <div class="col-2 p-1">
          <div class="card h-singer bg-sidebar">
            <img src="<?= $singer['Image'] ?>" class="card-img-top img-h  rounded-pill p-2" style=" height: 130px;"
              alt="...">
            <div class="card-body">
              <p class="card-text text-center text-white">
                <a href="singersProfile?ID=<?= $singer['ID'] ?>">
                  <small>
                    <?= $singer['Name'] ?>
                  </small>
                </a>
            </div>
          </div>
        </div>
        <!-- singer end -->
        <?php
      endforeach;
      ?>
    </div>
  </div>

</div>
<!--singer end-->
</body>

</html>