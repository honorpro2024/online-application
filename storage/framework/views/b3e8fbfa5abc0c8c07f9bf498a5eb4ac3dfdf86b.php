<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['current_medical_education' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['current_medical_education' => null]); ?>
<?php foreach (array_filter((['current_medical_education' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($current_medical_education == null || empty($current_medical_education)): ?>
    <section id="step-11" class="tab-pane current-continuing-medical-education mb-5" role="tabpanel"
        aria-labelledby="step-11">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Current Continuing Medical Education
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="mb-3">
                        Please provide CME activity completed within the last 3 years. This
                        summary form may
                        be submitted in lieu of sending
                        copies of your CME certificate(s) for internal credentialing; however,
                        some
                        facilities may require actual copies of your
                        certificates for privileging. Please make as many copies of this page as
                        needed.
                    </p>

                    <div class="col-md-12" id="current_medical_education_wrapper">

                        <div class="row current_medical_education_wrapper_item">

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Program Title
                                </label>
                                <input name="program_title[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Date
                                </label>
                                <input name="program_date[0]" type="date" max="9999-12-31" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Sponsoring Organization
                                </label>
                                <input name="sponsoring_organization[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    # of CME's
                                </label>
                                <input name="certificate_of_cme[0]" type="text" class="form-control" />
                            </div>

                        </div>

                        <hr class="my-3">

                    </div>

                    <div class="clearfix mb-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('current_medical_education_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <section id="step-11" class="tab-pane current-continuing-medical-education mb-5" role="tabpanel"
        aria-labelledby="step-11">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Current Continuing Medical Education
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="mb-3">
                        Please provide CME activity completed within the last 3 years. This
                        summary form may
                        be submitted in lieu of sending
                        copies of your CME certificate(s) for internal credentialing; however,
                        some
                        facilities may require actual copies of your
                        certificates for privileging. Please make as many copies of this page as
                        needed.
                    </p>

                    <div class="col-md-12" id="current_medical_education_wrapper">

                        <?php $__currentLoopData = $current_medical_education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row current_medical_education_wrapper_item">

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Program Title
                                    </label>
                                    <input name="program_title[<?php echo e($key); ?>]" type="text" class="form-control"
                                        value="<?php echo e($cme->program_title); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Date
                                    </label>
                                    <input name="program_date[<?php echo e($key); ?>]" type="date" max="9999-12-31"
                                        class="form-control" value="<?php echo e($cme->program_date); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Sponsoring Organization
                                    </label>
                                    <input name="sponsoring_organization[<?php echo e($key); ?>]" type="text"
                                        class="form-control" value="<?php echo e($cme->sponsoring_organization); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        # of CME's
                                    </label>
                                    <input name="certificate_of_cme[<?php echo e($key); ?>]" type="text"
                                        class="form-control" value="<?php echo e($cme->certificate_of_cme); ?>" />
                                </div>

                            </div>

                            <hr class="my-3">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                    <div class="clearfix mb-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('current_medical_education_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/components/form-11.blade.php ENDPATH**/ ?>