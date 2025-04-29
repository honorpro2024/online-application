

<?php $__env->startSection('title', 'Security'); ?>

<?php $__env->startSection('content'); ?>
    <header class="bg-dark pt-9 pb-11 d-none d-md-block">
        <div class="container-md">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="fw-bold text-white mb-2">
                        Dashboard
                    </h1>

                    <p class="fs-lg text-white-75 mb-0">
                        <?php echo e(auth()->user()->name); ?>

                    </p>
                </div>
                <div class="col-auto">
                    <form action="<?php echo e(route('logout')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-sm btn-gray-300-20" type="submit">
                            Log Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <main class="pb-8 pb-md-11 mt-md-n6">
        <div class="container-md">
            <div class="row">
                <div class="col-12 col-md-3">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar-card'); ?>
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
                </div>
                <div class="col-12 col-md-9">
                    <div class="card card-bleed shadow-light-lg mb-6">
                        <div class="card-header">
                            <h4 class="mb-0">
                                Password
                            </h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo e(route('password.update')); ?>" id="password_form">
                                <?php echo csrf_field(); ?>
                                <div class="row">

                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="name">Current Password</label>
                                            <input class="form-control" name="current_password" id="current_password"
                                                type="password" placeholder="Current Password">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="name">New Password</label>
                                            <input class="form-control" name="new_password" id="new_password"
                                                type="password" placeholder="New Password">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="name">Confirm Password</label>
                                            <input class="form-control" name="confirm_password" id="confirm_password"
                                                type="password" placeholder="Confirm Password">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-auto mt-3">
                                        <button class="btn btn-sm w-100 btn-primary" type="submit">
                                            Update Password
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/additional-methods.min.js')); ?>"></script>

    <script>
        $(function() {

            $('#password_form').validate({
                rules: {

                    current_password: {
                        required: true
                    },
                    new_password: {
                        required: true,
                    },
                    confirm_password: {
                        required: true,
                        equalTo: '#new_password'
                    }

                },
                messages: {

                    current_password: {
                        required: "Current Password Required"
                    },
                    new_password: {
                        required: "New Password Required",
                    },
                    confirm_password: {
                        required: "Confirm Password Required",
                        equalTo: "Confirm Password Does Not Match",
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/user/password.blade.php ENDPATH**/ ?>