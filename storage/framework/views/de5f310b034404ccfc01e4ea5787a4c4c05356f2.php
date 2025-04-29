

<?php $__env->startSection('title', 'Edit Application'); ?>

<?php $__env->startSection('styles'); ?>
    <link href="https://printjs-4de6.kxcdn.com/print.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['title' => 'Edit Application']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Edit Application']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <div class="row">

        <div class="col-lg-12">

            <div class="card">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mt-0 header-title mb-3">Edit Application</h4>
                    </div>

                    <div class="row" id="print_form">

                        <form action="<?php echo e(route('admin.users.update', $user)); ?>" method="post"
                            enctype="multipart/form-data">

                            <?php echo csrf_field(); ?>

                            <div class="col-12 mb-3 pb-5 border-0">

                                <section id="step-1" class="personal-information mb-5" role="tabpanel"
                                    aria-labelledby="step-1">
                                    <div class="card border border-dark rounded">
                                        <div class="card-header bg-gray-200 border-bottom border-dark font-weight-bold">
                                            Personal Information
                                        </div>
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="first_name" class="form-label">First Name</label>
                                                    <input id="first_name" name="first_name" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->first_name); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="suffix" class="form-label">Suffix (Jr. Sr. III)</label>
                                                    <input id="suffix" name="suffix" type="text" class="form-control"
                                                        value="<?php echo e($personal_information->suffix); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="last_name" class="form-label">Last Name</label>
                                                    <input id="last_name" name="last_name" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->last_name); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="middle_name" class="form-label">Middle</label>
                                                    <input id="middle_name" name="middle_name" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->middle_name); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group d-none">
                                                    <label for="degree" class="form-label">Degree</label>
                                                    <input id="degree" name="degree" type="text" class="form-control"
                                                        value="<?php echo e($personal_information->degree); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="social_security_number" class="form-label">Social Security
                                                        Number</label>
                                                    <input id="social_security_number" name="social_security_number"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($personal_information->social_security_number); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="home_address" class="form-label">Home Address</label>
                                                    <input id="home_address" name="home_address" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->home_address); ?>" required />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="home_phone_number" class="form-label">Home Phone
                                                        Number</label>
                                                    <input id="home_phone_number" name="home_phone_number" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->home_phone_number); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="city" class="form-label">City</label>
                                                    <input id="city" name="city" type="text" class="form-control"
                                                        value="<?php echo e($personal_information->city); ?>" required />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="state" class="form-label">State</label>
                                                    <input id="state" name="state" type="text"
                                                        class="form-control" value="<?php echo e($personal_information->state); ?>"
                                                        required />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="zip_code" class="form-label">Zip code</label>
                                                    <input id="zip_code" name="zip_code" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->zip_code); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="cell_phone_number" class="form-label">Cell Phone
                                                        Number</label>
                                                    <input id="cell_phone_number" name="cell_phone_number" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->cell_phone_number); ?>" required />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="office_address" class="form-label">Office Address</label>
                                                    <input id="office_address" name="office_address" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->office_address); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="office_phone_number" class="form-label">Office Phone
                                                        Number</label>
                                                    <input id="office_phone_number" name="office_phone_number"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($personal_information->office_phone_number); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="office_city" class="form-label">City</label>
                                                    <input id="office_city" name="office_city" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->office_city); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="office_state" class="form-label">State</label>
                                                    <input id="office_state" name="office_state" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->office_state); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="office_zip_code" class="form-label">Zip code</label>
                                                    <input id="office_zip_code" name="office_zip_code" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->office_zip_code); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="email_address" class="form-label">Email Address</label>
                                                    <input id="email_address" name="email_address" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->email_address); ?>" required />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="citizenship" class="form-label">Citizenship</label>
                                                    <input id="citizenship" name="citizenship" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->citizenship); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="birth_place" class="form-label">Birthplace</label>
                                                    <input id="birth_place" name="birth_place" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->birth_place); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="birth_date" class="form-label">Date of Birth</label>
                                                    <input id="birth_date" name="birth_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->birth_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="primary_speciality" class="form-label">
                                                        Primary
                                                        Speciality
                                                    </label>
                                                    <select class="form-control" id="primary_speciality"
                                                        name="primary_speciality">
                                                        <option value="">Select Your Specialty</option>
                                                        <option value="Addiction-Psychiatry">Addiction-Psychiatry</option>
                                                        <option value="Allergy-and-Immunology">Allergy-and-Immunology
                                                        </option>
                                                        <option value="Anesthesiology">Anesthesiology</option>
                                                        <option value="Cardiology">Cardiology</option>
                                                        <option value="Cardiovascular-Surgery">Cardiovascular-Surgery
                                                        </option>
                                                        <option value="Child-and-Adolescent-Psychiatry">
                                                            Child-and-Adolescent-Psychiatry</option>
                                                        <option value="Colon-and-Rectal-Surgery">Colon-and-Rectal-Surgery
                                                        </option>
                                                        <option value="Critical-Care-Medicine">Critical-Care-Medicine
                                                        </option>
                                                        <option value="Emergency-Medicine">Emergency-Medicine</option>
                                                        <option value="Endocrinology">Endocrinology</option>
                                                        <option value="Family-Practice">Family-Practice</option>
                                                        <option value="General-Surgery">General-Surgery</option>
                                                        <option value="Geriatric-Medicine">Geriatric-Medicine</option>
                                                        <option value="Gynecologic-Oncology">Gynecologic-Oncology</option>
                                                        <option value="Hematology">Hematology</option>
                                                        <option value="Hematology-Oncology">Hematology-Oncology</option>
                                                        <option value="Hospitalist">Hospitalist</option>
                                                        <option value="Infectious-Disease">Infectious-Disease</option>
                                                        <option value="Internal-Medicine">Internal-Medicine</option>
                                                        <option value="Internal-Medicine-Pediatrics">
                                                            Internal-Medicine-Pediatrics
                                                        </option>
                                                        <option value="Internal-Medicine-Gastroenterology">
                                                            Internal-Medicine-Gastroenterology
                                                        </option>
                                                        <option value="Interventional-Radiology">Interventional-Radiology
                                                        </option>
                                                        <option value="Maternal-Fetal-Medicine-Perinatology">
                                                            Maternal-Fetal-Medicine-Perinatology
                                                        </option>
                                                        <option value="Medical-Oncology">Medical-Oncology</option>
                                                        <option value="Neonatology">Neonatology</option>
                                                        <option value="Nephrology">Nephrology</option>
                                                        <option value="Neurological-Surgery">Neurological-Surgery</option>
                                                        <option value="Neurology">Neurology</option>
                                                        <option value="Obstetrics-and-Gynecology">Obstetrics-and-Gynecology
                                                        </option>
                                                        <option value="Oncology">Oncology</option>
                                                        <option value="Orthopedic-Surgery">Orthopedic-Surgery</option>
                                                        <option value="Otolaryngology - ENT">Otolaryngology - ENT</option>
                                                        <option value="Pathology">Pathology</option>
                                                        <option value="Pediatric-Anesthesiology">Pediatric-Anesthesiology
                                                        </option>
                                                        <option value="Pediatric-Cardiology">Pediatric-Cardiology</option>
                                                        <option value="Pediatric-Critical-Care-Medicine">
                                                            Pediatric-Critical-Care-Medicine
                                                        </option>
                                                        <option value="Pediatric-Emergency-Medicine">
                                                            Pediatric-Emergency-Medicine
                                                        </option>
                                                        <option value="Pediatric-Endocrinology">Pediatric-Endocrinology
                                                        </option>
                                                        <option value="Pediatric-Hematology-Oncology">
                                                            Pediatric-Hematology-Oncology
                                                        </option>
                                                        <option value="Pediatric-Hospitalist">Pediatric-Hospitalist
                                                        </option>
                                                        <option value="Pediatric-Infectious-Disease">
                                                            Pediatric-Infectious-Disease
                                                        </option>
                                                        <option value="Pediatric-Medical-Genetics">
                                                            Pediatric-Medical-Genetics</option>
                                                        <option value="Pediatric-Nephrology">Pediatric-Nephrology</option>
                                                        <option value="Pediatric-Neurology">Pediatric-Neurology</option>
                                                        <option value="Pediatric-Pathology">Pediatric-Pathology</option>
                                                        <option value="Pediatric-Pulmonology">Pediatric-Pulmonology
                                                        </option>
                                                        <option value="Pediatric-Radiology">Pediatric-Radiology</option>
                                                        <option value="Pediatric-Surgery">Pediatric-Surgery</option>
                                                        <option value="Pediatric-Urology">Pediatric-Urology</option>
                                                        <option value="Pediatrics">Pediatrics</option>
                                                        <option value="Plastic-Surgery">Plastic-Surgery</option>
                                                        <option value="Psychiatry">Psychiatry</option>
                                                        <option value="Pulmonary">Pulmonary</option>
                                                        <option value="Radiation-Oncology">Radiation-Oncology</option>
                                                        <option value="Radiology">Radiology</option>
                                                        <option value="Rheumatology">Rheumatology</option>
                                                        <option value="Surgical-Critical-Care">Surgical-Critical-Care
                                                        </option>
                                                        <option value="Surgical-Oncology">Surgical-Oncology</option>
                                                        <option value="Thoracic-Surgery">Thoracic-Surgery</option>
                                                        <option value="Trauma-Surgery">Trauma-Surgery</option>
                                                        <option value="Urgent-Care-Medicine">Urgent-Care-Medicine</option>
                                                        <option value="Urology">Urology</option>
                                                        <option value="Vascular-Surgery">Vascular-Surgery</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="secondary_speciality" class="form-label">
                                                        Secondary
                                                        Speciality
                                                    </label>
                                                    <select class="form-control" id="secondary_speciality"
                                                        name="secondary_speciality">
                                                        <option value="">Select Your Specialty</option>
                                                        <option value="Addiction-Psychiatry">Addiction-Psychiatry</option>
                                                        <option value="Allergy-and-Immunology">Allergy-and-Immunology
                                                        </option>
                                                        <option value="Anesthesiology">Anesthesiology</option>
                                                        <option value="Cardiology">Cardiology</option>
                                                        <option value="Cardiovascular-Surgery">Cardiovascular-Surgery
                                                        </option>
                                                        <option value="Child-and-Adolescent-Psychiatry">
                                                            Child-and-Adolescent-Psychiatry</option>
                                                        <option value="Colon-and-Rectal-Surgery">Colon-and-Rectal-Surgery
                                                        </option>
                                                        <option value="Critical-Care-Medicine">Critical-Care-Medicine
                                                        </option>
                                                        <option value="Emergency-Medicine">Emergency-Medicine</option>
                                                        <option value="Endocrinology">Endocrinology</option>
                                                        <option value="Family-Practice">Family-Practice</option>
                                                        <option value="General-Surgery">General-Surgery</option>
                                                        <option value="Geriatric-Medicine">Geriatric-Medicine</option>
                                                        <option value="Gynecologic-Oncology">Gynecologic-Oncology</option>
                                                        <option value="Hematology">Hematology</option>
                                                        <option value="Hematology-Oncology">Hematology-Oncology</option>
                                                        <option value="Hospitalist">Hospitalist</option>
                                                        <option value="Infectious-Disease">Infectious-Disease</option>
                                                        <option value="Internal-Medicine">Internal-Medicine</option>
                                                        <option value="Internal-Medicine-Pediatrics">
                                                            Internal-Medicine-Pediatrics
                                                        </option>
                                                        <option value="Internal-Medicine-Gastroenterology">
                                                            Internal-Medicine-Gastroenterology
                                                        </option>
                                                        <option value="Interventional-Radiology">Interventional-Radiology
                                                        </option>
                                                        <option value="Maternal-Fetal-Medicine-Perinatology">
                                                            Maternal-Fetal-Medicine-Perinatology
                                                        </option>
                                                        <option value="Medical-Oncology">Medical-Oncology</option>
                                                        <option value="Neonatology">Neonatology</option>
                                                        <option value="Nephrology">Nephrology</option>
                                                        <option value="Neurological-Surgery">Neurological-Surgery</option>
                                                        <option value="Neurology">Neurology</option>
                                                        <option value="Obstetrics-and-Gynecology">Obstetrics-and-Gynecology
                                                        </option>
                                                        <option value="Oncology">Oncology</option>
                                                        <option value="Orthopedic-Surgery">Orthopedic-Surgery</option>
                                                        <option value="Otolaryngology - ENT">Otolaryngology - ENT</option>
                                                        <option value="Pathology">Pathology</option>
                                                        <option value="Pediatric-Anesthesiology">Pediatric-Anesthesiology
                                                        </option>
                                                        <option value="Pediatric-Cardiology">Pediatric-Cardiology</option>
                                                        <option value="Pediatric-Critical-Care-Medicine">
                                                            Pediatric-Critical-Care-Medicine
                                                        </option>
                                                        <option value="Pediatric-Emergency-Medicine">
                                                            Pediatric-Emergency-Medicine
                                                        </option>
                                                        <option value="Pediatric-Endocrinology">Pediatric-Endocrinology
                                                        </option>
                                                        <option value="Pediatric-Hematology-Oncology">
                                                            Pediatric-Hematology-Oncology
                                                        </option>
                                                        <option value="Pediatric-Hospitalist">Pediatric-Hospitalist
                                                        </option>
                                                        <option value="Pediatric-Infectious-Disease">
                                                            Pediatric-Infectious-Disease
                                                        </option>
                                                        <option value="Pediatric-Medical-Genetics">
                                                            Pediatric-Medical-Genetics</option>
                                                        <option value="Pediatric-Nephrology">Pediatric-Nephrology</option>
                                                        <option value="Pediatric-Neurology">Pediatric-Neurology</option>
                                                        <option value="Pediatric-Pathology">Pediatric-Pathology</option>
                                                        <option value="Pediatric-Pulmonology">Pediatric-Pulmonology
                                                        </option>
                                                        <option value="Pediatric-Radiology">Pediatric-Radiology</option>
                                                        <option value="Pediatric-Surgery">Pediatric-Surgery</option>
                                                        <option value="Pediatric-Urology">Pediatric-Urology</option>
                                                        <option value="Pediatrics">Pediatrics</option>
                                                        <option value="Plastic-Surgery">Plastic-Surgery</option>
                                                        <option value="Psychiatry">Psychiatry</option>
                                                        <option value="Pulmonary">Pulmonary</option>
                                                        <option value="Radiation-Oncology">Radiation-Oncology</option>
                                                        <option value="Radiology">Radiology</option>
                                                        <option value="Rheumatology">Rheumatology</option>
                                                        <option value="Surgical-Critical-Care">Surgical-Critical-Care
                                                        </option>
                                                        <option value="Surgical-Oncology">Surgical-Oncology</option>
                                                        <option value="Thoracic-Surgery">Thoracic-Surgery</option>
                                                        <option value="Trauma-Surgery">Trauma-Surgery</option>
                                                        <option value="Urgent-Care-Medicine">Urgent-Care-Medicine</option>
                                                        <option value="Urology">Urology</option>
                                                        <option value="Vascular-Surgery">Vascular-Surgery</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="present_position" class="form-label">Title</label>
                                                    <input id="present_position" name="present_position" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->present_position); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="npi" class="form-label">NPI #</label>
                                                    <input id="npi" name="npi" type="text"
                                                        class="form-control" value="<?php echo e($personal_information->npi); ?>"
                                                        required />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="medicare" class="form-label">Medicare #</label>
                                                    <input id="medicare" name="medicare" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->medicare); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="upin" class="form-label">UPIN #</label>
                                                    <input id="upin" name="upin" type="text"
                                                        class="form-control" value="<?php echo e($personal_information->upin); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="fed_tax_id" class="form-label">Fed Tax ID</label>
                                                    <input id="fed_tax_id" name="fed_tax_id" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->fed_tax_id); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="medicaid" class="form-label">Medicaid #</label>
                                                    <input id="medicaid" name="medicaid" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->medicaid); ?>" />
                                                </div>

                                                <div class="col-md-12 form-group mb-3">
                                                    <p class="col-md-12 text-muted mb-0">
                                                        Please provide the name and address
                                                        of a secondary contact e.g. spouse
                                                    </p>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="contact_name" class="form-label">Contact Name and
                                                        Phone</label>
                                                    <input id="contact_name" name="contact_name" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->contact_name); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="contact_address" class="form-label">Contact
                                                        Address</label>
                                                    <input id="contact_address" name="contact_address" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($personal_information->contact_address); ?>" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="step-2" class="education-and-training mb-5" role="tabpanel"
                                    aria-labelledby="step-2">
                                    <div class="card border border-dark rounded">
                                        <div class="card-header bg-gray-200 border-bottom border-dark font-weight-bold">
                                            Education And Training
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="medical_school"
                                                        class="form-label font-weight-bold">Medical
                                                        School</label>
                                                    <input id="medical_school" name="medical_school" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->medical_school); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="degree" class="form-label">Degree (MD, DO)</label>
                                                    <input id="degree" name="degree" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->degree); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="start_date" class="form-label">Start Date</label>
                                                    <input id="start_date" name="start_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->start_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="end_date" class="form-label">End Date</label>
                                                    <input id="end_date" name="end_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->end_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="e_city" class="form-label">City</label>
                                                    <input id="e_city" name="e_city" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->e_city); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="e_state" class="form-label">State</label>
                                                    <input id="e_state" name="e_state" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->e_state); ?>" />
                                                </div>

                                                <hr class="my-3">

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="internship_training_name" class="form-label">
                                                        Internship Facility Name
                                                    </label>
                                                    <input id="internship_training_name" name="internship_training_name"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($education_and_training->internship_training_name); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="internship_training_city" class="form-label">City</label>
                                                    <input id="internship_training_city" name="internship_training_city"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($education_and_training->internship_training_city); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="internship_training_state"
                                                        class="form-label">State</label>
                                                    <input id="internship_training_state" name="internship_training_state"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($education_and_training->internship_training_state); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="internship_training_start_date" class="form-label">Start
                                                        Date</label>
                                                    <input id="internship_training_start_date"
                                                        name="internship_training_start_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->internship_training_start_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="internship_training_end_date" class="form-label">End
                                                        Date</label>
                                                    <input id="internship_training_end_date"
                                                        name="internship_training_end_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->internship_training_end_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="category_of_training" class="form-label">Category of
                                                        Training</label>
                                                    <input id="category_of_training" name="category_of_training"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($education_and_training->category_of_training); ?>" />
                                                </div>

                                                <hr class="my-3">

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="residency_training_name" class="form-label">Residency
                                                        Training --
                                                        Facility Name </label>
                                                    <input id="residency_training_name" name="residency_training_name"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($education_and_training->residency_training_name); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="residency_training_city" class="form-label">City</label>
                                                    <input id="residency_training_city" name="residency_training_city"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($education_and_training->residency_training_city); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="residency_training_state" class="form-label">State</label>
                                                    <input id="residency_training_state" name="residency_training_state"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($education_and_training->residency_training_state); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="residency_training_start_date" class="form-label">Start
                                                        Date</label>
                                                    <input id="residency_training_start_date"
                                                        name="residency_training_start_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->residency_training_start_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="residency_training_end_date" class="form-label">End
                                                        Date</label>
                                                    <input id="residency_training_end_date"
                                                        name="residency_training_end_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->residency_training_end_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="residency_training_speciality"
                                                        class="form-label">Specialty</label>
                                                    <input id="residency_training_speciality"
                                                        name="residency_training_speciality" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->residency_training_speciality); ?>" />
                                                </div>

                                                <hr class="my-3">

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="fellowship_training_name" class="form-label">Fellowship
                                                        Training --
                                                        Facility Name </label>
                                                    <input id="fellowship_training_name" name="fellowship_training_name"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($education_and_training->fellowship_training_name); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="fellowship_training_city" class="form-label">City</label>
                                                    <input id="fellowship_training_city" name="fellowship_training_city"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($education_and_training->fellowship_training_city); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="fellowship_training_state"
                                                        class="form-label">State</label>
                                                    <input id="fellowship_training_state" name="fellowship_training_state"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($education_and_training->fellowship_training_state); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="fellowship_training_start_date" class="form-label">Start
                                                        Date</label>
                                                    <input id="fellowship_training_start_date"
                                                        name="fellowship_training_start_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->fellowship_training_start_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="fellowship_training_end_date" class="form-label">End
                                                        Date</label>
                                                    <input id="fellowship_training_end_date"
                                                        name="fellowship_training_end_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->fellowship_training_end_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="fellowship_training_speciality"
                                                        class="form-label">Specialty</label>
                                                    <input id="fellowship_training_speciality"
                                                        name="fellowship_training_speciality" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->fellowship_training_speciality); ?>" />
                                                </div>

                                                <hr class="my-3">

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="additional_training_name" class="form-label">Additional
                                                        Training --
                                                        Facility Name </label>
                                                    <input id="additional_training_name" name="additional_training_name"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($education_and_training->additional_training_name); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="additional_training_city" class="form-label">City</label>
                                                    <input id="additional_training_city" name="additional_training_city"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($education_and_training->additional_training_city); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="additional_training_state"
                                                        class="form-label">State</label>
                                                    <input id="additional_training_state" name="additional_training_state"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($education_and_training->additional_training_state); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="additional_training_start_date" class="form-label">Start
                                                        Date</label>
                                                    <input id="additional_training_start_date"
                                                        name="additional_training_start_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->additional_training_start_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="additional_training_end_date" class="form-label">End
                                                        Date</label>
                                                    <input id="additional_training_end_date"
                                                        name="additional_training_end_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->additional_training_end_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="additional_training_category" class="form-label">Category
                                                        of
                                                        Training </label>
                                                    <input id="additional_training_category"
                                                        name="additional_training_category" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($education_and_training->additional_training_category); ?>" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="step-3" class="board-certifications mb-5" role="tabpanel"
                                    aria-labelledby="step-3">
                                    <div class="card border border-dark rounded">
                                        <div class="card-header bg-gray-200 border-bottom border-dark font-weight-bold">
                                            Board Certification
                                        </div>
                                        <div class="card-body">

                                            <div class="row">

                                                <div class="col-md-12 mb-3 form-group">
                                                    <label for="board_certified" class="form-label me-3">
                                                        Are you currently board certified?
                                                    </label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="board_certified" id="board_certified_yes"
                                                            value="yes"
                                                            <?php echo e($board_certifications[0]->board_certified == 'yes' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label"
                                                            for="board_certified_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="board_certified" id="board_certified_no" value="no"
                                                            <?php echo e($board_certifications[0]->board_certified == 'no' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label"
                                                            for="board_certified_no">No</label>
                                                    </div>
                                                </div>

                                                <p class="col-md-12">List all current and past board certifications :</p>

                                                <div class="col-md-12" id="certificate_wrapper">

                                                    <?php $__currentLoopData = $board_certifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $board_certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="row certificate_wrapper_item">

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Name of issuing board
                                                                </label>
                                                                <input name="issuing_board[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($board_certificate->issuing_board); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Specialty
                                                                </label>
                                                                <input
                                                                    name="issuing_board_speciality[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($board_certificate->issuing_board_speciality); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Date Certified
                                                                </label>
                                                                <input
                                                                    name="issuing_board_certified_date[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($board_certificate->issuing_board_certified_date); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Date Recertified
                                                                </label>
                                                                <input
                                                                    name="issuing_board_recertified_date[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($board_certificate->issuing_board_recertified_date); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Expiration Date (if any)
                                                                </label>
                                                                <input
                                                                    name="issuing_board_expiration_date[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($board_certificate->issuing_board_expiration_date); ?>" />
                                                            </div>

                                                        </div>

                                                        <hr class="my-3">
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </div>

                                                <div class="clearfix mb-3 col-md-12">
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        onclick="cloneDiv('certificate_wrapper_item')">
                                                        <i class="fe fe-plus"></i>
                                                        Add
                                                    </button>
                                                </div>

                                                <p class="col-md-12 my-3">
                                                    Please answer the following questions. Attach explanation form(s) if
                                                    necessary.
                                                </p>

                                                <div class="col-md-12 mb-3 form-group">
                                                    <label for="examined_board" class="form-label me-3">
                                                        A. Have you ever been examined by any specialty board, but failed to
                                                        pass? If
                                                        yes,
                                                        please provide name of board(s) and date(s):
                                                    </label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="examined_board" id="examined_board_yes" value="yes"
                                                            <?php echo e($board_certificate->examined_board == 'yes' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label"
                                                            for="examined_board_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="examined_board" id="examined_board_no" value="no"
                                                            <?php echo e($board_certificate->examined_board == 'no' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label" for="examined_board_no">No</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="examined_board_name" class="form-label">
                                                        Board Name
                                                    </label>
                                                    <input id="examined_board_name" name="examined_board_name"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($board_certificate->examined_board_name); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="examined_board_date" class="form-label">
                                                        Date
                                                    </label>
                                                    <input id="examined_board_date" name="examined_board_date"
                                                        type="date" class="form-control"
                                                        value="<?php echo e($board_certificate->examined_board_date); ?>" />
                                                </div>

                                                <div class="col-md-12 mb-3 form-group">
                                                    <label for="certified_board" class="form-label me-3">
                                                        B. If you are not currently certified, have you applied for the
                                                        certification
                                                        examination? If yes, please provide date
                                                        you will sit for exam.
                                                    </label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="certified_board" id="certified_board_yes"
                                                            value="yes"
                                                            <?php echo e($board_certificate->certified_board == 'yes' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label"
                                                            for="certified_board_yes">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="certified_board" id="certified_board_no" value="no"
                                                            <?php echo e($board_certificate->certified_board == 'no' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label"
                                                            for="certified_board_no">No</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="certified_board_date" class="form-label">
                                                        Date
                                                    </label>
                                                    <input id="certified_board_date" name="certified_board_date"
                                                        type="date" class="form-control"
                                                        value="<?php echo e($board_certificate->certified_board_date); ?>" />
                                                </div>

                                                <div class="clearfix"></div>

                                                <p class="col-md-12 mt-3 font-weight-bold">Clinical Certification</p>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="bls_certification" class="form-label">
                                                        BLS Certification
                                                    </label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="bls_certification" id="bls_certification_yes"
                                                                value="yes"
                                                                <?php echo e($board_certificate->bls_certification == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="bls_certification_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="bls_certification" id="bls_certification_no"
                                                                value="no"
                                                                <?php echo e($board_certificate->bls_certification == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="bls_certification_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="bls_certification_expiration_date" class="form-label">
                                                        Expiration Date
                                                    </label>
                                                    <input id="bls_certification_expiration_date"
                                                        name="bls_certification_expiration_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($board_certificate->bls_certification_expiration_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="acls_certification" class="form-label">
                                                        ACLS Certification
                                                    </label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="acls_certification" id="acls_certification_yes"
                                                                value="yes"
                                                                <?php echo e($board_certificate->acls_certification == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="acls_certification_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="acls_certification" id="acls_certification_no"
                                                                value="no"
                                                                <?php echo e($board_certificate->acls_certification == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="acls_certification_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="acls_certification_expiration_date" class="form-label">
                                                        Expiration Date
                                                    </label>
                                                    <input id="acls_certification_expiration_date"
                                                        name="acls_certification_expiration_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($board_certificate->acls_certification_expiration_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="atls_certification" class="form-label">
                                                        ATLS Certification
                                                    </label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="atls_certification" id="atls_certification_yes"
                                                                value="yes"
                                                                <?php echo e($board_certificate->atls_certification == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="atls_certification_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="atls_certification" id="atls_certification_no"
                                                                value="no"
                                                                <?php echo e($board_certificate->atls_certification == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="atls_certification_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="atls_certification_expiration_date" class="form-label">
                                                        Expiration Date
                                                    </label>
                                                    <input id="atls_certification_expiration_date"
                                                        name="atls_certification_expiration_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($board_certificate->atls_certification_expiration_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="pals_certification" class="form-label">
                                                        PALS Certification
                                                    </label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="pals_certification" id="pals_certification_yes"
                                                                value="yes"
                                                                <?php echo e($board_certificate->pals_certification == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="pals_certification_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="pals_certification" id="pals_certification_no"
                                                                value="no"
                                                                <?php echo e($board_certificate->pals_certification == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="pals_certification_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="pals_certification_expiration_date" class="form-label">
                                                        Expiration Date
                                                    </label>
                                                    <input id="pals_certification_expiration_date"
                                                        name="pals_certification_expiration_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($board_certificate->pals_certification_expiration_date); ?>" />
                                                </div>

                                                <p class="col-md-12 font-weight-bold mt-3">Foreign Graduates</p>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="ecfmg_certificate" class="form-label">
                                                        Do you have a permanent ECFMG Certificate?
                                                    </label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="ecfmg_certificate" id="ecfmg_certificate_yes"
                                                                value="yes"
                                                                <?php echo e($board_certificate->ecfmg_certificate == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="ecfmg_certificate_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="ecfmg_certificate" id="ecfmg_certificate_no"
                                                                value="no"
                                                                <?php echo e($board_certificate->ecfmg_certificate == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="ecfmg_certificate_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="ecfmg_certificate_id" class="form-label">
                                                        ECFMG Certificate #
                                                    </label>
                                                    <input id="ecfmg_certificate_id" name="ecfmg_certificate_id"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($board_certificate->ecfmg_certificate_id); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="fifth_pathway_choose" class="form-label">
                                                        Did you do a fifth Pathway?
                                                    </label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="fifth_pathway" id="fifth_pathway_yes"
                                                                value="yes"
                                                                <?php echo e($board_certificate->fifth_pathway == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="fifth_pathway_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="fifth_pathway" id="fifth_pathway_no" value="no"
                                                                <?php echo e($board_certificate->fifth_pathway == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="fifth_pathway_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="fifth_pathway_location" class="form-label">
                                                        If so, where?
                                                    </label>
                                                    <input id="fifth_pathway_location" name="fifth_pathway_location"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($board_certificate->fifth_pathway_location); ?>" />
                                                </div>

                                                <div class="clearfix"></div>

                                                <p class="col-md-12 font-weight-bold mt-3">Licensing Exams Taken</p>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="national_board_exam" class="form-label">
                                                        National Boards
                                                    </label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="national_board_exam" id="national_board_exam_yes"
                                                                value="yes"
                                                                <?php echo e($board_certificate->national_board_exam == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="national_board_exam_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="national_board_exam" id="national_board_exam_no"
                                                                value="no"
                                                                <?php echo e($board_certificate->national_board_exam == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="national_board_exam_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="national_board_exam_date" class="form-label">
                                                        Date Taken
                                                    </label>
                                                    <input id="national_board_exam_date" name="national_board_exam_date"
                                                        type="date" class="form-control"
                                                        value="<?php echo e($board_certificate->national_board_exam_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="flex_exam" class="form-label">
                                                        FLEX
                                                    </label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="flex_exam" id="flex_exam_yes" value="yes"
                                                                <?php echo e($board_certificate->flex_exam == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="flex_exam_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="flex_exam" id="flex_exam_no" value="no"
                                                                <?php echo e($board_certificate->flex_exam == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label" for="flex_exam_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="flex_exam_date" class="form-label">
                                                        Date Taken
                                                    </label>
                                                    <input id="flex_exam_date" name="flex_exam_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($board_certificate->flex_exam_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="spex_exam" class="form-label">
                                                        SPEX
                                                    </label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="spex_exam" id="spex_exam_yes" value="yes"
                                                                <?php echo e($board_certificate->spex_exam == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="spex_exam_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="spex_exam" id="spex_exam_no" value="no"
                                                                <?php echo e($board_certificate->spex_exam == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="spex_exam_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="spex_exam_date" class="form-label">
                                                        Date Taken
                                                    </label>
                                                    <input id="spex_exam_date" name="spex_exam_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($board_certificate->spex_exam_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="usmle_exam" class="form-label">
                                                        USMLE
                                                    </label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="usmle_exam" id="usmle_exam_yes" value="yes"
                                                                <?php echo e($board_certificate->usmle_exam == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="usmle_exam_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="usmle_exam" id="usmle_exam_no" value="no"
                                                                <?php echo e($board_certificate->usmle_exam == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="usmle_exam_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="usmle_exam_date" class="form-label">
                                                        Date Taken
                                                    </label>
                                                    <input id="usmle_exam_date" name="usmle_exam_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($board_certificate->usmle_exam_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="state_board_exam" class="form-label">
                                                        State Boards
                                                    </label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="state_board_exam" id="state_board_exam_yes"
                                                                value="yes"
                                                                <?php echo e($board_certificate->state_board_exam == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="state_board_exam_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="state_board_exam" id="state_board_exam_no"
                                                                value="no"
                                                                <?php echo e($board_certificate->state_board_exam == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="state_board_exam_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="state_board_exam_date" class="form-label">
                                                        Date Taken
                                                    </label>
                                                    <input id="state_board_exam_date" name="state_board_exam_date"
                                                        type="date" class="form-control"
                                                        value="<?php echo e($board_certificate->state_board_exam_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="lmcc_exam" class="form-label">
                                                        LMCC
                                                    </label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="lmcc_exam" id="lmcc_exam_yes" value="yes"
                                                                <?php echo e($board_certificate->lmcc_exam == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="lmcc_exam_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="lmcc_exam" id="lmcc_exam_no" value="no"
                                                                <?php echo e($board_certificate->lmcc_exam == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="lmcc_exam_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="lmcc_exam_date" class="form-label">
                                                        Date Taken
                                                    </label>
                                                    <input id="lmcc_exam_date" name="lmcc_exam_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($board_certificate->lmcc_exam_date); ?>" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="step-4" class="licensing mb-5" role="tabpanel"
                                    aria-labelledby="step-4">
                                    <div class="card border border-dark rounded">
                                        <div class="card-header bg-gray-200 border-bottom border-dark font-weight-bold">
                                            STATE LICENSING
                                        </div>
                                        <div class="card-body">
                                            <div class="row">

                                                <p class="col-md-12 col-md-12 mb-3">
                                                    Please enter the information in the table below for all states in
                                                    which you have held a medical license.
                                                </p>

                                                <div class="col-md-12" id="licensing_wrapper">

                                                    <?php $__currentLoopData = $licensing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $license): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="row licensing_wrapper_item">

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">State</label>
                                                                <select name="licensing_state[<?php echo e($key); ?>]"
                                                                    class="form-control">
                                                                    <option value="<?php echo e($license->licensing_state); ?>">
                                                                        <?php echo e($license->licensing_state); ?></option>
                                                                    <option value="AK">AK</option>
                                                                    <option value="AL">AL</option>
                                                                    <option value="AR">AR</option>
                                                                    <option value="AS">AS</option>
                                                                    <option value="AZ">AZ</option>
                                                                    <option value="CA">CA</option>
                                                                    <option value="CO">CO</option>
                                                                    <option value="CT">CT</option>
                                                                    <option value="DC">DC</option>
                                                                    <option value="DE">DE</option>
                                                                    <option value="FL">FL</option>
                                                                    <option value="GA">GA</option>
                                                                    <option value="GU">GU</option>
                                                                    <option value="HI">HI</option>
                                                                    <option value="IA">IA</option>
                                                                    <option value="ID">ID</option>
                                                                    <option value="IL">IL</option>
                                                                    <option value="IN">IN</option>
                                                                    <option value="KS">KS</option>
                                                                    <option value="KY">KY</option>
                                                                    <option value="LA">LA</option>
                                                                    <option value="MA">MA</option>
                                                                    <option value="MD">MD</option>
                                                                    <option value="ME">ME</option>
                                                                    <option value="MI">MI</option>
                                                                    <option value="MN">MN</option>
                                                                    <option value="MO">MO</option>
                                                                    <option value="MP">MP</option>
                                                                    <option value="MS">MS</option>
                                                                    <option value="MT">MT</option>
                                                                    <option value="NC">NC</option>
                                                                    <option value="ND">ND</option>
                                                                    <option value="NE">NE</option>
                                                                    <option value="NH">NH</option>
                                                                    <option value="NJ">NJ</option>
                                                                    <option value="NM">NM</option>
                                                                    <option value="NV">NV</option>
                                                                    <option value="NY">NY</option>
                                                                    <option value="OH">OH</option>
                                                                    <option value="OK">OK</option>
                                                                    <option value="OR">OR</option>
                                                                    <option value="PA">PA</option>
                                                                    <option value="PR">PR</option>
                                                                    <option value="RI">RI</option>
                                                                    <option value="SC">SC</option>
                                                                    <option value="SD">SD</option>
                                                                    <option value="TN">TN</option>
                                                                    <option value="TX">TX</option>
                                                                    <option value="UM">UM</option>
                                                                    <option value="UT">UT</option>
                                                                    <option value="VI">VI</option>
                                                                    <option value="VT">VT</option>
                                                                    <option value="WA">WA</option>
                                                                    <option value="WI">WI</option>
                                                                    <option value="WV">WV</option>
                                                                    <option value="WY">WY</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    License Number
                                                                </label>
                                                                <input name="license_number[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($license->license_number); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    License Status
                                                                </label>
                                                                <select name="license_status[<?php echo e($key); ?>]"
                                                                    class="form-control">
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
                                                                <input name="license_granted_date[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($license->license_granted_date); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    License Expiration Date
                                                                </label>
                                                                <input
                                                                    name="license_expiration_date[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($license->license_expiration_date); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    State Medicare Provider Number
                                                                </label>
                                                                <input
                                                                    name="state_medicare_provider_number[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($license->state_medicare_provider_number); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    State Medicaid Provider Number
                                                                </label>
                                                                <input
                                                                    name="state_medicaid_provider_number[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($license->state_medicaid_provider_number); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group d-none">
                                                                <label class="form-label">
                                                                    State Controlled Substance Permit Number
                                                                </label>
                                                                <input
                                                                    name="state_controlled_substance_permit_number[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($license->state_controlled_substance_permit_number); ?>" />
                                                            </div>

                                                        </div>

                                                        <div class="col-md-12">
                                                            <hr class="my-3">
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </div>

                                                <div class="clearfix my-3 col-md-12">
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        onclick="cloneDiv('licensing_wrapper_item')">
                                                        <i class="fe fe-plus"></i>
                                                        Add
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border border-dark rounded mt-3">
                                        <div class="card-header bg-gray-200 border-bottom border-dark font-weight-bold">
                                            DEA + CONTROLLED SUBSTANCE
                                        </div>
                                        <div class="card-body">
                                            <div class="row">

                                                <p class="col-md-12 col-md-12 mb-3">
                                                    Please enter the information in the table below for all states in
                                                    which you have held a medical license.
                                                </p>

                                                <div class="col-md-12" id="licensing_dea_wrapper">
                                                    <?php $__currentLoopData = $dea_substances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dea_substance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="row licensing_dea_wrapper_item">

                                                            <p class="col-md-12 font-weight-bold mt-3">Federal Provider
                                                                Information</p>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label for="federal_dea_number" class="form-label">
                                                                    Federal DEA Number
                                                                </label>
                                                                <input name="federal_dea_number[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($dea_substance->federal_dea_number); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label for="dea_expiration_date" class="form-label">
                                                                    DEA Expiration Date
                                                                </label>
                                                                <input name="dea_expiration_date[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($dea_substance->dea_expiration_date); ?>" />
                                                            </div>


                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">State</label>
                                                                <select name="licensing_dea_state[<?php echo e($key); ?>]"
                                                                    class="form-control">
                                                                    <option
                                                                        value="<?php echo e($dea_substance->licensing_dea_state); ?>">
                                                                        <?php echo e($dea_substance->licensing_dea_state); ?></option>
                                                                    <option value="AK">AK</option>
                                                                    <option value="AL">AL</option>
                                                                    <option value="AR">AR</option>
                                                                    <option value="AS">AS</option>
                                                                    <option value="AZ">AZ</option>
                                                                    <option value="CA">CA</option>
                                                                    <option value="CO">CO</option>
                                                                    <option value="CT">CT</option>
                                                                    <option value="DC">DC</option>
                                                                    <option value="DE">DE</option>
                                                                    <option value="FL">FL</option>
                                                                    <option value="GA">GA</option>
                                                                    <option value="GU">GU</option>
                                                                    <option value="HI">HI</option>
                                                                    <option value="IA">IA</option>
                                                                    <option value="ID">ID</option>
                                                                    <option value="IL">IL</option>
                                                                    <option value="IN">IN</option>
                                                                    <option value="KS">KS</option>
                                                                    <option value="KY">KY</option>
                                                                    <option value="LA">LA</option>
                                                                    <option value="MA">MA</option>
                                                                    <option value="MD">MD</option>
                                                                    <option value="ME">ME</option>
                                                                    <option value="MI">MI</option>
                                                                    <option value="MN">MN</option>
                                                                    <option value="MO">MO</option>
                                                                    <option value="MP">MP</option>
                                                                    <option value="MS">MS</option>
                                                                    <option value="MT">MT</option>
                                                                    <option value="NC">NC</option>
                                                                    <option value="ND">ND</option>
                                                                    <option value="NE">NE</option>
                                                                    <option value="NH">NH</option>
                                                                    <option value="NJ">NJ</option>
                                                                    <option value="NM">NM</option>
                                                                    <option value="NV">NV</option>
                                                                    <option value="NY">NY</option>
                                                                    <option value="OH">OH</option>
                                                                    <option value="OK">OK</option>
                                                                    <option value="OR">OR</option>
                                                                    <option value="PA">PA</option>
                                                                    <option value="PR">PR</option>
                                                                    <option value="RI">RI</option>
                                                                    <option value="SC">SC</option>
                                                                    <option value="SD">SD</option>
                                                                    <option value="TN">TN</option>
                                                                    <option value="TX">TX</option>
                                                                    <option value="UM">UM</option>
                                                                    <option value="UT">UT</option>
                                                                    <option value="VI">VI</option>
                                                                    <option value="VT">VT</option>
                                                                    <option value="WA">WA</option>
                                                                    <option value="WI">WI</option>
                                                                    <option value="WV">WV</option>
                                                                    <option value="WY">WY</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    License Number
                                                                </label>
                                                                <input name="license_dea_number[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($dea_substance->license_dea_number); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    License Status
                                                                </label>
                                                                <select name="license_dea_status[<?php echo e($key); ?>]"
                                                                    class="form-control">
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
                                                                <input
                                                                    name="license_dea_granted_date[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($dea_substance->license_dea_granted_date); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    License Expiration Date
                                                                </label>
                                                                <input
                                                                    name="license_dea_expiration_date[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($dea_substance->license_dea_expiration_date); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    State Medicare Provider Number
                                                                </label>
                                                                <input
                                                                    name="dea_state_medicare_provider_number[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($dea_substance->dea_state_medicare_provider_number); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    State Medicaid Provider Number
                                                                </label>
                                                                <input
                                                                    name="dea_state_medicaid_provider_number[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($dea_substance->dea_state_medicaid_provider_number); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    State Controlled Substance Permit Number
                                                                </label>
                                                                <input
                                                                    name="dea_state_controlled_substance_permit_number[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($dea_substance->dea_state_controlled_substance_permit_number); ?>" />
                                                            </div>

                                                        </div>

                                                        <div class="col-md-12">
                                                            <hr class="my-3">
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>

                                                <div class="clearfix my-3 col-md-12">
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        onclick="cloneDiv('licensing_dea_wrapper_item')">
                                                        <i class="fe fe-plus"></i>
                                                        Add
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </section>

                                <section id="step-5" class="references mb-5" role="tabpanel"
                                    aria-labelledby="step-5">
                                    <div class="card border border-dark rounded">
                                        <div class="card-header bg-gray-200 border-bottom border-dark font-weight-bold">
                                            REFERENCES
                                        </div>
                                        <div class="card-body">
                                            <div class="row">

                                                <p class="col-md-12 mb-3">
                                                    Please list 4 references with 2 of 4 being same specialty references
                                                    within the last
                                                    24 months
                                                </p>

                                                <p class="col-md-12 col-md-12 font-weight-bold">Reference #1</p>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_1_name" class="form-label">
                                                        Name
                                                    </label>
                                                    <input id="reference_1_name" name="reference_1_name"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_1_name); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_1_specialty" class="form-label">
                                                        Specialty
                                                    </label>
                                                    <input id="reference_1_specialty" name="reference_1_specialty"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_1_specialty); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_1_phone_no" class="form-label">
                                                        Phone #
                                                    </label>
                                                    <input id="reference_1_phone_no" name="reference_1_phone_no"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_1_phone_no); ?>" required />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_1_position" class="form-label">
                                                        Title / Position
                                                    </label>
                                                    <input id="reference_1_position" name="reference_1_position"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_1_position); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_1_address" class="form-label">
                                                        Address
                                                    </label>
                                                    <input id="reference_1_address" name="reference_1_address"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_1_address); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_1_city" class="form-label">
                                                        City
                                                    </label>
                                                    <input id="reference_1_city" name="reference_1_city"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_1_city); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_1_state" class="form-label">
                                                        State
                                                    </label>
                                                    <input id="reference_1_state" name="reference_1_state"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_1_state); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group d-none">
                                                    <label for="reference_1_zipcode" class="form-label">
                                                        Zip code
                                                    </label>
                                                    <input id="reference_1_zipcode" name="reference_1_zipcode"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_1_zipcode); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group d-none">
                                                    <label for="reference_1_fax" class="form-label">
                                                        Fax #
                                                    </label>
                                                    <input id="reference_1_fax" name="reference_1_fax" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($references[0]->reference_1_fax); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_1_email" class="form-label">
                                                        Email
                                                    </label>
                                                    <input id="reference_1_email" name="reference_1_email"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_1_email); ?>" required />
                                                </div>

                                                <div class="col-md-12 form-group mb-2">
                                                    <label class="form-label">
                                                        Years worked together
                                                    </label>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_1_years_work_together_start"
                                                        class="form-label">
                                                        Start
                                                    </label>
                                                    <input id="reference_1_years_work_together_start"
                                                        name="reference_1_years_work_together_start" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($references[0]->reference_1_years_work_together_start); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_1_years_work_together_end" class="form-label">
                                                        End
                                                    </label>
                                                    <input id="reference_1_years_work_together_end"
                                                        name="reference_1_years_work_together_end" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($references[0]->reference_1_years_work_together_end); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_1_facility" class="form-label">
                                                        Facility
                                                    </label>
                                                    <input id="reference_1_facility" name="reference_1_facility"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_1_facility); ?>" />
                                                </div>

                                                <div class="col-md-12">
                                                    <hr class="my-3">
                                                </div>

                                                <p class="col-md-12 col-md-12 font-weight-bold">Reference #2</p>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_2_name" class="form-label">
                                                        Name
                                                    </label>
                                                    <input id="reference_2_name" name="reference_2_name"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_2_name); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_2_specialty" class="form-label">
                                                        Specialty
                                                    </label>
                                                    <input id="reference_2_specialty" name="reference_2_specialty"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_2_specialty); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_2_phone_no" class="form-label">
                                                        Phone #
                                                    </label>
                                                    <input id="reference_2_phone_no" name="reference_2_phone_no"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_2_phone_no); ?>" required />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_2_position" class="form-label">
                                                        Title / Position
                                                    </label>
                                                    <input id="reference_2_position" name="reference_2_position"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_2_position); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_2_address" class="form-label">
                                                        Address
                                                    </label>
                                                    <input id="reference_2_address" name="reference_2_address"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_2_address); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_2_city" class="form-label">
                                                        City
                                                    </label>
                                                    <input id="reference_2_city" name="reference_2_city"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_2_city); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_2_state" class="form-label">
                                                        State
                                                    </label>
                                                    <input id="reference_2_state" name="reference_2_state"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_2_state); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group d-none">
                                                    <label for="reference_2_zipcode" class="form-label">
                                                        Zip code
                                                    </label>
                                                    <input id="reference_2_zipcode" name="reference_2_zipcode"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_2_zipcode); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group d-none">
                                                    <label for="reference_2_fax" class="form-label">
                                                        Fax #
                                                    </label>
                                                    <input id="reference_2_fax" name="reference_2_fax" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($references[0]->reference_2_fax); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_2_email" class="form-label">
                                                        Email
                                                    </label>
                                                    <input id="reference_2_email" name="reference_2_email"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_2_email); ?>" required />
                                                </div>

                                                <div class="col-md-12 form-group mb-2">
                                                    <label class="form-label">
                                                        Years worked together
                                                    </label>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_2_years_work_together_start"
                                                        class="form-label">
                                                        Start
                                                    </label>
                                                    <input id="reference_2_years_work_together_start"
                                                        name="reference_2_years_work_together_start" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($references[0]->reference_2_years_work_together_start); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_2_years_work_together_end" class="form-label">
                                                        End
                                                    </label>
                                                    <input id="reference_2_years_work_together_end"
                                                        name="reference_2_years_work_together_end" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($references[0]->reference_2_years_work_together_end); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_2_facility" class="form-label">
                                                        Facility
                                                    </label>
                                                    <input id="reference_2_facility" name="reference_2_facility"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_2_facility); ?>" />
                                                </div>

                                                <div class="col-md-12">
                                                    <hr class="my-3">
                                                </div>

                                                <p class="col-md-12 col-md-12 font-weight-bold">Reference #3</p>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_3_name" class="form-label">
                                                        Name
                                                    </label>
                                                    <input id="reference_3_name" name="reference_3_name"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_3_name); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_3_specialty" class="form-label">
                                                        Specialty
                                                    </label>
                                                    <input id="reference_3_specialty" name="reference_3_specialty"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_3_specialty); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_3_phone_no" class="form-label">
                                                        Phone #
                                                    </label>
                                                    <input id="reference_3_phone_no" name="reference_3_phone_no"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_3_phone_no); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_3_position" class="form-label">
                                                        Title / Position
                                                    </label>
                                                    <input id="reference_3_position" name="reference_3_position"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_3_position); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_3_address" class="form-label">
                                                        Address
                                                    </label>
                                                    <input id="reference_3_address" name="reference_3_address"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_3_address); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_3_city" class="form-label">
                                                        City
                                                    </label>
                                                    <input id="reference_3_city" name="reference_3_city"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_3_city); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_3_state" class="form-label">
                                                        State
                                                    </label>
                                                    <input id="reference_3_state" name="reference_3_state"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_3_state); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group d-none">
                                                    <label for="reference_3_zipcode" class="form-label">
                                                        Zip code
                                                    </label>
                                                    <input id="reference_3_zipcode" name="reference_3_zipcode"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_3_zipcode); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group d-none">
                                                    <label for="reference_3_fax" class="form-label">
                                                        Fax #
                                                    </label>
                                                    <input id="reference_3_fax" name="reference_3_fax" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($references[0]->reference_3_fax); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_3_email" class="form-label">
                                                        Email
                                                    </label>
                                                    <input id="reference_3_email" name="reference_3_email"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_3_email); ?>" required />
                                                </div>

                                                <div class="col-md-12 form-group mb-2">
                                                    <label class="form-label">
                                                        Years worked together
                                                    </label>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_3_years_work_together_start"
                                                        class="form-label">
                                                        Start
                                                    </label>
                                                    <input id="reference_3_years_work_together_start"
                                                        name="reference_3_years_work_together_start" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($references[0]->reference_3_years_work_together_start); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_3_years_work_together_end" class="form-label">
                                                        End
                                                    </label>
                                                    <input id="reference_3_years_work_together_end"
                                                        name="reference_3_years_work_together_end" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($references[0]->reference_3_years_work_together_end); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_3_facility" class="form-label">
                                                        Facility
                                                    </label>
                                                    <input id="reference_3_facility" name="reference_3_facility"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_3_facility); ?>" />
                                                </div>

                                                <div class="col-md-12">
                                                    <hr class="my-3">
                                                </div>

                                                <p class="col-md-12 col-md-12 font-weight-bold">Reference #4</p>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_4_name" class="form-label">
                                                        Name
                                                    </label>
                                                    <input id="reference_4_name" name="reference_4_name"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_4_name); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_4_specialty" class="form-label">
                                                        Specialty
                                                    </label>
                                                    <input id="reference_4_specialty" name="reference_4_specialty"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_4_specialty); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_4_phone_no" class="form-label">
                                                        Phone #
                                                    </label>
                                                    <input id="reference_4_phone_no" name="reference_4_phone_no"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_4_phone_no); ?>" required />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_4_position" class="form-label">
                                                        Title / Position
                                                    </label>
                                                    <input id="reference_4_position" name="reference_4_position"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_4_position); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_4_address" class="form-label">
                                                        Address
                                                    </label>
                                                    <input id="reference_4_address" name="reference_4_address"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_4_address); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_4_city" class="form-label">
                                                        City
                                                    </label>
                                                    <input id="reference_4_city" name="reference_4_city"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_4_city); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_4_state" class="form-label">
                                                        State
                                                    </label>
                                                    <input id="reference_4_state" name="reference_4_state"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_4_state); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group d-none">
                                                    <label for="reference_4_zipcode" class="form-label">
                                                        Zip code
                                                    </label>
                                                    <input id="reference_4_zipcode" name="reference_4_zipcode"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_4_zipcode); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group d-none">
                                                    <label for="reference_4_fax" class="form-label">
                                                        Fax #
                                                    </label>
                                                    <input id="reference_4_fax" name="reference_4_fax" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($references[0]->reference_4_fax); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_4_email" class="form-label">
                                                        Email
                                                    </label>
                                                    <input id="reference_4_email" name="reference_4_email"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_4_email); ?>" required />
                                                </div>

                                                <div class="col-md-12 form-group mb-2">
                                                    <label class="form-label">
                                                        Years worked together
                                                    </label>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_4_years_work_together_start"
                                                        class="form-label">
                                                        Start
                                                    </label>
                                                    <input id="reference_4_years_work_together_start"
                                                        name="reference_4_years_work_together_start" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($references[0]->reference_4_years_work_together_start); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_4_years_work_together_end" class="form-label">
                                                        End
                                                    </label>
                                                    <input id="reference_4_years_work_together_end"
                                                        name="reference_4_years_work_together_end" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($references[0]->reference_4_years_work_together_end); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label for="reference_4_facility" class="form-label">
                                                        Facility
                                                    </label>
                                                    <input id="reference_4_facility" name="reference_4_facility"
                                                        type="text" class="form-control"
                                                        value="<?php echo e($references[0]->reference_1_facility); ?>" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="step-6" class="work-history mb-5" role="tabpanel"
                                    aria-labelledby="step-6">
                                    <div class="card border border-dark rounded">
                                        <div class="card-header bg-gray-200 border-bottom border-dark font-weight-bold">
                                            Current Employment, Hospital Affiliations & Work History
                                        </div>
                                        <div class="card-body">
                                            <div class="row">

                                                <p class="col-md-12 mb-3">
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
                                                                <input name="work_history_from[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($wh->work_history_from); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    To
                                                                </label>
                                                                <input name="work_history_to[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($wh->work_history_to); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Hospital / Facility Name
                                                                </label>
                                                                <input
                                                                    name="work_history_facility_name[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($wh->work_history_facility_name); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group d-none">
                                                                <label class="form-label">
                                                                    Phone
                                                                </label>
                                                                <input name="work_history_phone[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($wh->work_history_phone); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Address
                                                                </label>
                                                                <input name="work_history_address[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($wh->work_history_address); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    City
                                                                </label>
                                                                <input name="work_history_city[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($wh->work_history_city); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    State
                                                                </label>
                                                                <input name="work_history_state[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($wh->work_history_state); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group d-none">
                                                                <label class="form-label">
                                                                    Zip code
                                                                </label>
                                                                <input name="work_history_zipcode[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($wh->work_history_zipcode); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group d-none">
                                                                <div class="form-check">
                                                                    <input class="form-check-input"
                                                                        name="work_history_do_not_contact[0]"
                                                                        type="checkbox" value="1"
                                                                        <?php echo e($wh->work_history_do_not_contact == '1' ? 'checked' : ''); ?>>
                                                                    <label class="form-check-label"
                                                                        for="work_history_do_not_contact">
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

                                                <div class="clearfix my-3 col-md-12">
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        onclick="cloneDiv('work_history_wrapper_item')">
                                                        <i class="fe fe-plus"></i>
                                                        Add
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="step-7" class="hospital-and-affiliations mb-5" role="tabpanel"
                                    aria-labelledby="step-7">
                                    <div class="card border border-dark rounded">
                                        <div class="card-header bg-gray-200 border-bottom border-dark font-weight-bold">
                                            HOSPITAL AND AFFILIATIONS
                                        </div>
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-md-12 d-flex gap-5 mb-3">
                                                    <p class="mb-0">
                                                        Current Hospital And Other Facility Affiliations
                                                    </p>

                                                    <div class="form-check ml-3">
                                                        <input class="form-check-input"
                                                            name="hospital_and_affiliation_apply" type="checkbox"
                                                            value="1" id="hospital_and_affiliation_apply"
                                                            <?php echo e($hospital_and_affiliations[0]->hospital_and_affiliation_apply == '1' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label"
                                                            for="hospital_and_affiliation_apply">
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
                                                                <input name="primary_facility_name[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($hospital_and_affiliation->primary_facility_name); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Appointment From
                                                                </label>
                                                                <input name="appointment_from[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($hospital_and_affiliation->appointment_from); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Appointment To
                                                                </label>
                                                                <input name="appointment_to[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($hospital_and_affiliation->appointment_to); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    City
                                                                </label>
                                                                <input name="appointment_city[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($hospital_and_affiliation->appointment_city); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    State
                                                                </label>
                                                                <input name="appointment_state[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($hospital_and_affiliation->appointment_state); ?>" />
                                                            </div>

                                                        </div>

                                                        <div class="col-md-12">
                                                            <hr class="my-3">
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </div>

                                                <div class="clearfix my-3 col-md-12">
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        onclick="cloneDiv('hospital_affiliation_wrapper_item')">
                                                        <i class="fe fe-plus"></i>
                                                        Add
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="step-8" class="disclusres-and-disciplinary-actions mb-5"
                                    role="tabpanel" aria-labelledby="step-8">
                                    <div class="card border border-dark rounded">
                                        <div class="card-header bg-gray-200 border-bottom border-dark font-weight-bold">
                                            Disclosures and Disciplinary Actions
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <p class="col-md-12">
                                                    If your answer to any of the following questions is “Yes”, please
                                                    provide a full
                                                    explanation on the attached
                                                    Credentialing Application Explanation Form and include any additional
                                                    documentation
                                                    if necessary.
                                                </p>
                                                <p class="col-md-12">
                                                    Have any of the following ever been, or are currently in the process of,
                                                    being:
                                                    denied, revoked, suspended,
                                                    reduced, limited, placed on probation, not renewed, surrendered or
                                                    voluntarily
                                                    relinquished? If the answer is
                                                    “Yes” to any item please provide an explanation as outlined above.
                                                </p>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        1. Medical License in any state?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_1" id="question_1_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_1 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_1_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_1" id="question_1_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_1 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_1_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        2. DEA Registration (federal or state programs)?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_2" id="question_2_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_2 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_2_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_2" id="question_2_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_2 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_2_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        3. Other Professional Registration / License?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_3" id="question_3_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_3 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_3_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_3" id="question_3_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_3 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_3_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        4. Clinical Privileges?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_4" id="question_4_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_4 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_4_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_4" id="question_4_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_4 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_4_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        5. Membership / Rights on any medical staff?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_5" id="question_5_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_5 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_5_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_5" id="question_5_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_5 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_5_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        6. Institutional affiliation / status?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_6" id="question_6_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_6 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_6_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_6" id="question_6_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_6 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_6_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        7. Professional society membership or fellowship / Board
                                                        certification?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_7" id="question_7_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_7 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_7_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_7" id="question_7_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_7 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_7_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        8. Any professional sanction (e.g. government, administrative agency
                                                        or other)?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_8" id="question_8_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_8 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_8_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_8" id="question_8_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_8 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_8_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        9. Participation in any private, federal, or state health insurance
                                                        program
                                                        (e.g. Medicare, Medicaid)?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_9" id="question_9_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_9 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_9_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_9" id="question_9_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_9 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_9_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        10. Do you currently have any physical or mental condition including
                                                        current
                                                        alcohol or drug dependency that may affect your ability to practice
                                                        or exercise
                                                        the privileges typically associated with the specialty and position
                                                        for which
                                                        you are applying?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_10" id="question_10_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_10 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_10_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_10" id="question_10_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_10 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_10_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        11. Are you currently using illegal drugs or legal drugs in an
                                                        illegal manner?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_11" id="question_11_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_11 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_11_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_11" id="question_11_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_11 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_11_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        12. Is there any reason that you are unable to perform the essential
                                                        functions
                                                        of the position for which you are applying safely and
                                                        according to accepted standards of performance with or without
                                                        reasonable
                                                        accommodation?
                                                        (If yes, explain on the attached form)
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_12" id="question_12_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_12 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_12_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_12" id="question_12_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_12 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_12_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        13. Have you ever been convicted of, pled guilty to, or pled nolo
                                                        contendere
                                                        for, any criminal offense (excluding parking tickets)?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_13" id="question_13_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_13 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_13_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_13" id="question_13_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_13 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_13_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        14. Are any criminal charges currently pending against you in any
                                                        jurisdiction?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_14" id="question_14_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_14 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_14_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_14" id="question_14_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_14 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_14_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        15. Have you ever been arrested for or charged with a crime
                                                        involving children?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_15" id="question_15_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_15 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_15_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_15" id="question_15_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_15 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_15_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        16. Have you ever been arrested for or charged with a sexual offense
                                                        including
                                                        sexual harassment?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_16" id="question_16_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_16 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_16_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_16" id="question_16_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_16 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_16_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        17. Have you ever been arrested for or charged with a crime
                                                        involving moral
                                                        turpitude?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_17" id="question_17_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_17 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_17_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_17" id="question_17_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_17 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_17_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        18. Is there any other issue which should be disclosed that may have
                                                        an adverse
                                                        impact on your ability to deliver effective clinical health
                                                        care services?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_18" id="question_18_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_18 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_18_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_18" id="question_18_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_18 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_18_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        19. Has any information pertaining to you ever been reported to the
                                                        National
                                                        Practitioner Data Bank (NPDB) or Healthcare Integrity and
                                                        Protections Data Bank (HIPDB)?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_19" id="question_19_yes" value="yes"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_19 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_19_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="question_19" id="question_19_no" value="no"
                                                                <?php echo e($disclusres_and_disciplinary_action->question_19 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="question_19_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="step-9" class="credentialing-application-explanation-form mb-5"
                                    role="tabpanel" aria-labelledby="step-9">
                                    <div class="card border border-dark rounded">
                                        <div class="card-header bg-gray-200 border-bottom border-dark font-weight-bold">
                                            Credentialing Application Explanation Form
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <p class="col-md-12">
                                                    Please clearly indicate which question and answer you are providing
                                                    explanation for.
                                                    Attach all available supporting information.
                                                </p>

                                                <div class="col-md-12 mb-3 form-group d-none">
                                                    <label for="provider_name" class="form-label">
                                                        Provider Name
                                                    </label>
                                                    <input id="provider_name" name="provider_name" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($credentialing_application_form[0]->provider_name); ?>" />
                                                </div>

                                                <div class="col-md-12" id="explanation_wrapper">

                                                    <?php $__currentLoopData = $credentialing_application_form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $caf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="row explanation_wrapper_item">

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Date
                                                                </label>
                                                                <input name="explanation_date[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($caf->explanation_date); ?>" />
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

                                                    <div class="clearfix mb-3 col-md-12">
                                                        <button type="button" class="btn btn-sm btn-primary"
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

                                <section id="step-10" class="malpractice-information mb-5" role="tabpanel"
                                    aria-labelledby="step-10">
                                    <div class="card border border-dark rounded">
                                        <div class="card-header bg-gray-200 border-bottom border-dark font-weight-bold">
                                            Malpractice Information
                                        </div>
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-2">
                                                        1. Have you ever been denied professional liability insurance or
                                                        denied renewal
                                                        of an existing policy?
                                                    </p>
                                                    <p class="col-md-12">
                                                        If the answer to the above question is “YES” please attach a brief
                                                        explanation.
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="malpractice_question_1"
                                                                id="malpractice_question_1_yes" value="yes"
                                                                onclick="toggleAttachment('yes')"
                                                                <?php echo e($malpractice_information->malpractice_question_1 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="malpractice_question_1_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="malpractice_question_1"
                                                                id="malpractice_question_1_no" value="no"
                                                                onclick="toggleAttachment('no')"
                                                                <?php echo e($malpractice_information->malpractice_question_1 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="malpractice_question_1_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3 form-group" id="attachment-wrapper"
                                                    style="display:<?php echo e($malpractice_information->malpractice_question_1 == 'yes' ? 'block' : 'none'); ?>">
                                                    <label class="form-label" for="attachment">
                                                        Attachment
                                                    </label>
                                                    <input class="form-control" type="file" name="attachment"
                                                        id="attachment">
                                                </div>

                                                <?php if($malpractice_information->attachment != ''): ?>
                                                    <div class="col-md-12 mb-3 form-group">
                                                        <a href="<?php echo e(asset('assets/attachments/' . $malpractice_information->attachment)); ?>"
                                                            target="_blank" class="btn btn-sm btn-warning">
                                                            View Attachment
                                                        </a>
                                                    </div>
                                                <?php endif; ?>

                                                <input type="hidden" name="attachment_file"
                                                    value="<?php echo e($malpractice_information->attachment); ?>">

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-2">
                                                        2. Have any malpractice claims, suits, settlements, or arbitration
                                                        proceedings
                                                        ever been made against you including any that have been
                                                        dismissed?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="malpractice_question_2"
                                                                id="malpractice_question_2_yes" value="yes"
                                                                <?php echo e($malpractice_information->malpractice_question_2 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="malpractice_question_2_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="malpractice_question_2"
                                                                id="malpractice_question_2_no" value="no"
                                                                <?php echo e($malpractice_information->malpractice_question_2 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="malpractice_question_2_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-2">
                                                        3. Are you aware of any claims, suits, or settlements currently
                                                        pending or of
                                                        any intent to file a claim or suit?
                                                    </p>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="malpractice_question_3" value="yes"
                                                                <?php echo e($malpractice_information->malpractice_question_3 == 'yes' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="malpractice_question_3_yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="malpractice_question_3"
                                                                id="malpractice_question_3_no" value="no"
                                                                <?php echo e($malpractice_information->malpractice_question_3 == 'no' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="malpractice_question_3_no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <p class="col-md-12 font-weight-bold mb-0">
                                                        If your answer to either of the above questions is “Yes” please
                                                        provide the
                                                        following information on each claim and provide a brief clinical
                                                        summary of each case on the attached Professional Liability Claims
                                                        Information
                                                        Form..
                                                    </p>
                                                </div>

                                                <div class="col-md-12" id="insurance_claim_wrapper">

                                                    <?php $__currentLoopData = $malpractice_claims; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $malpractice_claim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="row insurance_claim_wrapper_item">

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Plaintiff Name and Insurance Carrier
                                                                </label>
                                                                <input name="plantiff_name[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($malpractice_claim->plantiff_name); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Location (County, State)
                                                                </label>
                                                                <input name="location[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($malpractice_claim->location); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Status
                                                                    (Dismissed / Settled /
                                                                    Judgment / Pending)
                                                                </label>
                                                                <input name="status[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($malpractice_claim->status); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Date
                                                                    of Incident
                                                                </label>
                                                                <input name="date_of_incident[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($malpractice_claim->date_of_incident); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Amount of Award
                                                                    or Settlement
                                                                    (if appropriate)
                                                                </label>
                                                                <input name="amount_of_award[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($malpractice_claim->amount_of_award); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                </label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input"
                                                                        name="summary_included[<?php echo e($key); ?>]"
                                                                        type="checkbox" value="1"
                                                                        <?php echo e($malpractice_claim->summary_included == '1' ? 'checked' : ''); ?>>
                                                                    <label class="form-check-label">
                                                                        Summary Included
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <hr class="my-3">
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </div>

                                                <div class="clearfix mb-3 col-md-12">
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        onclick="cloneDiv('insurance_claim_wrapper_item')">
                                                        <i class="fe fe-plus"></i>
                                                        Add
                                                    </button>
                                                </div>

                                                <div class="clearfix"></div>

                                                <div class="col-md-12 mt-5 mb-3 form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input"
                                                            name="additional_malpractice_claim" type="checkbox"
                                                            value="1"
                                                            <?php echo e($malpractice_information->additional_malpractice_claim == '1' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label">
                                                            Additional Malpractice Claims or incidents are listed on
                                                            attached sheet
                                                        </label>
                                                    </div>
                                                </div>

                                                <p class="col-md-12 font-weight-bold mb-3">
                                                    Please list your current malpractice insurance carrier and the
                                                    associated
                                                    information for the last 10 years. If you currently do not carry any
                                                    malpractice insurance, please list the last malpractice insurance
                                                    carrier which
                                                    provided coverage for you. In addition, please list any
                                                    malpractice insurance carrier who has been associated with any
                                                    malpractice
                                                    claim, suit or settlement listed below
                                                </p>

                                                <div class="col-md-12" id="additional_insurance_claim_wrapper">

                                                    <?php $__currentLoopData = $malpractice_claim_policies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $malpractice_claim_policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="row additional_insurance_claim_wrapper_item">

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Malpractice Insurance Carrier
                                                                </label>
                                                                <input
                                                                    name="malpractice_insurance_carrier[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($malpractice_claim_policy->malpractice_insurance_carrier); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Policy Number
                                                                </label>
                                                                <input name="policy_number[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($malpractice_claim_policy->policy_number); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Policy Dates From
                                                                </label>
                                                                <input name="policy_date_from[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($malpractice_claim_policy->policy_date_from); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Policy Dates To
                                                                </label>
                                                                <input name="policy_date_to[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($malpractice_claim_policy->policy_date_to); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Amount of Coverage
                                                                </label>
                                                                <input name="amount_of_coverage[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($malpractice_claim_policy->amount_of_coverage); ?>" />
                                                            </div>

                                                        </div>

                                                        <hr class="my-3">
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </div>

                                                <div class="clearfix mb-3 col-md-12">
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        onclick="cloneDiv('additional_insurance_claim_wrapper_item')">
                                                        <i class="fe fe-plus"></i>
                                                        Add
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="step-11" class="current-continuing-medical-education mb-5"
                                    role="tabpanel" aria-labelledby="step-11">
                                    <div class="card border border-dark rounded">
                                        <div class="card-header bg-gray-200 border-bottom border-dark font-weight-bold">
                                            Current Continuing Medical Education
                                        </div>
                                        <div class="card-body">
                                            <div class="row">

                                                <p class="col-md-12 mb-3">
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
                                                                <input name="program_title[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($cme->program_title); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Date
                                                                </label>
                                                                <input name="program_date[<?php echo e($key); ?>]"
                                                                    type="date" class="form-control"
                                                                    value="<?php echo e($cme->program_date); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    Sponsoring Organization
                                                                </label>
                                                                <input
                                                                    name="sponsoring_organization[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($cme->sponsoring_organization); ?>" />
                                                            </div>

                                                            <div class="col-md-6 mb-3 form-group">
                                                                <label class="form-label">
                                                                    # of CME's
                                                                </label>
                                                                <input name="certificate_of_cme[<?php echo e($key); ?>]"
                                                                    type="text" class="form-control"
                                                                    value="<?php echo e($cme->certificate_of_cme); ?>" />
                                                            </div>

                                                        </div>

                                                        <hr class="my-3">
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </div>

                                                <div class="clearfix mb-3 col-md-12">
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        onclick="cloneDiv('current_medical_education_wrapper_item')">
                                                        <i class="fe fe-plus"></i>
                                                        Add
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="step-12" class="professional-liability-claims-information-form"
                                    role="tabpanel" aria-labelledby="step-12">
                                    <div class="card border border-dark rounded">
                                        <div class="card-header bg-gray-200 border-bottom border-dark font-weight-bold">
                                            Professional Liability Claims Information Form
                                        </div>
                                        <div class="card-body">
                                            <div class="row">

                                                <p class="col-md-12 mb-3 font-weight-bold">
                                                    The following information is necessary to complete the credentialing
                                                    verification
                                                    process and will be kept confidential.
                                                    Please print or type answers to the following for any malpractice claims
                                                    reported to
                                                    your malpractice insurance carrier, opened, closed,
                                                    dismissed, settled or paid. Please complete a separate form for each
                                                    claim. One case
                                                    per sheet only (please photocopy first if additional
                                                    sheets are needed)
                                                </p>

                                                <div class="col-md-12 mb-3 form-group">
                                                    <label class="form-label">
                                                        PROVIDER'S NAME
                                                    </label>
                                                    <input name="providers_name" type="text" class="form-control"
                                                        value="<?php echo e($professional_liability_claim->providers_name); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">
                                                        Name of Patient Involved
                                                    </label>
                                                    <input name="patient_involved" type="text" class="form-control"
                                                        value="<?php echo e($professional_liability_claim->patient_involved); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">
                                                        Age
                                                    </label>
                                                    <input name="patient_age" type="text" class="form-control"
                                                        value="<?php echo e($professional_liability_claim->patient_age); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">
                                                        Month and Year of Occurrence
                                                    </label>
                                                    <input name="month_year_occurrence" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($professional_liability_claim->month_year_occurrence); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">
                                                        Month and Year of Lawsuit
                                                    </label>
                                                    <input name="month_year_lawsuit" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($professional_liability_claim->month_year_lawsuit); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">
                                                        Event Precipitating Claim
                                                    </label>
                                                    <input name="event_precipitating_claim" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($professional_liability_claim->event_precipitating_claim); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">
                                                        Insurance Carrier at Time
                                                    </label>
                                                    <input name="insurance_carrier_at_time" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($professional_liability_claim->insurance_carrier_at_time); ?>" />
                                                </div>

                                                <div class="col-md-12 mb-3 form-group">
                                                    <label for="claim_status" class="form-label me-3">
                                                        What is/was your status
                                                    </label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="claim_status" value="primary_defendant"
                                                            <?php echo e($professional_liability_claim->claim_status == 'primary_defendant' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label">Primary Defendant</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="claim_status" value="co_defendant"
                                                            <?php echo e($professional_liability_claim->claim_status == 'co_defendant' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label">Co-defendant</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="claim_status" value="other"
                                                            <?php echo e($professional_liability_claim->claim_status == 'other' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label">Other</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3 form-group">
                                                    <label class="form-label">
                                                        Please list other Defendants
                                                    </label>
                                                    <input name="defendants" type="text" class="form-control"
                                                        value="<?php echo e($professional_liability_claim->defendants); ?>" />
                                                </div>

                                                <div class="col-md-12 mb-3 form-group">
                                                    <label class="form-label">
                                                        What was the patient's outcome?
                                                    </label>
                                                    <input name="patients_outcome" type="text" class="form-control"
                                                        value="<?php echo e($professional_liability_claim->patients_outcome); ?>" />
                                                </div>

                                                <div class="col-md-12 mb-3 form-group">
                                                    <label class="form-label">
                                                        How were you alleged to have caused harm or injury to this patient?
                                                    </label>
                                                    <input name="alleged_to_harm" type="text" class="form-control"
                                                        value="<?php echo e($professional_liability_claim->alleged_to_harm); ?>" />
                                                </div>

                                                <div class="col-md-12 mb-3 form-group">
                                                    <label class="form-label">
                                                        Please provide specifics in reference to the adverse event:
                                                    </label>
                                                    <input name="reference_to_adverse_events" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($professional_liability_claim->reference_to_adverse_events); ?>" />
                                                </div>

                                                <div class="col-md-12 mb-3 form-group">
                                                    <label class="form-label">
                                                        What is/was your role in this event?
                                                    </label>
                                                    <input name="event_role" type="text" class="form-control"
                                                        value="<?php echo e($professional_liability_claim->event_role); ?>" />
                                                </div>

                                                <p class="col-md-12 mb-3 font-weight-bold">
                                                    Current Status: (please check one)
                                                </p>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="status_pending"
                                                                type="checkbox" value="1"
                                                                <?php echo e($professional_liability_claim->status_pending == '1' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label">
                                                                Still pending: as of (date)
                                                            </label>
                                                        </div>
                                                    </label>
                                                    <input name="pending_status_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($professional_liability_claim->pending_status_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">
                                                        Who is handling the defense of the case?
                                                    </label>
                                                    <input name="defense_case_handling" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($professional_liability_claim->defense_case_handling); ?>" />
                                                </div>

                                                <div class="clearfix mb-3"></div>

                                                <div class="col-md-4 mb-3 form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="awaiting_trial"
                                                            type="checkbox" value="1"
                                                            <?php echo e($professional_liability_claim->awaiting_trial == '1' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label">
                                                            Trial date set, awaiting trial?
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 mb-3 form-group">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="awaiting_trial_check" value="yes"
                                                            <?php echo e($professional_liability_claim->awaiting_trial_check == 'yes' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="awaiting_trial_check" value="no"
                                                            <?php echo e($professional_liability_claim->awaiting_trial_check == 'no' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-5 mb-3 form-group">
                                                    <label class="form-label">Trial Date</label>
                                                    <input name="awaiting_trial_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($professional_liability_claim->awaiting_trial_date); ?>" />
                                                </div>

                                                <div class="clearfix"></div>

                                                <div class="col-md-4 mb-3 form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="settled_out_of_court"
                                                            type="checkbox" value="1"
                                                            <?php echo e($professional_liability_claim->settled_out_of_court == '1' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label">
                                                            Settled out of court?
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-3 mb-3 form-group">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="settled_out_of_court_check" value="yes"
                                                            <?php echo e($professional_liability_claim->settled_out_of_court_check == 'yes' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="settled_out_of_court_check" value="no"
                                                            <?php echo e($professional_liability_claim->settled_out_of_court_check == 'no' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-5 mb-3 form-group">
                                                    <label class="form-label">Date</label>
                                                    <input name="settled_out_of_court_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($professional_liability_claim->settled_out_of_court_date); ?>" />
                                                </div>

                                                <div class="clearfix"></div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">Amount of Total Settlement: $</label>
                                                    <input name="total_settlement_amount" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($professional_liability_claim->total_settlement_amount); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">Amount Paid on Your Behalf: $</label>
                                                    <input name="paid_settlement_amount" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($professional_liability_claim->paid_settlement_amount); ?>" />
                                                </div>

                                                <div class="clearfix mb-3"></div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="status_dismissed"
                                                            type="checkbox" value="1"
                                                            <?php echo e($professional_liability_claim->status_dismissed == '1' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label">
                                                            Dismissed:
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">Date</label>
                                                    <input name="dissmissed_date" type="date" class="form-control"
                                                        value="<?php echo e($professional_liability_claim->dissmissed_date); ?>" />
                                                </div>

                                                <div class="clearfix mb-3"></div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="status_defense_verdict"
                                                            type="checkbox" value="1"
                                                            <?php echo e($professional_liability_claim->status_defense_verdict == '1' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label">
                                                            Defense Verdict:
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">Date</label>
                                                    <input name="defense_verdict_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($professional_liability_claim->defense_verdict_date); ?>" />
                                                </div>

                                                <div class="clearfix mb-3"></div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="status_plaintiff_verdict"
                                                            type="checkbox" value="1"
                                                            <?php echo e($professional_liability_claim->status_plaintiff_verdict == '1' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label">
                                                            Plaintiff Verdict:
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">Date</label>
                                                    <input name="plaintiff_verdict_date" type="date"
                                                        class="form-control"
                                                        value="<?php echo e($professional_liability_claim->plaintiff_verdict_date); ?>" />
                                                </div>

                                                <div class="clearfix mb-3"></div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="status_judgement_amount"
                                                            type="checkbox" value="1"
                                                            <?php echo e($professional_liability_claim->status_judgement_amount == '1' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label">
                                                            Judgment Amount: $
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <input name="judgement_amount" type="text" class="form-control"
                                                        value="<?php echo e($professional_liability_claim->judgement_amount); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">Date</label>
                                                    <input name="judgement_date" type="date" class="form-control"
                                                        value="<?php echo e($professional_liability_claim->judgement_date); ?>" />
                                                </div>

                                                <div class="col-md-6 mb-3 form-group">
                                                    <label class="form-label">Amount of Total Judgment: $</label>
                                                    <input name="judgement_total_amount" type="text"
                                                        class="form-control"
                                                        value="<?php echo e($professional_liability_claim->judgement_total_amount); ?>" />
                                                </div>

                                                <div class="clearfix"></div>

                                                <p class="col-md-12 font-weight-bold mb-3">
                                                    This professional Liability Claims Information Form is required on all
                                                    claims/lawsuits. Clinical details are required for all suits.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                

                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <a href="<?php echo e(route('admin.users.index')); ?>" class="btn btn-danger ml-2">Cancel</a>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <!-- Smart Wizard -->
    <script src="https://unpkg.com/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>

    <!-- jQuery Validate -->
    <script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/additional-methods.min.js')); ?>"></script>

    <script>
        function toggleAttachment(toggle) {
            if (toggle === 'yes') {
                $('#attachment-wrapper').show('slow');
            } else {
                $('#attachment-wrapper').hide('slow');
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
            newDiv.append(
                `<div class="col-md-12"><button type="button" class="btn btn-sm btn-danger" onclick="removeDiv('#${parent}_${currentIndex}')">Remove</button></div><hr class="my-3">`
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
                toolbar: {
                    position: 'bottom', // none|top|bottom|both
                    showNextButton: true, // show/hide a Next button
                    showPreviousButton: true, // show/hide a Previous button
                    extraHtml: '<button class="btn sw-btn btn-submit" id="btn_submit" type="button" style="display:none" disabled>Submit</button>' // Extra html to show on toolbar
                },
                transition: {
                    animation: 'none', // Animation effect on navigation, none|fade|slideHorizontal|slideVertical|slideSwing|css(Animation CSS class also need to specify)
                },
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
                    btnSubmit.style.display = 'inline-block';
                    btnSubmit.disabled = false;

                    var $valid = $("#application_form").valid();
                    if (!$valid) {
                        $validator.focusInvalid();
                        return false;
                    }
                    $(btnSubmit).click(function() {
                        $('#application_form').submit();
                    });
                } else {
                    btnSubmit.style.display = 'none';
                    btnSubmit.disabled = true;
                }

                // The callback must called in any case to procced the steps
                // The empty callback will not apply any dynamic contents to the steps
                callback();
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/users/edit.blade.php ENDPATH**/ ?>