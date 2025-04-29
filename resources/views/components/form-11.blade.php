@props(['current_medical_education' => null])

@if ($current_medical_education == null || empty($current_medical_education))
    <section id="step-11" class="tab-pane current-continuing-medical-education mb-5" role="tabpanel"
        aria-labelledby="step-11">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Current Continuing Medical Education
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="mb-3">
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

                        <div class="row current_medical_education_wrapper_item">

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Program Title
                                </label>
                                <input name="program_title[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Date
                                </label>
                                <input name="program_date[0]" type="date" max="9999-12-31" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Sponsoring Organization
                                </label>
                                <input name="sponsoring_organization[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    # of CME's
                                </label>
                                <input name="certificate_of_cme[0]" type="text" class="form-control" />
                            </div>

                        </div>

                        <hr class="my-3">

                    </div>

                    <div class="clearfix mb-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('current_medical_education_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
@else
    <section id="step-11" class="tab-pane current-continuing-medical-education mb-5" role="tabpanel"
        aria-labelledby="step-11">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Current Continuing Medical Education
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="mb-3">
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

                        @foreach ($current_medical_education as $key => $cme)
                            <div class="row current_medical_education_wrapper_item">

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Program Title
                                    </label>
                                    <input name="program_title[{{ $key }}]" type="text" class="form-control"
                                        value="{{ $cme->program_title }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Date
                                    </label>
                                    <input name="program_date[{{ $key }}]" type="date" max="9999-12-31"
                                        class="form-control" value="{{ $cme->program_date }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Sponsoring Organization
                                    </label>
                                    <input name="sponsoring_organization[{{ $key }}]" type="text"
                                        class="form-control" value="{{ $cme->sponsoring_organization }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        # of CME's
                                    </label>
                                    <input name="certificate_of_cme[{{ $key }}]" type="text"
                                        class="form-control" value="{{ $cme->certificate_of_cme }}" />
                                </div>

                            </div>

                            <hr class="my-3">
                        @endforeach

                    </div>

                    <div class="clearfix mb-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('current_medical_education_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endif
