@props(['licensing' => null, 'dea_substances' => null])

@if (($licensing == null && $dea_substances == null) || (empty($licensing) && empty($dea_substances)))
    <section id="step-4" class="tab-pane licensing mb-5" role="tabpanel" aria-labelledby="step-4">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                STATE LICENSING
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="col-md-12 mb-3">
                        Please enter the information in the table below for all states in
                        which you have held a medical license.
                    </p>

                    <div class="col-md-12" id="licensing_wrapper">

                        <div class="row licensing_wrapper_item">

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">State</label>

                                <select name="licensing_state[0]" class="form-select">
                                    <option value="">
                                        Select
                                    </option>
                                    <x-state></x-state>
                                </select>

                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    License Number
                                </label>
                                <input name="license_number[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    License Status
                                </label>
                                <select name="license_status[0]" class="form-select">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Date License Granted
                                </label>
                                <input name="license_granted_date[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    License Expiration Date
                                </label>
                                <input name="license_expiration_date[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    State Medicare Provider Number
                                </label>
                                <input name="state_medicare_provider_number[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    State Medicaid Provider Number
                                </label>
                                <input name="state_medicaid_provider_number[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group d-none">
                                <label class="form-label">
                                    State Controlled Substance Permit Number
                                </label>
                                <input name="state_controlled_substance_permit_number[0]" type="text"
                                    class="form-control" />
                            </div>

                        </div>

                        <div class="col-md-12">
                            <hr class="my-3">
                        </div>

                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('licensing_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="card border border-dark rounded mt-3">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                DEA + CONTROLLED SUBSTANCE
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="col-md-12 mb-3">
                        Please enter the information in the table below for all states in
                        which you have held a medical license.
                    </p>

                    <div class="col-md-12" id="licensing_dea_wrapper">

                        <div class="row licensing_dea_wrapper_item">

                            <p class="fw-bold mt-3">Federal Provider Information</p>

                            <div class="col-md-6 mb-3 form-group">
                                <label for="federal_dea_number" class="form-label">
                                    Federal DEA Number
                                </label>
                                <input name="federal_dea_number[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label for="dea_expiration_date" class="form-label">
                                    DEA Expiration Date
                                </label>
                                <input name="dea_expiration_date[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">State</label>

                                <select name="licensing_dea_state[0]" class="form-select">
                                    <option value="">
                                        Select
                                    </option>
                                    <x-state></x-state>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    State Controlled Substance Permit Number
                                </label>
                                <input name="dea_state_controlled_substance_permit_number[0]" type="text"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group d-none">
                                <label class="form-label">
                                    License Number
                                </label>
                                <input name="license_dea_number[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    License Status
                                </label>
                                <select name="license_dea_status[0]" class="form-select">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Date License Granted
                                </label>
                                <input name="license_dea_granted_date[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    License Expiration Date
                                </label>
                                <input name="license_dea_expiration_date[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group d-none">
                                <label class="form-label">
                                    State Medicare Provider Number
                                </label>
                                <input name="dea_state_medicare_provider_number[0]" type="text"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group d-none">
                                <label class="form-label">
                                    State Medicaid Provider Number
                                </label>
                                <input name="dea_state_medicaid_provider_number[0]" type="text"
                                    class="form-control" />
                            </div>

                        </div>

                        <div class="col-md-12">
                            <hr class="my-3">
                        </div>

                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('licensing_dea_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>

    </section>
@else
    <section id="step-4" class="tab-pane licensing mb-5" role="tabpanel" aria-labelledby="step-4">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                STATE LICENSING
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="col-md-12 mb-3">
                        Please enter the information in the table below for all states in
                        which you have held a medical license.
                    </p>

                    <div class="col-md-12" id="licensing_wrapper">

                        @foreach ($licensing as $key => $license)
                            <div class="row licensing_wrapper_item">

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">State</label>
                                    <select name="licensing_state[{{ $key }}]" class="form-select">
                                        <option value="{{ $license->licensing_state }}">
                                            {{ $license->licensing_state }}</option>
                                        <x-state></x-state>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        License Number
                                    </label>
                                    <input name="license_number[{{ $key }}]" type="text"
                                        class="form-control" value="{{ $license->license_number }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        License Status
                                    </label>
                                    <select name="license_status[{{ $key }}]" class="form-select">
                                        <option value="active"
                                            {{ $license->license_status == 'active' ? 'selected' : '' }}>
                                            Active</option>
                                        <option value="inactive"
                                            {{ $license->license_status == 'inactive' ? 'selected' : '' }}>
                                            Inactive</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Date License Granted
                                    </label>
                                    <input name="license_granted_date[{{ $key }}]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="{{ $license->license_granted_date }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        License Expiration Date
                                    </label>
                                    <input name="license_expiration_date[{{ $key }}]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="{{ $license->license_expiration_date }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        State Medicare Provider Number
                                    </label>
                                    <input name="state_medicare_provider_number[{{ $key }}]" type="text"
                                        class="form-control"
                                        value="{{ $license->state_medicare_provider_number }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        State Medicaid Provider Number
                                    </label>
                                    <input name="state_medicaid_provider_number[{{ $key }}]" type="text"
                                        class="form-control"
                                        value="{{ $license->state_medicaid_provider_number }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group d-none">
                                    <label class="form-label">
                                        State Controlled Substance Permit Number
                                    </label>
                                    <input name="state_controlled_substance_permit_number[{{ $key }}]"
                                        type="text" class="form-control"
                                        value="{{ $license->state_controlled_substance_permit_number }}" />
                                </div>

                            </div>

                            <div class="col-md-12">
                                <hr class="my-3">
                            </div>
                        @endforeach

                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('licensing_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="card border border-dark rounded mt-3">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                DEA + CONTROLLED SUBSTANCE
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="col-md-12 mb-3">
                        Please enter the information in the table below for all states in
                        which you have held a medical license.
                    </p>

                    <div class="col-md-12" id="licensing_dea_wrapper">
                        @foreach ($dea_substances as $key => $dea_substance)
                            <div class="row licensing_dea_wrapper_item">

                                <p class="fw-bold mt-3">Federal Provider Information</p>

                                <div class="col-md-6 mb-3 form-group">
                                    <label for="federal_dea_number" class="form-label">
                                        Federal DEA Number
                                    </label>
                                    <input name="federal_dea_number[{{ $key }}]" type="text"
                                        class="form-control" value="{{ $dea_substance->federal_dea_number }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label for="dea_expiration_date" class="form-label">
                                        DEA Expiration Date
                                    </label>
                                    <input name="dea_expiration_date[{{ $key }}]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="{{ $dea_substance->dea_expiration_date }}" />
                                </div>


                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">State</label>
                                    <select name="licensing_dea_state[{{ $key }}]" class="form-select">
                                        <option value="{{ $dea_substance->licensing_dea_state }}">
                                            {{ $dea_substance->licensing_dea_state }}</option>
                                        <x-state></x-state>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        State Controlled Substance Permit Number
                                    </label>
                                    <input name="dea_state_controlled_substance_permit_number[{{ $key }}]"
                                        type="text" class="form-control"
                                        value="{{ $dea_substance->dea_state_controlled_substance_permit_number }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group d-none">
                                    <label class="form-label">
                                        License Number
                                    </label>
                                    <input name="license_dea_number[{{ $key }}]" type="text"
                                        class="form-control" value="{{ $dea_substance->license_dea_number }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        License Status
                                    </label>
                                    <select name="license_dea_status[{{ $key }}]" class="form-select">
                                        <option value="active"
                                            {{ $dea_substance->license_dea_status == 'active' ? 'selected' : '' }}>
                                            Active</option>
                                        <option value="inactive"
                                            {{ $dea_substance->license_dea_status == 'inactive' ? 'selected' : '' }}>
                                            Inactive</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Date License Granted
                                    </label>
                                    <input name="license_dea_granted_date[{{ $key }}]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="{{ $dea_substance->license_dea_granted_date }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        License Expiration Date
                                    </label>
                                    <input name="license_dea_expiration_date[{{ $key }}]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="{{ $dea_substance->license_dea_expiration_date }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group d-none">
                                    <label class="form-label">
                                        State Medicare Provider Number
                                    </label>
                                    <input name="dea_state_medicare_provider_number[{{ $key }}]"
                                        type="text" class="form-control"
                                        value="{{ $dea_substance->dea_state_medicare_provider_number }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group d-none">
                                    <label class="form-label">
                                        State Medicaid Provider Number
                                    </label>
                                    <input name="dea_state_medicaid_provider_number[{{ $key }}]"
                                        type="text" class="form-control"
                                        value="{{ $dea_substance->dea_state_medicaid_provider_number }}" />
                                </div>

                            </div>

                            <div class="col-md-12">
                                <hr class="my-3">
                            </div>
                        @endforeach
                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('licensing_dea_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>

    </section>

@endif
