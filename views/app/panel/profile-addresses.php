<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffa500">
    <meta name="msapplication-navbutton-color" content="#ffa500">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffa500">
    <title>پروفایل آدرس</title>
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
                            <div
                                    class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2 px-res-1">
                                <h2>آدرس ها</h2>
                            </div>
                            <div class="dt-sl">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card-horizontal-address text-center px-4">
                                            <button class="checkout-address-location" data-toggle="modal"
                                                    data-target="#modal-location">
                                                <strong>ایجاد آدرس جدید</strong>
                                                <i class="mdi mdi-map-marker-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <?php foreach ($addresses as $addressItem) { ?>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="card-horizontal-address">
                                                <div class="card-horizontal-address-desc">
                                                    <h4 class="card-horizontal-address-full-name">نام کاربر</h4>
                                                    <p>
                                                        آدرس
                                                    </p>
                                                </div>
                                                <div class="card-horizontal-address-data">
                                                    <ul class="card-horizontal-address-methods float-right">
                                                        <li class="card-horizontal-address-method">
                                                            <i class="mdi mdi-email-outline"></i>
                                                            کدپستی : <span>۹۹۹۹۹۹۹۹۹۹</span>
                                                        </li>
                                                        <li class="card-horizontal-address-method">
                                                            <i class="mdi mdi-cellphone-iphone"></i>
                                                            تلفن همراه : <span>09xxxxxxxxx</span>
                                                        </li>
                                                    </ul>
                                                    <div class="card-horizontal-address-actions">
                                                        <button class="btn-note" data-toggle="modal"
                                                                data-target="#modal-location-edit">ویرایش
                                                        </button>
                                                        <button class="btn-note" data-toggle="modal"
                                                                data-target="#remove-location">حذف
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>


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
    <div class="modal fade" id="modal-location" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-lg send-info modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        <i class="now-ui-icons location_pin"></i>
                        افزودن آدرس جدید
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                                <input class="input-ui pr-2 text-right" type="text"
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
                                                <input class="input-ui pl-2 dir-ltr text-left" type="text"
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
                                                    <textarea class="input-ui pr-2 text-right"
                                                              placeholder=" آدرس را وارد نمایید"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="form-row-title">
                                                <h4>
                                                    کد پستی
                                                </h4>
                                            </div>
                                            <div class="form-row">
                                                <input class="input-ui pl-2 dir-ltr text-left placeholder-right"
                                                       type="text" placeholder=" کد پستی را بدون خط تیره بنویسید">
                                            </div>
                                        </div>
                                        <div class="col-12 pr-4 pl-4">
                                            <button type="button" class="btn btn-sm btn-primary btn-submit-form">ثبت
                                            </button>
                                            <button type="button" class="btn-link-border float-left mt-2">انصراف
                                                و بازگشت
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="goole-map">
                                <div id="map" style="height:440px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-location-edit" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-lg send-info modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        <i class="now-ui-icons location_pin"></i>
                        ویرایش آدرس
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                                <input class="input-ui pr-2 text-right" type="text"
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
                                                <input class="input-ui pl-2 dir-ltr text-left" type="text"
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
                                                    <textarea class="input-ui pr-2 text-right"
                                                              placeholder=" آدرس را وارد نمایید"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="form-row-title">
                                                <h4>
                                                    کد پستی
                                                </h4>
                                            </div>
                                            <div class="form-row">
                                                <input class="input-ui pl-2 dir-ltr text-left placeholder-right"
                                                       type="text" placeholder=" کد پستی را بدون خط تیره بنویسید">
                                            </div>
                                        </div>
                                        <div class="col-12 pr-4 pl-4">
                                            <button type="button" class="btn btn-sm btn-primary btn-submit-form">ثبت
                                            </button>
                                            <button type="button" class="btn-link-border float-left mt-2">انصراف
                                                و بازگشت
                                            </button>
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
    <div class="modal fade" id="remove-location" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-3" id="exampleModalLabel">آیا مطمئنید که
                        این آدرس حذف شود؟</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="remodal-general-alert-button remodal-general-alert-button--cancel"
                            data-dismiss="modal">خیر
                    </button>
                    <button type="button"
                            class="remodal-general-alert-button remodal-general-alert-button--approve">بله
                    </button>
                </div>
            </div>
        </div>
    </div>
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
<!-- Main JS File -->
<script src="./assets/js/main.js"></script>
</body>

</html>