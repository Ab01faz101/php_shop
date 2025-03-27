<header class="main-header">
    <div class="container main-container">
        <div class="topbar dt-sl">
            <div class="row">
                <div class="col-lg-12 col-6">
                    <div class="logo-area" style="text-align: center;font-size:20px;">
                        بهترین سایت آموزشی ایران
                    </div>
                </div>
                <div class="col-md-4 col-6 topbar-left">
                    <ul class="nav float-left">
                        <li class="nav-item account dropdown">
                            <a href="<?= url(!Core\Auth::check() ? 'auth/login' : 'panel') ?>" class="nav-link"
                            <?php if(Core\Auth::check()){ ?>

                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                <?php } ?>
                                >
                                <span class="label-dropdown">حساب کاربری</span>
                                <i class="mdi mdi-account-circle-outline"></i>
                            </a>
                            <?php if(Core\Auth::check()){ ?>

                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-left">
                                <a class="dropdown-item" href="<?= url('panel') ?>">
                                    <i class="mdi mdi-account-card-details-outline"></i>پروفایل
                                </a>
                                <div class="dropdown-divider" role="presentation"></div>
                                <a class="dropdown-item" href="<?= url('auth/logout') ?>">
                                    <i class="mdi mdi-logout-variant"></i>خروج
                                </a>
                            </div>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header dt-sl mb-sm-bottom-header">
        <div class="container main-container">
            <nav class="main-menu d-flex justify-content-md-between justify-content-end dt-sl">
                <ul class="list hidden-sm">
                    <li class="list-item">
                        <a class="nav-link" href="<?=url('/')?>">صفحه اصلی</a>
                    </li>
                    <li class="list-item list-item-has-children menu-col-1">
                        <a class="nav-link" href="#">برنامه نویسی وب</a>
                        <ul class="sub-menu nav">
                            <li class="list-item">
                                <a class="nav-link" href="#">html5</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">css3</a>
                            </li>
                            <li class="list-item list-item-has-children">
                                <a class="nav-link" href="#">php</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item list-item-has-children">
                                        <a class="nav-link" href="#">php pure</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">php7</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">php8</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Laravel</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">CodeIgniter</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <a class="nav-link" href="#">bootstrap</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">bootstrap4</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">bootstrap5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="list-item list-item-has-children menu-col-1">
                        <a class="nav-link" href="#">برنامه نویسی موبایل</a>
                        <ul class="sub-menu nav">
                            <li class="list-item">
                                <a class="nav-link" href="#">فلاتر</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">اندروید</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">ios</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">دیتابیس</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">درباره ما</a>
                    </li>
                </ul>
                <div class="nav mr-auto">
                    <div class="nav-item cart--wrapper">
                        <a class="nav-link" href="<?= url('cart') ?>">
                            <span class="label-dropdown">سبد خرید</span>
                            <i class="mdi mdi-cart-outline"></i>
                            <span class="count">2</span>
                        </a>
                    </div>
                </div>
                <button class="btn-menu">
                    <div class="align align__justify">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="side-menu">
                    <div class="logo-nav-res dt-sl text-center">
                        <a href="#">
                            <img src="" style="border-radius:5px;" alt="">
                        </a>
                    </div>
                    <ul class="navbar-nav dt-sl">
                        <li>
                            <a href="#">صفحه اصلی</a>
                        </li>
                        <li class="sub-menu">
                            <a href="#">برنامه نویسی وب</a>
                            <ul>
                                <li>
                                    <a href="#">html5</a>
                                </li>
                                <li>
                                    <a href="#">css3</a>
                                </li>
                                <li class="sub-menu">
                                    <a href="#">php</a>
                                    <ul>
                                        <li class="sub-menu">
                                            <a href="#">php pure</a>
                                            <ul>
                                                <li>
                                                    <a href="#">php7</a>
                                                </li>
                                                <li>
                                                    <a href="#">php8</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Laravel</a>
                                        </li>
                                        <li>
                                            <a href="#">CodeIgniter</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu">
                                    <a href="#">bootstrap</a>
                                    <ul>
                                        <li>
                                            <a href="#">bootstrap4</a>
                                        </li>
                                        <li>
                                            <a href="#">bootstrap5</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="#">برنامه نویسی موبایل</a>
                            <ul>
                                <li>
                                    <a href="#">فلاتر</a>
                                </li>
                                <li>
                                    <a href="#">اندروید</a>
                                </li>
                                <li>
                                    <a href="#">ios</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">دیتابیس</a>
                        </li>
                        <li>
                            <a href="#">درباره ما</a>
                        </li>
                    </ul>
                </div>
                <div class="overlay-side-menu"></div>
            </nav>
        </div>
    </div>
</header>