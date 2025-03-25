<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffa500">
    <meta name="msapplication-navbutton-color" content="#ffa500">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffa500">
    <title>پروفایل</title>
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
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 sticky-sidebar">
                    <div class="profile-sidebar dt-sl">
                        <div class="dt-sl dt-sn border mb-3">
                            <div class="profile-sidebar-header dt-sl">
                                <div class="d-flex align-items-center">
                                    <div class="profile-avatar">
                                        <img src="./assets/img/theme/avatar.png" alt="">
                                    </div>
                                    <div class="profile-header-content mr-3 mt-2">
                                        <span class="d-block profile-username">نام کاربر</span>
                                        <span class="d-block profile-phone">09xxxxxxxxx</span>
                                    </div>
                                </div>
                                <div class="profile-link mt-2 dt-sl">
                                    <div class="row">
                                        <div class="col-6 text-center">
                                            <a href="#">
                                                <i class="mdi mdi-lock-reset"></i>
                                                <span class="d-block">تغییر رمز</span>
                                            </a>
                                        </div>
                                        <div class="col-6 text-center">
                                            <a href="#">
                                                <i class="mdi mdi-logout-variant"></i>
                                                <span class="d-block">خروج از حساب</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dt-sl dt-sn border mb-3">
                            <div class="profile-menu-section dt-sl">
                                <div class="label-profile-menu mt-2 mb-2">
                                    <span>حساب کاربری شما</span>
                                </div>
                                <div class="profile-menu">
                                    <ul>
                                        <li>
                                            <a href="#" class="active">
                                                <i class="mdi mdi-account-circle-outline"></i>
                                                پروفایل
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="mdi mdi-basket"></i>
                                                همه سفارش ها
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="mdi mdi-sign-direction"></i>
                                                آدرس ها
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="mdi mdi-account-edit-outline"></i>
                                                اطلاعات شخصی
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-navbar">
                                <a href="#" class="profile-navbar-btn-back">بازگشت</a>
                                <h4>سفارش <span class="font-en">12345678</span><span>ثبت شده در تاریخ 18 اسفند
                                            1403</span></h4>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="dt-sl dt-sn border">
                                <div class="row table-draught px-3">
                                    <div class="col-md-6 col-sm-12">
                                        <span class="title">مشخصات:</span>
                                        <span class="value">نام کاربر</span>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <span class="title">شماره تماس :</span>
                                        <span class="value">09xxxxxxxxx</span>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <span class="title">کد سفارش:</span>
                                        <span class="value">12345678</span>
                                    </div>
                                    <div class="col-12 text-center pb-0">
                                        <span class="title">مبلغ این سفارش:</span>
                                        <span class="value">450,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                    class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2 px-res-1">
                                <h2>همه سفارش‌ها</h2>
                            </div>
                            <div class="dt-sl">
                                <div class="table-responsive">
                                    <table class="table table-order table-order-details">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>نام محصول</th>
                                            <th>تعداد</th>
                                            <th>قیمت واحد</th>
                                            <th>قیمت نهایی</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="details-product-area">
                                                    <img src="./assets/img/single-product/php7.png"
                                                         class="thumbnail-product" alt="">
                                                    <h5 class="details-product">
                                                        <span>php7</span>
                                                    </h5>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>200,000 تومان</td>
                                            <td>200,000 تومان</td>
                                            <td>
                                                <button class="btn btn-success d-block w-100 mb-2">پرداخت شده</button>
                                                <button class="btn btn-danger d-block w-100">پرداخت ناموفق</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="details-product-area">
                                                    <img src="./assets/img/single-product/ios.png"
                                                         class="thumbnail-product" alt="">
                                                    <h5 class="details-product">
                                                        <span>ios</span>
                                                    </h5>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>300,000 تومان</td>
                                            <td>300,000 تومان</td>
                                            <td>
                                                <button class="btn btn-success d-block w-100 mb-2">پرداخت شده</button>
                                                <button class="btn btn-danger d-block w-100">پرداخت ناموفق</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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