<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>
        <?php echo $__env->yieldContent('title', 'Dashboard'); ?> | <?php echo e(config('app.name')); ?>

    </title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Honor Providers" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="<?php echo e(csrf_token()); ?>" name="csrf-token">

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
    <link href="<?php echo e(asset('assets/admin/plugins/sweet-alert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/admin/css/custom.css')); ?>" rel="stylesheet" type="text/css">

    <?php echo $__env->yieldContent('styles'); ?>

</head>

<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="logo">
                    <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="" height="40"
                        class="logo-large">
                    <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="" height="22"
                        class="logo-sm">
                </a>
            </div>

            <nav class="navbar-custom">
                <!-- Search input -->
                <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input" type="search" placeholder="Search" />
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>

                <ul class="navbar-right d-flex list-inline float-right mb-0">

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                            <i class="mdi mdi-magnify noti-icon"></i>
                        </a>
                    </li>

                    <!-- User-->
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?php echo e(asset('assets/admin/images/users/user.png')); ?>" alt="user"
                                class="rounded-circle">
                            <span class="d-none d-md-inline-block ml-1">
                                <?php echo e(auth()->user()->name); ?>

                                <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                            <a class="dropdown-item" href="<?php echo e(route('admin.profile')); ?>">
                                <i class="dripicons-user text-muted"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="dripicons-gear text-muted"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:;"
                                onclick="document.getElementById('logout-form').submit();">
                                <i class="dripicons-exit text-muted"></i>
                                <form action="<?php echo e(route('admin.logout')); ?>" class="d-inline-block" method="post"
                                    id="logout-form">
                                    <?php echo csrf_field(); ?>
                                    Logout
                                </form>
                            </a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                    <?php echo $__env->yieldContent('content'); ?>

                </div> <!-- container-fluid -->

            </div> <!-- content -->

            <footer class="footer">
                © <?php echo e(date('Y')); ?> - <?php echo e(config('app.name')); ?>

            </footer>

        </div>

        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="<?php echo e(asset('assets/admin/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/modernizr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/jquery.slimscroll.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/waves.js')); ?>"></script>

    <!-- Jquery Validate -->
    <script type="text/javascript" src="<?php echo e(asset('assets/admin/plugins/jquery-validate/jquery.validate.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/admin/plugins/jquery-validate/additional-methods.min.js')); ?>"></script>

    <!-- iziToast -->
    <script type="text/javascript" src="<?php echo e(asset('assets/admin/plugins/izitoast/izitoast.min.js')); ?>"></script>

    <!-- Sweet-Alert  -->
    <script src="<?php echo e(asset('assets/admin/plugins/sweet-alert2/sweetalert2.min.js')); ?>"></script>

    <!-- App js -->
    <script src="<?php echo e(asset('assets/admin/js/app.js')); ?>"></script>

    <!-- Custom js -->
    <script src="<?php echo e(asset('assets/admin/js/custom.js')); ?>"></script>

    <?php echo $__env->make('includes.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('scripts'); ?>

</body>

</html>
<?php /**PATH /var/www/html/resources/views/admin/layouts/main.blade.php ENDPATH**/ ?>