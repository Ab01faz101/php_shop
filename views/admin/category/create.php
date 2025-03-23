<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>پنل</title>
    <link rel="stylesheet" href="<?= asset('admin_assets/plugins/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?=asset('admin_assets/dist/css/adminlte.min.css') ?> ">
    <link rel="stylesheet" href="<?= asset('admin_assets/dist/css/bootstrap-rtl.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('admin_assets/dist/css/custom-style.css') ?>">
    <link href="<?= asset('admin_assets/content/css/components-rtl.min.css') ?>" rel="stylesheet" id="style_components" type="text/css"/>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php view('admin.layout.aside')?>



    <div class="content-wrapper">
        <section class="content">

            <a href="<?= url('admin/category') ?>" class="btn btn-primary my-3" >برگشت به دستی بندی ها</a>


            <section class="content">
                <div class="container-fluid">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                    </div>
                    <form action="<?= url('admin/category/store') ?>" method="post" class="col-12" id="barcodeForm">
                        <div class="form-group mx-1" style="display: inline-block;">
                            <label>نام دسته بندی</label>
                            <input name="name" id="barcode" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="ثبت اطلاعات" style="cursor: pointer;">
                        </div>
                    </form>
                </div>
            </section>
        </section>
    </div>
</div>
<script src="<?= asset('admin_assets/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?= asset('admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset('admin_assets/dist/js/adminlte.js') ?>"></script>
</body>
</html>