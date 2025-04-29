@props(['work_history' => null])

@if ($work_history == null || empty($work_history))
    <section id="step-6" class="tab-pane work-history mb-5" role="tabpanel" aria-labelledby="step-6">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Current Employment & Work History
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="mb-3">
                        Please list all your practice locations and employment affiliations to
                        cover at
                        least the past ten years of clinical practice.
                    </p>

                    <div class="col-md-12" id="work_history_wrapper">

                        <div class="row work_history_wrapper_item">

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    From
                                </label>
                                <input name="work_history_from[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    To
                                </label>
                                <input name="work_history_to[0]" type="date" max="9999-12-31" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Hospital / Facility Name
                                </label>
                                <input name="work_history_facility_name[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group d-none">
                                <label class="form-label">
                                    Phone
                                </label>
                                <input name="work_history_phone[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Address
                                </label>
                                <input name="work_history_address[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    City
                                </label>
                                <input name="work_history_city[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    State
                                </label>

                                <select name="work_history_state[0]" class="form-select">
                                    <option value="">
                                        Select
                                    </option>
                                    <x-state></x-state>
                                </select>

                            </div>

                            <div class="col-md-6 mb-3 form-group d-none">
                                <label class="form-label">
                                    Zip code
                                </label>
                                <input name="work_history_zipcode[0]" type="text" class="form-control"
                                    data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                            </div>

                            <div class="col-md-6 mb-3 form-group d-none">
                                <div class="form-check">
                                    <input class="form-check-input" name="work_history_do_not_contact[0]"
                                        type="checkbox" value="1">
                                    <label class="form-check-label" for="work_history_do_not_contact">
                                        Do not contact
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <hr class="my-3">
                        </div>

                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('work_history_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
@else
    <section id="step-6" class="tab-pane work-history mb-5" role="tabpanel" aria-labelledby="step-6">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Current Employment & Work History
            </div>
            <div class="card-body">
                <div class="row">

                    <p class="mb-3">
                        Please list all your practice locations and employment affiliations to
                        cover at
                        least the past ten years of clinical practice.
                    </p>

                    <div class="col-md-12" id="work_history_wrapper">

                        @foreach ($work_history as $key => $wh)
                            <div class="row work_history_wrapper_item">

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        From
                                    </label>
                                    <input name="work_history_from[{{ $key }}]" type="date" max="9999-12-31"
                                        class="form-control" value="{{ $wh->work_history_from }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        To
                                    </label>
                                    <input name="work_history_to[{{ $key }}]" type="date" max="9999-12-31"
                                        class="form-control" value="{{ $wh->work_history_to }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Hospital / Facility Name
                                    </label>
                                    <input name="work_history_facility_name[{{ $key }}]" type="text"
                                        class="form-control" value="{{ $wh->work_history_facility_name }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group d-none">
                                    <label class="form-label">
                                        Phone
                                    </label>
                                    <input name="work_history_phone[{{ $key }}]" type="text"
                                        class="form-control" value="{{ $wh->work_history_phone }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Address
                                    </label>
                                    <input name="work_history_address[{{ $key }}]" type="text"
                                        class="form-control" value="{{ $wh->work_history_address }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        City
                                    </label>
                                    <input name="work_history_city[{{ $key }}]" type="text"
                                        class="form-control" value="{{ $wh->work_history_city }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        State
                                    </label>

                                    <select name="work_history_state[{{ $key }}]" class="form-select">
                                        <option value="{{ $wh->work_history_state }}">
                                            {{ $wh->work_history_state }}
                                        </option>
                                        <x-state></x-state>
                                    </select>

                                </div>

                                <div class="col-md-6 mb-3 form-group d-none">
                                    <label class="form-label">
                                        Zip code
                                    </label>
                                    <input name="work_history_zipcode[{{ $key }}]" type="text"
                                        class="form-control" value="{{ $wh->work_history_zipcode }}"
                                        data-rule-zipcodeUS="true" data-msg-zipcodeUS="Invalid Zip Code" />
                                </div>

                                <div class="col-md-6 mb-3 form-group d-none">
                                    <div class="form-check">
                                        <input class="form-check-input"
                                            name="work_history_do_not_contact[{{ $key }}]" type="checkbox"
                                            value="1"
                                            {{ $wh->work_history_do_not_contact == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="work_history_do_not_contact">
                                            Do not contact
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <hr class="my-3">
                            </div>
                        @endforeach

                    </div>

                    <div class="clearfix my-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('work_history_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endif
