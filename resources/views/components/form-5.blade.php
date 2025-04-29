@props(['references' => null])
@if ($references == null || empty($references))
    <section id="step-5" class="tab-pane references mb-5" role="tabpanel" aria-labelledby="step-5">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                REFERENCES
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="mb-3">
                        Please list 4 references with 2 of 4 being same specialty references
                        within the last
                        24 months
                    </p>

                    <p class="col-md-12 fw-bold">Reference #1</p>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_name" class="form-label">
                            Name
                        </label>
                        <input id="reference_1_name" name="reference_1_name" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_specialty" class="form-label">
                            Specialty
                        </label>
                        <select class="form-select" id="reference_1_specialty" name="reference_1_specialty">
                            <option value="">Select Your Specialty</option>
                            <x-speciality></x-speciality>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_phone_no" class="form-label">
                            Phone # <span class="text-danger">*</span>
                        </label>
                        <input id="reference_1_phone_no" name="reference_1_phone_no" type="text" class="form-control unique_phone_no"
                            oninput="validateNumber(this)" maxlength="10" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_position" class="form-label">
                            Title / Position
                        </label>
                        <input id="reference_1_position" name="reference_1_position" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_address" class="form-label">
                            Address
                        </label>
                        <input id="reference_1_address" name="reference_1_address" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_city" class="form-label">
                            City
                        </label>
                        <input id="reference_1_city" name="reference_1_city" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_state" class="form-label">
                            State
                        </label>
                        <select name="reference_1_state" class="form-select">
                            <option value="">
                                Select
                            </option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_1_zipcode" class="form-label">
                            Zip code
                        </label>
                        <input id="reference_1_zipcode" name="reference_1_zipcode" type="text" class="form-control"
                            data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_1_fax" class="form-label">
                            Fax #
                        </label>
                        <input id="reference_1_fax" name="reference_1_fax" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_email" class="form-label">
                            Email <span class="text-danger">*</span>
                        </label>
                        <input id="reference_1_email" name="reference_1_email" type="text" class="form-control unique_email" data-rule-email="true"
                            required />
                    </div>

                    <div class="col-md-12 form-group mb-2">
                        <label class="form-label">
                            Years worked together
                        </label>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_years_work_together_start" class="form-label">
                            Start
                        </label>
                        <input id="reference_1_years_work_together_start" name="reference_1_years_work_together_start"
                            type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_years_work_together_end" class="form-label">
                            End
                        </label>
                        <input id="reference_1_years_work_together_end" name="reference_1_years_work_together_end"
                            type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_facility" class="form-label">
                            Facility
                        </label>
                        <input id="reference_1_facility" name="reference_1_facility" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-12">
                        <hr class="my-3">
                    </div>

                    <p class="col-md-12 fw-bold">Reference #2</p>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_name" class="form-label">
                            Name
                        </label>
                        <input id="reference_2_name" name="reference_2_name" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_specialty" class="form-label">
                            Specialty
                        </label>
                        <select class="form-select" id="reference_2_specialty" name="reference_2_specialty">
                            <option value="">Select Your Specialty</option>
                            <x-speciality></x-speciality>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_phone_no" class="form-label">
                            Phone # <span class="text-danger">*</span>
                        </label>
                        <input id="reference_2_phone_no" name="reference_2_phone_no" type="text"
                            class="form-control unique_phone_no" oninput="validateNumber(this)" maxlength="10" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_position" class="form-label">
                            Title / Position
                        </label>
                        <input id="reference_2_position" name="reference_2_position" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_address" class="form-label">
                            Address
                        </label>
                        <input id="reference_2_address" name="reference_2_address" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_city" class="form-label">
                            City
                        </label>
                        <input id="reference_2_city" name="reference_2_city" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_state" class="form-label">
                            State
                        </label>
                        <select name="reference_2_state" class="form-select">
                            <option value="">
                                Select
                            </option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_2_zipcode" class="form-label">
                            Zip code
                        </label>
                        <input id="reference_2_zipcode" name="reference_2_zipcode" type="text"
                            class="form-control" data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_2_fax" class="form-label">
                            Fax #
                        </label>
                        <input id="reference_2_fax" name="reference_2_fax" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_email" class="form-label">
                            Email 
                            <span class="text-danger">*</span>
                        </label>
                        <input id="reference_2_email" name="reference_2_email" type="text" 
                        class="form-control unique_email" data-rule-email="true"
                            required />
                    </div>

                    <div class="col-md-12 form-group mb-2">
                        <label class="form-label">
                            Years worked together
                        </label>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_years_work_together_start" class="form-label">
                            Start
                        </label>
                        <input id="reference_2_years_work_together_start" name="reference_2_years_work_together_start"
                            type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_years_work_together_end" class="form-label">
                            End
                        </label>
                        <input id="reference_2_years_work_together_end" name="reference_2_years_work_together_end"
                            type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_facility" class="form-label">
                            Facility
                        </label>
                        <input id="reference_2_facility" name="reference_2_facility" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-12">
                        <hr class="my-3">
                    </div>

                    <p class="col-md-12 fw-bold">Reference #3</p>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_name" class="form-label">
                            Name
                        </label>
                        <input id="reference_3_name" name="reference_3_name" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_specialty" class="form-label">
                            Specialty
                        </label>
                        <select class="form-select" id="reference_3_specialty" name="reference_3_specialty">
                            <option value="">Select Your Specialty</option>
                            <x-speciality></x-speciality>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_phone_no" class="form-label">
                            Phone # <span class="text-danger">*</span>
                        </label>
                        <input id="reference_3_phone_no" name="reference_3_phone_no" type="text"
                            class="form-control unique_phone_no" oninput="validateNumber(this)" maxlength="10" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_position" class="form-label">
                            Title / Position
                        </label>
                        <input id="reference_3_position" name="reference_3_position" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_address" class="form-label">
                            Address
                        </label>
                        <input id="reference_3_address" name="reference_3_address" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_city" class="form-label">
                            City
                        </label>
                        <input id="reference_3_city" name="reference_3_city" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_state" class="form-label">
                            State
                        </label>
                        <select name="reference_3_state" class="form-select">
                            <option value="">
                                Select
                            </option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_3_zipcode" class="form-label">
                            Zip code
                        </label>
                        <input id="reference_3_zipcode" name="reference_3_zipcode" type="text"
                            class="form-control" data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_3_fax" class="form-label">
                            Fax #
                        </label>
                        <input id="reference_3_fax" name="reference_3_fax" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_email" class="form-label">
                            Email <span class="text-danger">*</span>
                        </label>
                        <input id="reference_3_email" name="reference_3_email" type="text" class="form-control unique_email" data-rule-email="true"
                            required />
                    </div>

                    <div class="col-md-12 form-group mb-2">
                        <label class="form-label">
                            Years worked together
                        </label>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_years_work_together_start" class="form-label">
                            Start
                        </label>
                        <input id="reference_3_years_work_together_start" name="reference_3_years_work_together_start"
                            type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_years_work_together_end" class="form-label">
                            End
                        </label>
                        <input id="reference_3_years_work_together_end" name="reference_3_years_work_together_end"
                            type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_facility" class="form-label">
                            Facility
                        </label>
                        <input id="reference_3_facility" name="reference_3_facility" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-12">
                        <hr class="my-3">
                    </div>

                    <p class="col-md-12 fw-bold">Reference #4</p>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_name" class="form-label">
                            Name
                        </label>
                        <input id="reference_4_name" name="reference_4_name" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_specialty" class="form-label">
                            Specialty
                        </label>
                        <select class="form-select" id="reference_4_specialty" name="reference_4_specialty">
                            <option value="">Select Your Specialty</option>
                            <x-speciality></x-speciality>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_phone_no" class="form-label">
                            Phone # <span class="text-danger">*</span>
                        </label>
                        <input id="reference_4_phone_no" name="reference_4_phone_no" type="text"
                            class="form-control unique_phone_no" oninput="validateNumber(this)" maxlength="10" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_position" class="form-label">
                            Title / Position
                        </label>
                        <input id="reference_4_position" name="reference_4_position" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_address" class="form-label">
                            Address
                        </label>
                        <input id="reference_4_address" name="reference_4_address" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_city" class="form-label">
                            City
                        </label>
                        <input id="reference_4_city" name="reference_4_city" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_state" class="form-label">
                            State
                        </label>
                        <select name="reference_4_state" class="form-select">
                            <option value="">
                                Select
                            </option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_4_zipcode" class="form-label">
                            Zip code
                        </label>
                        <input id="reference_4_zipcode" name="reference_4_zipcode" type="text"
                            class="form-control" data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_4_fax" class="form-label">
                            Fax #
                        </label>
                        <input id="reference_4_fax" name="reference_4_fax" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_email" class="form-label">
                            Email <span class="text-danger">*</span>
                        </label>
                        <input id="reference_4_email" name="reference_4_email" type="text" class="form-control unique_email" data-rule-email="true"
                            required />
                    </div>

                    <div class="col-md-12 form-group mb-2">
                        <label class="form-label">
                            Years worked together
                        </label>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_years_work_together_start" class="form-label">
                            Start
                        </label>
                        <input id="reference_4_years_work_together_start" name="reference_4_years_work_together_start"
                            type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_years_work_together_end" class="form-label">
                            End
                        </label>
                        <input id="reference_4_years_work_together_end" name="reference_4_years_work_together_end"
                            type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_facility" class="form-label">
                            Facility
                        </label>
                        <input id="reference_4_facility" name="reference_4_facility" type="text"
                            class="form-control" />
                    </div>

                </div>
            </div>
        </div>
    </section>
