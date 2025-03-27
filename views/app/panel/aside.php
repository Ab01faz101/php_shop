<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 sticky-sidebar">
    <div class="profile-sidebar dt-sl">
        <div class="dt-sl dt-sn border mb-3">
            <div class="profile-sidebar-header dt-sl">
                <div class="d-flex align-items-center">
                    <div class="profile-avatar">
                        <img
                            <?php
                            if (empty($user['profile'])) {
                                ?>
                                src="<?= asset('assets/img/theme/avatar.png') ?>"
                                <?php
                            } else {
                                ?>
                                src="<?= publicAsset($user['profile']) ?>"
                                <?php
                            }
                            ?>
                                 alt="">
                    </div>
                    <div class="profile-header-content mr-3 mt-2">
                        <span class="d-block profile-username"><?= $user['first_name'] . ' ' . $user['last_name'] ?></span>
                        <span class="d-block profile-phone"><?= $user['phone'] ?></span>
                    </div>
                </div>
                <div class="profile-link mt-2 dt-sl">
                    <div class="row">
                        <div class="col-6 text-center">
                            <a href="<?= url('auth/change-password') ?>">
                                <i class="mdi mdi-lock-reset"></i>
                                <span class="d-block">تغییر رمز</span>
                            </a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="<?= url('auth/logout') ?>">
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
                            <a href="<?= url('panel') ?>" class="active">
                                <i class="mdi mdi-account-circle-outline"></i>
                                پروفایل
                            </a>
                        </li>
                        <li>
                            <a href="<?= url('panel/orders') ?>">
                                <i class="mdi mdi-basket"></i>
                                همه سفارش ها
                            </a>
                        </li>
                        <li>
                            <a href="<?= url('panel/address') ?>">
                                <i class="mdi mdi-sign-direction"></i>
                                آدرس ها
                            </a>
                        </li>
                        <li>
                            <a href="<?= url('panel/personal') ?>">
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