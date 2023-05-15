<section class="section-4" id="contact">
    <div class="content-contact">
        <div class="row">
            <div class="col-12 d-flex justify-content-between w-100">
                <div class="title">
                    <p>MARI KOLABORASI</p>
                </div>
                <p class="fs-1">04</p>
            </div>
            <div class="col-12">
                <div class="col-8">
                    <div class="contact">
                        <p><?= $user['contact_address'] ?></p>
                        <p><?= $user['contact_phone'] ?></p>
                        <p><?= $user['contact_email'] ?></p>
                    </div>
                </div>
                <div class="col-4 img-contact">
                    <img class="mt-3" src="assets/img/<?= $user['contact_img'] ?>" alt="Photo Contact">
                </div>
            </div>
        </div>
    </div>
</section>