<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffa500">
    <meta name="msapplication-navbutton-color" content="#ffa500">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffa500">
    <title>صفحه 404</title>
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
</head>pulbic/
<body>
    <div class="wrapper">
    <?php view('app.layout.header') ?>

        <main class="main-content dt-sl mb-3">
            <div class="container main-container">
                <div class="row">
                    <div class="col-12">
                        <div class="dt-sl pt-3 pb-5">
                            <div class="error-page text-center">
                                <h1>صفحه‌ای که دنبال آن بودید پیدا نشد!</h1>
                                <a href="<?= url('/') ?>" class="btn-primary-cm">ادامه خرید در صفحه اصلی</a>
                                <img src="<?= asset('assets/img/theme/404.png') ?>" class="img-fluid" width="60%" alt="">
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