<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#f7858d">
    <meta name="msapplication-navbutton-color" content="#f7858d">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f7858d">
    <title>صفحه خرید</title>
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
    <style>
        .checkout-contact-badge {
            display: none;
        }

        .checkout-contact-content {
            cursor: pointer;
        }

        .checkout-contact-content.active .checkout-contact-badge {
            display: block;
        }
    </style>
    <script defer>
        document.addEventListener("DOMContentLoaded", function () {
            let addresses = document.querySelectorAll(".checkout-contact-content");
            addresses.forEach(address => {
                console.log(address);
                address.addEventListener('click', function () {
                    document.querySelector(".checkout-contact-content.active").classList.remove("active");
                    address.classList.add("active");
                    document.querySelector("#address_id").value = address.getAttribute('data-id');
                });
            });
        });

    </script>
</head>
<body>
<div class="wrapper shopping-page">
    <header class="header-shopping dt-sl">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-2">
                    <div class="dt-sl">
                        بهترین سایت آموزشی ایران
                    </div>
                </div>
                <div class="col-12 text-center">
                    <ul class="checkout-steps">
                        <li>
                            <a href="#" class="active">
                                <span>اطلاعات ارسال</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>پرداخت</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>اتمام خرید</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main class="main-content dt-sl mt-4 mb-3">
        <div class="container main-container">
            <form method="post" action="<?= url('order-store') ?>" class="row">
                <div class="cart-page-content col-xl-9 col-lg-8 col-12 px-0">
                    <div class="section-title text-sm-title title-wide no-after-title-wide mb-0 px-res-1">
                        <h2>مشخصات</h2>
                    </div>
                    <section class="page-content dt-sl">
                        <div class="address-section">
                            <div class="checkout-contact dt-sn dt-sn--box border px-0 pt-0 pb-0">
                                <?php foreach ($addresses as $key => $addressItem) {
                                    $cityModel = new \App\Models\City();
                                    $provinceModel = new \App\Models\Province();
                                    $city = $cityModel->find($addressItem['city_id']);
                                    $province = $provinceModel->find($addressItem['province_id']);
                                    ?>
                                    <div data-id="<?= $addressItem['id'] ?>"
                                         class="checkout-contact-content <?= $key == 0 ? 'active' : '' ?>">
                                        <ul class="checkout-contact-items">
                                            <li class="checkout-contact-item">
                                                نام کاربر:
                                                <span class="full-name"><?= $addressItem['name'] ?></span>
                                            </li>
                                            <li class="checkout-contact-item">
                                                <div class="checkout-contact-item checkout-contact-item-mobile">
                                                    شماره تماس:
                                                    <span class="mobile-phone"><?= $addressItem['phone'] ?></span>
                                                </div>
                                                <div class="checkout-contact-item-message">
                                                    کد پستی:
                                                    <span class="post-code"><?= $addressItem['post_code'] ?></span>
                                                </div>
                                                <br>
                                                استان
                                                <span class="state"><?= $province['name'] ?></span>
                                                ، ‌شهر
                                                <span class="city"><?= $city['name'] ?></span>
                                                ،
                                                <span class="address-part"><?= $addressItem['address'] ?></span>
                                            </li>
                                        </ul>
                                        <div class="checkout-contact-badge">
                                            <i class="mdi mdi-check-bold"></i>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                        <div id="shipping-data-form" class="dt-sn dt-sn--box pt-3 pb-3">
                            <div class="section-title text-sm-title title-wide no-after-title-wide mb-0 px-res-1">
                                <h2>سفارش :</h2>
                            </div>
                            <div class="checkout-pack">
                                <section class="products-compact">
                                    <div class="col-12">
                                        <div class="products-compact-slider carousel-md owl-carousel owl-theme">
                                            <?php $price = 0 ?>

                                            <?php foreach ($carts as $cartItem) {
                                                $productModel = new \App\Models\Product();
                                                $product = $productModel->find($cartItem["product_id"]);
                                                $price += $product['price'] * $cartItem['count'];

                                                ?>

                                                <div class="item">
                                                    <div class="product-card mb-3">
                                                        <a class="product-thumb" href="">
                                                            <img src="<?= publicAsset($product['image']) ?>"
                                                                 alt="Product Thumbnail">
                                                        </a>
                                                        <div class="product-card-body">
                                                            <h5 class="product-title">
                                                                <a href=""><?= $product['name'] ?></a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </section>
                                <hr>
                            </div>
                            <input type="hidden" name="address_id" id="address_id" value="<?= $addresses[0]['id'] ?>">
                        </div>
                        <div class="mt-5">
                            <a href="<?= url('cart') ?>" class="float-right border-bottom-dt">
                                <i
                                        class="mdi mdi-chevron-double-right"></i>بازگشت به سبد خرید</a>
                        </div>
                    </section>
                </div>
                <div class="col-xl-3 col-lg-4 col-12 w-res-sidebar sticky-sidebar">
                    <div class="dt-sn dt-sn--box border mb-2">
                        <div class="checkout-summary-content">
                            <div class="checkout-summary-price-title">مبلغ قابل پرداخت:</div>
                            <div class="checkout-summary-price-value">
                                <span class="checkout-summary-price-value-amount"> <?= number_format($price) ?></span>
                                تومان
                            </div>
                            <button type="submit" class="btn-primary-cm btn-with-icon w-100 text-center pr-0 pl-0">
                                <i class="mdi mdi-arrow-left"></i>
                                تایید و ادامه ثبت سفارش
                            </button>
                        </div>
                    </div>
                </div>
            </form>
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