@else
    <section id="step-5" class="tab-pane references mb-5" role="tabpanel" aria-labelledby="step-5">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                REFERENCES
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="mb-3">
                        Please list 4 references with 2 of 4 being same specialty references
                        within the last
                        24 months
                    </p>

                    <p class="col-md-12 fw-bold">Reference #1</p>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_name" class="form-label">
                            Name
                        </label>
                        <input id="reference_1_name" name="reference_1_name" type="text" class="form-control"
                            value="{{ $references[0]->reference_1_name ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_specialty" class="form-label">
                            Specialty
                        </label>
                        <select class="form-select" id="reference_1_specialty" name="reference_1_specialty">
                            @if ($references[0]->reference_1_specialty == '')
                                <option value="">Select Your Specialty</option>
                            @else
                                <option value="{{ $references[0]->reference_1_specialty }}">
                                    {{ $references[0]->reference_1_specialty }}
                                </option>
                            @endif
                            <x-speciality></x-speciality>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_phone_no" class="form-label">
                            Phone # <span class="text-danger">*</span>
                        </label>
                        <input id="reference_1_phone_no" name="reference_1_phone_no" type="text"
                            class="form-control unique_phone_no" value="{{ $references[0]->reference_1_phone_no ?? '' }}"
                            oninput="validateNumber(this)" maxlength="10" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_position" class="form-label">
                            Title / Position
                        </label>
                        <input id="reference_1_position" name="reference_1_position" type="text"
                            class="form-control" value="{{ $references[0]->reference_1_position ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_address" class="form-label">
                            Address
                        </label>
                        <input id="reference_1_address" name="reference_1_address" type="text"
                            class="form-control" value="{{ $references[0]->reference_1_address ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_city" class="form-label">
                            City
                        </label>
                        <input id="reference_1_city" name="reference_1_city" type="text" class="form-control"
                            value="{{ $references[0]->reference_1_city ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_state" class="form-label">
                            State
                        </label>

                        <select name="reference_1_state" class="form-select">
                            <option value="{{ $references[0]->reference_1_state ?? '' }}">
                                {{ $references[0]->reference_1_state ?? '' }}
                            </option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_1_zipcode" class="form-label">
                            Zip code
                        </label>
                        <input id="reference_1_zipcode" name="reference_1_zipcode" type="text"
                            class="form-control" value="{{ $references[0]->reference_1_zipcode ?? '' }}"
                            data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_1_fax" class="form-label">
                            Fax #
                        </label>
                        <input id="reference_1_fax" name="reference_1_fax" type="text" class="form-control"
                            value="{{ $references[0]->reference_1_fax ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_email" class="form-label">
                            Email <span class="text-danger">*</span>
                        </label>
                        <input id="reference_1_email" name="reference_1_email" type="text" class="form-control unique_email"
                            value="{{ $references[0]->reference_1_email ?? '' }}" data-rule-email="true" required />
                    </div>

                    <div class="col-md-12 form-group mb-2">
                        <label class="form-label">
                            Years worked together
                        </label>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_years_work_together_start" class="form-label">
                            Start
                        </label>
                        <input id="reference_1_years_work_together_start" name="reference_1_years_work_together_start"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $references[0]->reference_1_years_work_together_start ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_years_work_together_end" class="form-label">
                            End
                        </label>
                        <input id="reference_1_years_work_together_end" name="reference_1_years_work_together_end"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $references[0]->reference_1_years_work_together_end ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_1_facility" class="form-label">
                            Facility
                        </label>
                        <input id="reference_1_facility" name="reference_1_facility" type="text"
                            class="form-control" value="{{ $references[0]->reference_1_facility ?? '' }}" />
                    </div>

                    <div class="col-md-12">
                        <hr class="my-3">
                    </div>

                    <p class="col-md-12 fw-bold">Reference #2</p>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_name" class="form-label">
                            Name
                        </label>
                        <input id="reference_2_name" name="reference_2_name" type="text" class="form-control"
                            value="{{ $references[0]->reference_2_name ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_specialty" class="form-label">
                            Specialty
                        </label>
                        <select class="form-select" id="reference_2_specialty" name="reference_2_specialty">
                            @if ($references[0]->reference_2_specialty == '')
                                <option value="">Select Your Specialty</option>
                            @else
                                <option value="{{ $references[0]->reference_2_specialty }}">
                                    {{ $references[0]->reference_2_specialty }}
                                </option>
                            @endif
                            <x-speciality></x-speciality>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_phone_no" class="form-label">
                            Phone # <span class="text-danger">*</span>
                        </label>
                        <input id="reference_2_phone_no" name="reference_2_phone_no" type="text"
                            class="form-control unique_phone_no" oninput="validateNumber(this)" maxlength="10"
                            value="{{ $references[0]->reference_2_phone_no ?? '' }}" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_position" class="form-label">
                            Title / Position
                        </label>
                        <input id="reference_2_position" name="reference_2_position" type="text"
                            class="form-control" value="{{ $references[0]->reference_2_position ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_address" class="form-label">
                            Address
                        </label>
                        <input id="reference_2_address" name="reference_2_address" type="text"
                            class="form-control" value="{{ $references[0]->reference_2_address ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_city" class="form-label">
                            City
                        </label>
                        <input id="reference_2_city" name="reference_2_city" type="text" class="form-control"
                            value="{{ $references[0]->reference_2_city ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_state" class="form-label">
                            State
                        </label>
                        <select name="reference_2_state" class="form-select">
                            <option value="{{ $references[0]->reference_2_state ?? '' }}">
                                {{ $references[0]->reference_2_state ?? '' }}
                            </option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_2_zipcode" class="form-label">
                            Zip code
                        </label>
                        <input id="reference_2_zipcode" name="reference_2_zipcode" type="text"
                            class="form-control" value="{{ $references[0]->reference_2_zipcode ?? '' }}"
                            data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_2_fax" class="form-label">
                            Fax #
                        </label>
                        <input id="reference_2_fax" name="reference_2_fax" type="text" class="form-control"
                            value="{{ $references[0]->reference_2_fax ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_email" class="form-label">
                            Email <span class="text-danger">*</span>
                        </label>
                        <input id="reference_2_email" name="reference_2_email" type="text" class="form-control unique_email"
                            value="{{ $references[0]->reference_2_email ?? '' }}" data-rule-email="true" required />
                    </div>

                    <div class="col-md-12 form-group mb-2">
                        <label class="form-label">
                            Years worked together
                        </label>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_years_work_together_start" class="form-label">
                            Start
                        </label>
                        <input id="reference_2_years_work_together_start" name="reference_2_years_work_together_start"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $references[0]->reference_2_years_work_together_start ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_years_work_together_end" class="form-label">
                            End
                        </label>
                        <input id="reference_2_years_work_together_end" name="reference_2_years_work_together_end"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $references[0]->reference_2_years_work_together_end ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_2_facility" class="form-label">
                            Facility
                        </label>
                        <input id="reference_2_facility" name="reference_2_facility" type="text"
                            class="form-control" value="{{ $references[0]->reference_2_facility ?? '' }}" />
                    </div>

                    <div class="col-md-12">
                        <hr class="my-3">
                    </div>

                    <p class="col-md-12 fw-bold">Reference #3</p>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_name" class="form-label">
                            Name
                        </label>
                        <input id="reference_3_name" name="reference_3_name" type="text" class="form-control"
                            value="{{ $references[0]->reference_3_name ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_specialty" class="form-label">
                            Specialty
                        </label>
                        <select class="form-select" id="reference_3_specialty" name="reference_3_specialty">
                            @if ($references[0]->reference_3_specialty == '')
                                <option value="">Select Your Specialty</option>
                            @else
                                <option value="{{ $references[0]->reference_3_specialty }}">
                                    {{ $references[0]->reference_3_specialty }}
                                </option>
                            @endif
                            <x-speciality></x-speciality>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_phone_no" class="form-label">
                            Phone # <span class="text-danger">*</span>
                        </label>
                        <input id="reference_3_phone_no" name="reference_3_phone_no" type="text"
                            class="form-control unique_phone_no" oninput="validateNumber(this)" maxlength="10"
                            value="{{ $references[0]->reference_3_phone_no ?? '' }}" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_position" class="form-label">
                            Title / Position
                        </label>
                        <input id="reference_3_position" name="reference_3_position" type="text"
                            class="form-control" value="{{ $references[0]->reference_3_position ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_address" class="form-label">
                            Address
                        </label>
                        <input id="reference_3_address" name="reference_3_address" type="text"
                            class="form-control" value="{{ $references[0]->reference_3_address ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_city" class="form-label">
                            City
                        </label>
                        <input id="reference_3_city" name="reference_3_city" type="text" class="form-control"
                            value="{{ $references[0]->reference_3_city ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_state" class="form-label">
                            State
                        </label>
                        <select name="reference_3_state" class="form-select">
                            <option value="{{ $references[0]->reference_3_state ?? '' }}">
                                {{ $references[0]->reference_3_state ?? '' }}
                            </option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_3_zipcode" class="form-label">
                            Zip code
                        </label>
                        <input id="reference_3_zipcode" name="reference_3_zipcode" type="text"
                            class="form-control" value="{{ $references[0]->reference_3_zipcode ?? '' }}"
                            data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_3_fax" class="form-label">
                            Fax #
                        </label>
                        <input id="reference_3_fax" name="reference_3_fax" type="text" class="form-control"
                            value="{{ $references[0]->reference_3_fax ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_email" class="form-label">
                            Email <span class="text-danger">*</span>
                        </label>
                        <input id="reference_3_email" name="reference_3_email" type="text" class="form-control unique_email"
                            value="{{ $references[0]->reference_3_email ?? '' }}" data-rule-email="true" required />
                    </div>

                    <div class="col-md-12 form-group mb-2">
                        <label class="form-label">
                            Years worked together
                        </label>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_years_work_together_start" class="form-label">
                            Start
                        </label>
                        <input id="reference_3_years_work_together_start" name="reference_3_years_work_together_start"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $references[0]->reference_3_years_work_together_start ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_years_work_together_end" class="form-label">
                            End
                        </label>
                        <input id="reference_3_years_work_together_end" name="reference_3_years_work_together_end"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $references[0]->reference_3_years_work_together_end ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_3_facility" class="form-label">
                            Facility
                        </label>
                        <input id="reference_3_facility" name="reference_3_facility" type="text"
                            class="form-control" value="{{ $references[0]->reference_3_facility ?? '' }}" />
                    </div>

                    <div class="col-md-12">
                        <hr class="my-3">
                    </div>

                    <p class="col-md-12 fw-bold">Reference #4</p>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_name" class="form-label">
                            Name
                        </label>
                        <input id="reference_4_name" name="reference_4_name" type="text" class="form-control"
                            value="{{ $references[0]->reference_4_name ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_specialty" class="form-label">
                            Specialty
                        </label>
                        <select class="form-select" id="reference_4_specialty" name="reference_4_specialty">
                            @if ($references[0]->reference_4_specialty == '')
                                <option value="">Select Your Specialty</option>
                            @else
                                <option value="{{ $references[0]->reference_4_specialty }}">
                                    {{ $references[0]->reference_4_specialty }}
                                </option>
                            @endif
                            <x-speciality></x-speciality>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_phone_no" class="form-label">
                            Phone # <span class="text-danger">*</span>
                        </label>
                        <input id="reference_4_phone_no" name="reference_4_phone_no" type="text"
                            class="form-control unique_phone_no" oninput="validateNumber(this)" maxlength="10"
                            value="{{ $references[0]->reference_4_phone_no ?? '' }}" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_position" class="form-label">
                            Title / Position
                        </label>
                        <input id="reference_4_position" name="reference_4_position" type="text"
                            class="form-control" value="{{ $references[0]->reference_4_position ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_address" class="form-label">
                            Address
                        </label>
                        <input id="reference_4_address" name="reference_4_address" type="text"
                            class="form-control" value="{{ $references[0]->reference_4_address ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_city" class="form-label">
                            City
                        </label>
                        <input id="reference_4_city" name="reference_4_city" type="text" class="form-control"
                            value="{{ $references[0]->reference_4_city ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_state" class="form-label">
                            State
                        </label>
                        <select name="reference_4_state" class="form-select">
                            <option value="{{ $references[0]->reference_4_state ?? '' }}">
                                {{ $references[0]->reference_4_state ?? '' }}
                            </option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_4_zipcode" class="form-label">
                            Zip code
                        </label>
                        <input id="reference_4_zipcode" name="reference_4_zipcode" type="text"
                            class="form-control" value="{{ $references[0]->reference_4_zipcode ?? '' }}"
                            data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="reference_4_fax" class="form-label">
                            Fax #
                        </label>
                        <input id="reference_4_fax" name="reference_4_fax" type="text" class="form-control"
                            value="{{ $references[0]->reference_4_fax ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_email" class="form-label">
                            Email <span class="text-danger">*</span>
                        </label>
                        <input id="reference_4_email" name="reference_4_email" type="text" class="form-control unique_email"
                            value="{{ $references[0]->reference_4_email ?? '' }}" data-rule-email="true" required />
                    </div>

                    <div class="col-md-12 form-group mb-2">
                        <label class="form-label">
                            Years worked together
                        </label>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_years_work_together_start" class="form-label">
                            Start
                        </label>
                        <input id="reference_4_years_work_together_start" name="reference_4_years_work_together_start"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $references[0]->reference_4_years_work_together_start ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_years_work_together_end" class="form-label">
                            End
                        </label>
                        <input id="reference_4_years_work_together_end" name="reference_4_years_work_together_end"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $references[0]->reference_4_years_work_together_end ?? '' }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="reference_4_facility" class="form-label">
                            Facility
                        </label>
                        <input id="reference_4_facility" name="reference_4_facility" type="text"
                            class="form-control" value="{{ $references[0]->reference_4_facility ?? '' }}" />
                    </div>

                </div>
            </div>
        </div>
    </section>
@endif
