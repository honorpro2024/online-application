@props(['board_certifications' => null])

@if ($board_certifications == null || empty($board_certifications))
    <section id="step-3" class="tab-pane personal-information mb-5" role="tabpanel" aria-labelledby="step-3">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Board Certification
            </div>
            <div class="card-body">

                <div class="row">

                    <div class="col-md-12 mb-3 form-group">
                        <label for="board_certified" class="form-label me-3">
                            Are you currently board certified?
                        </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="board_certified"
                                id="board_certified_yes" value="yes">
                            <label class="form-check-label" for="board_certified_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="board_certified"
                                id="board_certified_no" value="no">
                            <label class="form-check-label" for="board_certified_no">No</label>
                        </div>
                    </div>

                    <p>List all current and past board certifications :</p>

                    <div class="col-md-12" id="certificate_wrapper">

                        <div class="row certificate_wrapper_item">

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Name of issuing board
                                </label>
                                <input name="issuing_board[0]" type="text" class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Specialty
                                </label>
                                <select class="form-select" name="issuing_board_speciality[0]">
                                    <option value="">Select Your Specialty</option>
                                    <x-speciality></x-speciality>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Date Certified
                                </label>
                                <input name="issuing_board_certified_date[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Date Recertified
                                </label>
                                <input name="issuing_board_recertified_date[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                            <div class="col-md-6 mb-3 form-group">
                                <label class="form-label">
                                    Expiration Date (if any)
                                </label>
                                <input name="issuing_board_expiration_date[0]" type="date" max="9999-12-31"
                                    class="form-control" />
                            </div>

                        </div>

                        <hr class="my-3">

                    </div>

                    <div class="clearfix mb-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('certificate_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                    <p class="my-3">
                        Please answer the following questions. Attach explanation form(s) if
                        necessary.
                    </p>

                    <div class="col-md-12 mb-3 form-group">
                        <label for="examined_board" class="form-label me-3">
                            A. Have you ever been examined by any specialty board, but failed to
                            pass? If
                            yes,
                            please provide name of board(s) and date(s):
                        </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="examined_board" id="examined_board_yes"
                                value="yes">
                            <label class="form-check-label" for="examined_board_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="examined_board" id="examined_board_no"
                                value="no">
                            <label class="form-check-label" for="examined_board_no">No</label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="examined_board_name" class="form-label">
                            Board Name
                        </label>
                        <input id="examined_board_name" name="examined_board_name" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="examined_board_date" class="form-label">
                            Date
                        </label>
                        <input id="examined_board_date" name="examined_board_date" type="date" max="9999-12-31"
                            class="form-control" />
                    </div>

                    <div class="col-md-12 mb-3 form-group">
                        <label for="certified_board" class="form-label me-3">
                            B. If you are not currently certified, have you applied for the
                            certification
                            examination? If yes, please provide date
                            you will sit for exam.
                        </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="certified_board"
                                id="certified_board_yes" value="yes">
                            <label class="form-check-label" for="certified_board_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="certified_board"
                                id="certified_board_no" value="no">
                            <label class="form-check-label" for="certified_board_no">No</label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="certified_board_date" class="form-label">
                            Date
                        </label>
                        <input id="certified_board_date" name="certified_board_date" type="date" max="9999-12-31"
                            class="form-control" />
                    </div>

                    <div class="clearfix"></div>

                    <p class="mt-3 fw-bold">Clinical Certification</p>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="bls_certification" class="form-label">
                            BLS Certification
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bls_certification"
                                    id="bls_certification_yes" value="yes">
                                <label class="form-check-label" for="bls_certification_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bls_certification"
                                    id="bls_certification_no" value="no">
                                <label class="form-check-label" for="bls_certification_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="bls_certification_expiration_date" class="form-label">
                            Expiration Date
                        </label>
                        <input id="bls_certification_expiration_date" name="bls_certification_expiration_date"
                            type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="acls_certification" class="form-label">
                            ACLS Certification
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="acls_certification"
                                    id="acls_certification_yes" value="yes">
                                <label class="form-check-label" for="acls_certification_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="acls_certification"
                                    id="acls_certification_no" value="no">
                                <label class="form-check-label" for="acls_certification_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="acls_certification_expiration_date" class="form-label">
                            Expiration Date
                        </label>
                        <input id="acls_certification_expiration_date" name="acls_certification_expiration_date"
                            type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="atls_certification" class="form-label">
                            ATLS Certification
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="atls_certification"
                                    id="atls_certification_yes" value="yes">
                                <label class="form-check-label" for="atls_certification_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="atls_certification"
                                    id="atls_certification_no" value="no">
                                <label class="form-check-label" for="atls_certification_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="atls_certification_expiration_date" class="form-label">
                            Expiration Date
                        </label>
                        <input id="atls_certification_expiration_date" name="atls_certification_expiration_date"
                            type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="pals_certification" class="form-label">
                            PALS Certification
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pals_certification"
                                    id="pals_certification_yes" value="yes">
                                <label class="form-check-label" for="pals_certification_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pals_certification"
                                    id="pals_certification_no" value="no">
                                <label class="form-check-label" for="pals_certification_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="pals_certification_expiration_date" class="form-label">
                            Expiration Date
                        </label>
                        <input id="pals_certification_expiration_date" name="pals_certification_expiration_date"
                            type="date" max="9999-12-31" class="form-control" />
                    </div>

                    <p class="fw-bold mt-3">Foreign Graduates</p>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="ecfmg_certificate" class="form-label">
                            Do you have a permanent ECFMG Certificate?
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ecfmg_certificate"
                                    id="ecfmg_certificate_yes" value="yes">
                                <label class="form-check-label" for="ecfmg_certificate_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ecfmg_certificate"
                                    id="ecfmg_certificate_no" value="no">
                                <label class="form-check-label" for="ecfmg_certificate_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="ecfmg_certificate_id" class="form-label">
                            ECFMG Certificate #
                        </label>
                        <input id="ecfmg_certificate_id" name="ecfmg_certificate_id" type="text"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fifth_pathway_choose" class="form-label">
                            Did you do a fifth Pathway?
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fifth_pathway"
                                    id="fifth_pathway_yes" value="yes">
                                <label class="form-check-label" for="fifth_pathway_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fifth_pathway"
                                    id="fifth_pathway_no" value="no">
                                <label class="form-check-label" for="fifth_pathway_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fifth_pathway_location" class="form-label">
                            If so, where?
                        </label>
                        <input id="fifth_pathway_location" name="fifth_pathway_location" type="text"
                            class="form-control" />
                    </div>

                    <div class="clearfix"></div>

                    <p class="fw-bold mt-3">Licensing Exams Taken</p>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="national_board_exam" class="form-label">
                            National Boards
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="national_board_exam"
                                    id="national_board_exam_yes" value="yes">
                                <label class="form-check-label" for="national_board_exam_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="national_board_exam"
                                    id="national_board_exam_no" value="no">
                                <label class="form-check-label" for="national_board_exam_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="national_board_exam_date" class="form-label">
                            Date Taken
                        </label>
                        <input id="national_board_exam_date" name="national_board_exam_date" type="date"
                            max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="flex_exam" class="form-label">
                            FLEX
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="flex_exam" id="flex_exam_yes"
                                    value="yes">
                                <label class="form-check-label" for="flex_exam_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="flex_exam" id="flex_exam_no"
                                    value="no">
                                <label class="form-check-label" for="flex_exam_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="flex_exam_date" class="form-label">
                            Date Taken
                        </label>
                        <input id="flex_exam_date" name="flex_exam_date" type="date" max="9999-12-31"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="spex_exam" class="form-label">
                            SPEX
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="spex_exam" id="spex_exam_yes"
                                    value="yes">
                                <label class="form-check-label" for="spex_exam_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="spex_exam" id="spex_exam_no"
                                    value="no">
                                <label class="form-check-label" for="spex_exam_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="spex_exam_date" class="form-label">
                            Date Taken
                        </label>
                        <input id="spex_exam_date" name="spex_exam_date" type="date" max="9999-12-31"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="usmle_exam" class="form-label">
                            USMLE
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="usmle_exam" id="usmle_exam_yes"
                                    value="yes">
                                <label class="form-check-label" for="usmle_exam_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="usmle_exam" id="usmle_exam_no"
                                    value="no">
                                <label class="form-check-label" for="usmle_exam_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="usmle_exam_date" class="form-label">
                            Date Taken
                        </label>
                        <input id="usmle_exam_date" name="usmle_exam_date" type="date" max="9999-12-31"
                            class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="state_board_exam" class="form-label">
                            State Boards
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="state_board_exam"
                                    id="state_board_exam_yes" value="yes">
                                <label class="form-check-label" for="state_board_exam_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="state_board_exam"
                                    id="state_board_exam_no" value="no">
                                <label class="form-check-label" for="state_board_exam_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="state_board_exam_date" class="form-label">
                            Date Taken
                        </label>
                        <input id="state_board_exam_date" name="state_board_exam_date" type="date"
                            max="9999-12-31" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="lmcc_exam" class="form-label">
                            LMCC
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="lmcc_exam" id="lmcc_exam_yes"
                                    value="yes">
                                <label class="form-check-label" for="lmcc_exam_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="lmcc_exam" id="lmcc_exam_no"
                                    value="no">
                                <label class="form-check-label" for="lmcc_exam_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="lmcc_exam_date" class="form-label">
                            Date Taken
                        </label>
                        <input id="lmcc_exam_date" name="lmcc_exam_date" type="date" max="9999-12-31"
                            class="form-control" />
                    </div>

                </div>
            </div>
        </div>
    </section>
