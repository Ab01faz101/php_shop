<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#f7858d">
    <meta name="msapplication-navbutton-color" content="#f7858d">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f7858d">
    <title>صفحه تکمیل نشدن خرید</title>
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
    <div class="wrapper shopping-page">
        <?php view('app.layout.header') ?>
        <main class="main-content dt-sl mt-4 mb-3">
            <div class="container main-container">
                <div class="row">
                    <div class="cart-page-content col-12 px-0">
                        <div class="checkout-alert dt-sn dt-sn--box mb-4">
                            <div class="circle-box-icon failed">
                                <i class="mdi mdi-close"></i>
                            </div>
                            <div class="checkout-alert-title">
                                <h4> سفارش <span
                                        class="checkout-alert-highlighted checkout-alert-highlighted-success">1234567</span>
                                    ثبت شد اما پرداخت ناموفق بود.
                                </h4>
                            </div>
                            <div class="checkout-alert-content">
                                <p>
                                    <span class="checkout-alert-content-failed">برای جلوگیری از لغو سیستمی سفارش، تا ۱
                                        ساعت آینده پرداخت را انجام دهید.</span>
                                    <br>
                                    <span class="checkout-alert-content-small px-res-1">
                                        چنانچه طی این فرایند مبلغی از حساب شما کسر شده است، طی ۷۲ ساعت آینده به حساب شما
                                        باز خواهد گشت.
                                    </span>
                                </p>
                            </div>
                        </div>
                        <section class="page-content dt-sl">
                            <div class="row justify-content-end px-res-1">
                                <div class="col-lg-3 col-md-4 col-sm-5 col-12">
                                    <button class="btn-primary-cm btn-with-icon  w-100">
                                        <i class="mdi mdi-credit-card-outline"></i>
                                        پرداخت سفارش
                                    </button>
                                </div>
                            </div>
                        </section>
                        <section class="checkout-details dt-sl dt-sn dt-sn--box mt-4 pt-4 pb-3 pr-3 pl-3 mb-5">
                            <div class="checkout-details-title">
                                <h4 class="checkout-details-title px-res-1">
                                    کد سفارش:
                                    <span>
                                        1234567
                                    </span>
                                </h4>
                                <div class="row">
                                    <div class="col-lg-9 col-md-8 col-12">
                                        <div class="checkout-details-title px-res-1">
                                            <p>
                                                سفارش شما با موفقیت در سیستم ثبت شد و هم اکنون
                                                <span class="text-highlight text-highlight-error">در انتظار
                                                    پرداخت</span>
                                                است.
                                                جزئیات این سفارش را می‌توانید با کلیک بر روی دکمه
                                                <a href="#" class="border-bottom-dt">پیگیری سفارش</a>
                                                مشاهده نمایید.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-12 px-res-1">
                                        <a href="#"
                                            class="btn-primary-cm bg-secondary btn-with-icon d-block text-center pr-0">
                                            <i class="mdi mdi-shopping"></i>
                                            پیگیری سفارش
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="checkout-table">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        نام کاربر:
                                                        <span>
                                                            نام کاربر
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        شماره تماس :
                                                        <span>
                                                            09xxxxxxxxx
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        تعداد سفارش :
                                                        <span>
                                                            2
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        مبلغ کل:
                                                        <span>
                                                            450,000 تومان
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        روش پرداخت:
                                                        <span>
                                                            پرداخت اینترنتی
                                                            <span class="red">
                                                                (ناموفق)
                                                            </span></span>
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        وضعیت سفارش:
                                                        <span>
                                                            در انتظار پرداخت
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p>آدرس : استان اصفهان شهر اصفهان خیابان</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="section-title text-sm-title title-wide no-after-title-wide mb-0 dt-sl px-res-1">
                            <h2>جزئیات پرداخت</h2>
                        </div>
                        <section class="checkout-details dt-sl dt-sn dt-sn--box mb-4 pt-2 pb-3 pl-3 pr-3">
                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="checkout-orders-table">
                                            <tr>
                                                <td class="numrow">
                                                    <p>
                                                        ردیف
                                                    </p>
                                                </td>
                                                <td class="gateway">
                                                    <p>
                                                        درگاه
                                                    </p>
                                                </td>
                                                <td class="id">
                                                    <p>
                                                        شماره پیگیری
                                                    </p>
                                                </td>
                                                <td class="date">
                                                    <p>
                                                        تاریخ
                                                    </p>
                                                </td>
                                                <td class="price">
                                                    <p>
                                                        مبلغ
                                                    </p>
                                                </td>
                                                <td class="status">
                                                    <p>
                                                        وضعیت
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="numrow">
                                                    <p>۱</p>
                                                </td>
                                                <td class="gateway">
                                                    <p>آنلاین</p>
                                                </td>
                                                <td class="id">
                                                    <p>43078827</p>
                                                </td>
                                                <td class=" date">
                                                    <p>19 اسفند 1403</p>
                                                </td>
                                                <td class="price">
                                                    <p> 450,000 تومان</p>
                                                </td>
                                                <td class="status">
                                                    <p>پرداخت ناموفق</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <section class="slider-section dt-sl mt-5 mb-5">
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="section-title text-sm-title title-wide no-after-title-wide">
                                    <h2>آموزش پیشنهادی برای شما</h2>
                                    <a href="#">مشاهده همه</a>
                                </div>
                            </div>
                            <div class="col-12 px-res-0">
                                <div class="product-carousel carousel-lg owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <a class="product-thumb" href="">
                                                <img src="./assets/img/products/php7.png" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="">php7</a>
                                                </h5>
                                                <a class="product-meta" href="">php</a>
                                                <span class="product-price">200,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <a class="product-thumb" href="">
                                                <img src="./assets/img/products/php8.png" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="">php8</a>
                                                </h5>
                                                <a class="product-meta" href="">php</a>
                                                <span class="product-price">220,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <a class="product-thumb" href="">
                                                <img src="./assets/img/products/laravel.png" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="">لاراول</a>
                                                </h5>
                                                <a class="product-meta" href="">php</a>
                                                <span class="product-price">300,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <a class="product-thumb" href="">
                                                <img src="./assets/img/products/bootstrap4.jfif" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="">بوت استرپ 4</a>
                                                </h5>
                                                <a class="product-meta" href="">بوت استرپ</a>
                                                <span class="product-price">250,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <a class="product-thumb" href="">
                                                <img src="./assets/img/products/bootstrap5.jfif" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="">بوت استرپ 5</a>
                                                </h5>
                                                <a class="product-meta" href="">بوت استرپ</a>
                                                <span class="product-price">300,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-card mb-3">
                                            <a class="product-thumb" href="">
                                                <img src="./assets/img/products/html5.jfif" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="">html5</a>
                                                </h5>
                                                <a class="product-meta" href="">html5</a>
                                                <span class="product-price">150,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
        <footer class="mini-footer dt-sl">
            <div class="container main-container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-left">
                        <i class="mdi mdi-phone-outline"></i>
                        شماره تماس : <a href="#">
                            33333333
                            - 031
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <i class="mdi mdi-email-outline"></i>
                        آدرس ایمیل : <a href="#">info@gmail.com</a>
                    </div>
                    <div class="col-12 text-center">
                        <div class="copy-right-mini-footer">
                            Copyright © 2025 site
                        </div>
                    </div>
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