<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['disclusres_and_disciplinary_action' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['disclusres_and_disciplinary_action' => null]); ?>
<?php foreach (array_filter((['disclusres_and_disciplinary_action' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if($disclusres_and_disciplinary_action == null || empty($disclusres_and_disciplinary_action)): ?>
    <section id="step-8" class="tab-pane disclusres-and-disciplinary-actions mb-5" role="tabpanel"
        aria-labelledby="step-8">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Disclosures and Disciplinary Actions
            </div>
            <div class="card-body">
                <div class="row">
                    <p>
                        If your answer to any of the following questions is “Yes”, please
                        provide a full
                        explanation on the attached
                        Credentialing Application Explanation Form and include any additional
                        documentation
                        if necessary.
                    </p>
                    <p>
                        Have any of the following ever been, or are currently in the process of,
                        being:
                        denied, revoked, suspended,
                        reduced, limited, placed on probation, not renewed, surrendered or
                        voluntarily
                        relinquished? If the answer is
                        “Yes” to any item please provide an explanation as outlined above.
                    </p>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            1. Medical License in any state?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_1" id="question_1_yes"
                                    value="yes" data-error="#err_question_1" required>
                                <label class="form-check-label" for="question_1_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_1" id="question_1_no"
                                    value="no">
                                <label class="form-check-label" for="question_1_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_1"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            2. DEA Registration (federal or state programs)?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_2" id="question_2_yes"
                                    value="yes" data-error="#err_question_2" required>
                                <label class="form-check-label" for="question_2_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_2" id="question_2_no"
                                    value="no">
                                <label class="form-check-label" for="question_2_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_2"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            3. Other Professional Registration / License?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_3" id="question_3_yes"
                                    value="yes" data-error="#err_question_3" required>
                                <label class="form-check-label" for="question_3_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_3" id="question_3_no"
                                    value="no">
                                <label class="form-check-label" for="question_3_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_3"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            4. Clinical Privileges?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_4" id="question_4_yes"
                                    value="yes" data-error="#err_question_4" required>
                                <label class="form-check-label" for="question_4_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_4" id="question_4_no"
                                    value="no">
                                <label class="form-check-label" for="question_4_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_4"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            5. Membership / Rights on any medical staff?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_5" id="question_5_yes"
                                    value="yes" data-error="#err_question_5" required>
                                <label class="form-check-label" for="question_5_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_5" id="question_5_no"
                                    value="no">
                                <label class="form-check-label" for="question_5_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_5"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            6. Institutional affiliation / status?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_6" id="question_6_yes"
                                    value="yes" data-error="#err_question_6" required>
                                <label class="form-check-label" for="question_6_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_6" id="question_6_no"
                                    value="no">
                                <label class="form-check-label" for="question_6_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_6"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            7. Professional society membership or fellowship / Board
                            certification?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_7" id="question_7_yes"
                                    value="yes" data-error="#err_question_7" required>
                                <label class="form-check-label" for="question_7_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_7" id="question_7_no"
                                    value="no">
                                <label class="form-check-label" for="question_7_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_7"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            8. Any professional sanction (e.g. government, administrative agency
                            or other)?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_8" id="question_8_yes"
                                    value="yes" data-error="#err_question_8" required>
                                <label class="form-check-label" for="question_8_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_8" id="question_8_no"
                                    value="no">
                                <label class="form-check-label" for="question_8_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_8"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            9. Participation in any private, federal, or state health insurance
                            program
                            (e.g. Medicare, Medicaid)?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_9" id="question_9_yes"
                                    value="yes" data-error="#err_question_9" required>
                                <label class="form-check-label" for="question_9_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_9" id="question_9_no"
                                    value="no">
                                <label class="form-check-label" for="question_9_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_9"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            10. Do you currently have any physical or mental condition including
                            current
                            alcohol or drug dependency that may affect your ability to practice
                            or exercise
                            the privileges typically associated with the specialty and position
                            for which
                            you are applying?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_10"
                                    id="question_10_yes" value="yes" data-error="#err_question_10" required>
                                <label class="form-check-label" for="question_10_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_10"
                                    id="question_10_no" value="no">
                                <label class="form-check-label" for="question_10_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_10"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            11. Are you currently using illegal drugs or legal drugs in an
                            illegal manner?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_11"
                                    id="question_11_yes" value="yes" data-error="#err_question_11" required>
                                <label class="form-check-label" for="question_11_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_11"
                                    id="question_11_no" value="no">
                                <label class="form-check-label" for="question_11_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_11"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            12. Is there any reason that you are unable to perform the essential
                            functions
                            of the position for which you are applying safely and
                            according to accepted standards of performance with or without
                            reasonable
                            accommodation?
                            (If yes, explain on the attached form)
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_12"
                                    id="question_12_yes" value="yes" data-error="#err_question_12" required>
                                <label class="form-check-label" for="question_12_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_12"
                                    id="question_12_no" value="no">
                                <label class="form-check-label" for="question_12_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_12"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            13. Have you ever been convicted of, pled guilty to, or pled nolo
                            contendere
                            for, any criminal offense (excluding parking tickets)?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_13"
                                    id="question_13_yes" value="yes" data-error="#err_question_13" required>
                                <label class="form-check-label" for="question_13_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_13"
                                    id="question_13_no" value="no">
                                <label class="form-check-label" for="question_13_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_13"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            14. Are any criminal charges currently pending against you in any
                            jurisdiction?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_14"
                                    id="question_14_yes" value="yes" data-error="#err_question_14" required>
                                <label class="form-check-label" for="question_14_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_14"
                                    id="question_14_no" value="no">
                                <label class="form-check-label" for="question_14_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_14"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            15. Have you ever been arrested for or charged with a crime
                            involving children?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_15"
                                    id="question_15_yes" value="yes" data-error="#err_question_15" required>
                                <label class="form-check-label" for="question_15_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_15"
                                    id="question_15_no" value="no">
                                <label class="form-check-label" for="question_15_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_15"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            16. Have you ever been arrested for or charged with a sexual offense
                            including
                            sexual harassment?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_16"
                                    id="question_16_yes" value="yes" data-error="#err_question_16" required>
                                <label class="form-check-label" for="question_16_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_16"
                                    id="question_16_no" value="no">
                                <label class="form-check-label" for="question_16_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_16"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            17. Have you ever been arrested for or charged with a crime
                            involving moral
                            turpitude?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_17"
                                    id="question_17_yes" value="yes" data-error="#err_question_17" required>
                                <label class="form-check-label" for="question_17_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_17"
                                    id="question_17_no" value="no">
                                <label class="form-check-label" for="question_17_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_17"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            18. Is there any other issue which should be disclosed that may have
                            an adverse
                            impact on your ability to deliver effective clinical health
                            care services?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_18"
                                    id="question_18_yes" value="yes" data-error="#err_question_18" required>
                                <label class="form-check-label" for="question_18_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_18"
                                    id="question_18_no" value="no">
                                <label class="form-check-label" for="question_18_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_18"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            19. Has any information pertaining to you ever been reported to the
                            National
                            Practitioner Data Bank (NPDB) or Healthcare Integrity and
                            Protections Data Bank (HIPDB)?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_19"
                                    id="question_19_yes" value="yes" data-error="#err_question_19" required>
                                <label class="form-check-label" for="question_19_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_19"
                                    id="question_19_no" value="no">
                                <label class="form-check-label" for="question_19_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_19"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <section id="step-8" class="tab-pane disclusres-and-disciplinary-actions mb-5" role="tabpanel"
        aria-labelledby="step-8">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Disclosures and Disciplinary Actions
            </div>
            <div class="card-body">
                <div class="row">
                    <p>
                        If your answer to any of the following questions is “Yes”, please
                        provide a full
                        explanation on the attached
                        Credentialing Application Explanation Form and include any additional
                        documentation
                        if necessary.
                    </p>
                    <p>
                        Have any of the following ever been, or are currently in the process of,
                        being:
                        denied, revoked, suspended,
                        reduced, limited, placed on probation, not renewed, surrendered or
                        voluntarily
                        relinquished? If the answer is
                        “Yes” to any item please provide an explanation as outlined above.
                    </p>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            1. Medical License in any state?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_1" id="question_1_yes"
                                    value="yes" data-error="#err_question_1" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_1 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_1_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_1" id="question_1_no"
                                    value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_1 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_1_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_1"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            2. DEA Registration (federal or state programs)?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_2" id="question_2_yes"
                                    value="yes" data-error="#err_question_2" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_2 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_2_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_2" id="question_2_no"
                                    value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_2 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_2_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_2"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            3. Other Professional Registration / License?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_3" id="question_3_yes"
                                    value="yes" data-error="#err_question_3" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_3 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_3_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_3" id="question_3_no"
                                    value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_3 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_3_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_3"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            4. Clinical Privileges?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_4" id="question_4_yes"
                                    value="yes" data-error="#err_question_4" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_4 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_4_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_4" id="question_4_no"
                                    value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_4 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_4_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_4"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            5. Membership / Rights on any medical staff?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_5" id="question_5_yes"
                                    value="yes" data-error="#err_question_5" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_5 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_5_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_5" id="question_5_no"
                                    value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_5 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_5_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_5"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            6. Institutional affiliation / status?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_6" id="question_6_yes"
                                    value="yes" data-error="#err_question_6" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_6 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_6_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_6" id="question_6_no"
                                    value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_6 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_6_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_6"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            7. Professional society membership or fellowship / Board
                            certification?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_7" id="question_7_yes"
                                    value="yes" data-error="#err_question_7" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_7 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_7_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_7" id="question_7_no"
                                    value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_7 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_7_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_7"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            8. Any professional sanction (e.g. government, administrative agency
                            or other)?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_8" id="question_8_yes"
                                    value="yes" data-error="#err_question_8" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_8 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_8_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_8" id="question_8_no"
                                    value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_8 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_8_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_8"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            9. Participation in any private, federal, or state health insurance
                            program
                            (e.g. Medicare, Medicaid)?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_9" id="question_9_yes"
                                    value="yes" data-error="#err_question_9" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_9 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_9_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_9" id="question_9_no"
                                    value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_9 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_9_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_9"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            10. Do you currently have any physical or mental condition including
                            current
                            alcohol or drug dependency that may affect your ability to practice
                            or exercise
                            the privileges typically associated with the specialty and position
                            for which
                            you are applying?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_10"
                                    id="question_10_yes" value="yes" data-error="#err_question_10" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_10 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_10_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_10"
                                    id="question_10_no" value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_10 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_10_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_10"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            11. Are you currently using illegal drugs or legal drugs in an
                            illegal manner?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_11"
                                    id="question_11_yes" value="yes" data-error="#err_question_11" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_11 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_11_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_11"
                                    id="question_11_no" value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_11 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_11_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_11"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            12. Is there any reason that you are unable to perform the essential
                            functions
                            of the position for which you are applying safely and
                            according to accepted standards of performance with or without
                            reasonable
                            accommodation?
                            (If yes, explain on the attached form)
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_12"
                                    id="question_12_yes" value="yes" data-error="#err_question_12" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_12 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_12_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_12"
                                    id="question_12_no" value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_12 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_12_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_12"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            13. Have you ever been convicted of, pled guilty to, or pled nolo
                            contendere
                            for, any criminal offense (excluding parking tickets)?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_13"
                                    id="question_13_yes" value="yes" data-error="#err_question_13" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_13 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_13_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_13"
                                    id="question_13_no" value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_13 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_13_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_13"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            14. Are any criminal charges currently pending against you in any
                            jurisdiction?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_14"
                                    id="question_14_yes" value="yes" data-error="#err_question_14" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_14 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_14_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_14"
                                    id="question_14_no" value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_14 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_14_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_14"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            15. Have you ever been arrested for or charged with a crime
                            involving children?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_15"
                                    id="question_15_yes" value="yes" data-error="#err_question_15" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_15 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_15_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_15"
                                    id="question_15_no" value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_15 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_15_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_15"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            16. Have you ever been arrested for or charged with a sexual offense
                            including
                            sexual harassment?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_16"
                                    id="question_16_yes" value="yes" data-error="#err_question_16" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_16 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_16_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_16"
                                    id="question_16_no" value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_16 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_16_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_16"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            17. Have you ever been arrested for or charged with a crime
                            involving moral
                            turpitude?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_17"
                                    id="question_17_yes" value="yes" data-error="#err_question_17" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_17 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_17_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_17"
                                    id="question_17_no" value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_17 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_17_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_17"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            18. Is there any other issue which should be disclosed that may have
                            an adverse
                            impact on your ability to deliver effective clinical health
                            care services?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_18"
                                    id="question_18_yes" value="yes" data-error="#err_question_18" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_18 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_18_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_18"
                                    id="question_18_no" value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_18 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_18_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_18"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            19. Has any information pertaining to you ever been reported to the
                            National
                            Practitioner Data Bank (NPDB) or Healthcare Integrity and
                            Protections Data Bank (HIPDB)?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_19"
                                    id="question_19_yes" value="yes" data-error="#err_question_19" required
                                    <?php echo e($disclusres_and_disciplinary_action->question_19 == 'yes' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_19_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="question_19"
                                    id="question_19_no" value="no"
                                    <?php echo e($disclusres_and_disciplinary_action->question_19 == 'no' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="question_19_no">No</label>
                            </div>
                        </div>
                        <div id="err_question_19"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/components/form-8.blade.php ENDPATH**/ ?>