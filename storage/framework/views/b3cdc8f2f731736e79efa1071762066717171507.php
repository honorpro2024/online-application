

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>

    <nav class="bg-gray-200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb breadcrumb-scroll">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('home')); ?>" class="text-gray-700">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Login
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>

    <section class="py-6">
        <div class="container">
            <form action="<?php echo e(route('login')); ?>" method="post" id="login_form">
                <?php echo csrf_field(); ?>
                <div class="mb-0 b-0">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <h1 class="fw-bold text-center">
                                Login
                            </h1>
                        </div>

                        <section class="tab-pane personal-information mb-5">
                            <div class="card border border-dark rounded">
                                <div class="card-header bg-gray-200 border-bottom border-dark">
                                    Enter your login details
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-12 mb-3 form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input id="email" name="email" type="text" class="form-control"
                                                value="<?php echo e(old('email')); ?>" />
                                        </div>
                                        <div class="col-md-12 mb-3 form-group">
                                            <label for="password" class="form-label">Password</label>
                                            <input id="password" name="password" type="password" class="form-control" />
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" name="remember" type="checkbox"
                                                    value="1">
                                                <label class="form-check-label" for="remember">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 form-group">
                                            <p class="text-end mb-0">
                                                <a href="<?php echo e(route('forgot-password')); ?>">Forgot Password?</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" class="btn btn-sm btn-primary">Login</button>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="mb-0">
                                                Don't have an account? 
                                                <a href="<?php echo e(route('signup')); ?>">Sign Up</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/additional-methods.min.js')); ?>"></script>

    <script>
        $(function() {

            $('#login_form').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    },
                },
                messages: {
                    email: {
                        required: "Email Required",
                    },
                    password: {
                        required: "Password Required"
                    },
                },
                errorPlacement: function(error, element) {
                    var placement = $(element).data('error');
                    if (placement) {
                        $(placement).append(error)
                    } else {
                        error.insertAfter(element);
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/login.blade.php ENDPATH**/ ?>