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

        /* new  */

        #notification-container {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1050;
        width: 300px;
    }

    .alert {
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        opacity: 0.85;
    }

    /* //  */


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

    <div id="notification-container"></div>

    <!-- SEARCH -->
    <section class="py-6">
        <div class="container">
            <form action="<?php echo e(route('application.store')); ?>" method="post" id="application_form"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-1','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-1'); ?>
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

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-2','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-2'); ?>
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

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-3','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-3'); ?>
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

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-4','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-4'); ?>
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

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-5','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-5'); ?>
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

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-6','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-6'); ?>
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

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-7','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-7'); ?>
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

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-8','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-8'); ?>
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

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-9','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-9'); ?>
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

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-10','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-10'); ?>
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

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-11','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-11'); ?>
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

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-12','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-12'); ?>
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

    <!--  this is testing code for saving user data every 10 seconds -->


<!--  this is testing code for saving user data on Server every 60 seconds  -->
<script>  

function populateRepeatingSections(wrapperClass, dataArray, cloneFunctionName) {
   
    // console.log('from populating repeat', dataArray)
   
    if (!Array.isArray(dataArray)) return;

    

    const wrapper = document.querySelector(`.${wrapperClass}`);
    if (!wrapper) {
        console.error(`Wrapper with class ${wrapperClass} not found.`);
        return;
    }

    // Clear existing extra sections except the first one
    const parent = wrapper.parentElement;
    parent.querySelectorAll(`.${wrapperClass}:not(:first-child)`).forEach((item) => item.remove());

    // Iterate over dataArray and populate fields
    dataArray.forEach((item, index) => {
        if (index > 0) {
            // Clone new sections for additional data
            window[cloneFunctionName](wrapperClass);
        }

        // Populate fields within the section
        Object.keys(item).forEach((key) => {
            const field = parent.querySelector(`[name="${key}[${index}]"]`);
            if (field) {
                if (field.tagName === 'SELECT') {
                    field.value = item[key] || ''; // Set the selected value for dropdowns
                } else {
                    field.value = item[key] || ''; // Set value or empty string if null/undefined
                }
            }
        });
    });
}


