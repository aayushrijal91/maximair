<!-- Modal -->
<div class="modal fade" id="smartAirConditioner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="smartAirConditionerLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= renderImg("airtouch-panels.png", "lib", 'w-100') ?>
                <div class="fs-50 text-primary lh-1 fw-500 text-uppercase font-oswald">Get maximum comfort without<br> leaving your couch</div>
                <div class="fw-300 lh-2 py-5">
                    <p class="fs-20">Provide more comfort and energy efficiency for your home’s ducted<br> reverse cycle air conditioner.</p>
                    <p>Meet AirTouch, the smartest Air control system yet. With a stylish touch screen display and remote app control from your smart device, AirTouch is an integrated, all in one control and zone management system for your air conditioning unit.</p>
                    <p>Enjoy greater comfort, more convenience and save energy with the latest in smart air conditioning control. No 2 houses are the same, and no other air conditioner control system is designed to be as adaptable to different house designs, locations or family lifestyles as AirTouch.</p>
                    <p>Maxim Air installs and services AirTouch, the smartest Air control system in Hills District, North Shore,
                        and all Sydney metropolitan areas.</p>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#form" class="btn btn-gradient rounded-pill text-white px-5">Shop all smart controllers</a>
            </div>
        </div>
    </div>
</div>
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

<!-- <section class="services">
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
</section> -->

<section class="mega-sale">
    <div class="container">
        <div class="hero-heading">Mega Sale</div>
        <div class="row justify-content-center text-jet-black align-items-center pt-3">
            <div class="col-auto">
                <div class="text-end text-uppercase fs-30 lh-1 fw-500">Split system<br>Supplied &amp; Installed</div>
            </div>
            <div class="col-auto">
                <div class="fw-600 fs-81 lh-1 font-oswald">$1,600*</div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <ul class="nav nav-pills mb-6" id="pills-tab-cora" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" id="pills-cora-1-tab" data-bs-toggle="tab" data-bs-target="#pills-cora-1" type="button" role="tab" aria-controls="pills-cora-1" aria-selected="true">2.0kW</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="pills-cora-2-tab" data-bs-toggle="tab" data-bs-target="#pills-cora-2" type="button" role="tab" aria-controls="pills-cora-2" aria-selected="false">2.5kW</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="pills-cora-3-tab" data-bs-toggle="tab" data-bs-target="#pills-cora-3" type="button" role="tab" aria-controls="pills-cora-3" aria-selected="false">3.5kW</button>
                    </li>
                    <li class="nav-item best-seller">
                        <button class="nav-link" id="pills-cora-4-tab" data-bs-toggle="tab" data-bs-target="#pills-cora-4" type="button" role="tab" aria-controls="pills-cora-4" aria-selected="false">5.0kW</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="pills-cora-5-tab" data-bs-toggle="tab" data-bs-target="#pills-cora-5" type="button" role="tab" aria-controls="pills-cora-5" aria-selected="false">6.0kW</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="pills-cora-6-tab" data-bs-toggle="tab" data-bs-target="#pills-cora-6" type="button" role="tab" aria-controls="pills-cora-6" aria-selected="false">7.1kW</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent-cora">
                    <div class="tab-pane fade show active" id="pills-cora-1" role="tabpanel" aria-labelledby="pills-cora-1-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("cora-aircons-5.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FTXV20W</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center text-uppercase font-oswald fs-60 fw-800 lh-1 py-2">Cora</div>
                                    <div class="col-xl-8">
                                        <div class="d-flex justify-content-between fs-20 py-2">
                                            <div class="fw-600">Wall Mounted Split System</div>
                                            <div class="">2.0kW</div>
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
                                                <div class="fw-700">Advanced</div>
                                                Inverter
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Air
                                                <div class="fw-700">Purification</div>
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
                                    <div class="font-anton fs-60 price py-2">$1,720</div>
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
                    <div class="tab-pane fade" id="pills-cora-2" role="tabpanel" aria-labelledby="pills-cora-2-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("cora-aircons-5.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center text-uppercase font-oswald fs-60 fw-800 lh-1 py-2">Cora</div>
                                    <div class="col-xl-8">
                                        <div class="d-flex justify-content-between fs-20 py-2">
                                            <div class="fw-600">Wall Mounted Split System</div>
                                            <div class="">2.5kW</div>
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
                                                <div class="fw-700">Advanced</div>
                                                Inverter
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Air
                                                <div class="fw-700">Purification</div>
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
                                    <div class="font-anton fs-60 price py-2">$1,720</div>
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
                    <div class="tab-pane fade" id="pills-cora-3" role="tabpanel" aria-labelledby="pills-cora-3-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("daikin-10.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center text-uppercase font-oswald fs-60 fw-800 lh-1 py-2">Cora</div>
                                    <div class="col-xl-8">
                                        <div class="d-flex justify-content-between fs-20 py-2">
                                            <div class="fw-600">Wall Mounted Split System</div>
                                            <div class="">3.5kW</div>
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
                                                <div class="fw-700">Advanced</div>
                                                Inverter
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Air
                                                <div class="fw-700">Purification</div>
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
                                    <div class="font-anton fs-60 price py-2">$1,720</div>
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
                    <div class="tab-pane fade" id="pills-cora-4" role="tabpanel" aria-labelledby="pills-cora-4-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("cora-aircons-5.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center text-uppercase font-oswald fs-60 fw-800 lh-1 py-2">Cora</div>
                                    <div class="col-xl-8">
                                        <div class="d-flex justify-content-between fs-20 py-2">
                                            <div class="fw-600">Wall Mounted Split System</div>
                                            <div class="">5.0kW</div>
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
                                                <div class="fw-700">Advanced</div>
                                                Inverter
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Air
                                                <div class="fw-700">Purification</div>
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
                                    <div class="font-anton fs-60 price py-2">$1,720</div>
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
                    <div class="tab-pane fade" id="pills-cora-5" role="tabpanel" aria-labelledby="pills-cora-5-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("cora-aircons-5.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center text-uppercase font-oswald fs-60 fw-800 lh-1 py-2">Cora</div>
                                    <div class="col-xl-8">
                                        <div class="d-flex justify-content-between fs-20 py-2">
                                            <div class="fw-600">Wall Mounted Split System</div>
                                            <div class="">6.0kW</div>
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
                                                <div class="fw-700">Advanced</div>
                                                Inverter
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Air
                                                <div class="fw-700">Purification</div>
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
                                    <div class="font-anton fs-60 price py-2">$1,720</div>
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
                    <div class="tab-pane fade" id="pills-cora-6" role="tabpanel" aria-labelledby="pills-cora-6-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("cora-aircons-5.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center text-uppercase font-oswald fs-60 fw-800 lh-1 py-2">Cora</div>
                                    <div class="col-xl-8">
                                        <div class="d-flex justify-content-between fs-20 py-2">
                                            <div class="fw-600">Wall Mounted Split System</div>
                                            <div class="">7.1kW</div>
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
                                                <div class="fw-700">Advanced</div>
                                                Inverter
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Air
                                                <div class="fw-700">Purification</div>
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
                                    <div class="font-anton fs-60 price py-2">$1,720</div>
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
        <div class="row justify-content-center gx-xl-7">
            <div class="col-auto">
                <ul class="terms-conditions">
                    <li>Back to back installation</li>
                    <li>Outdoor unit positioned on PVS slab</li>
                    <li>3 meters of refrigeration piping between<br> indoor &amp; outdoor</li>
                </ul>
            </div>
            <div class="col-auto">
                <ul class="terms-conditions">
                    <li>5 years warranty on parts &amp; labour</li>
                    <li>Single story pitched roof</li>
                    <li>Sydney metro installation available</li>
                </ul>
            </div>
        </div>
    </div>
