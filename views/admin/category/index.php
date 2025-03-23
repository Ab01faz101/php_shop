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
                                            <th>نام دسته بندی</th>
                                            <th>ویرایش</th>
                                            <th>حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($categories as $categoryItem) { ?>
                                            <tr>
                                                <td><?= $categoryItem['name'] ?></td>
                                                <td>
                                                    <a href="<?= url('admin/category/edit') ?>?id=<?= $categoryItem['id'] ?>">
                                                        <img src="<?= asset('admin_assets/content/images/edit.jpg') ?>"
                                                             alt="">
                                                    </a>
                                                </td>
                                                <td>
                                                    <form method="post" action="<?= url('admin/category/delete') ?>?id=<?= $categoryItem['id'] ?>">
                                                        <button type="submit">
                                                            <img src="<?= asset('admin_assets/content/images/delete.jpg') ?>"
                                                                 alt="">
                                                        </button>
                                                    </form>
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