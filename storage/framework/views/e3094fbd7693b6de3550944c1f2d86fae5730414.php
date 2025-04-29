

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">

            <div class="p-1">
                <div class="text-center">
                    <h4 class="font-18 mt-3">Welcome Back !</h4>
                    <p class="text-muted">Log in to continue to Dashboard.</p>
                </div>
            </div>

            <div class="px-3 py-0">

                <form class="form-horizontal m-t-10" action="<?php echo e(route('admin.login')); ?>" method="post" id="login_form">

                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Enter password">
                    </div>

                    <div class="form-group row m-t-30">
                        <div class="col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember"
                                    name="remember" value="1">
                                <label class="custom-control-label" for="remember">Remember me</label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                                Log In
                            </button>
                        </div>
                    </div>

                    <div class="form-group m-t-30 mb-2 row">
                        <div class="col-12 text-center">
                            <a href="<?php echo e(route('admin.forgot.password')); ?>" class="text-muted">
                                <i class="mdi mdi-lock"></i>
                                Forgot password?
                            </a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('#login_form').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    email: {
                        required: "Email Required",
                    },
                    password: {
                        required: "Password Required",
                    }
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

<?php echo $__env->make('admin.auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>