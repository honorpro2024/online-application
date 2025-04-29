@props(['additional_hospital_affiliations' => null])

@if ($additional_hospital_affiliations == null || empty($additional_hospital_affiliations))
    <section id="step-13" class="tab-pane additional-hospital-affiliations mb-5 d-none" role="tabpanel"
        aria-labelledby="step-13">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Additional Hospital Affiliations
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-12" id="additional_hospital_affiliations">

                        <div class="row additional_hospital_affiliations_item">

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Facility
                                </label>
                                <input name="ha_facility[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Phone
                                </label>
                                <input name="ha_phone[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Address
                                </label>
                                <input name="ha_address[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    City, State, Zip
                                </label>
                                <input name="ha_city_state_zip[0]" type="text" class="form-control"
                                    data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Contact
                                </label>
                                <input name="ha_contact[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Date From
                                </label>
                                <input name="ha_date_from[0]" type="date" max="9999-12-31" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Date TO
                                </label>
                                <input name="ha_date_to[0]" type="date" max="9999-12-31" class="form-control" />
                            </div>

                        </div>

                        <hr class="my-3">

                    </div>

                    <div class="clearfix mb-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('additional_hospital_affiliations_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@else
    <section id="step-13" class="tab-pane additional-hospital-affiliations mb-5 d-none" role="tabpanel"
        aria-labelledby="step-13">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Additional Hospital Affiliations
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-12" id="additional_hospital_affiliations">

                        @foreach ($additional_hospital_affiliations as $key => $aha)
                            <div class="row additional_hospital_affiliations_item">

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Facility
                                    </label>
                                    <input name="ha_facility[{{ $key }}]" type="text" class="form-control"
                                        value="{{ $aha->ha_facility }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Phone
                                    </label>
                                    <input name="ha_phone[{{ $key }}]" type="text" class="form-control"
                                        value="{{ $aha->ha_phone }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Address
                                    </label>
                                    <input name="ha_address[{{ $key }}]" type="text" class="form-control"
                                        value="{{ $aha->ha_address }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        City, State, Zip
                                    </label>
                                    <input name="ha_city_state_zip[{{ $key }}]" type="text"
                                        class="form-control" value="{{ $aha->ha_city_state_zip }}"
                                        data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Contact
                                    </label>
                                    <input name="ha_contact[{{ $key }}]" type="text" class="form-control"
                                        value="{{ $aha->ha_contact }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Date From
                                    </label>
                                    <input name="ha_date_from[{{ $key }}]" type="date" max="9999-12-31"
                                        class="form-control" value="{{ $aha->ha_date_from }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Date TO
                                    </label>
                                    <input name="ha_date_to[{{ $key }}]" type="date" max="9999-12-31"
                                        class="form-control" value="{{ $aha->ha_date_to }}" />
                                </div>

                            </div>

                            <hr class="my-3">
                        @endforeach

                        <div class="clearfix mb-3">
                            <button type="button" class="btn btn-sm btn-primary-soft"
                                onclick="cloneDiv('additional_hospital_affiliations_item')">
                                <i class="fe fe-plus"></i>
                                Add
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endif
