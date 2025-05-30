@props(['malpractice_information' => null, 'malpractice_claims', 'malpractice_claim_policies'])

@if ($malpractice_information == null || empty($malpractice_information))
    <section id="step-10" class="tab-pane malpractice-information mb-5" role="tabpanel" aria-labelledby="step-10">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Malpractice Information
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-2">
                            1. Have you ever been denied professional liability insurance or
                            denied renewal
                            of an existing policy?
                            <span class="text-danger">*</span>
                        </p>
                       <!--  <p>
                            If the answer to the above question is “YES” please attach a brief
                            explanation.
                        </p> -->
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="malpractice_question_1"
                                    id="malpractice_question_1_yes" value="yes" data-error="#malpractice_question_1" required
                                    onclick="toggleAttachment('yes')">
                                <label class="form-check-label" for="malpractice_question_1_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="malpractice_question_1"
                                    id="malpractice_question_1_no" value="no" onclick="toggleAttachment('no')">
                                <label class="form-check-label" for="malpractice_question_1_no">No</label>
                            </div>
                        </div>
                        <div id="malpractice_question_1"></div>
                    </div>

                    <!--  <div class="col-md-12 mb-3 form-group" id="attachment-wrapper" style="display:none">
                        <label class="form-label" for="attachment">
                            Attachment
                        </label>
                        <input class="form-control" type="file" name="attachment" id="attachment">
                    </div> -->

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-2">
                            2. Have any malpractice claims, suits, settlements, or arbitration
                            proceedings
                            ever been made against you including any that have been
                            dismissed?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="malpractice_question_2"
                                    id="malpractice_question_2_yes" value="yes" data-error="#malpractice_question_2"
                                    required>
                                <label class="form-check-label" for="malpractice_question_2_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="malpractice_question_2"
                                    id="malpractice_question_2_no" value="no">
                                <label class="form-check-label" for="malpractice_question_2_no">No</label>
                            </div>
                        </div>
                        <div id="malpractice_question_2"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-2">
                            3. Are you aware of any claims, suits, or settlements currently
                            pending or of
                            any intent to file a claim or suit?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="malpractice_question_3"
                                    value="yes" data-error="#malpractice_question_3" required>
                                <label class="form-check-label" for="malpractice_question_3_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="malpractice_question_3"
                                    id="malpractice_question_3_no" value="no">
                                <label class="form-check-label" for="malpractice_question_3_no">No</label>
                            </div>
                        </div>
                        <div id="malpractice_question_3"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            If your answer to either of the above questions is “Yes” please
                            provide the
                            following information on each claim and provide a brief clinical
                            summary of each case on the attached Professional Liability Claims
                            Information
                            Form..
                        </p>
                    </div>

                    <div class="col-md-12" id="insurance_claim_wrapper">

                        <div class="row insurance_claim_wrapper_item">

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Plaintiff Name and Insurance Carrier
                                </label>
                                <input name="plantiff_name[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Location (County, State)
                                </label>
                                <input name="location[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Status
                                    (Dismissed / Settled /
                                    Judgment / Pending)
                                </label>
                                <input name="status[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Date
                                    of Incident
                                </label>
                                <input name="date_of_incident[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Amount of Award
                                    or Settlement
                                    (if appropriate)
                                </label>
                                <input name="amount_of_award[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="summary_included[0]" type="checkbox"
                                        value="1">
                                    <label class="form-check-label">
                                        Summary Included
                                    </label>
                                </div>
                            </div>

                        </div>

                        <hr class="my-3">

                    </div>

                    <div class="clearfix mb-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('insurance_claim_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12 mt-5 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="additional_malpractice_claim" type="checkbox"
                                value="1">
                            <label class="form-check-label">
                                Additional Malpractice Claims or incidents are listed on
                                attached sheet
                            </label>
                        </div>
                    </div>

                    <p class="fw-bold mb-3">
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

                        <div class="row additional_insurance_claim_wrapper_item">

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Malpractice Insurance Carrier
                                </label>
                                <input name="malpractice_insurance_carrier[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Policy Number
                                </label>
                                <input name="policy_number[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Policy Dates From
                                </label>
                                <input name="policy_date_from[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Policy Dates To
                                </label>
                                <input name="policy_date_to[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Amount of Coverage
                                </label>
                                <input name="amount_of_coverage[0]" type="text" class="form-control" />
                            </div>

                        </div>

                        <hr class="my-3">

                    </div>

                    <div class="clearfix mb-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('additional_insurance_claim_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