</section> -->

<section class="same-day-servicing">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="font-oswald fs-50 text-uppercase lh-12 fw-500 pt-1 pb-3">Same day servicing available</div>
                <a href="#form" class="btn d-inline-flex btn-white btn-shadow rounded-pill text-tertiary fs-20 py-3 px-md-5 mt-4">
                    Get Free Quote
                </a>
            </div>
        </div>
    </div>
</section>
<div class="same-day-servicing-strip"></div>

<!-- <section class="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <ul class="nav nav-pills mb-6" id="pills-tab-lite" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" id="pills-lite-1-tab" data-bs-toggle="tab" data-bs-target="#pills-lite-1" type="button" role="tab" aria-controls="pills-lite-1" aria-selected="true">2.0kW</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="pills-lite-2-tab" data-bs-toggle="tab" data-bs-target="#pills-lite-2" type="button" role="tab" aria-controls="pills-lite-2" aria-selected="false">2.5kW</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="pills-lite-3-tab" data-bs-toggle="tab" data-bs-target="#pills-lite-3" type="button" role="tab" aria-controls="pills-lite-3" aria-selected="false">3.5kW</button>
                    </li>
                    <li class="nav-item best-seller">
                        <button class="nav-link" id="pills-lite-4-tab" data-bs-toggle="tab" data-bs-target="#pills-lite-4" type="button" role="tab" aria-controls="pills-lite-4" aria-selected="false">5.0kW</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="pills-lite-5-tab" data-bs-toggle="tab" data-bs-target="#pills-lite-5" type="button" role="tab" aria-controls="pills-lite-5" aria-selected="false">6.0kW</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="pills-lite-6-tab" data-bs-toggle="tab" data-bs-target="#pills-lite-6" type="button" role="tab" aria-controls="pills-lite-6" aria-selected="false">7.1kW</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent-lite">
                    <div class="tab-pane fade show active" id="pills-lite-1" role="tabpanel" aria-labelledby="pills-lite-1-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("cora-aircons-5.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FTXV20W</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center text-uppercase font-oswald fs-60 fw-800 lh-1 py-2">Lite</div>
                                    <div class="col-xl-8">
                                        <div class="d-flex justify-content-between fs-20 py-2">
                                            <div class="fw-600">Wall Mounted Split System</div>
                                            <div class="">2.0kW</div>
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
                                                <div class="fw-700">Advanced</div>
                                                Inverter
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Air
                                                <div class="fw-700">Purification</div>
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
                                    <div class="font-anton fs-60 price py-2">$1,600</div>
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
                    <div class="tab-pane fade" id="pills-lite-2" role="tabpanel" aria-labelledby="pills-lite-2-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("cora-aircons-5.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center text-uppercase font-oswald fs-60 fw-800 lh-1 py-2">Lite</div>
                                    <div class="col-xl-8">
                                        <div class="d-flex justify-content-between fs-20 py-2">
                                            <div class="fw-600">Wall Mounted Split System</div>
                                            <div class="">2.5kW</div>
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
                                                <div class="fw-700">Advanced</div>
                                                Inverter
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Air
                                                <div class="fw-700">Purification</div>
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
                                    <div class="font-anton fs-60 price py-2">$1,600</div>
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
                    <div class="tab-pane fade" id="pills-lite-3" role="tabpanel" aria-labelledby="pills-lite-3-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("cora-aircons-5.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center text-uppercase font-oswald fs-60 fw-800 lh-1 py-2">Lite</div>
                                    <div class="col-xl-8">
                                        <div class="d-flex justify-content-between fs-20 py-2">
                                            <div class="fw-600">Wall Mounted Split System</div>
                                            <div class="">3.5kW</div>
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
                                                <div class="fw-700">Advanced</div>
                                                Inverter
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Air
                                                <div class="fw-700">Purification</div>
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
                                    <div class="font-anton fs-60 price py-2">$1,600</div>
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
                    <div class="tab-pane fade" id="pills-lite-4" role="tabpanel" aria-labelledby="pills-lite-4-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("cora-aircons-5.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center text-uppercase font-oswald fs-60 fw-800 lh-1 py-2">Lite</div>
                                    <div class="col-xl-8">
                                        <div class="d-flex justify-content-between fs-20 py-2">
                                            <div class="fw-600">Wall Mounted Split System</div>
                                            <div class="">5.0kW</div>
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
                                                <div class="fw-700">Advanced</div>
                                                Inverter
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Air
                                                <div class="fw-700">Purification</div>
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
                                    <div class="font-anton fs-60 price py-2">$1,600</div>
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
                    <div class="tab-pane fade" id="pills-lite-5" role="tabpanel" aria-labelledby="pills-lite-5-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("cora-aircons-5.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center text-uppercase font-oswald fs-60 fw-800 lh-1 py-2">Lite</div>
                                    <div class="col-xl-8">
                                        <div class="d-flex justify-content-between fs-20 py-2">
                                            <div class="fw-600">Wall Mounted Split System</div>
                                            <div class="">6.0kW</div>
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
                                                <div class="fw-700">Advanced</div>
                                                Inverter
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Air
                                                <div class="fw-700">Purification</div>
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
                                    <div class="font-anton fs-60 price py-2">$1,600</div>
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
                    <div class="tab-pane fade" id="pills-lite-6" role="tabpanel" aria-labelledby="pills-lite-6-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6">
                                <?= renderImg("cora-aircons-5.png", "lib", "hero_img") ?>
                                <div class="pt-4"><span class="fw-600">Model no.</span> FDYAN 100 AV1</div>
                            </div>
                            <div class="col-xl-6 text-center px-xl-5">
                                <?= renderImg('daikin.png', 'logo') ?>
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center text-uppercase font-oswald fs-60 fw-800 lh-1 py-2">Lite</div>
                                    <div class="col-xl-8">
                                        <div class="d-flex justify-content-between fs-20 py-2">
                                            <div class="fw-600">Wall Mounted Split System</div>
                                            <div class="">7.1kW</div>
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
                                                <div class="fw-700">Advanced</div>
                                                Inverter
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col h-inherit">
                                        <div class="cta-card primary">
                                            <div>
                                                Air
                                                <div class="fw-700">Purification</div>
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
                                    <div class="font-anton fs-60 price py-2">$1,600</div>
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
        <div class="row justify-content-center gx-xl-7">
            <div class="col-auto">
                <ul class="terms-conditions">
                    <li>Back to back installation</li>
                    <li>Outdoor unit positioned on PVS slab</li>
                    <li>3 meters of refrigeration piping between<br> indoor &amp; outdoor</li>
                </ul>
            </div>
            <div class="col-auto">
                <ul class="terms-conditions">
                    <li>5 years warranty on parts &amp; labour</li>
                    <li>Single story pitched roof</li>
                    <li>Sydney metro installation available</li>
                </ul>
            </div>
        </div>
    </div>
