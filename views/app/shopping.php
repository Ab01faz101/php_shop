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
    <link rel="stylesheet" href="./assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/vendor/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/vendor/bootstrap-slider.min.css">
    <link rel="stylesheet" href="./assets/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/vendor/jquery.horizontalmenu.css">
    <link rel="stylesheet" href="./assets/css/vendor/jquery-stack-menu.min.css">
    <link rel="stylesheet" href="./assets/css/vendor/fancybox.min.css">
    <link rel="stylesheet" href="./assets/css/vendor/nice-select.css">
    <link rel="stylesheet" href="./assets/css/vendor/nouislider.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
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
                <div class="row">
                    <div class="cart-page-content col-xl-9 col-lg-8 col-12 px-0">
                        <div class="section-title text-sm-title title-wide no-after-title-wide mb-0 px-res-1">
                            <h2>مشخصات</h2>
                        </div>
                        <section class="page-content dt-sl">
                            <div class="address-section">
                                <div class="checkout-contact dt-sn dt-sn--box border px-0 pt-0 pb-0">
                                    <div class="checkout-contact-content">
                                        <ul class="checkout-contact-items">
                                            <li class="checkout-contact-item">
                                                نام کاربر:
                                                <span class="full-name">نام کاربر</span>
                                            </li>
                                            <li class="checkout-contact-item">
                                                <div class="checkout-contact-item checkout-contact-item-mobile">
                                                    شماره تماس:
                                                    <span class="mobile-phone">09xxxxxxxxx</span>
                                                </div>
                                                <div class="checkout-contact-item-message">
                                                    کد پستی:
                                                    <span class="post-code">۹۹۹۹۹۹۹۹۹۹</span>
                                                </div>
                                                <br>
                                                استان
                                                <span class="state">اصفهان</span>
                                                ، ‌شهر
                                                <span class="city">اصفهان</span>
                                                ،
                                                <span class="address-part">خیابان</span>
                                            </li>
                                        </ul>
                                        <a class="checkout-contact-location" id="btn-checkout-contact-location">اصلاح آدرس</a>
                                        <div class="checkout-contact-badge">
                                            <i class="mdi mdi-check-bold"></i>
                                        </div>
                                    </div>
                                    <div class="checkout-address dt-sn px-0 pt-0 pb-0" id="user-address-list-container">
                                        <div class="checkout-address-content">
                                            <div class="checkout-address-headline">آدرس مورد نظر خود را
                                                انتخاب فرمایید:</div>
                                            <div class="checkout-address-row">
                                                <div class="checkout-address-col">
                                                    <div class="checkout-address-box is-selected">
                                                        <h5 class="checkout-address-title">نام کاربر</h5>
                                                        <p class="checkout-address-text">
                                                            <span>اصفهان</span>
                                                        </p>
                                                        <ul class="checkout-address-list">
                                                            <li>
                                                                <ul class="checkout-address-contact-info">
                                                                    <li class="">کدپستی: <span>۹۹۹۹۹۹۹۹۹۹</span></li>
                                                                    <li>شماره همراه: <span>09xxxxxxxxx</span>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <ul>
                                                                    <li>
                                                                        <button class="checkout-address-btn-edit"
                                                                            data-toggle="modal"
                                                                            data-target="#modal-location-edit">ویرایش</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="checkout-address-btn-remove"
                                                                            data-toggle="modal"
                                                                            data-target="#remove-location">حذف</button>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <button class="checkout-address-btn-submit">اتمام مشخصات</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="checkout-address-cancel" id="cancel-change-address-btn"></button>
                                    </div>
                                    <div class="modal fade" id="modal-location-edit" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg send-info modal-dialog-centered"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">
                                                        <i class="now-ui-icons location_pin"></i>
                                                        ویرایش آدرس
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-ui dt-sl">
                                                                <form class="form-account" action="">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-12 mb-2">
                                                                            <div class="form-row-title">
                                                                                <h4>
                                                                                    نام و نام خانوادگی
                                                                                </h4>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <input class="input-ui pr-2 text-right"
                                                                                    type="text"
                                                                                    placeholder="نام خود را وارد نمایید">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12 mb-2">
                                                                            <div class="form-row-title">
                                                                                <h4>
                                                                                    شماره موبایل
                                                                                </h4>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <input
                                                                                    class="input-ui pl-2 dir-ltr text-left"
                                                                                    type="text"
                                                                                    placeholder="09xxxxxxxxx">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12 mb-2">
                                                                            <div class="form-row-title">
                                                                                <h4>
                                                                                    استان
                                                                                </h4>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="custom-select-ui">
                                                                                    <select class="right">
                                                                                        <option value="tehran">
                                                                                            تهران
                                                                                        </option>
                                                                                        <option value="esfahan">
                                                                                            اصفهان
                                                                                        </option>
                                                                                        <option value="shiraz">
                                                                                            شیراز
                                                                                        </option>
                                                                                        <option value="tabriz">
                                                                                            تبریز
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12 mb-2">
                                                                            <div class="form-row-title">
                                                                                <h4>
                                                                                    شهر
                                                                                </h4>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="custom-select-ui">
                                                                                    <select class="right">
                                                                                        <option value="tehran">
                                                                                            تهران
                                                                                        </option>
                                                                                        <option value="esfahan">
                                                                                            اصفهان
                                                                                        </option>
                                                                                        <option value="shiraz">
                                                                                            شیراز
                                                                                        </option>
                                                                                        <option value="tabriz">
                                                                                            تبریز
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 mb-2">
                                                                            <div class="form-row-title">
                                                                                <h4>
                                                                                    آدرس
                                                                                </h4>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <textarea
                                                                                    class="input-ui pr-2 text-right"
                                                                                    placeholder=""></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 mb-2">
                                                                            <div class="form-row-title">
                                                                                <h4>
                                                                                    کد پستی
                                                                                </h4>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <input
                                                                                    class="input-ui pl-2 dir-ltr text-left placeholder-right"
                                                                                    type="text"
                                                                                    placeholder=" کد پستی را بدون خط تیره بنویسید">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 pr-4 pl-4">
                                                                            <button type="button"
                                                                                class="btn btn-sm btn-primary btn-submit-form">ثبت</button>
                                                                            <button type="button"
                                                                                class="btn-link-border float-left mt-2">انصراف
                                                                                و بازگشت</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="goole-map">
                                                                <div id="map-edit" style="height:440px"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="remove-location" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mb-3" id="exampleModalLabel">آیا مطمئنید که
                                                        این آدرس حذف شود؟</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button"
                                                        class="remodal-general-alert-button remodal-general-alert-button--cancel"
                                                        data-dismiss="modal">خیر</button>
                                                    <button type="button"
                                                        class="remodal-general-alert-button remodal-general-alert-button--approve">بله</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form method="post" id="shipping-data-form" class="dt-sn dt-sn--box pt-3 pb-3">
                                <div class="section-title text-sm-title title-wide no-after-title-wide mb-0 px-res-1">
                                    <h2>سفارش :</h2>
                                </div>
                                <div class="checkout-pack">
                                    <section class="products-compact">
                                        <div class="col-12">
                                            <div class="products-compact-slider carousel-md owl-carousel owl-theme">
                                                <div class="item">
                                                    <div class="product-card mb-3">
                                                        <a class="product-thumb" href="">
                                                            <img src="./assets/img/products/php7.png" alt="Product Thumbnail">
                                                        </a>
                                                        <div class="product-card-body">
                                                            <h5 class="product-title">
                                                                <a href="">php7</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-card mb-3">
                                                        <a class="product-thumb" href="">
                                                            <img src="./assets/img/products/ios.png" alt="Product Thumbnail">
                                                        </a>
                                                        <div class="product-card-body">
                                                            <h5 class="product-title">
                                                                <a href="">ios</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <hr>
                                </div>
                            </form>
                            <div class="mt-5">
                                <a href="#" class="float-right border-bottom-dt"><i
                                        class="mdi mdi-chevron-double-right"></i>بازگشت به سبد خرید</a>
                                <a href="#" class="float-left border-bottom-dt">تایید و ادامه ثبت سفارش<i
                                        class="mdi mdi-chevron-double-left"></i></a>
                            </div>
                        </section>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-12 w-res-sidebar sticky-sidebar">
                        <div class="dt-sn dt-sn--box border mb-2">
                            <div class="checkout-summary-content">
                                <div class="checkout-summary-price-title">مبلغ قابل پرداخت:</div>
                                <div class="checkout-summary-price-value">
                                    <span class="checkout-summary-price-value-amount"> 450,000</span>
                                    تومان
                                </div>
                                <a href="#" class="mb-2 d-block">
                                    <button class="btn-primary-cm btn-with-icon w-100 text-center pr-0 pl-0">
                                        <i class="mdi mdi-arrow-left"></i>
                                        تایید و ادامه ثبت سفارش
                                    </button>
                                </a>
                            </div>
                        </div>
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
    <script src="./assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/vendor/popper.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.min.js"></script>
    <script src="./assets/js/vendor/bootstrap-slider.min.js"></script>
    <script src="./assets/js/vendor/owl.carousel.min.js"></script>
    <script src="./assets/js/vendor/owl.carousel2.thumbs.min.js"></script>
    <script src="./assets/js/vendor/jquery.nicescroll.min.js"></script>
    <script src="./assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="./assets/js/vendor/nouislider.min.js"></script>
    <script src="./assets/js/vendor/jquery.horizontalmenu.js"></script>
    <script src="./assets/js/vendor/jquery-stack-menu.min.js"></script>
    <script src="./assets/js/vendor/jquery.fancybox.min.js"></script>
    <script src="./assets/js/vendor/countdown.min.js"></script>
    <script src="./assets/js/vendor/wNumb.js"></script>
    <script src="./assets/js/vendor/ResizeSensor.min.js"></script>
    <script src="./assets/js/vendor/theia-sticky-sidebar.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.761226, 90.420766), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#444444"
                    }]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{
                        "color": "#f2f2f2"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": -100
                    },
                    {
                        "lightness": 45
                    }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{
                        "color": "#314453"
                    },
                    {
                        "visibility": "on"
                    }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "lightness": "-12"
                    },
                    {
                        "saturation": "0"
                    },
                    {
                        "color": "#4bc7e9"
                    }
                    ]
                }
                ]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapNew = document.getElementById('map');
            var mapEdit = document.getElementById('map-edit');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapNew, mapOptions);
            var mapEdit = new google.maps.Map(mapEdit, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.761226, 90.420766),
                map: map,
                title: 'Snazzy!'
            });
        }
    </script>
    <script src="./assets/js/main.js"></script>
</body>
</html>