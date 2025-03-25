<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffa500">
    <meta name="msapplication-navbutton-color" content="#ffa500">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffa500">
    <title>اطلاعات شخصی</title>
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
                        <div class="col-12">
                            <div class="px-3 px-res-0">
                                <div
                                        class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2 px-res-1">
                                    <h2>ویرایش اطلاعات شخصی</h2>
                                </div>
                                <div class="form-ui additional-info dt-sl dt-sn pt-4">
                                    <form enctype="multipart/form-data" action="<?= url('panel/personal/edit') ?>" method="POST">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-row-title">
                                                    <h3>نام</h3>
                                                </div>
                                                <div class="form-row">
                                                    <input name="first_name" type="text" class="input-ui pr-2"
                                                           placeholder="نام خود را وارد نمایید" value="<?= $user['first_name'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-row-title">
                                                    <h3>نام و نام خانوادگی</h3>
                                                </div>
                                                <div class="form-row">
                                                    <input name="last_name" type="text" class="input-ui pr-2"
                                                           placeholder="نام خانوادگی خود را وارد نمایید"
                                                           value="<?= $user['last_name'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-row-title">
                                                    <h3>کد ملی</h3>
                                                </div>
                                                <div class="form-row">
                                                    <input name="national_code" type="text" class="input-ui pl-2 text-left dir-ltr"
                                                           placeholder="-" value="<?= $user['national_code'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-row-title">
                                                    <h3>شماره موبایل</h3>
                                                </div>
                                                <div class="form-row">
                                                    <input name="phone" type="text" class="input-ui pl-2 text-left dir-ltr"
                                                           placeholder="شماره موبایل خود را وارد نمایید"
                                                           value="<?= $user['phone'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-row-title">
                                                    <h3>آدرس ایمیل</h3>
                                                </div>
                                                <div class="form-row">
                                                    <input name="email" type="email" class="input-ui pl-2 text-left dir-ltr"
                                                           placeholder="آدرس ایمیل خود را وارد نمایید"
                                                           value="<?= $user['email'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-row-title">
                                                    <h3>عکس پروفایل</h3>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input name="profile" type="file" class="custom-file-input"
                                                                   id="inputGroupFile04"
                                                                   aria-describedby="inputGroupFileAddon04">
                                                            <label class="custom-file-label"
                                                                   for="inputGroupFile04">انتخاب
                                                                عکس</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dt-sl">
                                            <div class="form-row mt-3 justify-content-end">
                                                <button class="btn-primary-cm btn-with-icon ml-2">
                                                    <i class="mdi mdi-account-circle-outline"></i>
                                                    ثبت اطلاعات کاربری
                                                </button>
                                                <a href="<?= url('panel') ?>" class="btn-primary-cm bg-secondary">انصراف</a>
                                            </div>
                                        </div>
                                    </form>
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