</section> -->

<section class="about">
    <div class="container">
        <div class="heading">
            <?= renderImg('about-main.png', 'lib', 'w-100') ?>
            <div class="content">
                <div class="font-oswald text-uppercase fs-35 fw-500">Integrate Airtouch with your existing air conditioning System</div>
                <a href="#form" class="btn d-inline-flex rounded-0 py-5 px-0 fs-20 fw-300 text-white">
                    <span class="pe-2">Ask us how!</span>
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="13" cy="13" r="12.5" stroke="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.97824 10.3083C7.56715 10.7194 7.56715 11.3859 7.97824 11.797L12.2335 16.0522C12.2845 16.1666 12.3569 16.2738 12.4507 16.3676C12.6688 16.5857 12.9586 16.688 13.2442 16.6748C13.5297 16.688 13.8195 16.5857 14.0376 16.3676C14.1314 16.2738 14.2038 16.1666 14.2548 16.0522L18.5101 11.797C18.9212 11.3859 18.9212 10.7194 18.5101 10.3083C18.099 9.89721 17.4325 9.89721 17.0214 10.3083L13.2442 14.0855L9.46692 10.3083C9.05583 9.89721 8.38933 9.89721 7.97824 10.3083Z" fill="white" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-lg-6">
                <div class="advantages-card">
                    <div class="font-oswald lh-12 fs-50 text-uppercase fw-500">Smart Air conditioning controller</div>
                    <div class="row justify-content-center py-4">
                        <div class="col-lg-7 fs-20 fw-300">
                            What are the advantages of using a smart controller?
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <button type="button" class="btn w-100 btn-gradient btn-shadow rounded-pill text-white fs-20 p-2 mt-2" data-bs-toggle="modal" data-bs-target="#smartAirConditioner">
                                Read Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <?= renderImg("google-home.png", "lib") ?>
            </div>
        </div>
    </div>
