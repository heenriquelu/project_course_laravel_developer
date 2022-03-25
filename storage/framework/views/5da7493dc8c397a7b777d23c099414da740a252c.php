<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel &mdash; UpInside Treinamentos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="freehtml5.co"/>

    <?php echo $head ?? ''; ?>


    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo e(asset('css/icomoon.css')); ?>">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    <!-- Modernizr JS -->
    <script src="<?php echo e(asset('js/modernizr-2.6.2.min.js')); ?>"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="<?php echo e(asset('js/respond.min.js')); ?>"></script>
    <![endif]-->

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">

    <?php echo $__env->make('front.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('front.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<!-- jQuery Easing -->
<script src="<?php echo e(asset('js/jquery.easing.1.3.js')); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<!-- Waypoints -->
<script src="<?php echo e(asset('js/jquery.waypoints.min.js')); ?>"></script>
<!-- Stellar Parallax -->
<script src="<?php echo e(asset('js/jquery.stellar.min.js')); ?>"></script>
<!-- Carousel -->
<script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
<!-- countTo -->
<script src="<?php echo e(asset('js/jquery.countTo.js')); ?>"></script>
<!-- Magnific Popup -->
<script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/magnific-popup-options.js')); ?>"></script>
<!-- Main -->
<script src="<?php echo e(asset('js/main.js')); ?>"></script>
<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>

