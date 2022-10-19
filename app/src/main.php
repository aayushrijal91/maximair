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
                    <div class="font-oswald text-white text-uppercase fs-72 lh-111 text-center fw-500 text-shadow"><?= renderImg('maximum.png', 'lib') ?> Comfort when you choose the best</div>
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

<section class="deal">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="text-white font-oswald fs-20 text-uppercase">All split system air conditioner installs come with</div>
                <div class="text-primary font-oswald fs-50 text-uppercase lh-12 fw-500 pt-1 pb-3">Free Yearly Service valued at <span class="text-white">$150</span></div>
                <div class="text-white d-inline-flex text-uppercase font-oswald px-4 py-3 fw-700 fs-20 bordered border-primary rounded-4 mb-4">+ 5 Year Warranty</div>
                <a href="#form" class="btn d-inline-flex btn-gradient btn-shadow rounded-pill text-white fs-20 py-3 px-md-5 mt-2">
                    Claim Deal Now
                </a>
            </div>
        </div>
    </div>
</section>
<div class="deal-strip"></div>

<section class="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <ul class="nav nav-pills mb-6" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" id="pills-1-tab" data-bs-toggle="tab" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">7.1kW</button>
                    </li>
                    <li class="nav-item sale">
                        <button class="nav-link" id="pills-2-tab" data-bs-toggle="tab" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">10kW</button>
                    </li>
                    <li class="nav-item sale">
                        <button class="nav-link" id="pills-3-tab" data-bs-toggle="tab" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">12.5kW</button>
                    </li>
                    <li class="nav-item sale">
                        <button class="nav-link" id="pills-4-tab" data-bs-toggle="tab" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">14kW</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="pills-5-tab" data-bs-toggle="tab" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false">16kW</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("daikin-10.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-xl-7">
                                        <div class="d-flex justify-content-between fs-20 py-3">
                                            <div class="fw-600">Ducted System</div>
                                            <div class="">7.1kW</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="bordered border-dark rounded-9 py-1 fs-20"><span class="fw-700">5 x</span> Outlets</div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="bordered border-dark rounded-9 py-1 fs-20"><span class="fw-700">2 x</span> Zones</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-4">
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                <div class="fs-35 fw-700">5 YR</div>
                                                Warranty
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                <div class="fw-700">Inverter</div>
                                                Technology
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Weekly
                                                <div class="fw-700">Schedule<br>Timer</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto h-inherit">
                                        <div class="cta-card tertiary px-4">
                                            <div>
                                                <div class="fw-700">No</div>
                                                Subcontractors<br>used!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pt-3 pb-5">
                                    <div class="">Supplied &amp; Installed</div>
                                    <div class="font-anton fs-60 price py-2">$7,575</div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <a href="#form" class="btn reserve-btn btn-gradient fw-600 rounded-pill text-white fs-20 p-3">
                                            Reserve Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("daikin-10.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-xl-7">
                                        <div class="d-flex justify-content-between fs-20 py-3">
                                            <div class="fw-600">Ducted System</div>
                                            <div class="">10kW</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="bordered border-dark rounded-9 py-1 fs-20"><span class="fw-700">5 x</span> Outlets</div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="bordered border-dark rounded-9 py-1 fs-20"><span class="fw-700">2 x</span> Zones</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-4">
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                <div class="fs-35 fw-700">5 YR</div>
                                                Warranty
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                <div class="fw-700">Inverter</div>
                                                Technology
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Weekly
                                                <div class="fw-700">Schedule<br>Timer</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto h-inherit">
                                        <div class="cta-card tertiary px-4">
                                            <div>
                                                <div class="fw-700">No</div>
                                                Subcontractors<br>used!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pt-3 pb-5">
                                    <div class="">Supplied &amp; Installed</div>
                                    <div class="font-anton fs-60 price py-2">$7,575</div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <a href="#form" class="btn reserve-btn btn-gradient fw-600 rounded-pill text-white fs-20 p-3">
                                            Reserve Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("daikin-10.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-xl-7">
                                        <div class="d-flex justify-content-between fs-20 py-3">
                                            <div class="fw-600">Ducted System</div>
                                            <div class="">12.5kW</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="bordered border-dark rounded-9 py-1 fs-20"><span class="fw-700">5 x</span> Outlets</div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="bordered border-dark rounded-9 py-1 fs-20"><span class="fw-700">2 x</span> Zones</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-4">
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                <div class="fs-35 fw-700">5 YR</div>
                                                Warranty
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                <div class="fw-700">Inverter</div>
                                                Technology
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Weekly
                                                <div class="fw-700">Schedule<br>Timer</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto h-inherit">
                                        <div class="cta-card tertiary px-4">
                                            <div>
                                                <div class="fw-700">No</div>
                                                Subcontractors<br>used!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pt-3 pb-5">
                                    <div class="">Supplied &amp; Installed</div>
                                    <div class="font-anton fs-60 price py-2">$7,575</div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <a href="#form" class="btn reserve-btn btn-gradient fw-600 rounded-pill text-white fs-20 p-3">
                                            Reserve Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("daikin-10.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-xl-7">
                                        <div class="d-flex justify-content-between fs-20 py-3">
                                            <div class="fw-600">Ducted System</div>
                                            <div class="">14kW</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="bordered border-dark rounded-9 py-1 fs-20"><span class="fw-700">5 x</span> Outlets</div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="bordered border-dark rounded-9 py-1 fs-20"><span class="fw-700">2 x</span> Zones</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-4">
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                <div class="fs-35 fw-700">5 YR</div>
                                                Warranty
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                <div class="fw-700">Inverter</div>
                                                Technology
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Weekly
                                                <div class="fw-700">Schedule<br>Timer</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto h-inherit">
                                        <div class="cta-card tertiary px-4">
                                            <div>
                                                <div class="fw-700">No</div>
                                                Subcontractors<br>used!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pt-3 pb-5">
                                    <div class="">Supplied &amp; Installed</div>
                                    <div class="font-anton fs-60 price py-2">$7,575</div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <a href="#form" class="btn reserve-btn btn-gradient fw-600 rounded-pill text-white fs-20 p-3">
                                            Reserve Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("daikin-10.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-xl-7">
                                        <div class="d-flex justify-content-between fs-20 py-3">
                                            <div class="fw-600">Ducted System</div>
                                            <div class="">16kW</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="bordered border-dark rounded-9 py-1 fs-20"><span class="fw-700">5 x</span> Outlets</div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="bordered border-dark rounded-9 py-1 fs-20"><span class="fw-700">2 x</span> Zones</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-4">
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                <div class="fs-35 fw-700">5 YR</div>
                                                Warranty
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                <div class="fw-700">Inverter</div>
                                                Technology
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Weekly
                                                <div class="fw-700">Schedule<br>Timer</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto h-inherit">
                                        <div class="cta-card tertiary px-4">
                                            <div>
                                                <div class="fw-700">No</div>
                                                Subcontractors<br>used!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pt-3 pb-5">
                                    <div class="">Supplied &amp; Installed</div>
                                    <div class="font-anton fs-60 price py-2">$7,575</div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <a href="#form" class="btn reserve-btn btn-gradient fw-600 rounded-pill text-white fs-20 p-3">
                                            Reserve Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="text-center fs-20 font-oswald fw-500 pb-3">Terms &amp; Conditions</div>
        <div class="row justify-content-center gx-xl-5">
            <div class="col-auto">
                <ul class="terms-conditions">
                    <li>Single story home, pitch roof, gyprock ceiling</li>
                    <li>Outdoor unit positioned on PVS slab</li>
                    <li>Main power included</li>
                </ul>
            </div>
            <div class="col-auto">
                <ul class="terms-conditions">
                    <li>5 years warranty on parts &amp; labour</li>
                    <li>No subcontractors used</li>
                    <li>Sydney metro installation available</li>
                </ul>
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