@else
    <section id="step-10" class="tab-pane malpractice-information mb-5" role="tabpanel" aria-labelledby="step-10">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Malpractice Information
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-2">
                            1. Have you ever been denied professional liability insurance or
                            denied renewal
                            of an existing policy?
                            <span class="text-danger">*</span>
                        </p>
                        <p>
                            If the answer to the above question is “YES” please attach a brief
                            explanation.
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="malpractice_question_1"
                                    id="malpractice_question_1_yes" value="yes" data-error="#malpractice_question_1"
                                    required onclick="toggleAttachment('yes')"
                                    {{ $malpractice_information->malpractice_question_1 == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="malpractice_question_1_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="malpractice_question_1"
                                    id="malpractice_question_1_no" value="no" onclick="toggleAttachment('no')"
                                    {{ $malpractice_information->malpractice_question_1 == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="malpractice_question_1_no">No</label>
                            </div>
                        </div>
                        <div id="malpractice_question_1"></div>
                    </div>

                    <div class="col-md-12 mb-3 form-group" id="attachment-wrapper"
                        style="display:{{ $malpractice_information->malpractice_question_1 == 'yes' ? 'block' : 'none' }}">
                        <label class="form-label" for="attachment">
                            Attachment
                        </label>
                        <input class="form-control" type="file" name="attachment" id="attachment"
                            {{ ($malpractice_information->malpractice_question_1 == 'yes' && $malpractice_information->attachment == '') ? 'required' : '' }}>
                    </div>

                    @if ($malpractice_information->attachment != '')
                        <div class="col-md-12 mb-3 form-group">
                            <a href="{{ asset('assets/attachments/' . $malpractice_information->attachment) }}"
                                target="_blank" class="btn btn-sm btn-warning">
                                View Attachment
                            </a>
                        </div>
                    @endif

                    <input type="hidden" name="attachment_file" value="{{ $malpractice_information->attachment }}">

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-2">
                            2. Have any malpractice claims, suits, settlements, or arbitration
                            proceedings
                            ever been made against you including any that have been
                            dismissed?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="malpractice_question_2"
                                    id="malpractice_question_2_yes" value="yes" data-error="#malpractice_question_2"
                                    required
                                    {{ $malpractice_information->malpractice_question_2 == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="malpractice_question_2_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="malpractice_question_2"
                                    id="malpractice_question_2_no" value="no"
                                    {{ $malpractice_information->malpractice_question_2 == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="malpractice_question_2_no">No</label>
                            </div>
                        </div>
                        <div id="malpractice_question_2"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-2">
                            3. Are you aware of any claims, suits, or settlements currently
                            pending or of
                            any intent to file a claim or suit?
                            <span class="text-danger">*</span>
                        </p>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="malpractice_question_3"
                                    value="yes" data-error="#malpractice_question_3" required
                                    {{ $malpractice_information->malpractice_question_3 == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="malpractice_question_3_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="malpractice_question_3"
                                    id="malpractice_question_3_no" value="no"
                                    {{ $malpractice_information->malpractice_question_3 == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="malpractice_question_3_no">No</label>
                            </div>
                        </div>
                        <div id="malpractice_question_3"></div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <p class="fw-bold mb-0">
                            If your answer to either of the above questions is “Yes” please
                            provide the
                            following information on each claim and provide a brief clinical
                            summary of each case on the attached Professional Liability Claims
                            Information
                            Form..
                        </p>
                    </div>

                    <div class="col-md-12" id="insurance_claim_wrapper">

                        @foreach ($malpractice_claims as $key => $malpractice_claim)
                            <div class="row insurance_claim_wrapper_item">

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Plaintiff Name and Insurance Carrier
                                    </label>
                                    <input name="plantiff_name[{{ $key }}]" type="text"
                                        class="form-control" value="{{ $malpractice_claim->plantiff_name }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Location (County, State)
                                    </label>
                                    <input name="location[{{ $key }}]" type="text" class="form-control"
                                        value="{{ $malpractice_claim->location }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Status
                                        (Dismissed / Settled /
                                        Judgment / Pending)
                                    </label>
                                    <input name="status[{{ $key }}]" type="text" class="form-control"
                                        value="{{ $malpractice_claim->status }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Date
                                        of Incident
                                    </label>
                                    <input name="date_of_incident[{{ $key }}]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="{{ $malpractice_claim->date_of_incident }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Amount of Award
                                        or Settlement
                                        (if appropriate)
                                    </label>
                                    <input name="amount_of_award[{{ $key }}]" type="text"
                                        class="form-control" value="{{ $malpractice_claim->amount_of_award }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                    </label>
                                    <div class="form-check">
                                        <input class="form-check-input" name="summary_included[{{ $key }}]"
                                            type="checkbox" value="1"
                                            {{ $malpractice_claim->summary_included == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label">
                                            Summary Included
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <hr class="my-3">
                        @endforeach

                    </div>

                    <div class="clearfix mb-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('insurance_claim_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12 mt-5 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="additional_malpractice_claim" type="checkbox"
                                value="1"
                                {{ $malpractice_information->additional_malpractice_claim == '1' ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Additional Malpractice Claims or incidents are listed on
                                attached sheet
                            </label>
                        </div>
                    </div>

                    <p class="fw-bold mb-3">
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

                        @foreach ($malpractice_claim_policies as $key => $malpractice_claim_policy)
                            <div class="row additional_insurance_claim_wrapper_item">

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Malpractice Insurance Carrier
                                    </label>
                                    <input name="malpractice_insurance_carrier[{{ $key }}]" type="text"
                                        class="form-control"
                                        value="{{ $malpractice_claim_policy->malpractice_insurance_carrier }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Policy Number
                                    </label>
                                    <input name="policy_number[{{ $key }}]" type="text"
                                        class="form-control"
                                        value="{{ $malpractice_claim_policy->policy_number }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Policy Dates From
                                    </label>
                                    <input name="policy_date_from[{{ $key }}]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="{{ $malpractice_claim_policy->policy_date_from }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Policy Dates To
                                    </label>
                                    <input name="policy_date_to[{{ $key }}]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="{{ $malpractice_claim_policy->policy_date_to }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Amount of Coverage
                                    </label>
                                    <input name="amount_of_coverage[{{ $key }}]" type="text"
                                        class="form-control"
                                        value="{{ $malpractice_claim_policy->amount_of_coverage }}" />
                                </div>

                            </div>

                            <hr class="my-3">
                        @endforeach

                    </div>

                    <div class="clearfix mb-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('additional_insurance_claim_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endif
