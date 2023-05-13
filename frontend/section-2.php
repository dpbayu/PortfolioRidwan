<section class="section-2" id="about">
    <div class="row d-flex justify-content-center w-100">
        <div class="col-12 content-about-1">
            <div class="title">
                <p><?= $user['about_title'] ?></p>
            </div>
            <img class="img-about-1" src="assets/img/<?= $user['about_img1'] ?>" alt="Photo About" width="500" height="300">
            <p class="fs-1 text-end">02</p>
        </div>
        <div class="col-12 content-about-2 d-flex flex-column flex-md-row">
            <div class="description">
                <p><?= $user['about_desc'] ?></p>
            </div>
            <img class="img-about-2 mt-5" src="assets/img/<?= $user['about_img2'] ?>" alt="Photo About" width="200">
        </div>
    </div>
</section>