@props(['personal_information' => null])

@if ($personal_information == null || empty($personal_information))
    <section id="step-1" class="tab-pane personal-information mb-5" role="tabpanel" aria-labelledby="step-1">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Personal Information
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="first_name" class="form-label">
                            First Name
                            <span class="text-danger">*</span>
                        </label>
                        <input id="first_name" name="first_name" type="text" class="form-control" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="suffix" class="form-label">Suffix (Jr. Sr. III)</label>
                        <input id="suffix" name="suffix" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="last_name" class="form-label">
                            Last Name
                            <span class="text-danger">*</span>
                        </label>
                        <input id="last_name" name="last_name" type="text" class="form-control" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="middle_name" class="form-label">Middle</label>
                        <input id="middle_name" name="middle_name" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="degree" class="form-label">Degree</label>
                        <input name="degree" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="social_security_number" class="form-label">
                            Social Security Number
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group input-group-sm">
                            <input id="social_security_number" name="social_security_number" type="password"
                                class="form-control" maxlength="9" oninput="validateNumber(this)"
                                data-rule-minlength="9" data-rule-maxlength="9" data-error="#social_security_number_err" required />
                            <span class="input-group-text">
                                <i class="fa fa-eye-slash cursor-pointer passwordToggle"
                                    data-input="#social_security_number"></i>
                            </span>
                        </div>
                        <div id="social_security_number_err"></div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="home_address" class="form-label">
                            Home Address
                            <span class="text-danger">*</span>
                        </label>
                        <input id="home_address" name="home_address" type="text" class="form-control" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="home_phone_number" class="form-label">
                            Home Phone Number</label>
                        <input id="home_phone_number" name="home_phone_number" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="city" class="form-label">
                            City
                            <span class="text-danger">*</span>
                        </label>
                        <input id="city" name="city" type="text" class="form-control" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="state" class="form-label">
                            State
                            <span class="text-danger">*</span>
                        </label>
                        <select name="state" class="form-select">
                            <option value="">
                                Select
                            </option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="zip_code" class="form-label">
                            Zip code
                            <span class="text-danger">*</span>
                        </label>
                        <input id="zip_code" name="zip_code" type="text" class="form-control"
                            data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="cell_phone_number" class="form-label">
                            Cell Phone Number
                            <span class="text-danger">*</span>
                        </label>
                        <input id="cell_phone_number" name="cell_phone_number" type="text" class="form-control"
                            oninput="validateNumber(this)" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="office_address" class="form-label">Office Address</label>
                        <input id="office_address" name="office_address" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="office_phone_number" class="form-label">
                            Office Phone Number
                        </label>
                        <input id="office_phone_number" name="office_phone_number" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="office_city" class="form-label">City</label>
                        <input id="office_city" name="office_city" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="office_state" class="form-label">State</label>
                        <select name="office_state" class="form-select">
                            <option value="">
                                Select
                            </option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="office_zip_code" class="form-label">Zip code</label>
                        <input id="office_zip_code" name="office_zip_code" type="text" class="form-control"
                            data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="email_address" class="form-label">
                            Email Address
                            <span class="text-danger">*</span>
                        </label>
                        <input id="email_address" name="email_address" type="text" class="form-control"
                            data-rule-email="true" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="citizenship" class="form-label">Citizenship</label>
                        <input id="citizenship" name="citizenship" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="birth_place" class="form-label">Birthplace</label>
                        <input id="birth_place" name="birth_place" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="birth_date" class="form-label">
                            Date of Birth
                            <span class="text-danger">*</span>
                        </label>
                        <input id="birth_date" name="birth_date" type="date" max="9999-12-31"
                            class="form-control" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="primary_speciality" class="form-label">
                            Primary Specialty
                            <span class="text-danger">*</span>
                        </label>

                        <select class="form-select" id="primary_speciality" name="primary_speciality" required>
                            <option value="">Select Your Specialty</option>
                            <x-speciality></x-speciality>
                        </select>

                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="secondary_speciality" class="form-label">
                            Secondary Specialty
                        </label>
                        <select class="form-select" id="secondary_speciality" name="secondary_speciality">
                            <option value="">Select Your Specialty</option>
                            <x-speciality></x-speciality>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="present_position" class="form-label">Title</label>
                        <input id="present_position" name="present_position" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="npi" class="form-label">
                            NPI #
                            <span class="text-danger">*</span>
                        </label>
                        <input id="npi" name="npi" type="text" class="form-control" maxlength="10"
                            oninput="validateNumber(this)" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="medicare" class="form-label">Medicare #</label>
                        <input id="medicare" name="medicare" type="text" class="form-control" maxlength="10"
                            oninput="validateNumber(this)" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="upin" class="form-label">UPIN #</label>
                        <input id="upin" name="upin" type="text" class="form-control" maxlength="6"
                            data-rule-pattern="[a-zA-Z0-9]+" data-msg-pattern="Invalid UPIN" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fed_tax_id" class="form-label">Fed Tax ID</label>
                        <input id="fed_tax_id" name="fed_tax_id" type="text" class="form-control" maxlength="9"
                            oninput="validateNumber(this)" data-rule-minlength="9" data-rule-maxlength="9" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="medicaid" class="form-label">Medicaid #</label>
                        <input id="medicaid" name="medicaid" type="text" class="form-control" maxlength="10"
                            oninput="validateNumber(this)" />
                    </div>

                    <div class="col-md-12 form-group mb-3">
                        <p class="text-muted mb-0">
                            Please provide the name and address
                            of a secondary contact e.g. spouse
                        </p>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="contact_name" class="form-label">
                            Contact Name and Phone
                        </label>
                        <input id="contact_name" name="contact_name" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="contact_address" class="form-label">
                            Contact Address
                        </label>
                        <input id="contact_address" name="contact_address" type="text" class="form-control" />
                    </div>

                </div>
            </div>
        </div>
    </section>
