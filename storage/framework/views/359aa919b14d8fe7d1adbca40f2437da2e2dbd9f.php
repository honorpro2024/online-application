

<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['title' => 'Profile']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Profile']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <div class="row">

        <div class="col-lg-6">

            <div class="card">

                <div class="card-body">

                    <h4 class="mt-0 header-title mb-3">Edit Profile</h4>

                    <form action="<?php echo e(route('admin.profile')); ?>" method="post" id="profile_form">

                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label>Name</label>
                            <div>
                                <input type="text" class="form-control" placeholder="Name..." name="name"
                                    value="<?php echo e(auth()->user()->name); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <div>
                                <input type="email" class="form-control" placeholder="Email address..." name="email"
                                    value="<?php echo e(auth()->user()->email); ?>">
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Update Profile
                                </button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

        <div class="col-lg-6">

            <div class="card">

                <div class="card-body">

                    <h4 class="mt-0 header-title mb-3">Change Password</h4>

                    <form action="<?php echo e(route('admin.password.update')); ?>" method="post" id="password_form">

                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label>Current Password</label>
                            <div>
                                <input type="password" class="form-control" placeholder="Current Password..."
                                    name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>New Password</label>
                            <div>
                                <input type="password" class="form-control" placeholder="New Password..."
                                    name="new_password">
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Update Password
                                </button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {

            $('#profile_form').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                },
                messages: {
                    name: {
                        required: "Name Required",
                    },
                    email: {
                        required: "Email Required",
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

            $('#password_form').validate({
                rules: {
                    password: {
                        required: true,
                    },
                    new_password: {
                        required: true,
                    },
                },
                messages: {
                    password: {
                        required: "Password Required",
                    },
                    new_password: {
                        required: "New Password Required",
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/profile.blade.php ENDPATH**/ ?>