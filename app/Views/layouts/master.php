<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, xtreme admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Xtreme is powerful and clean admin dashboard template, inpired from Google's Material Design"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title><?= $this->renderSection('title') ?></title>
   
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon.png') ?>" />
    <link rel="stylesheet" href="<?= base_url('dist/css/style.min.css') ?>">
</head>
<body>
    <?= $this->include('partials/preloader') ?>


    <div id="main-wrapper">

<?= $this->include('partials/topbar') ?>  

<?= $this->include('partials/menu') ?>

<div class="page-wrapper">

 <?= $this->include('partials/breadcrumb') ?>

 <?= $this->renderSection('content') ?>

</div>
</div>
        
    <?= $this->include('partials/script') ?>
</body>
</html>
