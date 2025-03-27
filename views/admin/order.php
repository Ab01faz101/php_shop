<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>پنل</title>
    <link rel="stylesheet" href="<?= asset('admin_assets/plugins/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= asset('admin_assets/dist/css/adminlte.min.css') ?> ">
    <link rel="stylesheet" href="<?= asset('admin_assets/dist/css/bootstrap-rtl.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('admin_assets/dist/css/custom-style.css') ?>">
    <link href="<?= asset('admin_assets/content/css/components-rtl.min.css') ?>" rel="stylesheet" id="style_components"
          type="text/css"/>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php view('admin.layout.aside') ?>


    <div class="content-wrapper">
        <section class="content">

            <a href="<?= url('admin/category/create') ?>" class="btn btn-primary my-3">ساخت دسته بندی</a>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="invoice p-3 mb-3">
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>نام کاربر</th>
                                            <th>محصولات</th>
                                            <th>استان</th>
                                            <th>شهر</th>
                                            <th>کد پستی</th>
                                            <th>شماره تماس</th>
                                            <th>آدرس</th>
                                            <th>شماره سفارش</th>
                                            <th>مبلغ</th>
                                            <th>وضعیت سفارش</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($orders as $orderItem) {
                                            $userModel = new \App\Models\User();
                                            $addressModel = new \App\Models\Address();
                                            $orderItemModel = new \App\Models\OrderItem();

                                            $cityModel = new \App\Models\City();
                                            $user = $userModel->find($orderItem['user_id']);
                                            $orderItems = $orderItemModel->where(["order_id" => $orderItem['id']]);
                                            // address
                                            $productModel = new \App\Models\Product();
                                            $provinceModel = new \App\Models\Province();
                                            $address = $addressModel->find($orderItem['address_id']);
                                            $city = $cityModel->find($address["city_id"]);

                                            $province = $provinceModel->find($address['province_id']);
                                            ?>
                                            <tr>
                                                <td><?= $user['first_name'] ?></td>
                                                <td>
                                                    <?php foreach ($orderItems as $item) {
                                                        ?>
                                                        <a href="<?= url('product?id=' . $item['product_id']) ?>">
                                                            <?php
                                                            $product = $productModel->find($item['product_id']);
                                                            echo $product['name'] . " (تعداد: " . $item['count'] .
                                                                ")<br>";
                                                            ?>
                                                        </a>
                                                        <?php
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?= $province["name"] ?>
                                                </td>

                                                <td>
                                                    <?= $city["name"] ?>
                                                </td>
                                                <td>
                                                    <?= $address['post_code'] ?>
                                                </td>
                                                <td>
                                                    <?= $address['phone'] ?>
                                                </td>
                                                <td>
                                                    <?= $address['address'] ?>
                                                </td>
                                                <td>
                                                    <?= $orderItem['tracking_number'] ?>
                                                </td>
                                                <td>
                                                    <?= $orderItem['total_price'] ?>
                                                </td>
                                                <td>

                                                    <?php if ($orderItem['status'] == "paid") { ?>
                                                        <span class="btn btn-success"> پرداخت شده</span>
                                                    <?php } else { ?>
                                                        <span class="btn btn-danger"> پرداخت نشده</span>
                                                    <?php } ?>
                                                </td>

                                            </tr>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                    <section style="clear: both;"></section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="<?= asset('admin_assets/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?= asset('admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset('admin_assets/dist/js/adminlte.js') ?>"></script>
</body>
</html>