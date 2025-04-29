<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['licensing' => null, 'dea_substances' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['licensing' => null, 'dea_substances' => null]); ?>
<?php foreach (array_filter((['licensing' => null, 'dea_substances' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if(($licensing == null && $dea_substances == null) || (empty($licensing) && empty($dea_substances))): ?>
    <section id="step-4" class="tab-pane licensing mb-5" role="tabpanel" aria-labelledby="step-4">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                STATE LICENSING
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="col-md-12 mb-3">
                        Please enter the information in the table below for all states in
                        which you have held a medical license.
                    </p>

                    <div class="col-md-12" id="licensing_wrapper">

                        <div class="row licensing_wrapper_item">

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">State</label>

                                <select name="licensing_state[0]" class="form-select">
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

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    License Number
                                </label>
                                <input name="license_number[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    License Status
                                </label>
                                <select name="license_status[0]" class="form-select">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Date License Granted
                                </label>
                                <input name="license_granted_date[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    License Expiration Date
                                </label>
                                <input name="license_expiration_date[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    State Medicare Provider Number
                                </label>
                                <input name="state_medicare_provider_number[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    State Medicaid Provider Number
                                </label>
                                <input name="state_medicaid_provider_number[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group d-none">
                                <label class="form-label">
                                    State Controlled Substance Permit Number
                                </label>
                                <input name="state_controlled_substance_permit_number[0]" type="text"
                                    class="form-control" />
                            </div>

                        </div>

                        <div class="col-md-12">
                            <hr class="my-3">
                        </div>

                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('licensing_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="card border border-dark rounded mt-3">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                DEA + CONTROLLED SUBSTANCE
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="col-md-12 mb-3">
                        Please enter the information in the table below for all states in
                        which you have held a medical license.
                    </p>

                    <div class="col-md-12" id="licensing_dea_wrapper">

                        <div class="row licensing_dea_wrapper_item">

                            <p class="fw-bold mt-3">Federal Provider Information</p>

                            <div class="col-md-6 mb-3 form-group">
                                <label for="federal_dea_number" class="form-label">
                                    Federal DEA Number
                                </label>
                                <input name="federal_dea_number[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label for="dea_expiration_date" class="form-label">
                                    DEA Expiration Date
                                </label>
                                <input name="dea_expiration_date[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">State</label>

                                <select name="licensing_dea_state[0]" class="form-select">
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

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    State Controlled Substance Permit Number
                                </label>
                                <input name="dea_state_controlled_substance_permit_number[0]" type="text"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group d-none">
                                <label class="form-label">
                                    License Number
                                </label>
                                <input name="license_dea_number[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    License Status
                                </label>
                                <select name="license_dea_status[0]" class="form-select">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Date License Granted
                                </label>
                                <input name="license_dea_granted_date[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    License Expiration Date
                                </label>
                                <input name="license_dea_expiration_date[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group d-none">
                                <label class="form-label">
                                    State Medicare Provider Number
                                </label>
                                <input name="dea_state_medicare_provider_number[0]" type="text"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group d-none">
                                <label class="form-label">
                                    State Medicaid Provider Number
                                </label>
                                <input name="dea_state_medicaid_provider_number[0]" type="text"
                                    class="form-control" />
                            </div>

                        </div>

                        <div class="col-md-12">
                            <hr class="my-3">
                        </div>

                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('licensing_dea_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>

    </section>
<?php else: ?>
    <section id="step-4" class="tab-pane licensing mb-5" role="tabpanel" aria-labelledby="step-4">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                STATE LICENSING
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="col-md-12 mb-3">
                        Please enter the information in the table below for all states in
                        which you have held a medical license.
                    </p>

                    <div class="col-md-12" id="licensing_wrapper">

                        <?php $__currentLoopData = $licensing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $license): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row licensing_wrapper_item">

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">State</label>
                                    <select name="licensing_state[<?php echo e($key); ?>]" class="form-select">
                                        <option value="<?php echo e($license->licensing_state); ?>">
                                            <?php echo e($license->licensing_state); ?></option>
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

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        License Number
                                    </label>
                                    <input name="license_number[<?php echo e($key); ?>]" type="text"
                                        class="form-control" value="<?php echo e($license->license_number); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        License Status
                                    </label>
                                    <select name="license_status[<?php echo e($key); ?>]" class="form-select">
                                        <option value="active"
                                            <?php echo e($license->license_status == 'active' ? 'selected' : ''); ?>>
                                            Active</option>
                                        <option value="inactive"
                                            <?php echo e($license->license_status == 'inactive' ? 'selected' : ''); ?>>
                                            Inactive</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Date License Granted
                                    </label>
                                    <input name="license_granted_date[<?php echo e($key); ?>]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="<?php echo e($license->license_granted_date); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        License Expiration Date
                                    </label>
                                    <input name="license_expiration_date[<?php echo e($key); ?>]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="<?php echo e($license->license_expiration_date); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        State Medicare Provider Number
                                    </label>
                                    <input name="state_medicare_provider_number[<?php echo e($key); ?>]" type="text"
                                        class="form-control"
                                        value="<?php echo e($license->state_medicare_provider_number); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        State Medicaid Provider Number
                                    </label>
                                    <input name="state_medicaid_provider_number[<?php echo e($key); ?>]" type="text"
                                        class="form-control"
                                        value="<?php echo e($license->state_medicaid_provider_number); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group d-none">
                                    <label class="form-label">
                                        State Controlled Substance Permit Number
                                    </label>
                                    <input name="state_controlled_substance_permit_number[<?php echo e($key); ?>]"
                                        type="text" class="form-control"
                                        value="<?php echo e($license->state_controlled_substance_permit_number); ?>" />
                                </div>

                            </div>

                            <div class="col-md-12">
                                <hr class="my-3">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('licensing_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="card border border-dark rounded mt-3">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                DEA + CONTROLLED SUBSTANCE
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="col-md-12 mb-3">
                        Please enter the information in the table below for all states in
                        which you have held a medical license.
                    </p>

                    <div class="col-md-12" id="licensing_dea_wrapper">
                        <?php $__currentLoopData = $dea_substances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dea_substance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row licensing_dea_wrapper_item">

                                <p class="fw-bold mt-3">Federal Provider Information</p>

                                <div class="col-md-6 mb-3 form-group">
                                    <label for="federal_dea_number" class="form-label">
                                        Federal DEA Number
                                    </label>
                                    <input name="federal_dea_number[<?php echo e($key); ?>]" type="text"
                                        class="form-control" value="<?php echo e($dea_substance->federal_dea_number); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label for="dea_expiration_date" class="form-label">
                                        DEA Expiration Date
                                    </label>
                                    <input name="dea_expiration_date[<?php echo e($key); ?>]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="<?php echo e($dea_substance->dea_expiration_date); ?>" />
                                </div>


                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">State</label>
                                    <select name="licensing_dea_state[<?php echo e($key); ?>]" class="form-select">
                                        <option value="<?php echo e($dea_substance->licensing_dea_state); ?>">
                                            <?php echo e($dea_substance->licensing_dea_state); ?></option>
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

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        State Controlled Substance Permit Number
                                    </label>
                                    <input name="dea_state_controlled_substance_permit_number[<?php echo e($key); ?>]"
                                        type="text" class="form-control"
                                        value="<?php echo e($dea_substance->dea_state_controlled_substance_permit_number); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group d-none">
                                    <label class="form-label">
                                        License Number
                                    </label>
                                    <input name="license_dea_number[<?php echo e($key); ?>]" type="text"
                                        class="form-control" value="<?php echo e($dea_substance->license_dea_number); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        License Status
                                    </label>
                                    <select name="license_dea_status[<?php echo e($key); ?>]" class="form-select">
                                        <option value="active"
                                            <?php echo e($dea_substance->license_dea_status == 'active' ? 'selected' : ''); ?>>
                                            Active</option>
                                        <option value="inactive"
                                            <?php echo e($dea_substance->license_dea_status == 'inactive' ? 'selected' : ''); ?>>
                                            Inactive</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Date License Granted
                                    </label>
                                    <input name="license_dea_granted_date[<?php echo e($key); ?>]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="<?php echo e($dea_substance->license_dea_granted_date); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        License Expiration Date
                                    </label>
                                    <input name="license_dea_expiration_date[<?php echo e($key); ?>]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="<?php echo e($dea_substance->license_dea_expiration_date); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group d-none">
                                    <label class="form-label">
                                        State Medicare Provider Number
                                    </label>
                                    <input name="dea_state_medicare_provider_number[<?php echo e($key); ?>]"
                                        type="text" class="form-control"
                                        value="<?php echo e($dea_substance->dea_state_medicare_provider_number); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group d-none">
                                    <label class="form-label">
                                        State Medicaid Provider Number
                                    </label>
                                    <input name="dea_state_medicaid_provider_number[<?php echo e($key); ?>]"
                                        type="text" class="form-control"
                                        value="<?php echo e($dea_substance->dea_state_medicaid_provider_number); ?>" />
                                </div>

                            </div>

                            <div class="col-md-12">
                                <hr class="my-3">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('licensing_dea_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>

    </section>

<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/components/form-4.blade.php ENDPATH**/ ?>