function fillFormData(data) {
    const form = document.querySelector('#application_form');

    if (!data || typeof data !== 'object') {
        console.error('Invalid data structure:', data);
        return; // Exit if data is null, undefined, or not an object
    }
    
    // Helper function to set a value in the form
    const setValue = (fieldName, value) => {
        const field = form.querySelector(`[name="${fieldName}"]`);
        if (field) {
            if (field.type === 'radio') {
                // Handle radio buttons
                const radioToCheck = form.querySelector(`[name="${fieldName}"][value="${value}"]`);
                if (radioToCheck) {
                    radioToCheck.checked = true;
                }
            } else if (field.type === 'checkbox') {
                // Handle checkboxes
                field.checked = !!value; // Convert truthy/falsy to boolean
            } else {
                // Handle other input types
                // console.log(`Setting field: ${fieldName} to value: ${value}`);
                field.value = value || ''; // Set value or empty string if null/undefined
            }
        }
    };

    //

    // Board Certification certificate_wrapper_item   board_certifications
    if(data.board_certifications){
        populateRepeatingSections('certificate_wrapper_item', data.board_certifications, 'cloneDiv')
    }

    // Populate licensing sections
    if (data.licensing) {
        populateRepeatingSections('licensing_wrapper_item', data.licensing, 'cloneDiv');
    }

    // Populate federal DEA sections
    if (data.dea_substances) {
        populateRepeatingSections('licensing_dea_wrapper_item', data.dea_substances, 'cloneDiv');
    }

    // Work History Section row work_history_wrapper_item    work_history


    if(data.work_history){
        populateRepeatingSections('work_history_wrapper_item', data.work_history, 'cloneDiv');
    }


    // HOSPITAL AND AFFILIATIONS   hospital_affiliation_wrapper_item

    if(data.hospital_and_affiliations){
        populateRepeatingSections('hospital_affiliation_wrapper_item', data.hospital_and_affiliations, 'cloneDiv');
    }

    // Credentialing Application Explanation Form   row explanation_wrapper_item credentialing_application_form
    if(data.credentialing_application_form){
        populateRepeatingSections('explanation_wrapper_item', data.credentialing_application_form, 'cloneDiv');
    }

    //  Malpractice Information   row insurance_claim_wrapper_item  malpractice_claims
    if(data.malpractice_claims){
        populateRepeatingSections('insurance_claim_wrapper_item', data.malpractice_claims, 'cloneDiv');
    }

    // Malpractice Information row additional_insurance_claim_wrapper_item   malpractice_claim_policies
    if(data.malpractice_claim_policies){
        populateRepeatingSections('additional_insurance_claim_wrapper_item', data.malpractice_claim_policies, 'cloneDiv');
    }

    // Current Continuing Medical Education current_medical_education_wrapper_item   current_medical_education
    if(data.current_medical_education){
        populateRepeatingSections('current_medical_education_wrapper_item', data.current_medical_education, 'cloneDiv');
    }
    //

    //Iterate over the main keys of the data
    Object.keys(data).forEach((section) => {
        const sectionData = data[section];

        // console.log(sectionData)

        if (typeof sectionData === 'object' && !Array.isArray(sectionData)) {
            // Handle nested objects like `personal_information`
            Object.keys(sectionData).forEach((key) => {
                // console.log(key);
                setValue(`${key}`, sectionData[key]);
            });
        } else if (Array.isArray(sectionData)) {
            // Handle arrays like `board_certifications`
            sectionData.forEach((item, index) => {
                Object.keys(item).forEach((key) => {
                    // console.log('From Section array',key);
                    // console.log(`From Section array value of key ${key} to  item[key] ${item[key]}`);
                    setValue(`${key}`, item[key]);
                });
            });
        } else {
            // For primitive fields (if any at the root level)
            setValue(section, sectionData);
        }
    });


    // degree feild check

//     const degreeField = document.querySelector('[name="degree"]');
// console.log('Degree field:', degreeField);




setTimeout(() => {
    const field = document.querySelector('[name="et_degree"]');
    if (field) {
        
        field.value = data.education_and_training.degree; 
        // field.value = 'MD'; 
        // console.log('Value after manual set:', field.value);
    } else {
        console.error('Degree field not found in DOM');
    }
}, 1000);


//

    
        
        // if(data.education_and_training.degree){
        //     setTimeout(() => {
        //         console.log('From the if innnnnnnnnnnn',data.education_and_training.degree)
        // const field = form.querySelector(`[name="et_degree"]`);
        // field.value = data.education_and_training.degree;
        //     }, 1000);
            
        // }
        

        
    

    // console.log('from  fiill form',data);
}



