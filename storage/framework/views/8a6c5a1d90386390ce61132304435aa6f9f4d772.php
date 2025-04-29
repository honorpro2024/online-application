<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['work_history' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['work_history' => null]); ?>
<?php foreach (array_filter((['work_history' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($work_history == null || empty($work_history)): ?>
    <section id="step-6" class="tab-pane work-history mb-5" role="tabpanel" aria-labelledby="step-6">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Current Employment & Work History
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="mb-3">
                        Please list all your practice locations and employment affiliations to
                        cover at
                        least the past ten years of clinical practice.
                    </p>

                    <div class="col-md-12" id="work_history_wrapper">

                        <div class="row work_history_wrapper_item">

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    From
                                </label>
                                <input name="work_history_from[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    To
                                </label>
                                <input name="work_history_to[0]" type="date" max="9999-12-31" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Hospital / Facility Name
                                </label>
                                <input name="work_history_facility_name[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group d-none">
                                <label class="form-label">
                                    Phone
                                </label>
                                <input name="work_history_phone[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Address
                                </label>
                                <input name="work_history_address[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    City
                                </label>
                                <input name="work_history_city[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    State
                                </label>

                                <select name="work_history_state[0]" class="form-select">
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

                            <div class="col-md-6 mb-3 form-group d-none">
                                <label class="form-label">
                                    Zip code
                                </label>
                                <input name="work_history_zipcode[0]" type="text" class="form-control"
                                    data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                            </div>

                            <div class="col-md-6 mb-3 form-group d-none">
                                <div class="form-check">
                                    <input class="form-check-input" name="work_history_do_not_contact[0]"
                                        type="checkbox" value="1">
                                    <label class="form-check-label" for="work_history_do_not_contact">
                                        Do not contact
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <hr class="my-3">
                        </div>

                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('work_history_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <section id="step-6" class="tab-pane work-history mb-5" role="tabpanel" aria-labelledby="step-6">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Current Employment & Work History
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="mb-3">
                        Please list all your practice locations and employment affiliations to
                        cover at
                        least the past ten years of clinical practice.
                    </p>

                    <div class="col-md-12" id="work_history_wrapper">

                        <?php $__currentLoopData = $work_history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $wh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row work_history_wrapper_item">

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        From
                                    </label>
                                    <input name="work_history_from[<?php echo e($key); ?>]" type="date" max="9999-12-31"
                                        class="form-control" value="<?php echo e($wh->work_history_from); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        To
                                    </label>
                                    <input name="work_history_to[<?php echo e($key); ?>]" type="date" max="9999-12-31"
                                        class="form-control" value="<?php echo e($wh->work_history_to); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Hospital / Facility Name
                                    </label>
                                    <input name="work_history_facility_name[<?php echo e($key); ?>]" type="text"
                                        class="form-control" value="<?php echo e($wh->work_history_facility_name); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group d-none">
                                    <label class="form-label">
                                        Phone
                                    </label>
                                    <input name="work_history_phone[<?php echo e($key); ?>]" type="text"
                                        class="form-control" value="<?php echo e($wh->work_history_phone); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Address
                                    </label>
                                    <input name="work_history_address[<?php echo e($key); ?>]" type="text"
                                        class="form-control" value="<?php echo e($wh->work_history_address); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        City
                                    </label>
                                    <input name="work_history_city[<?php echo e($key); ?>]" type="text"
                                        class="form-control" value="<?php echo e($wh->work_history_city); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        State
                                    </label>

                                    <select name="work_history_state[<?php echo e($key); ?>]" class="form-select">
                                        <option value="<?php echo e($wh->work_history_state); ?>">
                                            <?php echo e($wh->work_history_state); ?>

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

                                <div class="col-md-6 mb-3 form-group d-none">
                                    <label class="form-label">
                                        Zip code
                                    </label>
                                    <input name="work_history_zipcode[<?php echo e($key); ?>]" type="text"
                                        class="form-control" value="<?php echo e($wh->work_history_zipcode); ?>"
                                        data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                                </div>

                                <div class="col-md-6 mb-3 form-group d-none">
                                    <div class="form-check">
                                        <input class="form-check-input"
                                            name="work_history_do_not_contact[<?php echo e($key); ?>]" type="checkbox"
                                            value="1"
                                            <?php echo e($wh->work_history_do_not_contact == '1' ? 'checked' : ''); ?>>
                                        <label class="form-check-label" for="work_history_do_not_contact">
                                            Do not contact
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <hr class="my-3">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('work_history_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/components/form-6.blade.php ENDPATH**/ ?>