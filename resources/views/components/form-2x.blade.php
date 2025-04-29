@props(['education_and_training' => null])

@if ($education_and_training == null || empty($education_and_training))
    <section id="step-2" class="tab-pane education-and-training mb-5" role="tabpanel" aria-labelledby="step-2">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Education And Training
            </div>
            <div class="card-body">

                <div class="col-md-12" id="medical_school_wrapper">

                    <div class="row medical_school_wrapper_item">
                        <div class="col-md-6 mb-3 form-group">
                            <label for="medical_school" class="form-label fw-bold">
                                Medical School
                            </label>
                            <input name="medical_school[0]" type="text" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="degree" class="form-label">Degree (MD, DO)</label>
                            <input name="degree[0]" type="text" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input name="start_date[0]" type="date" max="9999-12-31" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="end_date" class="form-label">End Date</label>
                            <input name="end_date[0]" type="date" max="9999-12-31" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="city" class="form-label">City</label>
                            <input name="e_city[0]" type="text" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="e_state" class="form-label">State</label>
                            <select name="e_state[0]" class="form-select">
                                <option value="">
                                    Select
                                </option>
                                <x-state></x-state>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="clearfix mb-3">
                    <button type="button" class="btn btn-sm btn-primary-soft"
                        onclick="cloneDiv('medical_school_wrapper_item')">
                        <i class="fe fe-plus"></i>
                        Add
                    </button>
                </div>

                <hr class="my-3">

                <div class="col-md-12" id="internship_training_wrapper">

                    <div class="row internship_training_wrapper_item">

                        <div class="col-md-6 mb-3 form-group">
                            <label for="internship_training_name" class="form-label">
                                Internship Facility Name
                            </label>
                            <input name="internship_training_name[0]" type="text" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="internship_training_city" class="form-label">City</label>
                            <input name="internship_training_city[0]" type="text" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="internship_training_state" class="form-label">State</label>
                            <select name="internship_training_state[0]" class="form-select">
                                <option value="">
                                    Select
                                </option>
                                <x-state></x-state>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="internship_training_start_date" class="form-label">
                                Start Date
                            </label>
                            <input name="internship_training_start_date[0]" type="date" max="9999-12-31"
                                class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="internship_training_end_date" class="form-label">
                                End Date
                            </label>
                            <input name="internship_training_end_date[0]" type="date" max="9999-12-31"
                                class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="category_of_training" class="form-label">
                                Category of Training
                            </label>
                            <input name="category_of_training[0]" type="text" class="form-control" />
                        </div>

                    </div>

                </div>

                <div class="clearfix mb-3">
                    <button type="button" class="btn btn-sm btn-primary-soft"
                        onclick="cloneDiv('internship_training_wrapper_item')">
                        <i class="fe fe-plus"></i>
                        Add
                    </button>
                </div>

                <hr class="my-3">

                <div class="col-md-12" id="residency_training_wrapper">

                    <div class="row residency_training_wrapper_item">

                        <div class="col-md-6 mb-3 form-group">
                            <label for="residency_training_name" class="form-label">
                                Residency Training -- Facility Name
                            </label>
                            <input name="residency_training_name[0]" type="text" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="residency_training_city" class="form-label">City</label>
                            <input name="residency_training_city[0]" type="text" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="residency_training_state" class="form-label">State</label>
                            <select name="residency_training_state[0]" class="form-select">
                                <option value="">
                                    Select
                                </option>
                                <x-state></x-state>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="residency_training_start_date" class="form-label">
                                Start Date
                            </label>
                            <input name="residency_training_start_date[0]" type="date" max="9999-12-31"
                                class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="residency_training_end_date" class="form-label">
                                End Date
                            </label>
                            <input name="residency_training_end_date[0]" type="date" max="9999-12-31"
                                class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="residency_training_speciality" class="form-label">Specialty</label>
                            <select class="form-select" name="residency_training_speciality[0]">
                                <option value="">Select Your Specialty</option>
                                <x-speciality></x-speciality>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="clearfix mb-3">
                    <button type="button" class="btn btn-sm btn-primary-soft"
                        onclick="cloneDiv('residency_training_wrapper_item')">
                        <i class="fe fe-plus"></i>
                        Add
                    </button>
                </div>

                <hr class="my-3">

                <div class="col-md-12" id="fellowship_training_wrapper">

                    <div class="row fellowship_training_wrapper_item">

                        <div class="col-md-6 mb-3 form-group">
                            <label for="fellowship_training_name" class="form-label">
                                Fellowship Training -- Facility Name
                            </label>
                            <input name="fellowship_training_name[0]" type="text" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="fellowship_training_city" class="form-label">City</label>
                            <input name="fellowship_training_city[0]" type="text" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="fellowship_training_state" class="form-label">State</label>
                            <select name="fellowship_training_state[0]" class="form-select">
                                <option value="">
                                    Select
                                </option>
                                <x-state></x-state>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="fellowship_training_start_date" class="form-label">
                                Start Date
                            </label>
                            <input name="fellowship_training_start_date[0]" type="date" max="9999-12-31"
                                class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="fellowship_training_end_date" class="form-label">
                                End Date
                            </label>
                            <input name="fellowship_training_end_date[0]" type="date" max="9999-12-31"
                                class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="fellowship_training_speciality" class="form-label">Specialty</label>
                            <select class="form-select" name="fellowship_training_speciality[0]">
                                <option value="">Select Your Specialty</option>
                                <x-speciality></x-speciality>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="clearfix mb-3">
                    <button type="button" class="btn btn-sm btn-primary-soft"
                        onclick="cloneDiv('fellowship_training_wrapper_item')">
                        <i class="fe fe-plus"></i>
                        Add
                    </button>
                </div>

                <hr class="my-3">

                <div class="col-md-12" id="additional_training_wrapper">

                    <div class="row additional_training_wrapper_item">

                        <div class="col-md-6 mb-3 form-group">
                            <label for="additional_training_name" class="form-label">
                                Additional Training -- Facility Name
                            </label>
                            <input name="additional_training_name[0]" type="text" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="additional_training_city" class="form-label">City</label>
                            <input name="additional_training_city[0]" type="text" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="additional_training_state" class="form-label">State</label>
                            <select name="additional_training_state[0]" class="form-select">
                                <option value="">
                                    Select
                                </option>
                                <x-state></x-state>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="additional_training_start_date" class="form-label">
                                Start Date
                            </label>
                            <input name="additional_training_start_date[0]" type="date" max="9999-12-31"
                                class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="additional_training_end_date" class="form-label">
                                End Date
                            </label>
                            <input name="additional_training_end_date[0]" type="date" max="9999-12-31"
                                class="form-control" />
                        </div>

                        <div class="col-md-6 mb-3 form-group">
                            <label for="additional_training_category" class="form-label">
                                Category of Training
                            </label>
                            <input name="additional_training_category[0]" type="text" class="form-control" />
                        </div>

                    </div>
                </div>

                <div class="clearfix mb-3">
                    <button type="button" class="btn btn-sm btn-primary-soft"
                        onclick="cloneDiv('additional_training_wrapper_item')">
                        <i class="fe fe-plus"></i>
                        Add
                    </button>
                </div>

                <hr class="my-3">

            </div>
        </div>
    </section>
