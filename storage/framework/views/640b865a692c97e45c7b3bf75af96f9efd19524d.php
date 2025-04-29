<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
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

    <!-- Libs CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/libs.bundle.css')); ?>" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/theme.bundle.css')); ?>" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" />

    <!-- iziToast -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/izitoast/css/iziToast.min.css')); ?>">

    <!-- Title -->
    <title><?php echo $__env->yieldContent('title', 'Home'); ?> | <?php echo e(config('app.name')); ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                <img src="<?php echo e(asset('assets/img/logo.png')); ?>" class="navbar-brand-img" alt="<?php echo e(config('app.name')); ?>"
                    style="max-height: 3.125rem;">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fe fe-x"></i>
                </button>

                <!-- Navigation -->
                <ul class="navbar-nav ms-auto">

                </ul>

                <?php if(auth()->guard()->check()): ?>
                    <a class="navbar-btn btn btn-sm btn-primary lift ms-auto" href="<?php echo e(route('dashboard')); ?>">
                        Dashboard
                    </a>
                <?php else: ?>
                    <a class="navbar-btn btn btn-sm btn-primary lift ms-auto" href="<?php echo e(route('login')); ?>">
                        Login
                    </a>
                <?php endif; ?>


            </div>

        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- FOOTER -->
    <footer class="py-8 bg-gray-200">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 text-center">
                    <p class="mb-0">
                        Copyright © 2023 Honor Providers. All Rights Reserved.
                        <a href="https://www.honorproviders.com/privacy-policy" target="_blank">Legal and Privacy</a>
                    </p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>

    <!-- JAVASCRIPT -->

    <!-- Vendor JS -->
    <script src="<?php echo e(asset('assets/js/vendor.bundle.js')); ?>"></script>

    <!-- Theme JS -->
    <script src="<?php echo e(asset('assets/js/theme.bundle.js')); ?>"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- iziToast -->
    <script src="<?php echo e(asset('assets/izitoast/js/iziToast.min.js')); ?>"></script>

    <?php echo $__env->yieldContent('scripts'); ?>

    <?php echo $__env->make('layouts.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH /var/www/html/resources/views/layouts/app.blade.php ENDPATH**/ ?>