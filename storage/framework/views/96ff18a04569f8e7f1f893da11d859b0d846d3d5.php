<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>
        <?php echo $__env->yieldContent('title'); ?> | <?php echo e(config('app.name')); ?>

    </title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Honor Providers" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.favicon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('favicon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <!-- Basic Css files -->
    <link href="<?php echo e(asset('assets/admin/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/admin/css/metismenu.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/admin/css/icons.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/admin/css/style.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/admin/plugins/izitoast/izitoast.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/admin/css/custom.css')); ?>" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div class="accountbg"></div>

    <div class="wrapper-page">

        <div class="logo-admin text-center">
            <img src="<?php echo e(asset('assets/img/logo.png')); ?>" height="50" alt="logo">
        </div>

        <?php echo $__env->yieldContent('content'); ?>

    </div>
    <!-- end wrapper-page -->

    <!-- jQuery  -->
    <script src="<?php echo e(asset('assets/admin/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/modernizr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/jquery.slimscroll.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/waves.js')); ?>"></script>

    <!-- Jquery Validate -->
    <script type="text/javascript" src="<?php echo e(asset('assets/admin/plugins/jquery-validate/jquery.validate.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/admin/plugins/jquery-validate/additional-methods.min.js')); ?>">
    </script>

    <!-- iziToast -->
    <script type="text/javascript" src="<?php echo e(asset('assets/admin/plugins/izitoast/izitoast.min.js')); ?>"></script>

    <!-- App js -->
    <script src="<?php echo e(asset('assets/admin/js/app.js')); ?>"></script>

    <?php echo $__env->make('includes.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->yieldContent('scripts'); ?>

</body>

</html>
<?php /**PATH /var/www/html/resources/views/admin/auth/layout.blade.php ENDPATH**/ ?>