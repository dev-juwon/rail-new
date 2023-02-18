<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title> <?php echo $__env->yieldContent('title'); ?> | <?php echo e(config('app.name', 'Affiliate')); ?></title>
 <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
 <link rel="stylesheet" href="<?php echo e(asset('assets/css/Affiliate-page.css')); ?>">
 <link rel="stylesheet" href="<?php echo e(asset('assets/css/Creator-page.css')); ?>">
 
 
 <link rel="shortcut icon" href="/images/IMG-20221209-WA0000.jpg" type="image/x-icon">
    <title>Affliate</title>
</head>

<body>
    <?php echo $__env->make('layouts._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layouts._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo e($slot); ?>



    <?php echo $__env->make('layouts._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\aff\resources\views/layouts/guest.blade.php ENDPATH**/ ?>