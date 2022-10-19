<header>
    <div class="navigation-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row justify-content-center justify-content-lg-between align-items-center py-4">
                        <div class="col-auto">
                            <a href="./">
                                <?= renderImg("logo.png", "logo") ?>
                            </a>
                        </div>
                        <div class="col-auto">
                            <div class="row justify-content-center justify-content-lg-end align-items-center">
                                <div class="col-12 col-md-auto">
                                    <a href="#form" class="btn btn-gradient btn-shadow rounded-pill text-white fs-20 py-3 px-md-5">
                                        Get your free quote
                                    </a>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <a href="tel:<?= $phone_number ?>" class="btn btn-white btn-shadow rounded-pill text-primary fs-20 py-3 px-md-4">
                                        <?= renderImg("phone.png", "icons", "pe-3") ?><?= $phone_number ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="special-offers">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-2 text-center">
                    <?= renderImg('ac-1.png', 'icons') ?>
                    <div class="font-oswald fs-16 text-uppercase">Split System Cora</div>
                </div>
                <div class="col-xl-2 text-center">
                    <?= renderImg('ac-1.png', 'icons') ?>
                    <div class="font-oswald fs-16 text-uppercase">Split System lite</div>
                    <div class="d-inline-flex btn-gradient text-white rounded-5 fs-14 px-3 py-1 mt-1">Specials Available!</div>
                </div>
                <div class="col-xl-2 text-center">
                    <?= renderImg('ac-2.png', 'icons') ?>
                    <div class="font-oswald fs-16 text-uppercase">Ducted System</div>
                    <div class="d-inline-flex btn-gradient text-white rounded-5 fs-14 px-3 py-1 mt-1">Specials Available!</div>
                </div>
                <div class="col-xl-2 text-center">
                    <?= renderImg('hand-phone.png', 'icons') ?>
                    <div class="font-oswald fs-16 text-uppercase">Smart Controller</div>
                </div>
            </div>
        </div>
    </div>
    <div class="divider">
        <div class="stick"></div>
    </div>
</header>

<section class="banner">
    <div class="banner-wrapper">
        <?= renderImg("curtain-left.png", 'lib', 'curtain-left') ?>
        <?= renderImg("curtain-right.png", 'lib', 'curtain-right') ?>
        <div class="container position-relative">
            <div class="row">
                <div class="col-auto h-inherit">
                    <?= renderImg('sitting-girl.png', 'background') ?>
                </div>
                <div class="col h-inherit d-flex flex-column justify-content-between">
                    <div class="font-oswald text-white text-uppercase fs-72 lh-111 text-center fw-500">Maximum Comfort when you choose the best</div>
                    <div class="row justify-content-center align-items-center pb-3">
                        <div class="col-auto">
                            <div class="row align-items-center g-2">
                                <div class="col-auto"><?= renderImg('google.png', 'logo') ?></div>
                                <div class="col">
                                    <?= renderImg('stars.png', 'icons') ?>
                                    <div class="font-oswald text-white text-uppercase text-shadow fs-27 fw-800">4.9 stars</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="vertical-divider"></div>
                        </div>
                        <div class="col-auto text-shadow text-uppercase text-white fs-27 fw-500"><span class="fw-700">125+</span> Reviews</div>
                    </div>
                </div>
                <div class="col-3 h-inherit">
                    <div class="cta-1">
                        <div class="fs-35 font-oswald text-uppercase">Free Onsite quote</div>
                        <div class="fs-20 lh-1 pt-3">By industry experts not just a sales rep!</div>
                    </div>
                    <div class="cta-2 mt-4">
                        <div class="row">
                            <div class="col-auto"><?= renderImg('turn-around-time.png', 'icons') ?></div>
                            <div class="col fs-27 text-uppercase lh-1 fw-500"><span class="fw-800">Fast</span> Turn around times</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <div class="row gx-2 gx-md-3 text-white justify-content-center">
                    <div class="col-12 text-center pb-3 d-lg-none">
                        <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                            <?= renderImg("aiims.png", "logo") ?>
                        </a>
                    </div>
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">All Rights Reserved
                    </div>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>
    </div>
</footer>