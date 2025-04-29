@extends('layouts.app')

@section('title', 'My Application')

@section('styles')
    <!-- CSS -->
    <link href="https://unpkg.com/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
    <style>
        :root {
            --sw-toolbar-btn-color: #ffffff;
            --sw-toolbar-btn-background-color: #335eea;
            --sw-anchor-active-primary-color: #335eea;
            --sw-progress-color: #335eea;
            --sw-progress-background-color: #f8f9fa;
        }

        .sw>.progress {
            height: 8px;
        }

        .sw>.progress>.progress-bar {
            height: 8px;
        }

        .btn-submit {
            background-color: #42ba96 !important;
            border-color: #42ba96 !important;
        }


        .input-group-text {
            padding: 0.375rem 0.75rem !important;
        }

        .input-group>.form-control,
        .input-group>.form-select {
            padding: 0.375rem 0.75rem !important;
        }

        .cursor-pointer {
            cursor: pointer;
        }

        .btn-danger {
            background-color: #df4759 !important;
            border-color: #df4759 !important;
        }
    </style>
@endsection

@section('content')
    <!-- BREADCRUMB -->
    <nav class="bg-gray-200">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Breadcrumb -->
                    <ol class="breadcrumb breadcrumb-scroll">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-gray-700">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            My Application
                        </li>
                    </ol>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </nav>

    <!-- SEARCH -->
    <section class="py-6">
        <div class="container">
            <form action="{{ route('application.update') }}" method="post" id="application_form"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-0 b-0">

                    <div class="row">

                        <div class="col-12 mb-3">

                            <h1 class="fw-bold text-center">
                                <u>
                                    Application Instructions
                                </u>
                            </h1>

                            <p class="mb-3">
                                Welcome. Please review and complete the Honor Providers application to its fullest.
                                This application will serve as a source of truth for Honor Providers risk management and
                                quality assurance records. Additionally, all furnished information and supporting
                                documents can
                                be used to newly apply or renew: Hospital Privileges, Provider Enrollment, State
                                Licensing
                                and/or any applicable state and federal applications.
                            </p>

                            <p>
                                <i class="fe fe-check me-2" aria-hidden="true"></i>The accuracy of your
                                profile information is paramount to expeditiously process and meet
                                credentialing timelines. Furthermore, innacurate or missing
                                information will likely result in delayed processing timelines.
                            </p>
                            <p>
                                <i class="fe fe-check me-2" aria-hidden="true"></i> CV, education, work
                                history and hospital affiliations MUST display MM/YYYY formatting.
                            </p>

                            <h2 class="fw-bold text-center">PROVIDER APPLICATION</h2>
                        </div>

                        <div class="col-12 mb-3 pb-5 border-0" id="smartwizard">

                            <ul class="nav">

                                @for ($i = 1; $i <= 12; $i++)
                                    <li class="nav-item d-none">
                                        <a href="#step-{{ $i }}" class="nav-link">
                                            <div class="num">{{ $i }}</div>
                                        </a>
                                    </li>
                                @endfor

                            </ul>

                            <div class="tab-content">

                                <x-form-1 :personal_information="$personal_information"></x-form-1>

                                <x-form-2 :education_and_training="$education_and_training"></x-form-2>

                                <x-form-3 :board_certifications="$board_certifications"></x-form-3>

                                <x-form-4 :licensing="$licensing" :dea_substances="$dea_substances"></x-form-4>

                                <x-form-5 :references="$references"></x-form-5>

                                <x-form-6 :work_history="$work_history"></x-form-6>

                                <x-form-7 :hospital_and_affiliations="$hospital_and_affiliations"></x-form-7>

                                <x-form-8 :disclusres_and_disciplinary_action="$disclusres_and_disciplinary_action"></x-form-8>

                                <x-form-9 :credentialing_application_form="$credentialing_application_form"></x-form-9>

                                <x-form-10 :malpractice_information="$malpractice_information" :malpractice_claims="$malpractice_claims" :malpractice_claim_policies="$malpractice_claim_policies"></x-form-10>

                                <x-form-11 :current_medical_education="$current_medical_education"></x-form-11>

                                <x-form-12 :professional_liability_claim="$professional_liability_claim"></x-form-12>

                            </div>

                            <!-- Include optional progressbar HTML -->
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                        </div>

                    </div>

                </div>

                <input type="hidden" name="application_status" id="application_status" autocomplete="false" value="0">

            </form>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Smart Wizard -->
    <script src="https://unpkg.com/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>

    <!-- jQuery Validate -->
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/additional-methods.min.js') }}"></script>

    <script>
        var isApplicationSubmitted = {{ auth()->user()->application_status }};

        $(".passwordToggle").on('click', function(event) {
            event.preventDefault();
            var passwordInput = $(this).data('input');
            if ($(passwordInput).attr("type") == "text") {
                $(passwordInput).attr('type', 'password');
                $(this).addClass("fa-eye-slash");
                $(this).removeClass("fa-eye");
            } else if ($(passwordInput).attr("type") == "password") {
                $(passwordInput).attr('type', 'text');
                $(this).removeClass("fa-eye-slash");
                $(this).addClass("fa-eye");
            }
        });

        function toggleAttachment(toggle) {
            if (toggle === 'yes') {
                $('#attachment-wrapper').show('slow');
                $("#attachment").rules("add", "required");
            } else {
                $('#attachment-wrapper').hide('slow');
                $("#attachment").rules("remove", "required");
            }
        }

        function cloneDiv(parent) {

            if (isApplicationSubmitted == 1) {
                return;
            }

            var currentIndex = $("." + parent).length;
            var originalDiv = $(`div.${parent}:first`);
            var parentDiv = originalDiv.parent();
            var newDiv = originalDiv.clone();
            newDiv.attr('id', `${parent}_${currentIndex}`);
            newDiv.find("input").val('');
            newDiv.find("select").find('option:eq(0)').prop('selected', true);
            newDiv.find("input").each(function() {
                var input_name = $(this).attr('name').substring(0, $(this).attr('name').indexOf('['));
                $(this).attr('name', input_name + '[' + currentIndex + ']');
            });
            newDiv.find("select").each(function() {
                var input_name = $(this).attr('name').substring(0, $(this).attr('name').indexOf('['));
                $(this).attr('name', input_name + '[' + currentIndex + ']');
            });

            // new

                    //  Update 'name' attributes for textarea fields
                    newDiv.find("textarea").each(function() {
                var textarea_name = $(this).attr('name').split('[')[0];
                $(this).attr('name', textarea_name + '[' + currentIndex + ']');
            });

            //

            newDiv.append(
                `<div class="col-md-12"><button type="button" class="btn btn-sm btn-danger-soft" onclick="removeDiv('#${parent}_${currentIndex}')"><i class="fe fe-x"></i>Remove</button></div><hr class="my-3">`
            );
            $(parentDiv).append(newDiv);
            $(".tab-content").height("auto");
        }

        function removeDiv(parent) {
            document.querySelector(parent).remove();
            $(".tab-content").height("auto");
        }

        $(function() {

            $("#primary_speciality option[value='{{ $personal_information->primary_speciality }}']").attr(
                'selected', 'selected');
            $("#secondary_speciality option[value='{{ $personal_information->secondary_speciality }}']").attr(
                'selected', 'selected');

            $.validator.addMethod("unique_email", function(value, element) {
                var parentForm = $(element).closest('form');
                var timeRepeated = 0;
                if (value != '') {
                    $(parentForm.find('.unique_email')).each(function() {
                        if ($(this).val() === value) {
                            timeRepeated++;
                        }
                    });
                }
                return timeRepeated === 1 || timeRepeated === 0;

            }, "Duplicate Email");

            $.validator.addMethod("unique_phone_no", function(value, element) {
                var parentForm = $(element).closest('form');
                var timeRepeated = 0;
                if (value != '') {
                    $(parentForm.find('.unique_phone_no')).each(function() {
                        if ($(this).val() === value) {
                            timeRepeated++;
                        }
                    });
                }
                return timeRepeated === 1 || timeRepeated === 0;

            }, "Duplicate Phone No");

            var $validator = $('#application_form').validate({
                errorPlacement: function(error, element) {
                    var placement = $(element).data('error');
                    if (placement) {
                        $(placement).append(error)
                    } else {
                        error.insertAfter(element);
                    }
                },
            });

            // SmartWizard initialize
            $('#smartwizard').smartWizard({
                enableUrlHash: false, // Enable selection of the step based on url hash
                autoAdjustHeight: true, // Automatically adjust content height
                keyboard: {
                    keyNavigation: false, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
                },
                toolbar: {
                    position: 'bottom', // none|top|bottom|both
                    showNextButton: true, // show/hide a Next button
                    showPreviousButton: true, // show/hide a Previous button
                    extraHtml: (isApplicationSubmitted == 0) ?
                        '<button class="btn sw-btn btn-submit" id="btn_submit" type="button">Save</button> <button class="btn sw-btn btn-danger" id="btn_submit_application" type="button" style="display:none">Submit Application</button>' :
                        '' // Extra html to show on toolbar
                },
                transition: {
                    animation: 'none', // Animation effect on navigation, none|fade|slideHorizontal|slideVertical|slideSwing|css(Animation CSS class also need to specify)
                },
            	// onShowStep: function(obj, context) {
            	// console.log(obj);
            	// if (context.toStep > context.fromStep) {
            	// // Scrolling to the top of the page
            	// $('#smartwizard').animate({
            	// scrollTop: 0
            	// }, 'slow');
            	// }
            	// },
                getContent: provideContent
            });

            $(".tab-content").height("auto");

            // Function to fetch the ajax content
            function provideContent(idx, stepDirection, stepPosition, selStep, callback) {

                if (isApplicationSubmitted == 0) {

                    var $valid = $("#application_form").valid();
                    if (!$valid) {
                        $validator.focusInvalid();
                        return false;
                    }

                }

                var btnSubmit = document.getElementById('btn_submit');

                // You can use stepDirection to get ajax content on the forward movement and stepPosition to identify the step position
                if (stepPosition == 'last') {
                    // btnSubmit.style.display = 'inline-block';
                    // btnSubmit.disabled = false;

                    $(".sw-btn-next").hide();

                    if (isApplicationSubmitted == 0) {

                        $("#btn_submit_application").show();
                        var $valid = $("#application_form").valid();
                        if (!$valid) {
                            $validator.focusInvalid();
                            return false;
                        }
                        $(btnSubmit).click(function() {
                            $('#application_form').submit();
                        });

                        $("#btn_submit_application").click(function() {
                            $("#application_status").val(1);
                            $("#signature").rules("add", "required");
                            $('#application_form').submit();
                        });

                    }

                } else {
                    // btnSubmit.style.display = 'none';
                    // btnSubmit.disabled = true;

                    $(".sw-btn-next").show();

                    if (isApplicationSubmitted == 0) {
                        $("#btn_submit_application").hide();
                        var $valid = $("#application_form").valid();
                        if (!$valid) {
                            $validator.focusInvalid();
                            return false;
                        }
                        $(btnSubmit).click(function() {
                            $('#application_form').submit();
                        });
                    }
                }

                // The callback must called in any case to procced the steps
                // The empty callback will not apply any dynamic contents to the steps
                callback();
            }
        
        	$("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
  				document.getElementById("smartwizard").scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"})
			});
        
        });

        function validateNumber(el) {
            return el.value = el.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1')
        }
    </script>
@endsection
