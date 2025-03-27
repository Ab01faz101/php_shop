<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#f7858d">
    <meta name="msapplication-navbutton-color" content="#f7858d">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f7858d">
    <title>صفحه تکمیل خرید</title>
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
                            <div class="circle-box-icon successful">
                                <i class="mdi mdi-check-bold"></i>
                            </div>
                            <div class="checkout-alert-title">
                                <h4> سفارش <span
                                        class="checkout-alert-highlighted checkout-alert-highlighted-success"><?= $order['tracking_number'] ?></span>
                                    با موفقیت در سیستم ثبت شد.
                                </h4>
                            </div>
                        </div>
                        <section class="checkout-details dt-sl dt-sn dt-sn--box mt-4 pt-4 pb-3 pr-3 pl-3 mb-5 px-res-1">
                            <div class="checkout-details-title">
                                <h4>
                                    کد سفارش:
                                    <span>
                                        <?= $order['tracking_number'] ?>
                                    </span>
                                </h4>
                                <div class="row">
                                    <div class="col-lg-9 col-md-8 col-sm-12">
                                        <div class="checkout-details-title">
                                            <p>
                                                سفارش شما با موفقیت در سیستم ثبت شد و هم اکنون
                                                <span class="text-highlight text-highlight-success">تکمیل شده</span>
                                                است.
                                                جزئیات این سفارش را می‌توانید با کلیک بر روی دکمه
                                                <a href="<?= url('panel/orders') ?>" class="border-bottom-dt">پیگیری سفارش</a>
                                                مشاهده نمایید.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <a href="#"
                                            class="btn-primary-cm bg-secondary btn-with-icon d-block text-center pr-0">
                                            <i class="mdi mdi-shopping"></i>
                                            پیگیری سفارش
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 px-res-0">
                                        <div class="checkout-table">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        نام کاربر:
                                                        <span>
                                                            <?= $address['name'] ?>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        شماره تماس :
                                                        <span>
                                                            <?= $address['phone'] ?>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        تعداد سفارش :
                                                        <span>
                                                            <?= count($orderItems) ?>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        مبلغ کل:
                                                        <span>
                                                            <?= number_format($order['total_price']) ?>
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
                                                            <span class="green">
                                                                (موفق)
                                                            </span></span>
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <p>
                                                        وضعیت سفارش:
                                                        <span>
                                                            پرداخت شد
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p> <?= $address['address'] ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
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