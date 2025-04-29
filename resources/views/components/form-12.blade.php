@props(['professional_liability_claim' => null])

@if ($professional_liability_claim == null || empty($professional_liability_claim))
    <section id="step-12" class="tab-pane professional-liability-claims-information-form mb-5" role="tabpanel"
        aria-labelledby="step-12">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Professional Liability Claims Information Form
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="mb-3 fw-bold">
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
                            Provider's Name
                        </label>
                        <input name="providers_name" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            Name of Patient Involved
                        </label>
                        <input name="patient_involved" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            Age
                        </label>
                        <input name="patient_age" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            Month and Year of Occurrence
                        </label>
                        <input name="month_year_occurrence" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            Month and Year of Lawsuit
                        </label>
                        <input name="month_year_lawsuit" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            Event Precipitating Claim
                        </label>
                        <input name="event_precipitating_claim" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            Insurance Carrier at Time
                        </label>
                        <input name="insurance_carrier_at_time" type="text" class="form-control" />
                    </div>

                    <div class="col-md-12 mb-3 form-group">
                        <label for="claim_status" class="form-label me-3">
                            What is/was your status
                        </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="claim_status"
                                value="primary_defendant">
                            <label class="form-check-label">Primary Defendant</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="claim_status" value="co_defendant">
                            <label class="form-check-label">Co-defendant</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="claim_status" value="other">
                            <label class="form-check-label">Other</label>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3 form-group">
                        <label class="form-label">
                            Please list other Defendants
                        </label>
                        <input name="defendants" type="text" class="form-control" />
                    </div>

                    <div class="col-md-12 mb-3 form-group">
                        <label class="form-label">
                            What was the patient's outcome?
                        </label>
                        <input name="patients_outcome" type="text" class="form-control" />
                    </div>

                    <div class="col-md-12 mb-3 form-group">
                        <label class="form-label">
                            How were you alleged to have caused harm or injury to this patient?
                        </label>
                        <input name="alleged_to_harm" type="text" class="form-control" />
                    </div>

                    <div class="col-md-12 mb-3 form-group">
                        <label class="form-label">
                            Please provide specifics in reference to the adverse event:
                        </label>
                        <input name="reference_to_adverse_events" type="text" class="form-control" maxlength="255" />
                    </div>

                    <div class="col-md-12 mb-3 form-group">
                        <label class="form-label">
                            What is/was your role in this event?
                        </label>
                        <input name="event_role" type="text" class="form-control" />
                    </div>

                    <p class="mb-3 fw-bold">
                        Current Status: (please check one)
                    </p>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            <div class="form-check">
                                <input class="form-check-input" name="status_pending" type="checkbox" value="1">
                                <label class="form-check-label">
                                    Still pending: as of (date)
                                </label>
                            </div>
                        </label>
                        <input name="pending_status_date" type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            Who is handling the defense of the case?
                        </label>
                        <input name="defense_case_handling" type="text" class="form-control" />
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="col-md-4 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="awaiting_trial" type="checkbox" value="1">
                            <label class="form-check-label">
                                Trial date set, awaiting trial?
                            </label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3 form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="awaiting_trial_check"
                                value="yes">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="awaiting_trial_check"
                                value="no">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>

                    <div class="col-md-5 mb-3 form-group">
                        <label class="form-label">Trial Date</label>
                        <input name="awaiting_trial_date" type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="settled_out_of_court" type="checkbox"
                                value="1">
                            <label class="form-check-label">
                                Settled out of court?
                            </label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3 form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="settled_out_of_court_check"
                                value="yes">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="settled_out_of_court_check"
                                value="no">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>

                    <div class="col-md-5 mb-3 form-group">
                        <label class="form-label">Date</label>
                        <input name="settled_out_of_court_date" type="date" max="9999-12-31"
                            class="form-control" />
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">Amount of Total Settlement: $</label>
                        <input name="total_settlement_amount" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">Amount Paid on Your Behalf: $</label>
                        <input name="paid_settlement_amount" type="text" class="form-control" />
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="col-md-6 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="status_dismissed" type="checkbox" value="1">
                            <label class="form-check-label">
                                Dismissed:
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">Date</label>
                        <input name="dissmissed_date" type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="col-md-6 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="status_defense_verdict" type="checkbox"
                                value="1">
                            <label class="form-check-label">
                                Defense Verdict:
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">Date</label>
                        <input name="defense_verdict_date" type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="col-md-6 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="status_plaintiff_verdict" type="checkbox"
                                value="1">
                            <label class="form-check-label">
                                Plaintiff Verdict:
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">Date</label>
                        <input name="plaintiff_verdict_date" type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="col-md-6 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="status_judgement_amount" type="checkbox"
                                value="1">
                            <label class="form-check-label">
                                Judgment Amount: $
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <input name="judgement_amount" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">Date</label>
                        <input name="judgement_date" type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">Amount of Total Judgment: $</label>
                        <input name="judgement_total_amount" type="text" class="form-control" />
                    </div>

                    <div class="clearfix"></div>

                    <p class="fw-bold mb-3">
                        This professional Liability Claims Information Form is required on all
                        claims/lawsuits. Clinical details are required for all suits.
                    </p>

                    <div class="col-md-12 mt-5 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="signature" id="signature" type="checkbox" value="1">
                            <label class="form-check-label">
                                By checking the box, I certify that I have completed this
                                application to the best of my knowledge and have not withheld or
                                submitted misleading information.
                            </label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@else
    <section id="step-12" class="tab-pane professional-liability-claims-information-form mb-5" role="tabpanel"
        aria-labelledby="step-12">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Professional Liability Claims Information Form
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="mb-3 fw-bold">
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
                            Provider's Name
                        </label>
                        <input name="providers_name" type="text" class="form-control"
                            value="{{ $professional_liability_claim->providers_name }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            Name of Patient Involved
                        </label>
                        <input name="patient_involved" type="text" class="form-control"
                            value="{{ $professional_liability_claim->patient_involved }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            Age
                        </label>
                        <input name="patient_age" type="text" class="form-control"
                            value="{{ $professional_liability_claim->patient_age }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            Month and Year of Occurrence
                        </label>
                        <input name="month_year_occurrence" type="text" class="form-control"
                            value="{{ $professional_liability_claim->month_year_occurrence }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            Month and Year of Lawsuit
                        </label>
                        <input name="month_year_lawsuit" type="text" class="form-control"
                            value="{{ $professional_liability_claim->month_year_lawsuit }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            Event Precipitating Claim
                        </label>
                        <input name="event_precipitating_claim" type="text" class="form-control"
                            value="{{ $professional_liability_claim->event_precipitating_claim }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            Insurance Carrier at Time
                        </label>
                        <input name="insurance_carrier_at_time" type="text" class="form-control"
                            value="{{ $professional_liability_claim->insurance_carrier_at_time }}" />
                    </div>

                    <div class="col-md-12 mb-3 form-group">
                        <label for="claim_status" class="form-label me-3">
                            What is/was your status
                        </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="claim_status"
                                value="primary_defendant"
                                {{ $professional_liability_claim->claim_status == 'primary_defendant' ? 'checked' : '' }}>
                            <label class="form-check-label">Primary Defendant</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="claim_status" value="co_defendant"
                                {{ $professional_liability_claim->claim_status == 'co_defendant' ? 'checked' : '' }}>
                            <label class="form-check-label">Co-defendant</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="claim_status" value="other"
                                {{ $professional_liability_claim->claim_status == 'other' ? 'checked' : '' }}>
                            <label class="form-check-label">Other</label>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3 form-group">
                        <label class="form-label">
                            Please list other Defendants
                        </label>
                        <input name="defendants" type="text" class="form-control"
                            value="{{ $professional_liability_claim->defendants }}" />
                    </div>

                    <div class="col-md-12 mb-3 form-group">
                        <label class="form-label">
                            What was the patient's outcome?
                        </label>
                        <input name="patients_outcome" type="text" class="form-control"
                            value="{{ $professional_liability_claim->patients_outcome }}" />
                    </div>

                    <div class="col-md-12 mb-3 form-group">
                        <label class="form-label">
                            How were you alleged to have caused harm or injury to this patient?
                        </label>
                        <input name="alleged_to_harm" type="text" class="form-control"
                            value="{{ $professional_liability_claim->alleged_to_harm }}" />
                    </div>

                    <div class="col-md-12 mb-3 form-group">
                        <label class="form-label">
                            Please provide specifics in reference to the adverse event:
                        </label>
                        <input name="reference_to_adverse_events" type="text" class="form-control"
                            value="{{ $professional_liability_claim->reference_to_adverse_events }}" maxlength="255" />
                    </div>

                    <div class="col-md-12 mb-3 form-group">
                        <label class="form-label">
                            What is/was your role in this event?
                        </label>
                        <input name="event_role" type="text" class="form-control"
                            value="{{ $professional_liability_claim->event_role }}" />
                    </div>

                    <p class="mb-3 fw-bold">
                        Current Status: (please check one)
                    </p>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            <div class="form-check">
                                <input class="form-check-input" name="status_pending" type="checkbox" value="1"
                                    {{ $professional_liability_claim->status_pending == '1' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                    Still pending: as of (date)
                                </label>
                            </div>
                        </label>
                        <input name="pending_status_date" type="date" max="9999-12-31" class="form-control"
                            value="{{ $professional_liability_claim->pending_status_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">
                            Who is handling the defense of the case?
                        </label>
                        <input name="defense_case_handling" type="text" class="form-control"
                            value="{{ $professional_liability_claim->defense_case_handling }}" />
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="col-md-4 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="awaiting_trial" type="checkbox" value="1"
                                {{ $professional_liability_claim->awaiting_trial == '1' ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Trial date set, awaiting trial?
                            </label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3 form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="awaiting_trial_check"
                                value="yes"
                                {{ $professional_liability_claim->awaiting_trial_check == 'yes' ? 'checked' : '' }}>
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="awaiting_trial_check"
                                value="no"
                                {{ $professional_liability_claim->awaiting_trial_check == 'no' ? 'checked' : '' }}>
                            <label class="form-check-label">No</label>
                        </div>
                    </div>

                    <div class="col-md-5 mb-3 form-group">
                        <label class="form-label">Trial Date</label>
                        <input name="awaiting_trial_date" type="date" max="9999-12-31" class="form-control"
                            value="{{ $professional_liability_claim->awaiting_trial_date }}" />
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="settled_out_of_court" type="checkbox"
                                value="1"
                                {{ $professional_liability_claim->settled_out_of_court == '1' ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Settled out of court?
                            </label>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3 form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="settled_out_of_court_check"
                                value="yes"
                                {{ $professional_liability_claim->settled_out_of_court_check == 'yes' ? 'checked' : '' }}>
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="settled_out_of_court_check"
                                value="no"
                                {{ $professional_liability_claim->settled_out_of_court_check == 'no' ? 'checked' : '' }}>
                            <label class="form-check-label">No</label>
                        </div>
                    </div>

                    <div class="col-md-5 mb-3 form-group">
                        <label class="form-label">Date</label>
                        <input name="settled_out_of_court_date" type="date" max="9999-12-31" class="form-control"
                            value="{{ $professional_liability_claim->settled_out_of_court_date }}" />
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">Amount of Total Settlement: $</label>
                        <input name="total_settlement_amount" type="text" class="form-control"
                            value="{{ $professional_liability_claim->total_settlement_amount }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">Amount Paid on Your Behalf: $</label>
                        <input name="paid_settlement_amount" type="text" class="form-control"
                            value="{{ $professional_liability_claim->paid_settlement_amount }}" />
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="col-md-6 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="status_dismissed" type="checkbox" value="1"
                                {{ $professional_liability_claim->status_dismissed == '1' ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Dismissed:
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">Date</label>
                        <input name="dissmissed_date" type="date" max="9999-12-31" class="form-control"
                            value="{{ $professional_liability_claim->dissmissed_date }}" />
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="col-md-6 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="status_defense_verdict" type="checkbox"
                                value="1"
                                {{ $professional_liability_claim->status_defense_verdict == '1' ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Defense Verdict:
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">Date</label>
                        <input name="defense_verdict_date" type="date" max="9999-12-31" class="form-control"
                            value="{{ $professional_liability_claim->defense_verdict_date }}" />
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="col-md-6 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="status_plaintiff_verdict" type="checkbox"
                                value="1"
                                {{ $professional_liability_claim->status_plaintiff_verdict == '1' ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Plaintiff Verdict:
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">Date</label>
                        <input name="plaintiff_verdict_date" type="date" max="9999-12-31" class="form-control"
                            value="{{ $professional_liability_claim->plaintiff_verdict_date }}" />
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="col-md-6 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="status_judgement_amount" type="checkbox"
                                value="1"
                                {{ $professional_liability_claim->status_judgement_amount == '1' ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Judgment Amount: $
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <input name="judgement_amount" type="text" class="form-control"
                            value="{{ $professional_liability_claim->judgement_amount }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">Date</label>
                        <input name="judgement_date" type="date" max="9999-12-31" class="form-control"
                            value="{{ $professional_liability_claim->judgement_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label class="form-label">Amount of Total Judgment: $</label>
                        <input name="judgement_total_amount" type="text" class="form-control"
                            value="{{ $professional_liability_claim->judgement_total_amount }}" />
                    </div>

                    <div class="clearfix"></div>

                    <p class="fw-bold mb-3">
                        This professional Liability Claims Information Form is required on all
                        claims/lawsuits. Clinical details are required for all suits.
                    </p>

                    <div class="col-md-12 mt-5 mb-3 form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="signature" id="signature" type="checkbox" value="1">
                            <label class="form-check-label">
                                By checking the box, I certify that I have completed this
                                application to the best of my knowledge and have not withheld or
                                submitted misleading information.
                            </label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endif