function loadFormData() {
    const form = document.querySelector('#application_form');
    if (!form) {
        console.error("Form not found!");
        return;
    }
    
    const formFields = form.elements;
    // console.log('Page is being loaded');
    
    fetch("/save-form-data", {
        method: "GET",
        headers: {
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest" // Ensure it's recognized as AJAX
        },
    })
    .then((response) => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then((data) => {
        // console.log("Response Data:", data);
        const savedData = data; // Use response data directly

        if (savedData) {
            fillFormData(savedData);
        }
    })
    .catch((error) => {
        console.error("Error fetching data:", error);
    });
}

$(document).ready(function() {
    loadFormData(); // Call function to load saved data when the page is ready
});


document.addEventListener("DOMContentLoaded", function() {  
    const form = document.querySelector('#application_form');
    const formFields = form.elements;
    const saveInterval = 60000;

    // restore the data on refresh to set data on page refresh
    

    // send the data every 20 seconds
    setInterval(saveFormData, saveInterval);

    function saveFormData() {
        // console.log('every 20 seconds')
        const formData = {};
        Array.from(formFields).forEach(field => {
            if (field.type === "radio") {
                // Store the selected radio button's value
                if (field.checked) {
                    formData[field.name] = field.value;
                }
            } else if (field.name) {
                // Store other field types (like text, textarea)
                formData[field.name] = field.value;
            }
        });
        
        $.ajax({
            url: '<?php echo e(route('application.save')); ?>',
            method: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' 
            },
            success: function (response) {
                console.log('Form data saved successfully:', response);

                //new
                // Check if there's a message in the response
        if (response.message) {
            showNotification(response.message, 'success');
        }
        //
            },
            error: function (error) {
                console.error('Error saving form data:', error);


                // new
                showNotification('Failed to save form data.', 'error');
                //new


            }
        });
    }


    

    //new

    function showNotification(message, type = 'success') {
    let alertClass = type === 'success' ? 'alert-success' : 'alert-danger';

    // Create a dynamic alert
    let alertBox = `<div class="alert ${alertClass} alert-dismissible fade show" role="alert">
                        ${message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;

    // Append it to the body or a specific container
    $('#notification-container').html(alertBox);

    // Auto-hide after 3 seconds
    setTimeout(() => {
        $('.alert').alert('close');
    }, 3000);
}

// new



})
    </script> 
<!--  this is testing code for saving user data on Server every 60 seconds  -->



<!--  this is testing code for saving user data every 10 seconds -->




    <script>
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
                    extraHtml: '<button class="btn sw-btn btn-submit" id="btn_submit" type="button">Save</button> <button class="btn sw-btn btn-danger" id="btn_submit_application" type="button" style="display:none">Submit Application</button>' // Extra html to show on toolbar
                },
                transition: {
                    animation: 'none', // Animation effect on navigation, none|fade|slideHorizontal|slideVertical|slideSwing|css(Animation CSS class also need to specify)
                },
            	// onShowStep: function(obj, context) {
            	// console.log(obj);
            	// if (context.toStep > context.fromStep) {
            	// // Scrolling to the top of the page
            	// $('html, body').animate({
            	// scrollTop: 0
            	// }, 'slow');
            	// }
            	// },
                getContent: provideContent
            });

            $(".tab-content").height("auto");

            // Function to fetch the ajax content
            function provideContent(idx, stepDirection, stepPosition, selStep, callback) {

                var $valid = $("#application_form").valid();
                if (!$valid) {
                    $validator.focusInvalid();
                    return false;
                }

                var btnSubmit = document.getElementById('btn_submit');

                // You can use stepDirection to get ajax content on the forward movement and stepPosition to identify the step position
                if (stepPosition == 'last') {
                    // btnSubmit.style.display = 'inline-block';
                    // btnSubmit.disabled = false;
                    $(".sw-btn-next").hide();
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
                } else {
                    // btnSubmit.style.display = 'none';
                    // btnSubmit.disabled = true;
                    $(".sw-btn-next").show();
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

                // The callback must called in any case to procced the steps
                // The empty callback will not apply any dynamic contents to the steps
                callback();
            }

            // var timer = setInterval(function() {
            //     ajaxSubmit($("#application_form"));
            // }, 10000);

            // function ajaxSubmit(form) {
            //     $.ajax({
            //         type: form.attr('method'), // <-- get method of form
            //         url: form.attr('action'), // <-- get action of form
            //         data: form.serialize(),
            //         success: function(response) {
            //             iziToast.success({
            //                 title: response.message,
            //                 position: "topRight",
            //             });
            //         }
            //     });
            // }
        
        	$("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
  				document.getElementById("smartwizard").scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"})
			});

        });

        // (function worker() {
        //     var secs = 5;
        //     var form = $("#application_form");
        //     $.ajax({
        //         url: form.attr('action'),
        //         type: form.attr('method'),
        //         data: form.serialize(),
        //         success: function(response) {
        //             // iziToast.success({
        //             //     title: response.message,
        //             //     position: "topRight",
        //             // });
        //         },
        //         complete: function() {
        //             // Schedule the next request when the current one's complete
        //             setTimeout(worker, secs * 1000);
        //         }
        //     });
        // })();

        function validateNumber(el) {
            return el.value = el.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1')
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/user/application/create.blade.php ENDPATH**/ ?>