@else
    <section id="step-2" class="tab-pane education-and-training mb-5" role="tabpanel" aria-labelledby="step-2">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Education And Training
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3 form-group">
                        <label for="medical_school" class="form-label fw-bold">
                            Medical School
                        </label>
                        <input id="medical_school" name="medical_school" type="text" class="form-control"
                            value="{{ $education_and_training->medical_school }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="degree" class="form-label">Degree (MD, DO)</label>
                        <input name="degree" type="text" class="form-control"
                            value="{{ $education_and_training->degree }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input id="start_date" name="start_date" type="date" max="9999-12-31"
                            class="form-control" value="{{ $education_and_training->start_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="end_date" class="form-label">End Date</label>
                        <input id="end_date" name="end_date" type="date" max="9999-12-31" class="form-control"
                            value="{{ $education_and_training->end_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="city" class="form-label">City</label>
                        <input name="e_city" type="text" class="form-control"
                            value="{{ $education_and_training->e_city }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="e_state" class="form-label">State</label>
                        <select name="e_state" class="form-select">
                            <option value="{{ $education_and_training->e_state }}">
                                {{ $education_and_training->e_state }}</option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <hr class="my-3">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="internship_training_name" class="form-label">
                            Internship Facility Name
                        </label>
                        <input id="internship_training_name" name="internship_training_name" type="text"
                            class="form-control" value="{{ $education_and_training->internship_training_name }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="internship_training_city" class="form-label">City</label>
                        <input id="internship_training_city" name="internship_training_city" type="text"
                            class="form-control" value="{{ $education_and_training->internship_training_city }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="internship_training_state" class="form-label">State</label>
                        <select name="internship_training_state" class="form-select">
                            <option value="{{ $education_and_training->internship_training_state }}">
                                {{ $education_and_training->internship_training_state }}
                            </option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="internship_training_start_date" class="form-label">Start Date</label>
                        <input id="internship_training_start_date" name="internship_training_start_date"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $education_and_training->internship_training_start_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="internship_training_end_date" class="form-label">End Date</label>
                        <input id="internship_training_end_date" name="internship_training_end_date" type="date"
                            max="9999-12-31" class="form-control"
                            value="{{ $education_and_training->internship_training_end_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="category_of_training" class="form-label">
                            Category of Training
                        </label>
                        <input id="category_of_training" name="category_of_training" type="text"
                            class="form-control" value="{{ $education_and_training->category_of_training }}" />
                    </div>

                    <hr class="my-3">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_name" class="form-label">
                            Residency Training -- Facility Name
                        </label>
                        <input id="residency_training_name" name="residency_training_name" type="text"
                            class="form-control" value="{{ $education_and_training->residency_training_name }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_city" class="form-label">City</label>
                        <input id="residency_training_city" name="residency_training_city" type="text"
                            class="form-control" value="{{ $education_and_training->residency_training_city }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_state" class="form-label">State</label>
                        <select name="residency_training_state" class="form-select">
                            <option value="{{ $education_and_training->residency_training_state }}">
                                {{ $education_and_training->residency_training_state }}
                            </option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_start_date" class="form-label">
                            Start Date
                        </label>
                        <input id="residency_training_start_date" name="residency_training_start_date" type="date"
                            max="9999-12-31" class="form-control"
                            value="{{ $education_and_training->residency_training_start_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_end_date" class="form-label">
                            End Date
                        </label>
                        <input id="residency_training_end_date" name="residency_training_end_date" type="date"
                            max="9999-12-31" class="form-control"
                            value="{{ $education_and_training->residency_training_end_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="residency_training_speciality" class="form-label">Specialty</label>
                        <select class="form-select" id="residency_training_speciality"
                            name="residency_training_speciality">
                            <option value="">Select Your Specialty</option>
                            <x-speciality></x-speciality>
                        </select>
                    </div>

                    <hr class="my-3">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_name" class="form-label">
                            Fellowship Training -- Facility Name
                        </label>
                        <input id="fellowship_training_name" name="fellowship_training_name" type="text"
                            class="form-control" value="{{ $education_and_training->fellowship_training_name }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_city" class="form-label">City</label>
                        <input id="fellowship_training_city" name="fellowship_training_city" type="text"
                            class="form-control" value="{{ $education_and_training->fellowship_training_city }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_state" class="form-label">State</label>
                        <select name="fellowship_training_state" class="form-select">
                            <option value="{{ $education_and_training->fellowship_training_state }}">
                                {{ $education_and_training->fellowship_training_state }}
                            </option>
                            <x-state></x-state>
                        </select>

                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_start_date" class="form-label">Start Date</label>
                        <input id="fellowship_training_start_date" name="fellowship_training_start_date"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $education_and_training->fellowship_training_start_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_end_date" class="form-label">End Date</label>
                        <input id="fellowship_training_end_date" name="fellowship_training_end_date" type="date"
                            max="9999-12-31" class="form-control"
                            value="{{ $education_and_training->fellowship_training_end_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fellowship_training_speciality" class="form-label">Specialty</label>
                        <select class="form-select" id="fellowship_training_speciality"
                            name="fellowship_training_speciality">
                            <option value="">Select Your Specialty</option>
                            <x-speciality></x-speciality>
                        </select>
                    </div>

                    <hr class="my-3">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_name" class="form-label">
                            Additional Training -- Facility Name
                        </label>
                        <input id="additional_training_name" name="additional_training_name" type="text"
                            class="form-control" value="{{ $education_and_training->additional_training_name }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_city" class="form-label">City</label>
                        <input id="additional_training_city" name="additional_training_city" type="text"
                            class="form-control" value="{{ $education_and_training->additional_training_city }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_state" class="form-label">State</label>
                        <select name="additional_training_state" class="form-select">
                            <option value="{{ $education_and_training->additional_training_state }}">
                                {{ $education_and_training->additional_training_state }}
                            </option>
                            <x-state></x-state>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_start_date" class="form-label">Start Date</label>
                        <input id="additional_training_start_date" name="additional_training_start_date"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $education_and_training->additional_training_start_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_end_date" class="form-label">End Date</label>
                        <input id="additional_training_end_date" name="additional_training_end_date" type="date"
                            max="9999-12-31" class="form-control"
                            value="{{ $education_and_training->additional_training_end_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="additional_training_category" class="form-label">
                            Category of Training
                        </label>
                        <input id="additional_training_category" name="additional_training_category" type="text"
                            class="form-control"
                            value="{{ $education_and_training->additional_training_category }}" />
                    </div>

                </div>
            </div>
        </div>
    </section>
@endif
