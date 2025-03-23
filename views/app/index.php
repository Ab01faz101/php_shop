<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffa500">
    <meta name="msapplication-navbutton-color" content="#ffa500">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffa500">
    <title>صفحه اصلی</title>
    <link rel="stylesheet" href="<?= asset('assets/css/vendor/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/css/vendor/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/css/vendor/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/css/vendor/bootstrap-slider.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/css/vendor/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/css/vendor/jquery.horizontalmenu.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/css/vendor/jquery-stack-menu.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/css/vendor/fancybox.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/css/vendor/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/css/vendor/nouislider.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('assets/css/main.css') ?>">
</head>

<body>
    <div class="wrapper">
        <?php view('app.layout.header') ?>
        <main class="main-content dt-sl mb-3">
            <?php view('app.layout.slider') ?>

            <div class="container main-container">
                <section class="slider-section dt-sl mb-5">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="section-title text-sm-title title-wide no-after-title-wide">
                                <h2><?= $mobileCategory['name'] ?></h2>
                                <a href="#">مشاهده همه</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="product-carousel carousel-lg owl-carousel owl-theme">
                                <?php foreach ($mobileProducts as $mobileProductItem) {
                                    ?>
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <a class="product-thumb" href="">
                                                <img src="<?= publicAsset($mobileProductItem['image']) ?>"
                                                    alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href=""><?= $mobileProductItem['name'] ?></a>
                                                </h5>
                                                <a class="product-meta" href=""><?= $mobileCategory['name'] ?></a>
                                                <span class="product-price"><?= $mobileProductItem['price'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </section>
            </div>


            <div class="container main-container">
                <div class="row mt-3 mb-5">
                    <div class="col-sm-6 col-12 mb-2">
                        <div class="widget-banner">
                            <a href="#">
                                <img src="<?= asset('assets/img/banner/medium-banner-1.png') ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 mb-2">
                        <div class="widget-banner">
                            <a href="#">
                                <img src="<?= asset('assets/img/banner/medium-banner-2.jfif') ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            
            <div class="container main-container">
                <section class="slider-section dt-sl mb-5">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="section-title text-sm-title title-wide no-after-title-wide">
                                <h2><?= $webCategory['name'] ?></h2>
                                <a href="#">مشاهده همه</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="product-carousel carousel-lg owl-carousel owl-theme">
                                <?php foreach ($webProducts as $mobileProductItem) {
                                    ?>
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <a class="product-thumb" href="">
                                                <img src="<?= publicAsset($mobileProductItem['image']) ?>"
                                                    alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href=""><?= $webCategory['name'] ?></a>
                                                </h5>
                                                <a class="product-meta" href=""><?= $mobileCategory['name'] ?></a>
                                                <span class="product-price"><?= $mobileProductItem['price'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <footer class="main-footer dt-sl">
            <div class="description">
                <div class="container main-container">
                    <div class="row">
                        <div class="site-description col-12 col-lg-7">
                            <p>سایت ما بهترین سایت آموزشی ایران است</p>
                        </div>
                        <div class="symbol col-12 col-lg-5">
                            <a href="#" target="_blank"><img src="assets/img/symbol-01.png" alt=""></a>
                            <a href="#" target="_blank"><img src="assets/img/symbol-02.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container main-container">
                    <p>
                        بهترین سایت آموزشی ایران
                    </p>
                </div>
            </div>
        </footer>
    </div>
    
    <script src="<?= asset('assets/js/vendor/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/popper.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/bootstrap.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/bootstrap-slider.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/owl.carousel.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/owl.carousel2.thumbs.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/jquery.nicescroll.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/nouislider.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/jquery.horizontalmenu.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/jquery-stack-menu.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/jquery.fancybox.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/countdown.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/wNumb.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/ResizeSensor.min.js') ?>"></script>
    <script src="<?= asset('assets/js/vendor/theia-sticky-sidebar.min.js') ?>"></script>
    <script src="<?= asset('assets/js/main.js') ?>"></script>
</body>

</html>