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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="invoice p-3 mb-3">
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <h1 class="text-xl font-bold" style="text-align: center;">خوش آمدید</h1>
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
<script src="<?= asset('admin_assets/dist/js/adminlte.js"') ?>></script>
</body>
</html>