</section>

<!-- <section class="airtouch">
    <div class="container">
        <ul class="nav nav-pills mb-6" id="pills-tab-airtouch" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" id="pills-airtouch-1-tab" data-bs-toggle="tab" data-bs-target="#pills-airtouch-1" type="button" role="tab" aria-controls="pills-airtouch-1" aria-selected="true">AirTouch 4</button>
            </li>
            <li class="nav-item new">
                <button class="nav-link" id="pills-airtouch-2-tab" data-bs-toggle="tab" data-bs-target="#pills-airtouch-2" type="button" role="tab" aria-controls="pills-airtouch-2" aria-selected="false">AirTouch 5</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent-airtouch">
            <div class="tab-pane fade show active" id="pills-airtouch-1" role="tabpanel" aria-labelledby="pills-airtouch-1-tab">
                <div class="row align-items-center gx-xxl-7">
                    <div class="col-xl">
                        <?= renderImg("airtouch-4.png", "lib", "w-100") ?>
                    </div>
                    <div class="col-xl-4 text-center">
                        <?= renderImg('airtouch.png', 'logo') ?>
                        <div class="fw-700 fs-20 text-start py-4">AirTouch 4</div>
                        <div class="row  justify-content-center g-4">
                            <div class="col-4 h-inherit">
                                <div class="cta-card primary">
                                    <div class="fw-700">WiFi</div>
                                </div>
                            </div>
                            <div class="col-4 h-inherit">
                                <div class="cta-card primary">
                                    <div>
                                        Energy
                                        <div class="fw-700">Efficient</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 h-inherit">
                                <div class="cta-card primary">
                                    <div>
                                        <div class="fw-700">Compatible</div>
                                        with major <br>brands
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 h-inherit">
                                <div class="cta-card primary">
                                    <div>
                                        <div class="fw-700">Google<br>Home</div>
                                        Compatible
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 h-inherit">
                                <div class="cta-card primary">
                                    <div>
                                        <div class="fw-700">Alexa</div>
                                        Compatible
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pt-5 pb-4">
                            <div>Supplied &amp; Installed starting from</div>
                            <div class="font-anton fs-60 lh-1 py-2">$1,500</div>
                        </div>
                        <a href="#form" class="btn enquire-btn btn-gradient fw-600 rounded-pill text-white fs-20 p-3">
                            Enquire Now
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center mt-9">
                    <div class="col-xl-9">
                        <div class="text-center font-oswald fs-20">
                            Adapt your home to your idea of comfort with the right temperature in the right place at the right time.
                        </div>
                        <div class="row justify-content-between gx-xxl-9 pt-6">
                            <div class="col-lg-6 lh-2 fw-300">
                                The all new AirTouch 4 is a smart air conditioning controller that is the fusion of comfort, energy efficiency, smart design and ease of use. AirTouch provides more than just cooling or heating but also becomes part of a lifestyle…an experience. The brand-new 8” HD touch screen console is bigger; and
                            </div>
                            <div class="col-lg-6 lh-2 fw-300">
                                displays brighter, bolder colors and features a slider at the bottom of the screen to make it easier to adjust the setpoint temperature. It also makes it easy to adjust the conditioned air flow in 5% increments across 16 zones from 1, 2, 3, or 4 different ducted air conditioning units.
                            </div>
                        </div>

                        <div class="text-center text-italic pt-8">Maxim Air installs and services AirTouch, the smartest Air control system in Hills District, North Shore, and all Sydney metropolitan areas.</div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-airtouch-2" role="tabpanel" aria-labelledby="pills-airtouch-2-tab">
                <div class="row align-items-center gx-xxl-7">
                    <div class="col-xl">
                        <?= renderImg("airtouch-5.png", "lib", "w-100") ?>
                    </div>
                    <div class="col-xl-4 text-center">
                        <?= renderImg('airtouch.png', 'logo') ?>
                        <div class="fw-700 fs-20 text-start py-4">AirTouch 5</div>
                        <div class="row  justify-content-center g-4">
                            <div class="col-4 h-inherit">
                                <div class="cta-card primary">
                                    <div class="fw-700">WiFi</div>
                                </div>
                            </div>
                            <div class="col-4 h-inherit">
                                <div class="cta-card primary">
                                    <div>
                                        Energy
                                        <div class="fw-700">Efficient</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 h-inherit">
                                <div class="cta-card primary">
                                    <div>
                                        <div class="fw-700">Compatible</div>
                                        with major <br>brands
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 h-inherit">
                                <div class="cta-card primary">
                                    <div>
                                        <div class="fw-700">Google<br>Home</div>
                                        Compatible
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 h-inherit">
                                <div class="cta-card primary">
                                    <div>
                                        <div class="fw-700">Alexa</div>
                                        Compatible
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pt-5 pb-4">
                            <div>Supplied &amp; Installed starting from</div>
                            <div class="font-anton fs-60 lh-1 py-2">$1,900</div>
                        </div>
                        <a href="#form" class="btn enquire-btn btn-gradient fw-600 rounded-pill text-white fs-20 p-3">
                            Enquire Now
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center pt-8 pb-5">
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-lg-6 fs-20 fw-600">Save Energy, Save Money</div>
                            <div class="col-lg-6 fs-300">With smart zoning, reduce the size of the air conditioner you need and save on running costs.</div>
                        </div>
                    </div>
                </div>
                <?= renderImg('airtouch-5-plans.png', 'lib', 'w-100') ?>
                <div class="row justify-content-center mt-n6">
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-lg-5 font-oswald fs-20">
                                Adapt your home to your idea of comfort with the right temperature in the right place at the right time.
                            </div>
                        </div>
                        <div class="row justify-content-between gx-xxl-9 pt-7">
                            <div class="col-lg-6 lh-2 fw-300">
                                The all new AirTouch 5 is a smart air conditioning controller that is the fusion of comfort, energy efficiency, smart design and ease of use. AirTouch provides more than just cooling or heating but also becomes part of a lifestyle…an experience. The brand-new 8” HD touch screen console is bigger; and
                            </div>
                            <div class="col-lg-6 lh-2 fw-300">
                                displays brighter, bolder colors and features a slider at the bottom of the screen to make it easier to adjust the setpoint temperature. It also makes it easy to adjust the conditioned air flow in 5% increments across 16 zones from 1, 2, 3, or 4 different ducted air conditioning units.
                            </div>
                        </div>

                        <div class="text-center text-italic pt-8">Maxim Air installs and services AirTouch, the smartest Air control system in Hills District, North Shore, and all Sydney metropolitan areas.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="form" id="form">
    <div class="title">
        <div class="container">
            <div class="hero_heading fs-50">Get Your Free quote now!</div>
            <div class="pt-4">Simply fill in your information below and we will get back to you ASAP.</div>
        </div>
    </div>
    <div class="form-main">
        <form action="./src/form" method="POST">
            <div class="container">
                <div class="fs-35 font-oswald fw-500 text-uppercase heading">Your Contact Information</div>
                <div class="row justify-content-xl-between gy-xl-6">
                    <div class="col-lg-6 col-xxl-5">
                        <div class="form-border"><input type="text" class="form-control" placeholder="Your name" name="name" required></div>
                    </div>
                    <div class="col-lg-6 col-xxl-5">
                        <div class="form-border"><input type="tel" class="form-control" placeholder="Phone no." name="phone" required></div>
                    </div>
                    <div class="col-lg-6 col-xxl-5">
                        <div class="form-border"><input type="email" class="form-control" placeholder="Email Address" name="email" required></div>
                    </div>
                    <div class="col-lg-6 col-xxl-5">
                        <div class="form-border"><input type="text" class="form-control" placeholder="Street Address" name="address" required></div>
                    </div>
                </div>
            </div>
            <hr class="my-8">
            <div class="container">
                <div class="row justify-content-xl-between gy-xl-6">
                    <div class="col-lg-6 col-xxl-5">
                        <select name="service" class="form-control form-select" requried>
                            <option value="" selected disabled>Select Service</option>
                            <option>Multi Head Split System Air Conditioners</option>
                            <option>Split System Air Conditioners</option>
                            <option>Ducted Air Conditioning Installation</option>
                            <option>Ducted Gas Heating Systems</option>
                            <option>Smart Air Conditioning Controller</option>
                        </select>
                        <div class="row gx-2">
                            <div class="col-lg-1">
                                <div class="underscore bg-tertiary"></div>
                            </div>
                            <div class="col">
                                <div class="underscore bg-primary"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-5">
                        <textarea name="comment" placeholder="Additional information" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="col-lg-6 col-xxl-5">
                        <button type="submit" class="btn fw-500 fs-20 w-100 btn-tertiary text-white rounded-pill">Reserve Now</button>
                    </div>
                    <div class="col-lg-6 col-xxl-5">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="26.5" cy="26.5" r="26.5" fill="#D9D9D9" />
                                    <path d="M19.2857 35C19.9958 35 20.5714 34.4404 20.5714 33.75C20.5714 33.0596 19.9958 32.5 19.2857 32.5C18.5756 32.5 18 33.0596 18 33.75C18 34.4404 18.5756 35 19.2857 35Z" fill="#F26336" />
                                    <path d="M24.4286 35C25.1387 35 25.7143 34.4404 25.7143 33.75C25.7143 33.0596 25.1387 32.5 24.4286 32.5C23.7185 32.5 23.1429 33.0596 23.1429 33.75C23.1429 34.4404 23.7185 35 24.4286 35Z" fill="#F26336" />
                                    <path d="M29.5714 35C30.2815 35 30.8571 34.4404 30.8571 33.75C30.8571 33.0596 30.2815 32.5 29.5714 32.5C28.8613 32.5 28.2857 33.0596 28.2857 33.75C28.2857 34.4404 28.8613 35 29.5714 35Z" fill="#F26336" />
                                    <path d="M34.7143 35C35.4244 35 36 34.4404 36 33.75C36 33.0596 35.4244 32.5 34.7143 32.5C34.0042 32.5 33.4286 33.0596 33.4286 33.75C33.4286 34.4404 34.0042 35 34.7143 35Z" fill="#F26336" />
                                    <path d="M32.1429 21.25H30.8571V18.75C30.8571 17.7554 30.4508 16.8016 29.7274 16.0983C29.0041 15.3951 28.023 15 27 15C25.977 15 24.9959 15.3951 24.2726 16.0983C23.5492 16.8016 23.1429 17.7554 23.1429 18.75V21.25H21.8571C21.5162 21.25 21.1891 21.3817 20.948 21.6161C20.7069 21.8505 20.5714 22.1685 20.5714 22.5V28.75C20.5714 29.0815 20.7069 29.3995 20.948 29.6339C21.1891 29.8683 21.5162 30 21.8571 30H32.1429C32.4838 30 32.8109 29.8683 33.052 29.6339C33.2931 29.3995 33.4286 29.0815 33.4286 28.75V22.5C33.4286 22.1685 33.2931 21.8505 33.052 21.6161C32.8109 21.3817 32.4838 21.25 32.1429 21.25ZM25.7143 21.25V18.75C25.7143 18.4185 25.8497 18.1005 26.0909 17.8661C26.332 17.6317 26.659 17.5 27 17.5C27.341 17.5 27.668 17.6317 27.9091 17.8661C28.1503 18.1005 28.2857 18.4185 28.2857 18.75V21.25H25.7143Z" fill="#F26336" />
                                </svg>
                            </div>
                            <div class="col">
                                <div class="font-oswald text-uppercase fw-500 text-medium-grey">Privacy &amp; Security protection</div>
                                <div class="text-medium-grey">All information provided will be kept 100% private & secure</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="testimonials">
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-xl-10">
                <div id="testimonials-slider" class="testimonials-slider">
                    <div class="testimonial">
                        <?= renderImg('stars.png', 'lib') ?>
                        <div class="font-oswald fs-20 fw-600 pt-3 pb-4">Deepanjan Basu</div>
                        <div class="fw-300">
                            The best in business....the most professional air-conditioning business in Sydney. Absolutely clean and super efficient team. Thanks Araan and his super team. They installed a new AC unit and relocated my old unit in another room. Yeah! Now my whole apartment has got AC. The job site was cleaned and the gyprock was repaired all in just 1 day.
                        </div>
                    </div>
                    <div class="testimonial">
                        <?= renderImg('stars.png', 'lib') ?>
                        <div class="font-oswald fs-20 fw-600 pt-3 pb-4">Robert Shi</div>
                        <div class="fw-300">
                            Stephen and his team have done a fantastic job. Right from the initial quoting stage all the way to job completion, everything has been handled professionally with attention to details. We are extremely happy with the result and would recommend their service to anyone.
                        </div>
                    </div>
                    <div class="testimonial">
                        <?= renderImg('stars.png', 'lib') ?>
                        <div class="font-oswald fs-20 fw-600 pt-3 pb-4">Hakan Han</div>
                        <div class="fw-300">
                            We had our ducted AC replaced by MaximAir and they did an excellent job. Stephen conducted a site visit, inspected our ducts and provided us with a good, detailed explanation of the options. We selected an airtouch 4 system with 8 zones, all individually temperature controlled and we are really happy with it...
                        </div>
                    </div>
                    <div class="testimonial">
                        <?= renderImg('stars.png', 'lib') ?>
                        <div class="font-oswald fs-20 fw-600 pt-3 pb-4">Suzanne Meyers</div>
                        <div class="fw-300">
                            He wants them to say 3 days ago, 5 days ago, a week ago, 2 weeks ago and a month ago.
                            Noel did a great job. Prompt professional service. Our damaged poly tank was welded up in a jiffy and ready to go straight away.
                        </div>
                    </div>
                    <div class="testimonial">
                        <?= renderImg('stars.png', 'lib') ?>
                        <div class="font-oswald fs-20 fw-600 pt-3 pb-4">Shannon Beatty</div>
                        <div class="fw-300">
                            Noel came out to look at what I thought was a leak in my water tank. He quickly discovered that the leak was actually from a crack in a fitting, on the part of the fitting that screws into the tank. At my request he removed the fitting and capped off the tank at that outlet, so my tank is now leak-free. He was only at my place for 10 minutes so didn't even charge me a call-out fee! Very happy to recommend Noel.
                        </div>
                    </div>
                    <div class="testimonial">
                        <?= renderImg('stars.png', 'lib') ?>
                        <div class="font-oswald fs-20 fw-600 pt-3 pb-4">Catherine Gillespie</div>
                        <div class="fw-300">
                            Noel carried out a welding repair to our poly rainwater tank. He kept us informed as to his availability and arrived at the time provided to us. We found him to be extremely professional and offered us sound advice. We would not hesitate in recommending him for this service.
                        </div>
                    </div>
                    <div class="testimonial">
                        <?= renderImg('stars.png', 'lib') ?>
                        <div class="font-oswald fs-20 fw-600 pt-3 pb-4">Shane Langham</div>
                        <div class="fw-300">
                            When you want a job done right the first time call a professional like Noel. Noel has the experience that you are after to tell you how it is and the best way forward. My poly water tank has never looked so good (other then when it was new) Thanks for a job well done Noel. I will be calling you again if I have trouble with my other tank.
                        </div>
                    </div>
                    <div class="testimonial">
                        <?= renderImg('stars.png', 'lib') ?>
                        <div class="font-oswald fs-20 fw-600 pt-3 pb-4">Lloyd Anderson</div>
                        <div class="fw-300">
                            The "Self Supporting" roof of our 5,000 gallon poly tank collapsed and I feared that I would have replace it. Access to the tank's location was difficult as far as replacement is concerned and this could have cost a lot. Noel took on the job and while the repair was not easy and took a fair while, he got the job done and at a reasonable cost. Noel is very good at his craft and I highly recommend him.
                        </div>
                    </div>
                    <div class="testimonial">
                        <?= renderImg('stars.png', 'lib') ?>
                        <div class="font-oswald fs-20 fw-600 pt-3 pb-4">Helena Lewis</div>
                        <div class="fw-300">
                            Noel was knowledgeable and friendly. Got the job done without any fuss and at a reasonable price. Would happily recommend him to others.
                        </div>
                    </div>
                    <div class="testimonial">
                        <?= renderImg('stars.png', 'lib') ?>
                        <div class="font-oswald fs-20 fw-600 pt-3 pb-4">Des Craven</div>
                        <div class="fw-300">
                            Rang Mr Fix It Water Tank Service as a repair to my water tank carried out by Rapid Repairs was unsuccessful (see my review on Rapid Repairs). Noel from was punctual and did a thoroughly professional job on fixing the leak. If you’re looking for an expert I highly recommend him.
                        </div>
                    </div>
                    <div class="testimonial">
                        <?= renderImg('stars.png', 'lib') ?>
                        <div class="font-oswald fs-20 fw-600 pt-3 pb-4">Sarah Wilson</div>
                        <div class="fw-300">
                            We recently asked Noel to look at a damaged water tank to advise on repairs. Unfortunately, the tank was too far gone, but Noel was extremely helpful advising on recommended replacement tank options. Thank you!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center pt-6 pb-5">
            <div class="col-lg-5">
                <div class="fs-50 font-oswald text-uppercase fw-500 lh-1">Rest assured, you’ve found the best.</div>
            </div>
            <div class="col">
                <div class="row justify-content-center align-items-center pb-3">
                    <div class="col-auto">
                        <div class="row align-items-center g-2">
                            <div class="col-auto"><?= renderImg('google.png', 'logo') ?></div>
                            <div class="col">
                                <?= renderImg('stars.png', 'icons') ?>
                                <div class="font-oswald text-uppercase text-shadow fs-27 fw-800">4.9 stars</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="vertical-divider"></div>
                    </div>
                    <div class="col-auto text-shadow text-uppercase fs-27 fw-500"><span class="fw-700">125+</span> Reviews</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="fw-300 fs-18">If you don’t believe us, believe the hundreds of happy customer Maxim has serviced!</div>
            </div>
        </div>
        <div class="row align-items-center pt-5">
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
</section>

