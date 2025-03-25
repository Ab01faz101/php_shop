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
                <?php view('app.panel.aside', compact('user')) ?>
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="px-3">
                                <div
                                        class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2">
                                    <h2>اطلاعات شخصی</h2>
                                </div>
                                <div class="profile-section dt-sl">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="label-info">
                                                <span>نام و نام خانوادگی:</span>
                                            </div>
                                            <div class="value-info">
                                                <span><?= $user['first_name'] . ' ' . $user['last_name'] ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="label-info">
                                                <span>پست الکترونیک:</span>
                                            </div>
                                            <div class="value-info">
                                                <span><?= $user['email'] ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="label-info">
                                                <span>شماره تلفن همراه:</span>
                                            </div>
                                            <div class="value-info">
                                                <span><?= $user['phone'] ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="label-info">
                                                <span>کد ملی:</span>
                                            </div>
                                            <div class="value-info">
                                                <span><?= $user['national_code'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-section-link">
                                        <a href="<?= url('panel/personal/edit') ?>"class="border-bottom-dt">
                                            <i class="mdi mdi-account-edit-outline"></i>
                                            ویرایش اطلاعات شخصی
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <div
                                    class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2 px-res-1">
                                <h2>آخرین سفارش‌ها</h2>
                            </div>
                            <div class="dt-sl">
                                <div class="table-responsive">
                                    <table class="table table-order">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>شماره سفارش</th>
                                            <th>تاریخ ثبت سفارش</th>
                                            <th>مبلغ قابل پرداخت</th>
                                            <th>عملیات پرداخت</th>
                                            <th>جزییات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>57456951</td>
                                            <td>20 اسفند 1403</td>
                                            <td>450,000 تومان</td>
                                            <td>پرداخت شده</td>
                                            <td class="details-link">
                                                <a href="#">
                                                    <i class="mdi mdi-chevron-left"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>45173498</td>
                                            <td>20 اسفند 1403</td>
                                            <td>200,000 تومان</td>
                                            <td>لغو شده</td>
                                            <td class="details-link">
                                                <a href="#">
                                                    <i class="mdi mdi-chevron-left"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>58976951</td>
                                            <td>20 اسفند 1403</td>
                                            <td>200,000 تومان</td>
                                            <td>لغو شده</td>
                                            <td class="details-link">
                                                <a href="#">
                                                    <i class="mdi mdi-chevron-left"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="link-to-orders" colspan="7"><a href="#">مشاهده لیست سفارش
                                                    ها</a></td>
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