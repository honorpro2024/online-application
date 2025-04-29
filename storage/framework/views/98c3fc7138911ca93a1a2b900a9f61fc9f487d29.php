<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['education_and_training' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['education_and_training' => null]); ?>
<?php foreach (array_filter((['education_and_training' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($education_and_training == null || empty($education_and_training)): ?>
    <section id="step-2" class="tab-pane education-and-training mb-5" role="tabpanel" aria-labelledby="step-2">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Education And Training
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3 form-group">
                        <label for="medical_school" class="form-label fw-bold">
                            Medical School
                        </label>
                        <input id="medical_school" name="medical_school" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="degree" class="form-label">Degree (MD, DO)</label>
                        <input name="et_degree" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input id="start_date" name="start_date" type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="end_date" class="form-label">End Date</label>
                        <input id="end_date" name="end_date" type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="city" class="form-label">City</label>
                        <input name="e_city" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="e_state" class="form-label">State</label>
                        <select name="e_state" class="form-select">
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

                    <hr class="my-3">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="internship_training_name" class="form-label">
                            Internship Facility Name
                        </label>
                        <input id="internship_training_name" name="internship_training_name" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="internship_training_city" class="form-label">City</label>
                        <input id="internship_training_city" name="internship_training_city" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="internship_training_state" class="form-label">State</label>
                        <select name="internship_training_state" class="form-select">
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
                        <label for="internship_training_start_date" class="form-label">
                            Start Date
                        </label>
                        <input id="internship_training_start_date" name="internship_training_start_date" type="date"
                            max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="internship_training_end_date" class="form-label">
                            End Date
                        </label>
                        <input id="internship_training_end_date" name="internship_training_end_date" type="date"
                            max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="category_of_training" class="form-label">
                            Category of Training
                        </label>
                        <input id="category_of_training" name="category_of_training" type="text"
                            class="form-control" />
                    </div>

                    <hr class="my-3">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_name" class="form-label">
                            Residency Training -- Facility Name
                        </label>
                        <input id="residency_training_name" name="residency_training_name" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_city" class="form-label">City</label>
                        <input id="residency_training_city" name="residency_training_city" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_state" class="form-label">State</label>
                        <select name="residency_training_state" class="form-select">
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
                        <label for="residency_training_start_date" class="form-label">
                            Start Date
                        </label>
                        <input id="residency_training_start_date" name="residency_training_start_date" type="date"
                            max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_end_date" class="form-label">
                            End Date
                        </label>
                        <input id="residency_training_end_date" name="residency_training_end_date" type="date"
                            max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_speciality" class="form-label">Specialty</label>
                        <select class="form-select" id="residency_training_speciality"
                            name="residency_training_speciality">
                            <option value="">Select Your Specialty</option>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.speciality','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('speciality'); ?>
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

                    <hr class="my-3">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_name" class="form-label">
                            Fellowship Training -- Facility Name
                        </label>
                        <input id="fellowship_training_name" name="fellowship_training_name" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_city" class="form-label">City</label>
                        <input id="fellowship_training_city" name="fellowship_training_city" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_state" class="form-label">State</label>
                        <select name="fellowship_training_state" class="form-select">
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
                        <label for="fellowship_training_start_date" class="form-label">
                            Start Date
                        </label>
                        <input id="fellowship_training_start_date" name="fellowship_training_start_date"
                            type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_end_date" class="form-label">
                            End Date
                        </label>
                        <input id="fellowship_training_end_date" name="fellowship_training_end_date" type="date"
                            max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_speciality" class="form-label">Specialty</label>
                        <select class="form-select" id="fellowship_training_speciality"
                            name="fellowship_training_speciality">
                            <option value="">Select Your Specialty</option>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.speciality','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('speciality'); ?>
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

                    <hr class="my-3">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_name" class="form-label">
                            Additional Training -- Facility Name
                        </label>
                        <input id="additional_training_name" name="additional_training_name" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_city" class="form-label">City</label>
                        <input id="additional_training_city" name="additional_training_city" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_state" class="form-label">State</label>
                        <select name="additional_training_state" class="form-select">
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
                        <label for="additional_training_start_date" class="form-label">
                            Start Date
                        </label>
                        <input id="additional_training_start_date" name="additional_training_start_date"
                            type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_end_date" class="form-label">
                            End Date
                        </label>
                        <input id="additional_training_end_date" name="additional_training_end_date" type="date"
                            max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_category" class="form-label">
                            Category of Training
                        </label>
                        <input id="additional_training_category" name="additional_training_category" type="text"
                            class="form-control" />
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <section id="step-2" class="tab-pane education-and-training mb-5" role="tabpanel" aria-labelledby="step-2">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Education And Training
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3 form-group">
                        <label for="medical_school" class="form-label fw-bold">
                            Medical School
                        </label>
                        <input id="medical_school" name="medical_school" type="text" class="form-control"
                            value="<?php echo e($education_and_training->medical_school); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="degree" class="form-label">Degree (MD, DO)</label>
                        <input name="degree" type="text" class="form-control"
                            value="<?php echo e($education_and_training->degree); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input id="start_date" name="start_date" type="date" max="9999-12-31"
                            class="form-control" value="<?php echo e($education_and_training->start_date); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="end_date" class="form-label">End Date</label>
                        <input id="end_date" name="end_date" type="date" max="9999-12-31" class="form-control"
                            value="<?php echo e($education_and_training->end_date); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="city" class="form-label">City</label>
                        <input name="e_city" type="text" class="form-control"
                            value="<?php echo e($education_and_training->e_city); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="e_state" class="form-label">State</label>
                        <select name="e_state" class="form-select">
                            <option value="<?php echo e($education_and_training->e_state); ?>">
                                <?php echo e($education_and_training->e_state); ?></option>
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

                    <hr class="my-3">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="internship_training_name" class="form-label">
                            Internship Facility Name
                        </label>
                        <input id="internship_training_name" name="internship_training_name" type="text"
                            class="form-control" value="<?php echo e($education_and_training->internship_training_name); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="internship_training_city" class="form-label">City</label>
                        <input id="internship_training_city" name="internship_training_city" type="text"
                            class="form-control" value="<?php echo e($education_and_training->internship_training_city); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="internship_training_state" class="form-label">State</label>
                        <select name="internship_training_state" class="form-select">
                            <option value="<?php echo e($education_and_training->internship_training_state); ?>">
                                <?php echo e($education_and_training->internship_training_state); ?>

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
                        <label for="internship_training_start_date" class="form-label">Start Date</label>
                        <input id="internship_training_start_date" name="internship_training_start_date"
                            type="date" max="9999-12-31" class="form-control"
                            value="<?php echo e($education_and_training->internship_training_start_date); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="internship_training_end_date" class="form-label">End Date</label>
                        <input id="internship_training_end_date" name="internship_training_end_date" type="date"
                            max="9999-12-31" class="form-control"
                            value="<?php echo e($education_and_training->internship_training_end_date); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="category_of_training" class="form-label">
                            Category of Training
                        </label>
                        <input id="category_of_training" name="category_of_training" type="text"
                            class="form-control" value="<?php echo e($education_and_training->category_of_training); ?>" />
                    </div>

                    <hr class="my-3">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_name" class="form-label">
                            Residency Training -- Facility Name
                        </label>
                        <input id="residency_training_name" name="residency_training_name" type="text"
                            class="form-control" value="<?php echo e($education_and_training->residency_training_name); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_city" class="form-label">City</label>
                        <input id="residency_training_city" name="residency_training_city" type="text"
                            class="form-control" value="<?php echo e($education_and_training->residency_training_city); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_state" class="form-label">State</label>
                        <select name="residency_training_state" class="form-select">
                            <option value="<?php echo e($education_and_training->residency_training_state); ?>">
                                <?php echo e($education_and_training->residency_training_state); ?>

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
                        <label for="residency_training_start_date" class="form-label">
                            Start Date
                        </label>
                        <input id="residency_training_start_date" name="residency_training_start_date" type="date"
                            max="9999-12-31" class="form-control"
                            value="<?php echo e($education_and_training->residency_training_start_date); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_end_date" class="form-label">
                            End Date
                        </label>
                        <input id="residency_training_end_date" name="residency_training_end_date" type="date"
                            max="9999-12-31" class="form-control"
                            value="<?php echo e($education_and_training->residency_training_end_date); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_speciality" class="form-label">Specialty</label>
                        <select class="form-select" id="residency_training_speciality"
                            name="residency_training_speciality">
                            <option value="">Select Your Specialty</option>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.speciality','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('speciality'); ?>
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

                    <hr class="my-3">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_name" class="form-label">
                            Fellowship Training -- Facility Name 
                        </label>
                        <input id="fellowship_training_name" name="fellowship_training_name" type="text"
                            class="form-control" value="<?php echo e($education_and_training->fellowship_training_name); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_city" class="form-label">City</label>
                        <input id="fellowship_training_city" name="fellowship_training_city" type="text"
                            class="form-control" value="<?php echo e($education_and_training->fellowship_training_city); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_state" class="form-label">State</label>
                        <select name="fellowship_training_state" class="form-select">
                            <option value="<?php echo e($education_and_training->fellowship_training_state); ?>">
                                <?php echo e($education_and_training->fellowship_training_state); ?>

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
                        <label for="fellowship_training_start_date" class="form-label">Start Date</label>
                        <input id="fellowship_training_start_date" name="fellowship_training_start_date"
                            type="date" max="9999-12-31" class="form-control"
                            value="<?php echo e($education_and_training->fellowship_training_start_date); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_end_date" class="form-label">End Date</label>
                        <input id="fellowship_training_end_date" name="fellowship_training_end_date" type="date"
                            max="9999-12-31" class="form-control"
                            value="<?php echo e($education_and_training->fellowship_training_end_date); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_speciality" class="form-label">Specialty</label>
                        <select class="form-select" id="fellowship_training_speciality"
                            name="fellowship_training_speciality">
                            <option value="">Select Your Specialty</option>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.speciality','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('speciality'); ?>
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

                    <hr class="my-3">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_name" class="form-label">
                            Additional Training -- Facility Name 
                        </label>
                        <input id="additional_training_name" name="additional_training_name" type="text"
                            class="form-control" value="<?php echo e($education_and_training->additional_training_name); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_city" class="form-label">City</label>
                        <input id="additional_training_city" name="additional_training_city" type="text"
                            class="form-control" value="<?php echo e($education_and_training->additional_training_city); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_state" class="form-label">State</label>
                        <select name="additional_training_state" class="form-select">
                            <option value="<?php echo e($education_and_training->additional_training_state); ?>">
                                <?php echo e($education_and_training->additional_training_state); ?>

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
                        <label for="additional_training_start_date" class="form-label">Start Date</label>
                        <input id="additional_training_start_date" name="additional_training_start_date"
                            type="date" max="9999-12-31" class="form-control"
                            value="<?php echo e($education_and_training->additional_training_start_date); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_end_date" class="form-label">End Date</label>
                        <input id="additional_training_end_date" name="additional_training_end_date" type="date"
                            max="9999-12-31" class="form-control"
                            value="<?php echo e($education_and_training->additional_training_end_date); ?>" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_category" class="form-label">
                            Category of Training
                        </label>
                        <input id="additional_training_category" name="additional_training_category" type="text"
                            class="form-control"
                            value="<?php echo e($education_and_training->additional_training_category); ?>" />
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/components/form-2.blade.php ENDPATH**/ ?>