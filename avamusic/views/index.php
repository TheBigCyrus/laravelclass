<div class="row">
  <?php
  require_once "views/sidebar.php";
  ?>
  <div class="col-9 m-3">
    <!--musics start -->
    <div class="row">
      <!--musics 1 start -->
      <?php for ($i = 0; $i < 2; $i++) : ?>
        <a href="#" class="col-6 ">
          <div class="card mb-3 bg-sidebar">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?= $musics[$i]['Cover'] ?>" class="img-fluid rounded mt-5 mb-5 m-2">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title text-white mt-5 m-2"><?= $musics[$i]['Name'] ?></h5>
                  <p class="card-text me-2"><small class=" text-white "><?= $musics[$i]['SingerName']; ?></small></p>
                  <img src="views/assets/img/[CITYPNG.COM]Transparent HD White Music Wave Sound Waves Rhythm - 2000x2000 (1).png" class="card-text w-100" alt="">
                </div>
              </div>
            </div>
          </div>
        </a>
      <?php endfor; ?>
      <!--musics 1 end -->
    </div>
    <!--musics end -->
    <!--type start -->
    <div class="m-3 me-4 pe-4">
      <h4 class="text-white pe-4 pt-5 m-2">پلی لیست</h4>
      <div class="row p-3">
        <div class="col-3 " style="position: relative;">
          <div class="card text-bg-dark">
            <img src="views/assets/img/Happy-Music-300x180.jpg" class="card-img height-type " style="opacity: 0.4;" alt="...">
            <div class="card-img-overlay p-type">
              <h5 class="card-title text-center">اهنگ شاد</h5>
            </div>
          </div>
        </div>
        <div class="col-3 " style="position: relative;">
          <div class="card text-bg-dark">
            <img src="views/assets/img/driving-music-300x225.jpg" class="card-img  height-type" style="opacity: 0.4;" alt="...">
            <div class="card-img-overlay p-type">
              <h5 class="card-title text-center ">اهنگ رانندگی</h5>
            </div>
          </div>
        </div>
        <div class="col-3 " style="position: relative;">
          <div class="card text-bg-dark w-100">
            <img src="views/assets/img/FreeVector-Love-Music-300x224.jpg" class="card-img height-type" style="opacity: 0.4;" alt="...">
            <div class="card-img-overlay p-type">
              <h5 class="card-title text-center">اهنگ عاشقانه</h5>
            </div>
          </div>
        </div>
        <div class="col-3 " style="position: relative;">
          <div class="card text-bg-dark">
            <img src="views/assets/img/cafe-music-300x225.png" class="card-img  height-type" style="opacity: 0.4;" alt="...">
            <div class="card-img-overlay p-type">
              <h5 class="card-title text-center">اهنگ کافه</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- type end -->
    <!-- singer start -->
    <div class="row p-4 m-2 me-5 pe-4">
      <h4 class="text-white m-2 p-2">خوانندگان برتر</h4>
      <?php foreach ($singers as $singer) : ?>
        <div class="col-2 ">
          <div class="card h-singer bg-sidebar">
            <img src="<?= $singer['Image']; ?>" class="card-img-top img-h  rounded-pill p-2" style=" height: 130px;" alt="...">
            <div class="card-body">
              <p class="card-text text-center text-white"><?= $singer['Name']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- singer end -->

      <!-- songs starts -->
      <div class="row me-5">
        <?php foreach ($musics as $music) : ?>
          <div class="col-3 p-3">
            <div class="card">
              <img src="<?= $music['Cover'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-center"><?= $music['Name']; ?></p>
                <p class="card-text text-center"><?= $music['SingerName']; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  </body>

  </html>