@else
    <section id="step-1" class="tab-pane personal-information mb-5" role="tabpanel" aria-labelledby="step-1">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Personal Information
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="first_name" class="form-label">
                            First Name
                            <span class="text-danger">*</span>
                        </label>
                        <input id="first_name" name="first_name" type="text" class="form-control"
                            value="{{ $personal_information->first_name }}" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="suffix" class="form-label">Suffix (Jr. Sr. III)</label>
                        <input id="suffix" name="suffix" type="text" class="form-control"
                            value="{{ $personal_information->suffix }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="last_name" class="form-label">
                            Last Name
                            <span class="text-danger">*</span>
                        </label>
                        <input id="last_name" name="last_name" type="text" class="form-control"
                            value="{{ $personal_information->last_name }}" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="middle_name" class="form-label">Middle</label>
                        <input id="middle_name" name="middle_name" type="text" class="form-control"
                            value="{{ $personal_information->middle_name }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group d-none">
                        <label for="degree" class="form-label">Degree</label>
                        <input id="degree" name="degree" type="text" class="form-control"
                            value="{{ $personal_information->degree }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="social_security_number" class="form-label">
                            Social Security Number
                            <span class="text-danger">*</span>
                        </label>
                        <div class="input-group input-group-sm">
                            <input id="social_security_number" name="social_security_number" type="password"
                                class="form-control" value="{{ $personal_information->social_security_number }}"
                                maxlength="9" oninput="validateNumber(this)" data-rule-minlength="9"
                                data-rule-maxlength="9" data-error="#social_security_number_err" required />
                            <span class="input-group-text">
                                <i class="fa fa-eye-slash cursor-pointer passwordToggle"
                                    data-input="#social_security_number"></i>
                            </span>
                        </div>
                        <div id="social_security_number_err"></div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="home_address" class="form-label">
                            Home Address
                            <span class="text-danger">*</span>
                        </label>
                        <input id="home_address" name="home_address" type="text" class="form-control"
                            value="{{ $personal_information->home_address }}" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="home_phone_number" class="form-label">
                            Home Phone Number
                        </label>
                        <input id="home_phone_number" name="home_phone_number" type="text" class="form-control"
                            value="{{ $personal_information->home_phone_number }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="city" class="form-label">
                            City
                            <span class="text-danger">*</span>
                        </label>
                        <input id="city" name="city" type="text" class="form-control"
                            value="{{ $personal_information->city }}" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="state" class="form-label">
                            State
                            <span class="text-danger">*</span>
                        </label>

                        <select name="state" class="form-select" required>
                            <option value="{{ $personal_information->state }}">
                                {{ $personal_information->state }}</option>
                            <x-state></x-state>
                        </select>

                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="zip_code" class="form-label">
                            Zip code
                            <span class="text-danger">*</span>
                        </label>
                        <input id="zip_code" name="zip_code" type="text" class="form-control"
                            value="{{ $personal_information->zip_code }}" data-rule-zipcodeUS="true"
                            data-msg-zipcodeUS="Invalid Zip Code" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="cell_phone_number" class="form-label">
                            Cell Phone Number
                            <span class="text-danger">*</span>
                        </label>
                        <input id="cell_phone_number" name="cell_phone_number" type="text" class="form-control"
                            value="{{ $personal_information->cell_phone_number }}" oninput="validateNumber(this)"
                            required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="office_address" class="form-label">Office Address</label>
                        <input id="office_address" name="office_address" type="text" class="form-control"
                            value="{{ $personal_information->office_address }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="office_phone_number" class="form-label">
                            Office Phone Number
                        </label>
                        <input id="office_phone_number" name="office_phone_number" type="text"
                            class="form-control" value="{{ $personal_information->office_phone_number }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="office_city" class="form-label">City</label>
                        <input id="office_city" name="office_city" type="text" class="form-control"
                            value="{{ $personal_information->office_city }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="office_state" class="form-label">State</label>
                        <select name="office_state" class="form-select">
                            <option value="{{ $personal_information->office_state }}">
                                {{ $personal_information->office_state }}</option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="office_zip_code" class="form-label">Zip code</label>
                        <input id="office_zip_code" name="office_zip_code" type="text" class="form-control"
                            value="{{ $personal_information->office_zip_code }}" data-rule-zipcodeUS="true"
                            data-msg-zipcodeUS="Invalid Zip Code" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="email_address" class="form-label">
                            Email Address
                            <span class="text-danger">*</span>
                        </label>
                        <input id="email_address" name="email_address" type="text" class="form-control"
                            value="{{ $personal_information->email_address }}" data-rule-email="true"
                            data-rule-required="true" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="citizenship" class="form-label">Citizenship</label>
                        <input id="citizenship" name="citizenship" type="text" class="form-control"
                            value="{{ $personal_information->citizenship }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="birth_place" class="form-label">Birthplace</label>
                        <input id="birth_place" name="birth_place" type="text" class="form-control"
                            value="{{ $personal_information->birth_place }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="birth_date" class="form-label">
                            Date of Birth
                            <span class="text-danger">*</span>
                        </label>
                        <input id="birth_date" name="birth_date" type="date" max="9999-12-31"
                            class="form-control" value="{{ $personal_information->birth_date }}" required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="primary_speciality" class="form-label">
                            Primary Specialty
                            <span class="text-danger">*</span>
                        </label>

                        <select class="form-select" id="primary_speciality" name="primary_speciality" required>
                            <option value="">Select Your Specialty</option>
                            <x-speciality></x-speciality>
                        </select>

                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="secondary_speciality" class="form-label">
                            Secondary Specialty
                        </label>

                        <select class="form-select" id="secondary_speciality" name="secondary_speciality">
                            <option value="">Select Your Specialty</option>
                            <x-speciality></x-speciality>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="present_position" class="form-label">Title</label>
                        <input id="present_position" name="present_position" type="text" class="form-control"
                            value="{{ $personal_information->present_position }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="npi" class="form-label">
                            NPI #
                            <span class="text-danger">*</span>
                        </label>
                        <input id="npi" name="npi" type="text" class="form-control"
                            value="{{ $personal_information->npi }}" maxlength="10" oninput="validateNumber(this)"
                            required />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="medicare" class="form-label">Medicare #</label>
                        <input id="medicare" name="medicare" type="text" class="form-control"
                            value="{{ $personal_information->medicare }}" maxlength="10"
                            oninput="validateNumber(this)" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="upin" class="form-label">UPIN #</label>
                        <input id="upin" name="upin" type="text" class="form-control"
                            value="{{ $personal_information->upin }}" maxlength="6"
                            data-rule-pattern="[a-zA-Z0-9]+" data-msg-pattern="Invalid UPIN" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fed_tax_id" class="form-label">Fed Tax ID</label>
                        <input id="fed_tax_id" name="fed_tax_id" type="text" class="form-control"
                            value="{{ $personal_information->fed_tax_id }}" maxlength="9"
                            oninput="validateNumber(this)" data-rule-minlength="9" data-rule-maxlength="9" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="medicaid" class="form-label">Medicaid #</label>
                        <input id="medicaid" name="medicaid" type="text" class="form-control"
                            value="{{ $personal_information->medicaid }}" maxlength="10"
                            oninput="validateNumber(this)" />
                    </div>

                    <div class="col-md-12 form-group mb-3">
                        <p class="text-muted mb-0">
                            Please provide the name and address
                            of a secondary contact e.g. spouse
                        </p>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="contact_name" class="form-label">
                            Contact Name and Phone
                        </label>
                        <input id="contact_name" name="contact_name" type="text" class="form-control"
                            value="{{ $personal_information->contact_name }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="contact_address" class="form-label">
                            Contact Address
                        </label>
                        <input id="contact_address" name="contact_address" type="text" class="form-control"
                            value="{{ $personal_information->contact_address }}" />
                    </div>

                </div>
            </div>
        </div>
    </section>
@endif
