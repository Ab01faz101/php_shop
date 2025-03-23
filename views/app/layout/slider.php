<div class="container main-container">
            <div class="row mb-5">
                <aside class="sidebar col-lg-4 hidden-md order-2 pr-0 hidden-md">
                    <div class="sidebar-inner dt-sl">
                        <div class="sidebar-banner">
                            <div class="row">
                                <div class="col-12 mb-1">
                                    <div class="widget-banner">
                                        <a href="#">
                                            <img src="<?= asset('assets/img/banner/banner-side-slider-1.jfif') ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="widget-banner">
                                        <a href="#">
                                            <img src="<?= asset('assets/img/banner/banner-side-slider-2.png')?>" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="col-lg-8 col-md-12 order-1">
                    <section id="main-slider"
                             class="main-slider main-slider-cs mt-1 carousel slide carousel-fade card hidden-sm"
                             data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#main-slider" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="main-slider-slide" href="#">
                                    <img src="<?= asset('assets/img/main-slider/img-slider-2/1.jpg')?>" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="main-slider-slide" href="#">
                                    <img src="<?= asset('assets/img/main-slider/img-slider-2/2.png')?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
                            <i class="mdi mdi-chevron-right"></i>
                        </a>
                        <a class="carousel-control-next" href="#main-slider" data-slide="next">
                            <i class="mdi mdi-chevron-left"></i>
                        </a>
                    </section>
                    <section id="main-slider-res"
                             class="main-slider carousel slide carousel-fade card d-none show-sm" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#main-slider-res" data-slide-to="0" class="active"></li>
                            <li data-target="#main-slider-res" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="main-slider-slide" href="#">
                                    <img src="./assets/img/main-slider/slider-responsive/1.jpg" alt=""
                                         class="img-fluid">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="main-slider-slide" href="#">
                                    <img src="./assets/img/main-slider/slider-responsive/2.png" alt=""
                                         class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#main-slider-res" role="button" data-slide="prev">
                            <i class="mdi mdi-chevron-right"></i>
                        </a>
                        <a class="carousel-control-next" href="#main-slider-res" data-slide="next">
                            <i class="mdi mdi-chevron-left"></i>
                        </a>
                    </section>
                </div>
            </div>
        </div>