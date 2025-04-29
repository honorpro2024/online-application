@props(['hospital_and_affiliations' => null])

@if ($hospital_and_affiliations == null || empty($hospital_and_affiliations))
    <section id="step-7" class="tab-pane hospital-and-affiliations mb-5" role="tabpanel" aria-labelledby="step-7">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                HOSPITAL AND AFFILIATIONS
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="d-flex gap-5 mb-5">
                        <p class="mb-0">
                            Current Hospital And Other Facility Affiliations
                        </p>

                        <div class="form-check">
                            <input class="form-check-input" name="hospital_and_affiliation_apply" type="checkbox"
                                value="1" id="hospital_and_affiliation_apply">
                            <label class="form-check-label" for="hospital_and_affiliation_apply">
                                Does not apply
                            </label>
                        </div>
                    </div>

                    <div class="col-md-12" id="hospital_affiliation_wrapper">

                        <div class="row hospital_affiliation_wrapper_item">

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Primary Facility Name
                                </label>
                                <input name="primary_facility_name[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Appointment From
                                </label>
                                <input name="appointment_from[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Appointment To
                                </label>
                                <input name="appointment_to[0]" type="date" max="9999-12-31" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    City
                                </label>
                                <input name="appointment_city[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    State
                                </label>

                                <select name="appointment_state[0]" class="form-select">
                                    <option value="">
                                        Select
                                    </option>
                                    <x-state></x-state>
                                </select>

                            </div>

                        </div>

                        <div class="col-md-12">
                            <hr class="my-3">
                        </div>

                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('hospital_affiliation_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
@else
    <section id="step-7" class="tab-pane hospital-and-affiliations mb-5" role="tabpanel" aria-labelledby="step-7">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                HOSPITAL AND AFFILIATIONS
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="d-flex gap-5 mb-5">
                        <p class="mb-0">
                            Current Hospital And Other Facility Affiliations
                        </p>

                        <div class="form-check">
                            <input class="form-check-input" name="hospital_and_affiliation_apply" type="checkbox"
                                value="1" id="hospital_and_affiliation_apply"
                                {{ isset($hospital_and_affiliations[0]->hospital_and_affiliation_apply) && $hospital_and_affiliations[0]->hospital_and_affiliation_apply == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="hospital_and_affiliation_apply">
                                Does not apply
                            </label>
                        </div>
                    </div>

                    <div class="col-md-12" id="hospital_affiliation_wrapper">

                        @foreach ($hospital_and_affiliations as $key => $hospital_and_affiliation)
                            <div class="row hospital_affiliation_wrapper_item">

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Primary Facility Name
                                    </label>
                                    <input name="primary_facility_name[{{ $key }}]" type="text"
                                        class="form-control"
                                        value="{{ $hospital_and_affiliation->primary_facility_name }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Appointment From
                                    </label>
                                    <input name="appointment_from[{{ $key }}]" type="date" max="9999-12-31"
                                        class="form-control"
                                        value="{{ $hospital_and_affiliation->appointment_from }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Appointment To
                                    </label>
                                    <input name="appointment_to[{{ $key }}]" type="date" max="9999-12-31"
                                        class="form-control" value="{{ $hospital_and_affiliation->appointment_to }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        City
                                    </label>
                                    <input name="appointment_city[{{ $key }}]" type="text"
                                        class="form-control"
                                        value="{{ $hospital_and_affiliation->appointment_city }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        State
                                    </label>

                                    <select name="appointment_state[{{ $key }}]" class="form-select">
                                        <option value="{{ $hospital_and_affiliation->appointment_state }}">
                                            {{ $hospital_and_affiliation->appointment_state }}
                                        </option>
                                        <x-state></x-state>
                                    </select>

                                </div>

                            </div>

                            <div class="col-md-12">
                                <hr class="my-3">
                            </div>
                        @endforeach

                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('hospital_affiliation_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endif
