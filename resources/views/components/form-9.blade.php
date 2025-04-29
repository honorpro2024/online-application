@props(['credentialing_application_form' => null])
@if ($credentialing_application_form == null || empty($credentialing_application_form))
    <section id="step-9" class="tab-pane credentialing-application-explanation-form mb-5" role="tabpanel"
        aria-labelledby="step-9">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Credentialing Application Explanation Form
            </div>
            <div class="card-body">
                <div class="row">
                    <p>
                        Please clearly indicate which question and answer you are providing
                        explanation for.
                        Attach all available supporting information.
                    </p>

                    <div class="col-md-12 mb-3 form-group d-none">
                        <label for="provider_name" class="form-label">
                            Provider Name
                        </label>
                        <input id="provider_name" name="provider_name" type="text" class="form-control" />
                    </div>

                    <div class="col-md-12" id="explanation_wrapper">

                        <div class="row explanation_wrapper_item">

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Date
                                </label>
                                <input name="explanation_date[0]" type="date" class="form-control"
                                    max="9999-12-31" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Comments
                                </label>
                                <textarea name="explanation_answer[0]" type="text" class="form-control"></textarea>
                            </div>

                        </div>

                        <hr class="my-3">

                    </div>

                    <div class="clearfix mb-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('explanation_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
@else
    <section id="step-9" class="tab-pane credentialing-application-explanation-form mb-5" role="tabpanel"
        aria-labelledby="step-9">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Credentialing Application Explanation Form
            </div>
            <div class="card-body">
                <div class="row">
                    <p>
                        Please clearly indicate which question and answer you are providing
                        explanation for.
                        Attach all available supporting information.
                    </p>

                    <div class="col-md-12 mb-3 form-group d-none">
                        <label for="provider_name" class="form-label">
                            Provider Name
                        </label>
                        <input id="provider_name" name="provider_name" type="text" class="form-control"
                            value="{{ $credentialing_application_form[0]->provider_name ?? '' }}" />
                    </div>

                    <div class="col-md-12" id="explanation_wrapper">

                        @foreach ($credentialing_application_form as $key => $caf)
                            <div class="row explanation_wrapper_item">

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Date
                                    </label>
                                    <input name="explanation_date[{{ $key }}]" type="date"
                                        class="form-control" max="9999-12-31" value="{{ $caf->explanation_date }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Comments
                                    </label>
                                    <textarea name="explanation_answer[{{ $key }}]" class="form-control">{{ $caf->explanation_answer }}</textarea>
                                </div>

                            </div>

                            <hr class="my-3">
                        @endforeach

                        <div class="clearfix mb-3">
                            <button type="button" class="btn btn-sm btn-primary-soft"
                                onclick="cloneDiv('explanation_wrapper_item')">
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
