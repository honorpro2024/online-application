<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['hospital_and_affiliations' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['hospital_and_affiliations' => null]); ?>
<?php foreach (array_filter((['hospital_and_affiliations' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($hospital_and_affiliations == null || empty($hospital_and_affiliations)): ?>
    <section id="step-7" class="tab-pane hospital-and-affiliations mb-5" role="tabpanel" aria-labelledby="step-7">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                HOSPITAL AND AFFILIATIONS
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="d-flex gap-5 mb-5">
                        <p class="mb-0">
                            Current Hospital And Other Facility Affiliations
                        </p>

                        <div class="form-check">
                            <input class="form-check-input" name="hospital_and_affiliation_apply" type="checkbox"
                                value="1" id="hospital_and_affiliation_apply">
                            <label class="form-check-label" for="hospital_and_affiliation_apply">
                                Does not apply
                            </label>
                        </div>
                    </div>

                    <div class="col-md-12" id="hospital_affiliation_wrapper">

                        <div class="row hospital_affiliation_wrapper_item">

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Primary Facility Name
                                </label>
                                <input name="primary_facility_name[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Appointment From
                                </label>
                                <input name="appointment_from[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Appointment To
                                </label>
                                <input name="appointment_to[0]" type="date" max="9999-12-31" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    City
                                </label>
                                <input name="appointment_city[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    State
                                </label>

                                <select name="appointment_state[0]" class="form-select">
                                    <option value="">
                                        Select
                                    </option>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.state','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('state'); ?>
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
                                </select>

                            </div>

                        </div>

                        <div class="col-md-12">
                            <hr class="my-3">
                        </div>

                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('hospital_affiliation_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <section id="step-7" class="tab-pane hospital-and-affiliations mb-5" role="tabpanel" aria-labelledby="step-7">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                HOSPITAL AND AFFILIATIONS
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="d-flex gap-5 mb-5">
                        <p class="mb-0">
                            Current Hospital And Other Facility Affiliations
                        </p>

                        <div class="form-check">
                            <input class="form-check-input" name="hospital_and_affiliation_apply" type="checkbox"
                                value="1" id="hospital_and_affiliation_apply"
                                <?php echo e(isset($hospital_and_affiliations[0]->hospital_and_affiliation_apply) && $hospital_and_affiliations[0]->hospital_and_affiliation_apply == '1' ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="hospital_and_affiliation_apply">
                                Does not apply
                            </label>
                        </div>
                    </div>

                    <div class="col-md-12" id="hospital_affiliation_wrapper">

                        <?php $__currentLoopData = $hospital_and_affiliations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $hospital_and_affiliation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row hospital_affiliation_wrapper_item">

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Primary Facility Name
                                    </label>
                                    <input name="primary_facility_name[<?php echo e($key); ?>]" type="text"
                                        class="form-control"
                                        value="<?php echo e($hospital_and_affiliation->primary_facility_name); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Appointment From
                                    </label>
                                    <input name="appointment_from[<?php echo e($key); ?>]" type="date" max="9999-12-31"
                                        class="form-control"
                                        value="<?php echo e($hospital_and_affiliation->appointment_from); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Appointment To
                                    </label>
                                    <input name="appointment_to[<?php echo e($key); ?>]" type="date" max="9999-12-31"
                                        class="form-control" value="<?php echo e($hospital_and_affiliation->appointment_to); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        City
                                    </label>
                                    <input name="appointment_city[<?php echo e($key); ?>]" type="text"
                                        class="form-control"
                                        value="<?php echo e($hospital_and_affiliation->appointment_city); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        State
                                    </label>

                                    <select name="appointment_state[<?php echo e($key); ?>]" class="form-select">
                                        <option value="<?php echo e($hospital_and_affiliation->appointment_state); ?>">
                                            <?php echo e($hospital_and_affiliation->appointment_state); ?>

                                        </option>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.state','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('state'); ?>
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
                                    </select>

                                </div>

                            </div>

                            <div class="col-md-12">
                                <hr class="my-3">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('hospital_affiliation_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/components/form-7.blade.php ENDPATH**/ ?>