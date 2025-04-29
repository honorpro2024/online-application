

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

    <!-- HEADER -->
    <header class="bg-dark pt-9 pb-11 d-none d-md-block">
        <div class="container-md">
            <div class="row align-items-center">
                <div class="col">
                    <!-- Heading -->
                    <h1 class="fw-bold text-white mb-2">
                        Dashboard
                    </h1>

                    <!-- Text -->
                    <p class="fs-lg text-white-75 mb-0">
                        <?php echo e(auth()->user()->name); ?>

                    </p>

                </div>
                <div class="col-auto">
                    <form action="<?php echo e(route('logout')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <!-- Button -->
                        <button class="btn btn-sm btn-gray-300-20" type="submit">
                            Log Out
                        </button>
                    </form>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </header>

    <!-- MAIN -->
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

                    <!-- Card -->
                    <div class="card card-bleed shadow-light-lg mb-6">
                        <div class="card-header">

                            <!-- Heading -->
                            <h4 class="mb-0">
                                Basic Information
                            </h4>

                        </div>
                        <div class="card-body">

                            <!-- Form -->
                            <form method="post" action="<?php echo e(route('profile.update')); ?>" id="profile_form">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="row">
                                    <div class="col-12 col-md-6">

                                        <!-- Name -->
                                        <div class="form-group">
                                            <label class="form-label" for="name">Name</label>
                                            <input class="form-control" name="name" id="name" type="text" placeholder="Name"
                                                value="<?php echo e(auth()->user()->name); ?>">
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6">

                                        <!-- Email -->
                                        <div class="form-group">
                                            <label class="form-label" for="email">Email</label>
                                            <input class="form-control" name="email" id="email" type="email" placeholder="Name"
                                                value="<?php echo e(auth()->user()->email); ?>">
                                        </div>

                                    </div>

                                    <div class="col-12 col-md-auto mt-3">

                                        <!-- Button -->
                                        <button class="btn btn-sm w-100 btn-primary" type="submit">
                                            Save changes
                                        </button>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </main>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/additional-methods.min.js')); ?>"></script>

    <script>
        $(function() {

            $('#profile_form').validate({
                rules: {

                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    
                },
                messages: {

                    name: {
                        required: "Name Required"
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

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/user/dashboard.blade.php ENDPATH**/ ?>