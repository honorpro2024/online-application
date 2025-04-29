<?php $__env->startSection('title', 'My Application'); ?>

<?php $__env->startSection('styles'); ?>
    <!-- CSS -->
    <link href="https://unpkg.com/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
    <style>
        :root {
            --sw-toolbar-btn-color: #ffffff;
            --sw-toolbar-btn-background-color: #335eea;
            --sw-anchor-active-primary-color: #335eea;
            --sw-progress-color: #335eea;
            --sw-progress-background-color: #f8f9fa;
        }

        .sw>.progress {
            height: 8px;
        }

        .sw>.progress>.progress-bar {
            height: 8px;
        }

        .btn-submit {
            background-color: #42ba96 !important;
            border-color: #42ba96 !important;
        }


        .input-group-text {
            padding: 0.375rem 0.75rem !important;
        }

        .input-group>.form-control,
        .input-group>.form-select {
            padding: 0.375rem 0.75rem !important;
        }

        .cursor-pointer {
            cursor: pointer;
        }

        .btn-danger {
            background-color: #df4759 !important;
            border-color: #df4759 !important;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- BREADCRUMB -->
    <nav class="bg-gray-200">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Breadcrumb -->
                    <ol class="breadcrumb breadcrumb-scroll">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('home')); ?>" class="text-gray-700">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            My Application
                        </li>
                    </ol>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </nav>

    <!-- SEARCH -->
    <section class="py-6">
        <div class="container">
            <form action="<?php echo e(route('application.update')); ?>" method="post" id="application_form"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-0 b-0">

                    <div class="row">

                        <div class="col-12 mb-3">

                            <h1 class="fw-bold text-center">
                                <u>
                                    Application Instructions
                                </u>
                            </h1>

                            <p class="mb-3">
                                Welcome. Please review and complete the Honor Providers application to its fullest.
                                This application will serve as a source of truth for Honor Providers risk management and
                                quality assurance records. Additionally, all furnished information and supporting
                                documents can
                                be used to newly apply or renew: Hospital Privileges, Provider Enrollment, State
                                Licensing
                                and/or any applicable state and federal applications.
                            </p>

                            <p>
                                <i class="fe fe-check me-2" aria-hidden="true"></i>The accuracy of your
                                profile information is paramount to expeditiously process and meet
                                credentialing timelines. Furthermore, innacurate or missing
                                information will likely result in delayed processing timelines.
                            </p>
                            <p>
                                <i class="fe fe-check me-2" aria-hidden="true"></i> CV, education, work
                                history and hospital affiliations MUST display MM/YYYY formatting.
                            </p>

                            <h2 class="fw-bold text-center">PROVIDER APPLICATION</h2>
                        </div>

                        <div class="col-12 mb-3 pb-5 border-0" id="smartwizard">

                            <ul class="nav">

                                <?php for($i = 1; $i <= 12; $i++): ?>
                                    <li class="nav-item d-none">
                                        <a href="#step-<?php echo e($i); ?>" class="nav-link">
                                            <div class="num"><?php echo e($i); ?></div>
                                        </a>
                                    </li>
                                <?php endfor; ?>

                            </ul>

                            <div class="tab-content">

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-1','data' => ['personalInformation' => $personal_information]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['personal_information' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($personal_information)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-2','data' => ['educationAndTraining' => $education_and_training]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['education_and_training' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($education_and_training)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-3','data' => ['boardCertifications' => $board_certifications]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-3'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['board_certifications' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($board_certifications)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-4','data' => ['licensing' => $licensing,'deaSubstances' => $dea_substances]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-4'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['licensing' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($licensing),'dea_substances' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($dea_substances)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-5','data' => ['references' => $references]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-5'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['references' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($references)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-6','data' => ['workHistory' => $work_history]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-6'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['work_history' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($work_history)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-7','data' => ['hospitalAndAffiliations' => $hospital_and_affiliations]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-7'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['hospital_and_affiliations' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hospital_and_affiliations)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-8','data' => ['disclusresAndDisciplinaryAction' => $disclusres_and_disciplinary_action]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-8'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['disclusres_and_disciplinary_action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($disclusres_and_disciplinary_action)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-9','data' => ['credentialingApplicationForm' => $credentialing_application_form]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-9'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['credentialing_application_form' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($credentialing_application_form)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-10','data' => ['malpracticeInformation' => $malpractice_information,'malpracticeClaims' => $malpractice_claims,'malpracticeClaimPolicies' => $malpractice_claim_policies]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-10'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['malpractice_information' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($malpractice_information),'malpractice_claims' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($malpractice_claims),'malpractice_claim_policies' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($malpractice_claim_policies)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-11','data' => ['currentMedicalEducation' => $current_medical_education]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-11'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['current_medical_education' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($current_medical_education)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-12','data' => ['professionalLiabilityClaim' => $professional_liability_claim]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-12'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['professional_liability_claim' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($professional_liability_claim)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                            </div>

                            <!-- Include optional progressbar HTML -->
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                        </div>

                    </div>

                </div>

                <input type="hidden" name="application_status" id="application_status" autocomplete="false" value="0">

            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <!-- Smart Wizard -->
    <script src="https://unpkg.com/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>

    <!-- jQuery Validate -->
    <script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/additional-methods.min.js')); ?>"></script>

    <script>
        var isApplicationSubmitted = <?php echo e(auth()->user()->application_status); ?>;

        $(".passwordToggle").on('click', function(event) {
            event.preventDefault();
            var passwordInput = $(this).data('input');
            if ($(passwordInput).attr("type") == "text") {
                $(passwordInput).attr('type', 'password');
                $(this).addClass("fa-eye-slash");
                $(this).removeClass("fa-eye");
            } else if ($(passwordInput).attr("type") == "password") {
                $(passwordInput).attr('type', 'text');
                $(this).removeClass("fa-eye-slash");
                $(this).addClass("fa-eye");
            }
        });

        function toggleAttachment(toggle) {
            if (toggle === 'yes') {
                $('#attachment-wrapper').show('slow');
                $("#attachment").rules("add", "required");
            } else {
                $('#attachment-wrapper').hide('slow');
                $("#attachment").rules("remove", "required");
            }
        }

        function cloneDiv(parent) {

            if (isApplicationSubmitted == 1) {
                return;
            }

            var currentIndex = $("." + parent).length;
            var originalDiv = $(`div.${parent}:first`);
            var parentDiv = originalDiv.parent();
            var newDiv = originalDiv.clone();
            newDiv.attr('id', `${parent}_${currentIndex}`);
            newDiv.find("input").val('');
            newDiv.find("select").find('option:eq(0)').prop('selected', true);
            newDiv.find("input").each(function() {
                var input_name = $(this).attr('name').substring(0, $(this).attr('name').indexOf('['));
                $(this).attr('name', input_name + '[' + currentIndex + ']');
            });
            newDiv.find("select").each(function() {
                var input_name = $(this).attr('name').substring(0, $(this).attr('name').indexOf('['));
                $(this).attr('name', input_name + '[' + currentIndex + ']');
            });

            // new

                    //  Update 'name' attributes for textarea fields
                    newDiv.find("textarea").each(function() {
                var textarea_name = $(this).attr('name').split('[')[0];
                $(this).attr('name', textarea_name + '[' + currentIndex + ']');
            });

            //

            newDiv.append(
                `<div class="col-md-12"><button type="button" class="btn btn-sm btn-danger-soft" onclick="removeDiv('#${parent}_${currentIndex}')"><i class="fe fe-x"></i>Remove</button></div><hr class="my-3">`
            );
            $(parentDiv).append(newDiv);
            $(".tab-content").height("auto");
        }

        function removeDiv(parent) {
            document.querySelector(parent).remove();
            $(".tab-content").height("auto");
        }

        $(function() {

            $("#primary_speciality option[value='<?php echo e($personal_information->primary_speciality); ?>']").attr(
                'selected', 'selected');
            $("#secondary_speciality option[value='<?php echo e($personal_information->secondary_speciality); ?>']").attr(
                'selected', 'selected');

            $.validator.addMethod("unique_email", function(value, element) {
                var parentForm = $(element).closest('form');
                var timeRepeated = 0;
                if (value != '') {
                    $(parentForm.find('.unique_email')).each(function() {
                        if ($(this).val() === value) {
                            timeRepeated++;
                        }
                    });
                }
                return timeRepeated === 1 || timeRepeated === 0;

            }, "Duplicate Email");

            $.validator.addMethod("unique_phone_no", function(value, element) {
                var parentForm = $(element).closest('form');
                var timeRepeated = 0;
                if (value != '') {
                    $(parentForm.find('.unique_phone_no')).each(function() {
                        if ($(this).val() === value) {
                            timeRepeated++;
                        }
                    });
                }
                return timeRepeated === 1 || timeRepeated === 0;

            }, "Duplicate Phone No");

            var $validator = $('#application_form').validate({
                errorPlacement: function(error, element) {
                    var placement = $(element).data('error');
                    if (placement) {
                        $(placement).append(error)
                    } else {
                        error.insertAfter(element);
                    }
                },
            });

            // SmartWizard initialize
            $('#smartwizard').smartWizard({
                enableUrlHash: false, // Enable selection of the step based on url hash
                autoAdjustHeight: true, // Automatically adjust content height
                keyboard: {
                    keyNavigation: false, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
                },
                toolbar: {
                    position: 'bottom', // none|top|bottom|both
                    showNextButton: true, // show/hide a Next button
                    showPreviousButton: true, // show/hide a Previous button
                    extraHtml: (isApplicationSubmitted == 0) ?
                        '<button class="btn sw-btn btn-submit" id="btn_submit" type="button">Save</button> <button class="btn sw-btn btn-danger" id="btn_submit_application" type="button" style="display:none">Submit Application</button>' :
                        '' // Extra html to show on toolbar
                },
                transition: {
                    animation: 'none', // Animation effect on navigation, none|fade|slideHorizontal|slideVertical|slideSwing|css(Animation CSS class also need to specify)
                },
            	// onShowStep: function(obj, context) {
            	// console.log(obj);
            	// if (context.toStep > context.fromStep) {
            	// // Scrolling to the top of the page
            	// $('#smartwizard').animate({
            	// scrollTop: 0
            	// }, 'slow');
            	// }
            	// },
                getContent: provideContent
            });

            $(".tab-content").height("auto");

            // Function to fetch the ajax content
            function provideContent(idx, stepDirection, stepPosition, selStep, callback) {

                if (isApplicationSubmitted == 0) {

                    var $valid = $("#application_form").valid();
                    if (!$valid) {
                        $validator.focusInvalid();
                        return false;
                    }

                }

                var btnSubmit = document.getElementById('btn_submit');

                // You can use stepDirection to get ajax content on the forward movement and stepPosition to identify the step position
                if (stepPosition == 'last') {
                    // btnSubmit.style.display = 'inline-block';
                    // btnSubmit.disabled = false;

                    $(".sw-btn-next").hide();

                    if (isApplicationSubmitted == 0) {

                        $("#btn_submit_application").show();
                        var $valid = $("#application_form").valid();
                        if (!$valid) {
                            $validator.focusInvalid();
                            return false;
                        }
                        $(btnSubmit).click(function() {
                            $('#application_form').submit();
                        });

                        $("#btn_submit_application").click(function() {
                            $("#application_status").val(1);
                            $("#signature").rules("add", "required");
                            $('#application_form').submit();
                        });

                    }

                } else {
                    // btnSubmit.style.display = 'none';
                    // btnSubmit.disabled = true;

                    $(".sw-btn-next").show();

                    if (isApplicationSubmitted == 0) {
                        $("#btn_submit_application").hide();
                        var $valid = $("#application_form").valid();
                        if (!$valid) {
                            $validator.focusInvalid();
                            return false;
                        }
                        $(btnSubmit).click(function() {
                            $('#application_form').submit();
                        });
                    }
                }

                // The callback must called in any case to procced the steps
                // The empty callback will not apply any dynamic contents to the steps
                callback();
            }
        
        	$("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
  				document.getElementById("smartwizard").scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"})
			});
        
        });

        function validateNumber(el) {
            return el.value = el.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1')
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/user/application/edit.blade.php ENDPATH**/ ?>