<section class="map-wrapper">
    <div class="container-fluid px-0">
        <div class="row gx-0">
            <div class="col-lg-6">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d424890.46550849814!2d150.9310532840454!3d-33.697127928567056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sau!4v1666235691022!5m2!1sen!2sau" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="get-in-touch">
                    <div>
                        <div class="font-oswald fs-50 text-uppercase fw-500">Get in touch</div>
                        <div class="pt-4">Servicing Sydney wide! Get your free quote today.</div>
                        <table class="contact-table">
                            <tbody>
                                <tr class="py-5">
                                    <td class="font-oswald fs-20 text-uppercase fw-500 pe-4">Phone No.</td>
                                    <td><?= $phone_number ?></td>
                                </tr>
                                <tr class="py-3">
                                    <td class="font-oswald fs-20 text-uppercase fw-500 pe-4">Email</td>
                                    <td><?= $admin_email ?></td>
                                </tr>
                                <tr class="py-3">
                                    <td class="font-oswald fs-20 text-uppercase fw-500 pe-4">Location</td>
                                    <td>North Rocks, NSW</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="#form" class="btn d-inline-flex btn-gradient btn-shadow rounded-pill text-white fs-20 py-3 px-md-5 mt-2">
                            Get your free quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="footer-top-strip"></div>
<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <div class="row gx-2 gx-md-3 justify-content-center">
                    <div class="col-12 text-center pb-3 d-lg-none">
                        <a href="./" target="_blank">
                            <?= renderImg("footer-logo.png", "logo") ?>
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
            <div class="col-auto">
                <a href="./" target="_blank">
                    <?= renderImg("footer-logo.png", "logo") ?>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>
    </div>
</footer>