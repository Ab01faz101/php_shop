<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffa500">
    <meta name="msapplication-navbutton-color" content="#ffa500">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffa500">
    <title>محصول</title>
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
        <div class="container main-container">
            <div class="dt-sn mb-5 dt-sl">
                <div class="row">
                    <div class="col-lg-4 col-md-6 ps-relative">
                        <div class="product-gallery">
                            <div class="product-carousel owl-carousel" data-slider-id="1">
                                <div class="item">
                                    <a class="gallery-item" href="<?= publicAsset($product['image']) ?>"
                                       data-fancybox="gallery1">
                                        <img src="<?= publicAsset($product['image']) ?>" alt="Product">
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="gallery-item" href="<?= publicAsset($product['image']) ?>g"
                                       data-fancybox="gallery1">
                                        <img src="<?= publicAsset($product['image']) ?>" alt="Product">
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center flex-wrap">
                                <ul class="product-thumbnails owl-thumbs ml-2" data-slider-id="1">
                                    <li class="owl-thumb-item active">
                                        <a href="">
                                            <img src="<?= publicAsset($product['image']) ?>" alt="Product">
                                        </a>
                                    </li>
                                    <li class="owl-thumb-item">
                                        <a href="">
                                            <img src="<?= publicAsset($product['image']) ?>" alt="Product">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 py-2">
                        <div class="product-info dt-sl">
                            <div class="product-title dt-sl mb-3">
                                <h1><?= $product['name'] ?></h1>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-params dt-sl">
                                        <ul data-title="ویژگی‌های محصول">
                                            <li>
                                                <span>نوع آموزش: </span>
                                                <span> <?= $category['name'] ?> </span>
                                            </li>
                                        </ul>
                                        <div class="sum-more">
                                                <span class="show-more btn-link-border">
                                                    + موارد بیشتر
                                                </span>
                                            <span class="show-less btn-link-border">
                                                    - بستن
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-summary">
                                        <nav id="stack-menu">
                                            <div class="product-seller-row product-seller-row--price">
                                                <div class="product-seller-price-real">
                                                    <div class="product-seller-price-raw"> <?= $product['price'] ?> </div>
                                                    تومان
                                                </div>
                                            </div>
                                            <div class="product-seller-row product-seller-row--add-to-cart">
                                                <a
                                                    <?php if (!\Core\Auth::check()) { ?>
                                                        href="<?= url('auth/login') ?>"
                                                    <?php } else { ?>
                                                        href="<?= url('cart/add?product_id=' . $product['id']) ?>"
                                                    <?php } ?>

                                                        class="btn-add-to-cart btn-add-to-cart--full-width">
                                                    <span class="btn-add-to-cart-txt">افزودن به سبد خرید</span>
                                                </a>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="slider-section dt-sl mb-5">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="section-title text-sm-title title-wide no-after-title-wide">
                            <p>سایر آموزش ها</p>
                            <a href="#">مشاهده همه</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="product-carousel carousel-lg owl-carousel owl-theme">
                            <?php foreach ($products as $productItem) { ?>
                                <div class=" item">
                                    <div class="product-card mb-3">
                                        <a class="product-thumb"
                                           href="<?= url('product?id=' . $productItem['id']) ?>">
                                            <img src="<?= publicAsset($productItem['image']) ?>"
                                                 alt="Product Thumbnail">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">
                                                <a href="<?= url('product?id=' . $productItem['id']) ?>"><?= ($productItem['name']) ?></a>
                                            </h5>
                                            <a class="product-meta"
                                               href="<?= url('product?id=' . $productItem['id']) ?>"><?= ($category['name']) ?></a>
                                            <span class="product-price"><?= ($productItem['price']) ?> تومان</span>
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