@else
    <section id="step-3" class="tab-pane board-certifications mb-5" role="tabpanel" aria-labelledby="step-3">
        <div class="card border border-dark rounded">
            <div class="card-header bg-gray-200 text-uppercase border-bottom border-dark fw-bold">
                Board Certification
            </div>
            <div class="card-body">

                <div class="row">

                    <div class="col-md-12 mb-3 form-group">
                        <label for="board_certified" class="form-label me-3">
                            Are you currently board certified?
                        </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="board_certified"
                                id="board_certified_yes" value="yes"
                                {{ isset($board_certifications[0]->board_certified) && $board_certifications[0]->board_certified == 'yes' ? 'checked' : '' }}>
                            <label class="form-check-label" for="board_certified_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="board_certified"
                                id="board_certified_no" value="no"
                                {{ isset($board_certifications[0]->board_certified) && $board_certifications[0]->board_certified == 'no' ? 'checked' : '' }}>
                            <label class="form-check-label" for="board_certified_no">No</label>
                        </div>
                    </div>

                    <p>List all current and past board certifications :</p>

                    <div class="col-md-12" id="certificate_wrapper">

                        @foreach ($board_certifications as $key => $board_certificate)
                            <div class="row certificate_wrapper_item">

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Name of issuing board
                                    </label>
                                    <input name="issuing_board[{{ $key }}]" type="text"
                                        class="form-control" value="{{ $board_certificate->issuing_board }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Specialty
                                    </label>
                                    <select class="form-select" name="issuing_board_speciality[{{ $key }}]">
                                        @if ($board_certificate->issuing_board_speciality == '')
                                            <option value="">Select Your Specialty</option>
                                        @else
                                            <option value="{{ $board_certificate->issuing_board_speciality }}">
                                                {{ $board_certificate->issuing_board_speciality }}
                                            </option>
                                        @endif
                                        <x-speciality></x-speciality>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Date Certified
                                    </label>
                                    <input name="issuing_board_certified_date[{{ $key }}]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="{{ $board_certificate->issuing_board_certified_date }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Date Recertified
                                    </label>
                                    <input name="issuing_board_recertified_date[{{ $key }}]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="{{ $board_certificate->issuing_board_recertified_date }}" />
                                </div>

                                <div class="col-md-6 mb-3 form-group">
                                    <label class="form-label">
                                        Expiration Date (if any)
                                    </label>
                                    <input name="issuing_board_expiration_date[{{ $key }}]" type="date"
                                        max="9999-12-31" class="form-control"
                                        value="{{ $board_certificate->issuing_board_expiration_date }}" />
                                </div>

                            </div>

                            <hr class="my-3">
                        @endforeach

                    </div>

                    <div class="clearfix mb-3">
                        <button type="button" class="btn btn-sm btn-primary-soft"
                            onclick="cloneDiv('certificate_wrapper_item')">
                            <i class="fe fe-plus"></i>
                            Add
                        </button>
                    </div>

                    <p class="my-3">
                        Please answer the following questions. Attach explanation form(s) if
                        necessary.
                    </p>

                    <div class="col-md-12 mb-3 form-group">
                        <label for="examined_board" class="form-label me-3">
                            A. Have you ever been examined by any specialty board, but failed to
                            pass? If
                            yes,
                            please provide name of board(s) and date(s):
                        </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="examined_board"
                                id="examined_board_yes" value="yes"
                                {{ $board_certifications[0]->examined_board == 'yes' ? 'checked' : '' }}>
                            <label class="form-check-label" for="examined_board_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="examined_board"
                                id="examined_board_no" value="no"
                                {{ $board_certifications[0]->examined_board == 'no' ? 'checked' : '' }}>
                            <label class="form-check-label" for="examined_board_no">No</label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="examined_board_name" class="form-label">
                            Board Name
                        </label>
                        <input id="examined_board_name" name="examined_board_name" type="text"
                            class="form-control" value="{{ $board_certifications[0]->examined_board_name }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="examined_board_date" class="form-label">
                            Date
                        </label>
                        <input id="examined_board_date" name="examined_board_date" type="date" max="9999-12-31"
                            class="form-control" value="{{ $board_certifications[0]->examined_board_date }}" />
                    </div>

                    <div class="col-md-12 mb-3 form-group">
                        <label for="certified_board" class="form-label me-3">
                            B. If you are not currently certified, have you applied for the
                            certification
                            examination? If yes, please provide date
                            you will sit for exam.
                        </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="certified_board"
                                id="certified_board_yes" value="yes"
                                {{ $board_certifications[0]->certified_board == 'yes' ? 'checked' : '' }}>
                            <label class="form-check-label" for="certified_board_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="certified_board"
                                id="certified_board_no" value="no"
                                {{ $board_certifications[0]->certified_board == 'no' ? 'checked' : '' }}>
                            <label class="form-check-label" for="certified_board_no">No</label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="certified_board_date" class="form-label">
                            Date
                        </label>
                        <input id="certified_board_date" name="certified_board_date" type="date" max="9999-12-31"
                            class="form-control" value="{{ $board_certifications[0]->certified_board_date }}" />
                    </div>

                    <div class="clearfix"></div>

                    <p class="mt-3 fw-bold">Clinical Certification</p>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="bls_certification" class="form-label">
                            BLS Certification
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bls_certification"
                                    id="bls_certification_yes" value="yes"
                                    {{ $board_certifications[0]->bls_certification == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="bls_certification_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bls_certification"
                                    id="bls_certification_no" value="no"
                                    {{ $board_certifications[0]->bls_certification == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="bls_certification_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="bls_certification_expiration_date" class="form-label">
                            Expiration Date
                        </label>
                        <input id="bls_certification_expiration_date" name="bls_certification_expiration_date"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $board_certifications[0]->bls_certification_expiration_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="acls_certification" class="form-label">
                            ACLS Certification
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="acls_certification"
                                    id="acls_certification_yes" value="yes"
                                    {{ $board_certifications[0]->acls_certification == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="acls_certification_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="acls_certification"
                                    id="acls_certification_no" value="no"
                                    {{ $board_certifications[0]->acls_certification == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="acls_certification_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="acls_certification_expiration_date" class="form-label">
                            Expiration Date
                        </label>
                        <input id="acls_certification_expiration_date" name="acls_certification_expiration_date"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $board_certifications[0]->acls_certification_expiration_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="atls_certification" class="form-label">
                            ATLS Certification
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="atls_certification"
                                    id="atls_certification_yes" value="yes"
                                    {{ $board_certifications[0]->atls_certification == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="atls_certification_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="atls_certification"
                                    id="atls_certification_no" value="no"
                                    {{ $board_certifications[0]->atls_certification == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="atls_certification_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="atls_certification_expiration_date" class="form-label">
                            Expiration Date
                        </label>
                        <input id="atls_certification_expiration_date" name="atls_certification_expiration_date"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $board_certifications[0]->atls_certification_expiration_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="pals_certification" class="form-label">
                            PALS Certification
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pals_certification"
                                    id="pals_certification_yes" value="yes"
                                    {{ $board_certifications[0]->pals_certification == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="pals_certification_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pals_certification"
                                    id="pals_certification_no" value="no"
                                    {{ $board_certifications[0]->pals_certification == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="pals_certification_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="pals_certification_expiration_date" class="form-label">
                            Expiration Date
                        </label>
                        <input id="pals_certification_expiration_date" name="pals_certification_expiration_date"
                            type="date" max="9999-12-31" class="form-control"
                            value="{{ $board_certifications[0]->pals_certification_expiration_date }}" />
                    </div>

                    <p class="fw-bold mt-3">Foreign Graduates</p>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="ecfmg_certificate" class="form-label">
                            Do you have a permanent ECFMG Certificate?
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ecfmg_certificate"
                                    id="ecfmg_certificate_yes" value="yes"
                                    {{ $board_certifications[0]->ecfmg_certificate == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="ecfmg_certificate_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ecfmg_certificate"
                                    id="ecfmg_certificate_no" value="no"
                                    {{ $board_certifications[0]->ecfmg_certificate == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="ecfmg_certificate_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="ecfmg_certificate_id" class="form-label">
                            ECFMG Certificate #
                        </label>
                        <input id="ecfmg_certificate_id" name="ecfmg_certificate_id" type="text"
                            class="form-control" value="{{ $board_certifications[0]->ecfmg_certificate_id }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fifth_pathway_choose" class="form-label">
                            Did you do a fifth Pathway?
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fifth_pathway"
                                    id="fifth_pathway_yes" value="yes"
                                    {{ $board_certifications[0]->fifth_pathway == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="fifth_pathway_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fifth_pathway"
                                    id="fifth_pathway_no" value="no"
                                    {{ $board_certifications[0]->fifth_pathway == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="fifth_pathway_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="fifth_pathway_location" class="form-label">
                            If so, where?
                        </label>
                        <input id="fifth_pathway_location" name="fifth_pathway_location" type="text"
                            class="form-control" value="{{ $board_certifications[0]->fifth_pathway_location }}" />
                    </div>

                    <div class="clearfix"></div>

                    <p class="fw-bold mt-3">Licensing Exams Taken</p>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="national_board_exam" class="form-label">
                            National Boards
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="national_board_exam"
                                    id="national_board_exam_yes" value="yes"
                                    {{ $board_certifications[0]->national_board_exam == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="national_board_exam_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="national_board_exam"
                                    id="national_board_exam_no" value="no"
                                    {{ $board_certifications[0]->national_board_exam == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="national_board_exam_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="national_board_exam_date" class="form-label">
                            Date Taken
                        </label>
                        <input id="national_board_exam_date" name="national_board_exam_date" type="date"
                            max="9999-12-31" class="form-control"
                            value="{{ $board_certifications[0]->national_board_exam_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="flex_exam" class="form-label">
                            FLEX
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="flex_exam" id="flex_exam_yes"
                                    value="yes" {{ $board_certifications[0]->flex_exam == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flex_exam_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="flex_exam" id="flex_exam_no"
                                    value="no" {{ $board_certifications[0]->flex_exam == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flex_exam_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="flex_exam_date" class="form-label">
                            Date Taken
                        </label>
                        <input id="flex_exam_date" name="flex_exam_date" type="date" max="9999-12-31"
                            class="form-control" value="{{ $board_certifications[0]->flex_exam_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="spex_exam" class="form-label">
                            SPEX
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="spex_exam" id="spex_exam_yes"
                                    value="yes" {{ $board_certifications[0]->spex_exam == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="spex_exam_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="spex_exam" id="spex_exam_no"
                                    value="no" {{ $board_certifications[0]->spex_exam == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="spex_exam_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="spex_exam_date" class="form-label">
                            Date Taken
                        </label>
                        <input id="spex_exam_date" name="spex_exam_date" type="date" max="9999-12-31"
                            class="form-control" value="{{ $board_certifications[0]->spex_exam_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="usmle_exam" class="form-label">
                            USMLE
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="usmle_exam" id="usmle_exam_yes"
                                    value="yes" {{ $board_certifications[0]->usmle_exam == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="usmle_exam_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="usmle_exam" id="usmle_exam_no"
                                    value="no" {{ $board_certifications[0]->usmle_exam == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="usmle_exam_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="usmle_exam_date" class="form-label">
                            Date Taken
                        </label>
                        <input id="usmle_exam_date" name="usmle_exam_date" type="date" max="9999-12-31"
                            class="form-control" value="{{ $board_certifications[0]->usmle_exam_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="state_board_exam" class="form-label">
                            State Boards
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="state_board_exam"
                                    id="state_board_exam_yes" value="yes"
                                    {{ $board_certifications[0]->state_board_exam == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="state_board_exam_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="state_board_exam"
                                    id="state_board_exam_no" value="no"
                                    {{ $board_certifications[0]->state_board_exam == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="state_board_exam_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="state_board_exam_date" class="form-label">
                            Date Taken
                        </label>
                        <input id="state_board_exam_date" name="state_board_exam_date" type="date"
                            max="9999-12-31" class="form-control"
                            value="{{ $board_certifications[0]->state_board_exam_date }}" />
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="lmcc_exam" class="form-label">
                            LMCC
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="lmcc_exam" id="lmcc_exam_yes"
                                    value="yes" {{ $board_certifications[0]->lmcc_exam == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="lmcc_exam_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="lmcc_exam" id="lmcc_exam_no"
                                    value="no" {{ $board_certifications[0]->lmcc_exam == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="lmcc_exam_no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 form-group">
                        <label for="lmcc_exam_date" class="form-label">
                            Date Taken
                        </label>
                        <input id="lmcc_exam_date" name="lmcc_exam_date" type="date" max="9999-12-31"
                            class="form-control" value="{{ $board_certifications[0]->lmcc_exam_date }}" />
                    </div>

                </div>
            </div>
        </div>
    </section>
@endif
