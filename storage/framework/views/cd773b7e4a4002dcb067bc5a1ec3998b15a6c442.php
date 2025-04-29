<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['credentialing_application_form' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['credentialing_application_form' => null]); ?>
<?php foreach (array_filter((['credentialing_application_form' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if($credentialing_application_form == null || empty($credentialing_application_form)): ?>
    <section id="step-9" class="tab-pane credentialing-application-explanation-form mb-5" role="tabpanel"
        aria-labelledby="step-9">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Credentialing Application Explanation Form
            </div>
            <div class="card-body">
                <div class="row">
                    <p>
                        Please clearly indicate which question and answer you are providing
                        explanation for.
                        Attach all available supporting information.
                    </p>

                    <div class="col-md-12 mb-3 form-group d-none">
                        <label for="provider_name" class="form-label">
                            Provider Name
                        </label>
                        <input id="provider_name" name="provider_name" type="text" class="form-control" />
                    </div>

                    <div class="col-md-12" id="explanation_wrapper">

                        <div class="row explanation_wrapper_item">

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Date
                                </label>
                                <input name="explanation_date[0]" type="date" class="form-control"
                                    max="9999-12-31" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Comments
                                </label>
                                <textarea name="explanation_answer[0]" type="text" class="form-control"></textarea>
                            </div>

                        </div>

                        <hr class="my-3">

                    </div>

                    <div class="clearfix mb-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('explanation_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <section id="step-9" class="tab-pane credentialing-application-explanation-form mb-5" role="tabpanel"
        aria-labelledby="step-9">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Credentialing Application Explanation Form
            </div>
            <div class="card-body">
                <div class="row">
                    <p>
                        Please clearly indicate which question and answer you are providing
                        explanation for.
                        Attach all available supporting information.
                    </p>

                    <div class="col-md-12 mb-3 form-group d-none">
                        <label for="provider_name" class="form-label">
                            Provider Name
                        </label>
                        <input id="provider_name" name="provider_name" type="text" class="form-control"
                            value="<?php echo e($credentialing_application_form[0]->provider_name ?? ''); ?>" />
                    </div>

                    <div class="col-md-12" id="explanation_wrapper">

                        <?php $__currentLoopData = $credentialing_application_form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $caf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row explanation_wrapper_item">

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Date
                                    </label>
                                    <input name="explanation_date[<?php echo e($key); ?>]" type="date"
                                        class="form-control" max="9999-12-31" value="<?php echo e($caf->explanation_date); ?>" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Comments
                                    </label>
                                    <textarea name="explanation_answer[<?php echo e($key); ?>]" class="form-control"><?php echo e($caf->explanation_answer); ?></textarea>
                                </div>

                            </div>

                            <hr class="my-3">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="clearfix mb-3">
                            <button type="button" class="btn btn-sm btn-primary-soft"
                                onclick="cloneDiv('explanation_wrapper_item')">
                                <i class="fe fe-plus"></i>
                                Add
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/components/form-9.blade.php ENDPATH**/ ?>