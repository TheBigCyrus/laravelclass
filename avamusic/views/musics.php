<!--navbar end-->
<div class="row">
    <?php
    require_once "views/sidebar.php";
    ?>
    <!--music start-->
    <div class="col-8 d-block me-auto ms-auto">
        <a href="" class="btn-outline-secondary btn">ایرانی</a>
        <a href="" class="btn-outline-secondary btn">انگلیسی</a>
        <a href="" class="btn-outline-secondary btn">بی کلام</a>
        <a href="" class="btn-outline-secondary btn">عربی</a>
        <!--music in start-->
        <?php foreach ($musics as $music) : ?>
            <div class="card mb-3 m-3 bg-sidebar" style="max-width: 100%;height: 205px;">
                <div class="row g-0">
                    <div class="col-md-2 mt-2">
                        <img src="<?= $music['Cover'] ?>" class="d-block mx-2 rounded img-thumbnail" alt="...">
                        <a href="" class="btn background-orange d-block me-auto ms-auto m-2 ">پخش</a>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                            <h5 class="card-title text-white"><?= $music['Name'] ?></h5>
                            <p class="card-text text-white"><small class=""><?= $music['SingerName'] ?></small></p>
                        </div>
                        <div class="card-footer">
                            <img src="img/[CITYPNG.COM]Transparent HD White Music Wave Sound Waves Rhythm - 2000x2000 (1).png" class="card-text w-100" alt="">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p class="card-text text-white p-4" style="text-align: left;"><small class="">
                                < 54k</small>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!--music in end-->
    </div>
</div>
</body>

</html>