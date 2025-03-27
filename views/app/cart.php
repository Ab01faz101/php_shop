<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffa500">
    <meta name="msapplication-navbutton-color" content="#ffa500">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffa500">
    <title>سبد خرید</title>
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
            <div class="row mx-0">
                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 mb-2">
                    <nav class="tab-cart-page">
                        <div class="nav nav-tabs border-bottom" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link d-inline-flex w-auto active" id="nav-home-tab"
                               data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
                               aria-selected="true">سبد خرید<span class="count-cart"><?= count($carts) ?></span></a>
                        </div>
                    </nav>
                </div>
                <div class="col-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            <form method="GET" action="<?= url('order-result') ?>" class="row">
                                <?php $price = 0?>
                                <div class="col-xl-9 col-lg-8 col-12 px-0">
                                    <div class="table-responsive checkout-content dt-sl">
                                        <div class="checkout-section-content-dd-k">
                                            <div class="cart-items-dd-k">
                                                <?php foreach ($carts as $cartItem) {
                                                    $productModel = new \App\Models\Product();
                                                    $product = $productModel->find($cartItem["product_id"]);
                                                    $price += $product['price'] * $cartItem['count'];
                                                    ?>
                                                    <div class="cart-item py-4 px-3">
                                                        <input name="product_id" type="hidden"
                                                               value="<?= $product['id'] ?>">
                                                        <div class="item-thumbnail">
                                                            <a href="#">
                                                                <img src="<?= publicAsset($product['image']) ?>"
                                                                     alt="item">
                                                            </a>
                                                        </div>
                                                        <div class="item-info flex-grow-1">
                                                            <div class="item-title">
                                                                <h2>
                                                                    <a href="#"><?= $product['name'] ?></a>
                                                                </h2>
                                                            </div>
                                                            <div class="item-detail">
                                                                <div class="item-quantity--item-price">
                                                                    <div class="item-quantity">
                                                                        <div class="num-block">
                                                                            <div class="num-in">
                                                                                <a href="<?= url('cart/plus?id=' . $cartItem['id'])?>">
                                                                                    <span class="plus"></span>
                                                                                </a>
                                                                                <input type="text" class="in-num"
                                                                                       value="<?= $cartItem['count'] ?>" readonly>
                                                                                <a  href="<?= url('cart/min?id=' . $cartItem['id'])?>" >
                                                                                    <span class="minus dis"></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <button class="item-remove-btn mr-3">
                                                                            <i class="far fa-trash-alt"></i>
                                                                            حذف
                                                                        </button>
                                                                    </div>


                                                                    <div class="item-price">
                                                                        <div class="product_price"> <?= $product['price'] * $cartItem['count'] ?></div>
                                                                        <span
                                                                                class="text-sm mr-1">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-12 w-res-sidebar sticky-sidebar">
                                    <div class="dt-sn dt-sn--box border mb-2">
                                        <div class="checkout-summary-content">
                                            <div class="checkout-summary-price-title">مبلغ قابل پرداخت:</div>
                                            <div class="checkout-summary-price-value">
                                                <span class="checkout-summary-price-value-amount" id="final_amount"><?= $price ?></span>
                                                تومان
                                            </div>
                                            <div class="mb-2 d-block">
                                                <button type="submit"
                                                        class="btn-primary-cm btn-with-icon w-100 text-center pr-0">
                                                    <i class="mdi mdi-arrow-left"></i>
                                                    ادامه ثبت سفارش
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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