<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\Admin\NewApplicationReceived;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

class ApplicationController extends Controller
{
    public function create()
    {
        if (auth()->user()->application_status) {
            return redirect()->route('application.edit');
        }

        return view('user.application.create');
    }


    // new 
    public function save(Request $request)
    {
        // auth()->user()->personal_information()->delete();
        // auth()->user()->education_and_training()->delete();
        // auth()->user()->board_certifications()->delete();
        // auth()->user()->licensing()->delete();
        // auth()->user()->dea_substances()->delete();
        // auth()->user()->references()->delete();
        // auth()->user()->work_history()->delete();
        // auth()->user()->hospital_and_affiliations()->delete();
        // auth()->user()->disclusres_and_disciplinary_action()->delete();
        // auth()->user()->credentialing_application_form()->delete();
        // auth()->user()->malpractice_information()->delete();
        // auth()->user()->malpractice_claims()->delete();
        // auth()->user()->malpractice_claim_policies()->delete();
        // auth()->user()->current_medical_education()->delete();
        // auth()->user()->professional_liability_claim()->delete();
        // auth()->user()->additional_hospital_affiliations()->delete();

        $personal_information = $request->user()->personal_information()->updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'suffix' => $request->suffix,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'degree' => $request->degree,
            'social_security_number' => $request->social_security_number,
            'home_address' => $request->home_address,
            'home_phone_number' => $request->home_phone_number,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'cell_phone_number' => $request->cell_phone_number,
            'office_address' => $request->office_address,
            'office_phone_number' => $request->office_phone_number,
            'office_city' => $request->office_city,
            'office_state' => $request->office_state,
            'office_zip_code' => $request->office_zip_code,
            'email_address' => $request->email_address,
            'citizenship' => $request->citizenship,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'primary_speciality' => $request->primary_speciality,
            'secondary_speciality' => $request->secondary_speciality,
            'present_position' => $request->present_position,
            'npi' => $request->npi,
            'medicare' => $request->medicare,
            'upin' => $request->upin,
            'fed_tax_id' => $request->fed_tax_id,
            'medicaid' => $request->medicaid,
            'contact_name' => $request->contact_name,
            'contact_address' => $request->contact_address,
        ]);

        $education_and_training = $request->user()->education_and_training()->updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'medical_school' => $request->medical_school,
            'degree' => $request->et_degree,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'e_city' => $request->e_city,
            'e_state' => $request->e_state,
            'internship_training_name' => $request->internship_training_name,
            'internship_training_city' => $request->internship_training_city,
            'internship_training_state' => $request->internship_training_state,
            'internship_training_start_date' => $request->internship_training_start_date,
            'internship_training_end_date' => $request->internship_training_end_date,
            'category_of_training' => $request->category_of_training,
            'residency_training_name' => $request->residency_training_name,
            'residency_training_city' => $request->residency_training_city,
            'residency_training_state' => $request->residency_training_state,
            'residency_training_start_date' => $request->residency_training_start_date,
            'residency_training_end_date' => $request->residency_training_end_date,
            'residency_training_speciality' => $request->residency_training_speciality,
            'fellowship_training_name' => $request->fellowship_training_name,
            'fellowship_training_city' => $request->fellowship_training_city,
            'fellowship_training_state' => $request->fellowship_training_state,
            'fellowship_training_start_date' => $request->fellowship_training_start_date,
            'fellowship_training_end_date' => $request->fellowship_training_end_date,
            'fellowship_training_speciality' => $request->fellowship_training_speciality,
            'additional_training_name' => $request->additional_training_name,
            'additional_training_city' => $request->additional_training_city,
            'additional_training_state' => $request->additional_training_state,
            'additional_training_start_date' => $request->additional_training_start_date,
            'additional_training_end_date' => $request->additional_training_end_date,
            'additional_training_category' => $request->additional_training_category,
        ]);

        

        if (!is_null($request->issuing_board)) {
            foreach ($request->issuing_board as $key => $issuing_board) {


                //new

            // Check if all group fields are filled
            $speciality = $request->issuing_board_speciality[$key] ?? null;
            $certifiedDate = $request->issuing_board_certified_date[$key] ?? null;
            $recertifiedDate = $request->issuing_board_recertified_date[$key] ?? null;

            if (empty($issuing_board) || empty($speciality) || empty($certifiedDate) || empty($recertifiedDate)) {
                continue; //  Skip if any group field is empty
            }

                //

                $request->user()->board_certifications()->updateOrCreate([
                    'user_id' => auth()->id(),

                    // new
                    'issuing_board' => $issuing_board,
                    'issuing_board_speciality' => $request->issuing_board_speciality[$key] ?? '',
                    //

                ], [
                    'board_certified' => $request->board_certified,
                    'issuing_board' => $issuing_board,
                    'issuing_board_speciality' => $request->issuing_board_speciality[$key] ?? '',
                    'issuing_board_certified_date' => $request->issuing_board_certified_date[$key],
                    'issuing_board_recertified_date' => $request->issuing_board_recertified_date[$key],
                    'issuing_board_expiration_date' => $request->issuing_board_expiration_date[$key],
                    'examined_board' => $request->examined_board,
                    'examined_board_name' => $request->examined_board_name,
                    'examined_board_date' => $request->examined_board_date,
                    'certified_board' => $request->certified_board,
                    'certified_board_date' => $request->certified_board_date,
                    'bls_certification' => $request->bls_certification,
                    'bls_certification_expiration_date' => $request->bls_certification_expiration_date,
                    'acls_certification' => $request->acls_certification,
                    'acls_certification_expiration_date' => $request->acls_certification_expiration_date,
                    'atls_certification' => $request->atls_certification,
                    'atls_certification_expiration_date' => $request->atls_certification_expiration_date,
                    'pals_certification' => $request->pals_certification,
                    'pals_certification_expiration_date' => $request->pals_certification_expiration_date,
                    // 'federal_dea_number' => $request->federal_dea_number,
                    // 'dea_expiration_date' => $request->dea_expiration_date,
                    'ecfmg_certificate' => $request->ecfmg_certificate,
                    'ecfmg_certificate_id' => $request->ecfmg_certificate_id,
                    'fifth_pathway' => $request->fifth_pathway,
                    'fifth_pathway_location' => $request->fifth_pathway_location,
                    'national_board_exam' => $request->national_board_exam,
                    'national_board_exam_date' => $request->national_board_exam_date,
                    'flex_exam' => $request->flex_exam,
                    'flex_exam_date' => $request->flex_exam_date,
                    'spex_exam' => $request->spex_exam,
                    'spex_exam_date' => $request->spex_exam_date,
                    'usmle_exam' => $request->usmle_exam,
                    'usmle_exam_date' => $request->usmle_exam_date,
                    'state_board_exam' => $request->state_board_exam,
                    'state_board_exam_date' => $request->state_board_exam_date,
                    'lmcc_exam' => $request->lmcc_exam,
                    'lmcc_exam_date' => $request->lmcc_exam_date,
                ]);
            }
        }

        if (!is_null($request->licensing_state)) {
            foreach ($request->licensing_state as $key => $licensing_state) {

                // Check if all group fields are filled
            $licenseNumber = $request->license_number[$key] ?? '';
            $licenseStatus = $request->license_status[$key];
            $licenseGrantedDate = $request->license_granted_date[$key];
            $licenseExpirationDate = $request->license_expiration_date[$key];
            $stateMedicareProviderNumber = $request->state_medicare_provider_number[$key];
            $stateMedicaidProviderNumber = $request->state_medicaid_provider_number[$key];


            if (empty($licenseNumber) || empty($licenseStatus) || empty($licenseGrantedDate) || empty($licenseExpirationDate) || empty($stateMedicareProviderNumber) || empty($stateMedicaidProviderNumber) ) {
                continue; //  Skip if any group field is empty
            }

                $request->user()->licensing()->updateOrCreate([
                    'user_id' => auth()->id(),

                    'license_number' => $request->license_number[$key] ?? '',

                ], [
                    'licensing_state' => $licensing_state,
                    'license_number' => $request->license_number[$key] ?? '',
                    'license_status' => $request->license_status[$key],
                    'license_granted_date' => $request->license_granted_date[$key],
                    'license_expiration_date' => $request->license_expiration_date[$key],
                    'state_medicare_provider_number' => $request->state_medicare_provider_number[$key],
                    'state_medicaid_provider_number' => $request->state_medicaid_provider_number[$key],
                    'state_controlled_substance_permit_number' => $request->state_controlled_substance_permit_number[$key],
                ]);
            }
        }

        if (!is_null($request->licensing_dea_state)) {
            foreach ($request->licensing_dea_state as $key => $licensing_dea_state) {

                  // Check if all group fields are filled
                    $federal_dea_number = $request->federal_dea_number[$key] ?? '';
                    $dea_expiration_date = $request->dea_expiration_date[$key] ?? '';
                    $licensing_dea_state = $licensing_dea_state;
                    $dea_state_controlled_substance_permit_number = $request->dea_state_controlled_substance_permit_number[$key];
                    $license_dea_status = $request->license_dea_status[$key];
                    $license_dea_granted_date = $request->license_dea_granted_date[$key];
                    $license_dea_expiration_date = $request->license_dea_expiration_date[$key];

                    
                    


                if (empty($federal_dea_number) || empty($dea_expiration_date) || empty($licensing_dea_state) || empty($dea_state_controlled_substance_permit_number) || empty($license_dea_status) || empty($license_dea_granted_date) || empty($license_dea_expiration_date) ) {
                    continue; //  Skip if any group field is empty
                }

                $request->user()->dea_substances()->updateOrCreate([

                    'user_id' => auth()->id(),

                    'federal_dea_number' => $request->federal_dea_number[$key] ?? '',


                ], [
                    'licensing_dea_state' => $licensing_dea_state,
                    'license_dea_number' => $request->license_dea_number[$key] ?? '',
                    'license_dea_status' => $request->license_dea_status[$key],
                    'license_dea_granted_date' => $request->license_dea_granted_date[$key],
                    'license_dea_expiration_date' => $request->license_dea_expiration_date[$key],
                    'dea_state_medicare_provider_number' => $request->dea_state_medicare_provider_number[$key],
                    'dea_state_medicaid_provider_number' => $request->dea_state_medicaid_provider_number[$key],
                    'dea_state_controlled_substance_permit_number' => $request->dea_state_controlled_substance_permit_number[$key],
                    'federal_dea_number' => $request->federal_dea_number[$key] ?? '',
                    'dea_expiration_date' => $request->dea_expiration_date[$key] ?? '',
                ]);
            }
        }

        $request->user()->references()->updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'reference_1_name' =>  $request->reference_1_name,
            'reference_1_specialty' =>  $request->reference_1_specialty,
            'reference_1_phone_no' =>  $request->reference_1_phone_no,
            'reference_1_address' =>  $request->reference_1_address,
            'reference_1_city' =>  $request->reference_1_city,
            'reference_1_state' =>  $request->reference_1_state,
            'reference_1_zipcode' =>  $request->reference_1_zipcode,
            'reference_1_fax' =>  $request->reference_1_fax,
            'reference_1_email' =>  $request->reference_1_email,
            'reference_1_position' =>  $request->reference_1_position,
            'reference_1_years_work_together_start' =>  $request->reference_1_years_work_together_start,
            'reference_1_years_work_together_end' =>  $request->reference_1_years_work_together_end,
            'reference_1_facility' =>  $request->reference_1_facility,

            'reference_2_name' =>  $request->reference_2_name,
            'reference_2_specialty' =>  $request->reference_2_specialty,
            'reference_2_phone_no' =>  $request->reference_2_phone_no,
            'reference_2_address' =>  $request->reference_2_address,
            'reference_2_city' =>  $request->reference_2_city,
            'reference_2_state' =>  $request->reference_2_state,
            'reference_2_zipcode' =>  $request->reference_2_zipcode,
            'reference_2_fax' =>  $request->reference_2_fax,
            'reference_2_email' =>  $request->reference_2_email,
            'reference_2_position' =>  $request->reference_2_position,
            'reference_2_years_work_together_start' =>  $request->reference_2_years_work_together_start,
            'reference_2_years_work_together_end' =>  $request->reference_2_years_work_together_end,
            'reference_2_facility' =>  $request->reference_2_facility,

            'reference_3_name' =>  $request->reference_3_name,
            'reference_3_specialty' =>  $request->reference_3_specialty,
            'reference_3_phone_no' =>  $request->reference_3_phone_no,
            'reference_3_address' =>  $request->reference_3_address,
            'reference_3_city' =>  $request->reference_3_city,
            'reference_3_state' =>  $request->reference_3_state,
            'reference_3_zipcode' =>  $request->reference_3_zipcode,
            'reference_3_fax' =>  $request->reference_3_fax,
            'reference_3_email' =>  $request->reference_3_email,
            'reference_3_position' =>  $request->reference_3_position,
            'reference_3_years_work_together_start' =>  $request->reference_3_years_work_together_start,
            'reference_3_years_work_together_end' =>  $request->reference_3_years_work_together_end,
            'reference_3_facility' =>  $request->reference_3_facility,

            'reference_4_name' =>  $request->reference_4_name,
            'reference_4_specialty' =>  $request->reference_4_specialty,
            'reference_4_phone_no' =>  $request->reference_4_phone_no,
            'reference_4_address' =>  $request->reference_4_address,
            'reference_4_city' =>  $request->reference_4_city,
            'reference_4_state' =>  $request->reference_4_state,
            'reference_4_zipcode' =>  $request->reference_4_zipcode,
            'reference_4_fax' =>  $request->reference_4_fax,
            'reference_4_email' =>  $request->reference_4_email,
            'reference_4_position' =>  $request->reference_4_position,
            'reference_4_years_work_together_start' =>  $request->reference_4_years_work_together_start,
            'reference_4_years_work_together_end' =>  $request->reference_4_years_work_together_end,
            'reference_4_facility' =>  $request->reference_4_facility,
        ]);

        if (!is_null($request->work_history_from)) {
            foreach ($request->work_history_from as $key => $work_history_from) {

                // Check if all group fields are filled
                    $work_history_from = $work_history_from;
                    $work_history_to = $request->work_history_to[$key] ?? '';
                    $work_history_facility_name = $request->work_history_facility_name[$key] ?? '';
                    
                    $work_history_address = $request->work_history_address[$key] ?? '';
                    $work_history_city = $request->work_history_city[$key] ?? '';
                    $work_history_state = $request->work_history_state[$key] ?? '';


                if (empty($work_history_from) || empty($work_history_to) || empty($work_history_facility_name) || empty($work_history_address) || empty($work_history_city) || empty($work_history_state) ) {
                    continue; //  Skip if any group field is empty
                }


                $request->user()->work_history()->updateOrCreate([
                    'user_id' => auth()->id(),

                    'work_history_facility_name' => $request->work_history_facility_name[$key] ?? '',
                    'work_history_address' => $request->work_history_address[$key] ?? '',

                ], [
                    'work_history_from' => $work_history_from,
                    'work_history_to' => $request->work_history_to[$key] ?? '',
                    'work_history_facility_name' => $request->work_history_facility_name[$key] ?? '',
                    'work_history_phone' => $request->work_history_phone[$key] ?? '',
                    'work_history_address' => $request->work_history_address[$key] ?? '',
                    'work_history_city' => $request->work_history_city[$key] ?? '',
                    'work_history_state' => $request->work_history_state[$key] ?? '',
                    'work_history_zipcode' => $request->work_history_zipcode[$key] ?? '',
                    'work_history_do_not_contact' => $request->work_history_do_not_contact[$key] ?? '',
                ]);
            }
        }

        if (!is_null($request->primary_facility_name)) {
            foreach ($request->primary_facility_name as $key => $primary_facility_name) {

                                // Check if all group fields are filled
                                $primary_facility_name = $primary_facility_name;
                                $appointment_from = $request->appointment_from[$key] ?? '';
                                $appointment_to = $request->appointment_to[$key] ?? '';
                                $appointment_city = $request->appointment_city[$key] ?? '';
                                $appointment_state = $request->appointment_state[$key] ?? '';
            
            
                            if (empty($primary_facility_name) || empty($appointment_from) || empty($appointment_to) || empty($appointment_city) || empty($appointment_state)) {
                                continue; //  Skip if any group field is empty
                            }


                $request->user()->hospital_and_affiliations()->updateOrCreate([
                    'user_id' => auth()->id(),
                    'primary_facility_name' => $primary_facility_name,
                    'appointment_city' => $request->appointment_city[$key] ?? '',


                ], [
                    'hospital_and_affiliation_apply' => $request->hospital_and_affiliation_apply,
                    'primary_facility_name' => $primary_facility_name,
                    'appointment_from' => $request->appointment_from[$key] ?? '',
                    'appointment_to' => $request->appointment_to[$key] ?? '',
                    'appointment_city' => $request->appointment_city[$key] ?? '',
                    'appointment_state' => $request->appointment_state[$key] ?? '',
                ]);
            }
        }

        $request->user()->disclusres_and_disciplinary_action()->updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'question_1' =>  $request->question_1,
            'question_2' =>  $request->question_2,
            'question_3' =>  $request->question_3,
            'question_4' =>  $request->question_4,
            'question_5' =>  $request->question_5,
            'question_6' =>  $request->question_6,
            'question_7' =>  $request->question_7,
            'question_8' =>  $request->question_8,
            'question_9' =>  $request->question_9,
            'question_10' =>  $request->question_10,
            'question_11' =>  $request->question_11,
            'question_12' =>  $request->question_12,
            'question_13' =>  $request->question_13,
            'question_14' =>  $request->question_14,
            'question_15' =>  $request->question_15,
            'question_16' =>  $request->question_16,
            'question_17' =>  $request->question_17,
            'question_18' =>  $request->question_18,
            'question_19' =>  $request->question_19,
        ]);

        if (!is_null($request->explanation_date)) {
            foreach ($request->explanation_date as $key => $explanation_date) {


                // Check if all group fields are filled
                    $explanation_date = $explanation_date;
                    $explanation_answer = $request->explanation_answer[$key] ?? '';


                if (empty($explanation_date) || empty($explanation_answer)) {
                    continue; //  Skip if any group field is empty
                }


                $request->user()->credentialing_application_form()->updateOrCreate([
                    'user_id' => auth()->id(),
                    'explanation_date' => $explanation_date,
                    'explanation_answer' => $request->explanation_answer[$key] ?? '',


                ], [
                    'provider_name' => $request->provider_name,
                    'explanation_date' => $explanation_date,
                    'explanation_answer' => $request->explanation_answer[$key] ?? '',
                ]);
            }
        }

        $attachment = '';
        if ($attachmentFile = $request->file('attachment')) {
            $attachment = time() . "." . $attachmentFile->getClientOriginalExtension();
            $attachmentFile->move('assets/attachments/', $attachment);
        }
        $request->user()->malpractice_information()->updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'malpractice_question_1' => $request->malpractice_question_1,
            'malpractice_question_2' => $request->malpractice_question_2,
            'malpractice_question_3' => $request->malpractice_question_3,
            'additional_malpractice_claim' => $request->additional_malpractice_claim,
            'attachment' => $attachment,
        ]);

        if (!is_null($request->plantiff_name)) {
            foreach ($request->plantiff_name as $key => $plantiff_name) {


                                // Check if all group fields are filled
                    $plantiff_name = $plantiff_name;
                    $location = $request->location[$key] ?? '';
                    $status = $request->status[$key] ?? '';
                    $date_of_incident = $request->date_of_incident[$key] ?? '';
                    
                    $amount_of_award = $request->amount_of_award[$key] ?? '';
            
            
                            if (empty($plantiff_name) || empty($location) || empty($status) || empty($date_of_incident) || empty($amount_of_award)) {
                                continue; //  Skip if any group field is empty
                            }




                $request->user()->malpractice_claims()->updateOrCreate([
                    'user_id' => auth()->id(),
                    'plantiff_name' => $plantiff_name,
                ], [
                    'plantiff_name' => $plantiff_name,
                    'location' => $request->location[$key] ?? '',
                    'status' => $request->status[$key] ?? '',
                    'date_of_incident' => $request->date_of_incident[$key] ?? '',
                    'summary_included' => $request->summary_included[$key] ?? '',
                    'amount_of_award' => $request->amount_of_award[$key] ?? '',
                ]);
            }
        }

        if (!is_null($request->malpractice_insurance_carrier)) {
            foreach ($request->malpractice_insurance_carrier as $key => $malpractice_insurance_carrier) {


                    $malpractice_insurance_carrier = $malpractice_insurance_carrier;
                    $policy_number = $request->policy_number[$key] ?? '';
                    $policy_date_from = $request->policy_date_from[$key] ?? '';
                    $policy_date_to = $request->policy_date_to[$key] ?? '';
                    $amount_of_coverage = $request->amount_of_coverage[$key] ?? '';
            
            
                            if (empty($malpractice_insurance_carrier) || empty($policy_number) || empty($policy_date_from) || empty($policy_date_to) || empty($amount_of_coverage)) {
                                continue; //  Skip if any group field is empty
                            }


                $request->user()->malpractice_claim_policies()->updateOrCreate([
                    'user_id' => auth()->id(),

                    'malpractice_insurance_carrier' => $malpractice_insurance_carrier,
                    'policy_number' => $request->policy_number[$key] ?? '',


                ], [
                    'malpractice_insurance_carrier' => $malpractice_insurance_carrier,
                    'policy_number' => $request->policy_number[$key] ?? '',
                    'policy_date_from' => $request->policy_date_from[$key] ?? '',
                    'policy_date_to' => $request->policy_date_to[$key] ?? '',
                    'amount_of_coverage' => $request->amount_of_coverage[$key] ?? '',
                ]);
            }
        }

        if (!is_null($request->program_title)) {
            foreach ($request->program_title as $key => $program_title) {


                    $program_title = $program_title;
                    $program_date = $request->program_date[$key] ?? '';
                    $sponsoring_organization = $request->sponsoring_organization[$key] ?? '';
                    $certificate_of_cme = $request->certificate_of_cme[$key] ?? '';
            
            
                            if (empty($program_title) || empty($program_date) || empty($sponsoring_organization) || empty($certificate_of_cme)) {
                                continue; //  Skip if any group field is empty
                            }


                $request->user()->current_medical_education()->updateOrCreate([
                    'user_id' => auth()->id(),

                    'program_title' => $program_title,
                    'program_date' => $request->program_date[$key] ?? '',

                ], [
                    'program_title' => $program_title,
                    'program_date' => $request->program_date[$key] ?? '',
                    'sponsoring_organization' => $request->sponsoring_organization[$key] ?? '',
                    'certificate_of_cme' => $request->certificate_of_cme[$key] ?? '',
                ]);
            }
        }

        $request->user()->professional_liability_claim()->updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'providers_name' =>  $request->providers_name,
            'patient_involved' =>  $request->patient_involved,
            'patient_age' =>  $request->patient_age,
            'month_year_occurrence' =>  $request->month_year_occurrence,
            'month_year_lawsuit' =>  $request->month_year_lawsuit,
            'event_precipitating_claim' =>  $request->event_precipitating_claim,
            'insurance_carrier_at_time' =>  $request->insurance_carrier_at_time,
            'claim_status' =>  $request->claim_status,
            'defendants' =>  $request->defendants,
            'patients_outcome' =>  $request->patients_outcome,
            'alleged_to_harm' =>  $request->alleged_to_harm,
            'reference_to_adverse_events' =>  $request->reference_to_adverse_events,
            'event_role' =>  $request->event_role,
            'status_pending' =>  $request->status_pending,
            'pending_status_date' =>  $request->pending_status_date,
            'defense_case_handling' =>  $request->defense_case_handling,
            'awaiting_trial' =>  $request->awaiting_trial,
            'awaiting_trial_check' =>  $request->awaiting_trial_check,
            'awaiting_trial_date' =>  $request->awaiting_trial_date,
            'settled_out_of_court' =>  $request->settled_out_of_court,
            'settled_out_of_court_check' =>  $request->settled_out_of_court_check,
            'settled_out_of_court_date' =>  $request->settled_out_of_court_date,
            'total_settlement_amount' =>  $request->total_settlement_amount,
            'paid_settlement_amount' =>  $request->paid_settlement_amount,
            'status_dismissed' =>  $request->status_dismissed,
            'dissmissed_date' =>  $request->dissmissed_date,
            'status_defense_verdict' =>  $request->status_defense_verdict,
            'defense_verdict_date' =>  $request->defense_verdict_date,
            'status_plaintiff_verdict' =>  $request->status_plaintiff_verdict,
            'status_plaintiff_verdict' =>  $request->status_plaintiff_verdict,
            'status_judgement_amount' =>  $request->status_judgement_amount,
            'judgement_amount' =>  $request->judgement_amount,
            'judgement_date' =>  $request->judgement_date,
            'judgement_total_amount' =>  $request->judgement_total_amount,
        ]);

        // foreach ($request->ha_facility as $key => $ha_facility) {
        //     $request->user()->additional_hospital_affiliations()->create([
        //         'ha_facility' => $ha_facility,
        //         'ha_phone' => $request->ha_phone[$key] ?? '',
        //         'ha_address' => $request->ha_address[$key] ?? '',
        //         'ha_city_state_zip' => $request->ha_city_state_zip[$key] ?? '',
        //         'ha_contact' => $request->ha_contact[$key] ?? '',
        //         'ha_date_from' => $request->ha_date_from[$key] ?? '',
        //         'ha_date_to' => $request->ha_date_to[$key] ?? '',
        //     ]);
        // }

        auth()->user()->application_status = $request->application_status ?? 0;
        auth()->user()->save();
        // error_log($request);
        $msg = $request->application_status == 0 ? 'saved' : 'submitted';

       // if ($request->ajax()) {
         //   return [
           //     'message' => 'Application saved'
           // ];
       // }

        if ($request->ajax()) {
            return response()->json([
                'message' => "Application $msg successfully",
                'status' => 'success'
            ]);
        }

        if ($request->application_status == 1) {

            Notification::route('mail', [
                config('mail.admin.email_1') => config('app.name'),
                config('mail.admin.email_2') => config('app.name'),
            ])->notify(new NewApplicationReceived(auth()->user()));
        }
        
        return redirect()->route('dashboard')->with('success', "Application $msg successfully");
    }

    // 



// new 
    public function reload(Request $request){
        
        

        $personal_information = auth()->user()->personal_information ?? null;
        $education_and_training = auth()->user()->education_and_training ?? null;
        $board_certifications = auth()->user()->board_certifications ?? null;
        $licensing = auth()->user()->licensing ?? null;
        $dea_substances = auth()->user()->dea_substances ?? null;
        $references = auth()->user()->references ?? null;
        $work_history = auth()->user()->work_history ?? null;
        $hospital_and_affiliations = auth()->user()->hospital_and_affiliations ?? null;
        $disclusres_and_disciplinary_action = auth()->user()->disclusres_and_disciplinary_action ?? null;
        $credentialing_application_form = auth()->user()->credentialing_application_form ?? null;
        $malpractice_information = auth()->user()->malpractice_information ?? null;
        $malpractice_claims = auth()->user()->malpractice_claims ?? null;
        $malpractice_claim_policies = auth()->user()->malpractice_claim_policies ?? null;
        $current_medical_education = auth()->user()->current_medical_education ?? null;
        $professional_liability_claim = auth()->user()->professional_liability_claim ?? null;
        $additional_hospital_affiliations = auth()->user()->additional_hospital_affiliations ?? null;

        // return response()-> json([
        return response()-> json([
            'personal_information' => $personal_information,
            'education_and_training' => $education_and_training,
            'board_certifications' => $board_certifications,
            'licensing' => $licensing,
            'dea_substances' => $dea_substances,
            'references' => $references,
            'work_history' => $work_history,
            'hospital_and_affiliations' => $hospital_and_affiliations,
            'disclusres_and_disciplinary_action' => $disclusres_and_disciplinary_action,
            'credentialing_application_form' => $credentialing_application_form,
            'malpractice_information' => $malpractice_information,
            'malpractice_claims' => $malpractice_claims,
            'malpractice_claim_policies' => $malpractice_claim_policies,
            'current_medical_education' => $current_medical_education,
            'personal_information' => $personal_information,
            'professional_liability_claim' => $professional_liability_claim,
            'additional_hospital_affiliations' => $additional_hospital_affiliations,
        ]);
    }

    // 





    public function store(Request $request)
    {
        // auth()->user()->personal_information()->delete();
        // auth()->user()->education_and_training()->delete();
        // auth()->user()->board_certifications()->delete();
        // auth()->user()->licensing()->delete();
        // auth()->user()->dea_substances()->delete();
        // auth()->user()->references()->delete();
        // auth()->user()->work_history()->delete();
        // auth()->user()->hospital_and_affiliations()->delete();
        // auth()->user()->disclusres_and_disciplinary_action()->delete();
        // auth()->user()->credentialing_application_form()->delete();
        // auth()->user()->malpractice_information()->delete();
        // auth()->user()->malpractice_claims()->delete();
        // auth()->user()->malpractice_claim_policies()->delete();
        // auth()->user()->current_medical_education()->delete();
        // auth()->user()->professional_liability_claim()->delete();
        // auth()->user()->additional_hospital_affiliations()->delete();

        $personal_information = $request->user()->personal_information()->updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'suffix' => $request->suffix,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'degree' => $request->degree,
            'social_security_number' => $request->social_security_number,
            'home_address' => $request->home_address,
            'home_phone_number' => $request->home_phone_number,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'cell_phone_number' => $request->cell_phone_number,
            'office_address' => $request->office_address,
            'office_phone_number' => $request->office_phone_number,
            'office_city' => $request->office_city,
            'office_state' => $request->office_state,
            'office_zip_code' => $request->office_zip_code,
            'email_address' => $request->email_address,
            'citizenship' => $request->citizenship,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'primary_speciality' => $request->primary_speciality,
            'secondary_speciality' => $request->secondary_speciality,
            'present_position' => $request->present_position,
            'npi' => $request->npi,
            'medicare' => $request->medicare,
            'upin' => $request->upin,
            'fed_tax_id' => $request->fed_tax_id,
            'medicaid' => $request->medicaid,
            'contact_name' => $request->contact_name,
            'contact_address' => $request->contact_address,
        ]);

        $education_and_training = $request->user()->education_and_training()->updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'medical_school' => $request->medical_school,
            'degree' => $request->degree,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'e_city' => $request->e_city,
            'e_state' => $request->e_state,
            'internship_training_name' => $request->internship_training_name,
            'internship_training_city' => $request->internship_training_city,
            'internship_training_state' => $request->internship_training_state,
            'internship_training_start_date' => $request->internship_training_start_date,
            'internship_training_end_date' => $request->internship_training_end_date,
            'category_of_training' => $request->category_of_training,
            'residency_training_name' => $request->residency_training_name,
            'residency_training_city' => $request->residency_training_city,
            'residency_training_state' => $request->residency_training_state,
            'residency_training_start_date' => $request->residency_training_start_date,
            'residency_training_end_date' => $request->residency_training_end_date,
            'residency_training_speciality' => $request->residency_training_speciality,
            'fellowship_training_name' => $request->fellowship_training_name,
            'fellowship_training_city' => $request->fellowship_training_city,
            'fellowship_training_state' => $request->fellowship_training_state,
            'fellowship_training_start_date' => $request->fellowship_training_start_date,
            'fellowship_training_end_date' => $request->fellowship_training_end_date,
            'fellowship_training_speciality' => $request->fellowship_training_speciality,
            'additional_training_name' => $request->additional_training_name,
            'additional_training_city' => $request->additional_training_city,
            'additional_training_state' => $request->additional_training_state,
            'additional_training_start_date' => $request->additional_training_start_date,
            'additional_training_end_date' => $request->additional_training_end_date,
            'additional_training_category' => $request->additional_training_category,
        ]);

        if (!is_null($request->issuing_board)) {
            foreach ($request->issuing_board as $key => $issuing_board) {


                //new

            // Check if all group fields are filled
            $speciality = $request->issuing_board_speciality[$key] ?? null;
            $certifiedDate = $request->issuing_board_certified_date[$key] ?? null;
            $recertifiedDate = $request->issuing_board_recertified_date[$key] ?? null;

            if (empty($issuing_board) || empty($speciality) || empty($certifiedDate) || empty($recertifiedDate)) {
                continue; //  Skip if any group field is empty
            }

                //


                $request->user()->board_certifications()->updateOrCreate([
                    'user_id' => auth()->id(),

                    'issuing_board' => $issuing_board,
                    'issuing_board_speciality' => $request->issuing_board_speciality[$key] ?? '',


                ], [
                    'board_certified' => $request->board_certified,
                    'issuing_board' => $issuing_board,
                    'issuing_board_speciality' => $request->issuing_board_speciality[$key] ?? '',
                    'issuing_board_certified_date' => $request->issuing_board_certified_date[$key],
                    'issuing_board_recertified_date' => $request->issuing_board_recertified_date[$key],
                    'issuing_board_expiration_date' => $request->issuing_board_expiration_date[$key],
                    'examined_board' => $request->examined_board,
                    'examined_board_name' => $request->examined_board_name,
                    'examined_board_date' => $request->examined_board_date,
                    'certified_board' => $request->certified_board,
                    'certified_board_date' => $request->certified_board_date,
                    'bls_certification' => $request->bls_certification,
                    'bls_certification_expiration_date' => $request->bls_certification_expiration_date,
                    'acls_certification' => $request->acls_certification,
                    'acls_certification_expiration_date' => $request->acls_certification_expiration_date,
                    'atls_certification' => $request->atls_certification,
                    'atls_certification_expiration_date' => $request->atls_certification_expiration_date,
                    'pals_certification' => $request->pals_certification,
                    'pals_certification_expiration_date' => $request->pals_certification_expiration_date,
                    // 'federal_dea_number' => $request->federal_dea_number,
                    // 'dea_expiration_date' => $request->dea_expiration_date,
                    'ecfmg_certificate' => $request->ecfmg_certificate,
                    'ecfmg_certificate_id' => $request->ecfmg_certificate_id,
                    'fifth_pathway' => $request->fifth_pathway,
                    'fifth_pathway_location' => $request->fifth_pathway_location,
                    'national_board_exam' => $request->national_board_exam,
                    'national_board_exam_date' => $request->national_board_exam_date,
                    'flex_exam' => $request->flex_exam,
                    'flex_exam_date' => $request->flex_exam_date,
                    'spex_exam' => $request->spex_exam,
                    'spex_exam_date' => $request->spex_exam_date,
                    'usmle_exam' => $request->usmle_exam,
                    'usmle_exam_date' => $request->usmle_exam_date,
                    'state_board_exam' => $request->state_board_exam,
                    'state_board_exam_date' => $request->state_board_exam_date,
                    'lmcc_exam' => $request->lmcc_exam,
                    'lmcc_exam_date' => $request->lmcc_exam_date,
                ]);
            }
        }

        if (!is_null($request->licensing_state)) {
            foreach ($request->licensing_state as $key => $licensing_state) {

                // Check if all group fields are filled
            $licenseNumber = $request->license_number[$key] ?? '';
            $licenseStatus = $request->license_status[$key];
            $licenseGrantedDate = $request->license_granted_date[$key];
            $licenseExpirationDate = $request->license_expiration_date[$key];
            $stateMedicareProviderNumber = $request->state_medicare_provider_number[$key];
            $stateMedicaidProviderNumber = $request->state_medicaid_provider_number[$key];


            if (empty($licenseNumber) || empty($licenseStatus) || empty($licenseGrantedDate) || empty($licenseExpirationDate) || empty($stateMedicareProviderNumber) || empty($stateMedicaidProviderNumber) ) {
                continue; //  Skip if any group field is empty
            }


                $request->user()->licensing()->updateOrCreate([

                    'user_id' => auth()->id(),
                    'license_number' => $request->license_number[$key] ?? '',

                ], [
                    'licensing_state' => $licensing_state,
                    'license_number' => $request->license_number[$key] ?? '',
                    'license_status' => $request->license_status[$key],
                    'license_granted_date' => $request->license_granted_date[$key],
                    'license_expiration_date' => $request->license_expiration_date[$key],
                    'state_medicare_provider_number' => $request->state_medicare_provider_number[$key],
                    'state_medicaid_provider_number' => $request->state_medicaid_provider_number[$key],
                    'state_controlled_substance_permit_number' => $request->state_controlled_substance_permit_number[$key],
                ]);
            }
        }

        if (!is_null($request->licensing_dea_state)) {
            foreach ($request->licensing_dea_state as $key => $licensing_dea_state) {


                  // Check if all group fields are filled
                    $federal_dea_number = $request->federal_dea_number[$key] ?? '';
                    $dea_expiration_date = $request->dea_expiration_date[$key] ?? '';
                    $licensing_dea_state = $licensing_dea_state;
                    $dea_state_controlled_substance_permit_number = $request->dea_state_controlled_substance_permit_number[$key];
                    $license_dea_status = $request->license_dea_status[$key];
                    $license_dea_granted_date = $request->license_dea_granted_date[$key];
                    $license_dea_expiration_date = $request->license_dea_expiration_date[$key];

                    
                    


                if (empty($federal_dea_number) || empty($dea_expiration_date) || empty($licensing_dea_state) || empty($dea_state_controlled_substance_permit_number) || empty($license_dea_status) || empty($license_dea_granted_date) || empty($license_dea_expiration_date) ) {
                    continue; //  Skip if any group field is empty
                }


                $request->user()->dea_substances()->updateOrCreate([
                    'user_id' => auth()->id(),

                    'federal_dea_number' => $request->federal_dea_number[$key] ?? '',
                ], [
                    'licensing_dea_state' => $licensing_dea_state,
                    'license_dea_number' => $request->license_dea_number[$key] ?? '',
                    'license_dea_status' => $request->license_dea_status[$key],
                    'license_dea_granted_date' => $request->license_dea_granted_date[$key],
                    'license_dea_expiration_date' => $request->license_dea_expiration_date[$key],
                    'dea_state_medicare_provider_number' => $request->dea_state_medicare_provider_number[$key],
                    'dea_state_medicaid_provider_number' => $request->dea_state_medicaid_provider_number[$key],
                    'dea_state_controlled_substance_permit_number' => $request->dea_state_controlled_substance_permit_number[$key],
                    'federal_dea_number' => $request->federal_dea_number[$key] ?? '',
                    'dea_expiration_date' => $request->dea_expiration_date[$key] ?? '',
                ]);
            }
        }

        $request->user()->references()->updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'reference_1_name' =>  $request->reference_1_name,
            'reference_1_specialty' =>  $request->reference_1_specialty,
            'reference_1_phone_no' =>  $request->reference_1_phone_no,
            'reference_1_address' =>  $request->reference_1_address,
            'reference_1_city' =>  $request->reference_1_city,
            'reference_1_state' =>  $request->reference_1_state,
            'reference_1_zipcode' =>  $request->reference_1_zipcode,
            'reference_1_fax' =>  $request->reference_1_fax,
            'reference_1_email' =>  $request->reference_1_email,
            'reference_1_position' =>  $request->reference_1_position,
            'reference_1_years_work_together_start' =>  $request->reference_1_years_work_together_start,
            'reference_1_years_work_together_end' =>  $request->reference_1_years_work_together_end,
            'reference_1_facility' =>  $request->reference_1_facility,

            'reference_2_name' =>  $request->reference_2_name,
            'reference_2_specialty' =>  $request->reference_2_specialty,
            'reference_2_phone_no' =>  $request->reference_2_phone_no,
            'reference_2_address' =>  $request->reference_2_address,
            'reference_2_city' =>  $request->reference_2_city,
            'reference_2_state' =>  $request->reference_2_state,
            'reference_2_zipcode' =>  $request->reference_2_zipcode,
            'reference_2_fax' =>  $request->reference_2_fax,
            'reference_2_email' =>  $request->reference_2_email,
            'reference_2_position' =>  $request->reference_2_position,
            'reference_2_years_work_together_start' =>  $request->reference_2_years_work_together_start,
            'reference_2_years_work_together_end' =>  $request->reference_2_years_work_together_end,
            'reference_2_facility' =>  $request->reference_2_facility,

            'reference_3_name' =>  $request->reference_3_name,
            'reference_3_specialty' =>  $request->reference_3_specialty,
            'reference_3_phone_no' =>  $request->reference_3_phone_no,
            'reference_3_address' =>  $request->reference_3_address,
            'reference_3_city' =>  $request->reference_3_city,
            'reference_3_state' =>  $request->reference_3_state,
            'reference_3_zipcode' =>  $request->reference_3_zipcode,
            'reference_3_fax' =>  $request->reference_3_fax,
            'reference_3_email' =>  $request->reference_3_email,
            'reference_3_position' =>  $request->reference_3_position,
            'reference_3_years_work_together_start' =>  $request->reference_3_years_work_together_start,
            'reference_3_years_work_together_end' =>  $request->reference_3_years_work_together_end,
            'reference_3_facility' =>  $request->reference_3_facility,

            'reference_4_name' =>  $request->reference_4_name,
            'reference_4_specialty' =>  $request->reference_4_specialty,
            'reference_4_phone_no' =>  $request->reference_4_phone_no,
            'reference_4_address' =>  $request->reference_4_address,
            'reference_4_city' =>  $request->reference_4_city,
            'reference_4_state' =>  $request->reference_4_state,
            'reference_4_zipcode' =>  $request->reference_4_zipcode,
            'reference_4_fax' =>  $request->reference_4_fax,
            'reference_4_email' =>  $request->reference_4_email,
            'reference_4_position' =>  $request->reference_4_position,
            'reference_4_years_work_together_start' =>  $request->reference_4_years_work_together_start,
            'reference_4_years_work_together_end' =>  $request->reference_4_years_work_together_end,
            'reference_4_facility' =>  $request->reference_4_facility,
        ]);

        if (!is_null($request->work_history_from)) {
            foreach ($request->work_history_from as $key => $work_history_from) {


                // Check if all group fields are filled
                    $work_history_from = $work_history_from;
                    $work_history_to = $request->work_history_to[$key] ?? '';
                    $work_history_facility_name = $request->work_history_facility_name[$key] ?? '';
                    
                    $work_history_address = $request->work_history_address[$key] ?? '';
                    $work_history_city = $request->work_history_city[$key] ?? '';
                    $work_history_state = $request->work_history_state[$key] ?? '';


                if (empty($work_history_from) || empty($work_history_to) || empty($work_history_facility_name) || empty($work_history_address) || empty($work_history_city) || empty($work_history_state) ) {
                    continue; //  Skip if any group field is empty
                }


                $request->user()->work_history()->updateOrCreate([
                    'user_id' => auth()->id(),

                    'work_history_facility_name' => $request->work_history_facility_name[$key] ?? '',
                    'work_history_address' => $request->work_history_address[$key] ?? '',

                ], [
                    'work_history_from' => $work_history_from,
                    'work_history_to' => $request->work_history_to[$key] ?? '',
                    'work_history_facility_name' => $request->work_history_facility_name[$key] ?? '',
                    'work_history_phone' => $request->work_history_phone[$key] ?? '',
                    'work_history_address' => $request->work_history_address[$key] ?? '',
                    'work_history_city' => $request->work_history_city[$key] ?? '',
                    'work_history_state' => $request->work_history_state[$key] ?? '',
                    'work_history_zipcode' => $request->work_history_zipcode[$key] ?? '',
                    'work_history_do_not_contact' => $request->work_history_do_not_contact[$key] ?? '',
                ]);
            }
        }

        if (!is_null($request->primary_facility_name)) {
            foreach ($request->primary_facility_name as $key => $primary_facility_name) {

                                // Check if all group fields are filled
                                $primary_facility_name = $primary_facility_name;
                                $appointment_from = $request->appointment_from[$key] ?? '';
                                $appointment_to = $request->appointment_to[$key] ?? '';
                                $appointment_city = $request->appointment_city[$key] ?? '';
                                $appointment_state = $request->appointment_state[$key] ?? '';
            
            
                            if (empty($primary_facility_name) || empty($appointment_from) || empty($appointment_to) || empty($appointment_city) || empty($appointment_state)) {
                                continue; //  Skip if any group field is empty
                            }


                $request->user()->hospital_and_affiliations()->updateOrCreate([
                    'user_id' => auth()->id(),

                    'primary_facility_name' => $primary_facility_name,
                    'appointment_city' => $request->appointment_city[$key] ?? '',

                ], [
                    'hospital_and_affiliation_apply' => $request->hospital_and_affiliation_apply,
                    'primary_facility_name' => $primary_facility_name,
                    'appointment_from' => $request->appointment_from[$key] ?? '',
                    'appointment_to' => $request->appointment_to[$key] ?? '',
                    'appointment_city' => $request->appointment_city[$key] ?? '',
                    'appointment_state' => $request->appointment_state[$key] ?? '',
                ]);
            }
        }

        $request->user()->disclusres_and_disciplinary_action()->updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'question_1' =>  $request->question_1,
            'question_2' =>  $request->question_2,
            'question_3' =>  $request->question_3,
            'question_4' =>  $request->question_4,
            'question_5' =>  $request->question_5,
            'question_6' =>  $request->question_6,
            'question_7' =>  $request->question_7,
            'question_8' =>  $request->question_8,
            'question_9' =>  $request->question_9,
            'question_10' =>  $request->question_10,
            'question_11' =>  $request->question_11,
            'question_12' =>  $request->question_12,
            'question_13' =>  $request->question_13,
            'question_14' =>  $request->question_14,
            'question_15' =>  $request->question_15,
            'question_16' =>  $request->question_16,
            'question_17' =>  $request->question_17,
            'question_18' =>  $request->question_18,
            'question_19' =>  $request->question_19,
        ]);

        if (!is_null($request->explanation_date)) {
            foreach ($request->explanation_date as $key => $explanation_date) {


                // Check if all group fields are filled
                    $explanation_date = $explanation_date;
                    $explanation_answer = $request->explanation_answer[$key] ?? '';


                if (empty($explanation_date) || empty($explanation_answer)) {
                    continue; //  Skip if any group field is empty
                }


                $request->user()->credentialing_application_form()->updateOrCreate([
                    'user_id' => auth()->id(),

                    'explanation_date' => $explanation_date,
                    'explanation_answer' => $request->explanation_answer[$key] ?? '',

                ], [
                    'provider_name' => $request->provider_name,
                    'explanation_date' => $explanation_date,
                    'explanation_answer' => $request->explanation_answer[$key] ?? '',
                ]);
            }
        }

        $attachment = '';
        if ($attachmentFile = $request->file('attachment')) {
            $attachment = time() . "." . $attachmentFile->getClientOriginalExtension();
            $attachmentFile->move('assets/attachments/', $attachment);
        }
        $request->user()->malpractice_information()->updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'malpractice_question_1' => $request->malpractice_question_1,
            'malpractice_question_2' => $request->malpractice_question_2,
            'malpractice_question_3' => $request->malpractice_question_3,
            'additional_malpractice_claim' => $request->additional_malpractice_claim,
            'attachment' => $attachment,
        ]);

        if (!is_null($request->plantiff_name)) {
            foreach ($request->plantiff_name as $key => $plantiff_name) {

                                // Check if all group fields are filled
                    $plantiff_name = $plantiff_name;
                    $location = $request->location[$key] ?? '';
                    $status = $request->status[$key] ?? '';
                    $date_of_incident = $request->date_of_incident[$key] ?? '';
                    
                    $amount_of_award = $request->amount_of_award[$key] ?? '';
            
            
                            if (empty($plantiff_name) || empty($location) || empty($status) || empty($date_of_incident) || empty($amount_of_award)) {
                                continue; //  Skip if any group field is empty
                            }


                $request->user()->malpractice_claims()->updateOrCreate([
                    'user_id' => auth()->id(),

                    'plantiff_name' => $plantiff_name,

                ], [
                    'plantiff_name' => $plantiff_name,
                    'location' => $request->location[$key] ?? '',
                    'status' => $request->status[$key] ?? '',
                    'date_of_incident' => $request->date_of_incident[$key] ?? '',
                    'summary_included' => $request->summary_included[$key] ?? '',
                    'amount_of_award' => $request->amount_of_award[$key] ?? '',
                ]);
            }
        }

        if (!is_null($request->malpractice_insurance_carrier)) {
            foreach ($request->malpractice_insurance_carrier as $key => $malpractice_insurance_carrier) {


                    $malpractice_insurance_carrier = $malpractice_insurance_carrier;
                    $policy_number = $request->policy_number[$key] ?? '';
                    $policy_date_from = $request->policy_date_from[$key] ?? '';
                    $policy_date_to = $request->policy_date_to[$key] ?? '';
                    $amount_of_coverage = $request->amount_of_coverage[$key] ?? '';
            
            
                            if (empty($malpractice_insurance_carrier) || empty($policy_number) || empty($policy_date_from) || empty($policy_date_to) || empty($amount_of_coverage)) {
                                continue; //  Skip if any group field is empty
                            }

                $request->user()->malpractice_claim_policies()->updateOrCreate([
                    'user_id' => auth()->id(),

                    'malpractice_insurance_carrier' => $malpractice_insurance_carrier,
                    'policy_number' => $request->policy_number[$key] ?? '',

                ], [
                    'malpractice_insurance_carrier' => $malpractice_insurance_carrier,
                    'policy_number' => $request->policy_number[$key] ?? '',
                    'policy_date_from' => $request->policy_date_from[$key] ?? '',
                    'policy_date_to' => $request->policy_date_to[$key] ?? '',
                    'amount_of_coverage' => $request->amount_of_coverage[$key] ?? '',
                ]);
            }
        }

        if (!is_null($request->program_title)) {
            foreach ($request->program_title as $key => $program_title) {


                    $program_title = $program_title;
                    $program_date = $request->program_date[$key] ?? '';
                    $sponsoring_organization = $request->sponsoring_organization[$key] ?? '';
                    $certificate_of_cme = $request->certificate_of_cme[$key] ?? '';
            
            
                            if (empty($program_title) || empty($program_date) || empty($sponsoring_organization) || empty($certificate_of_cme)) {
                                continue; //  Skip if any group field is empty
                            }


                $request->user()->current_medical_education()->updateOrCreate([
                    'user_id' => auth()->id(),

                    'program_title' => $program_title,
                    'program_date' => $request->program_date[$key] ?? '',

                ], [
                    'program_title' => $program_title,
                    'program_date' => $request->program_date[$key] ?? '',
                    'sponsoring_organization' => $request->sponsoring_organization[$key] ?? '',
                    'certificate_of_cme' => $request->certificate_of_cme[$key] ?? '',
                ]);
            }
        }

        $request->user()->professional_liability_claim()->updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'providers_name' =>  $request->providers_name,
            'patient_involved' =>  $request->patient_involved,
            'patient_age' =>  $request->patient_age,
            'month_year_occurrence' =>  $request->month_year_occurrence,
            'month_year_lawsuit' =>  $request->month_year_lawsuit,
            'event_precipitating_claim' =>  $request->event_precipitating_claim,
            'insurance_carrier_at_time' =>  $request->insurance_carrier_at_time,
            'claim_status' =>  $request->claim_status,
            'defendants' =>  $request->defendants,
            'patients_outcome' =>  $request->patients_outcome,
            'alleged_to_harm' =>  $request->alleged_to_harm,
            'reference_to_adverse_events' =>  $request->reference_to_adverse_events,
            'event_role' =>  $request->event_role,
            'status_pending' =>  $request->status_pending,
            'pending_status_date' =>  $request->pending_status_date,
            'defense_case_handling' =>  $request->defense_case_handling,
            'awaiting_trial' =>  $request->awaiting_trial,
            'awaiting_trial_check' =>  $request->awaiting_trial_check,
            'awaiting_trial_date' =>  $request->awaiting_trial_date,
            'settled_out_of_court' =>  $request->settled_out_of_court,
            'settled_out_of_court_check' =>  $request->settled_out_of_court_check,
            'settled_out_of_court_date' =>  $request->settled_out_of_court_date,
            'total_settlement_amount' =>  $request->total_settlement_amount,
            'paid_settlement_amount' =>  $request->paid_settlement_amount,
            'status_dismissed' =>  $request->status_dismissed,
            'dissmissed_date' =>  $request->dissmissed_date,
            'status_defense_verdict' =>  $request->status_defense_verdict,
            'defense_verdict_date' =>  $request->defense_verdict_date,
            'status_plaintiff_verdict' =>  $request->status_plaintiff_verdict,
            'status_plaintiff_verdict' =>  $request->status_plaintiff_verdict,
            'status_judgement_amount' =>  $request->status_judgement_amount,
            'judgement_amount' =>  $request->judgement_amount,
            'judgement_date' =>  $request->judgement_date,
            'judgement_total_amount' =>  $request->judgement_total_amount,
        ]);

        // foreach ($request->ha_facility as $key => $ha_facility) {
        //     $request->user()->additional_hospital_affiliations()->create([
        //         'ha_facility' => $ha_facility,
        //         'ha_phone' => $request->ha_phone[$key] ?? '',
        //         'ha_address' => $request->ha_address[$key] ?? '',
        //         'ha_city_state_zip' => $request->ha_city_state_zip[$key] ?? '',
        //         'ha_contact' => $request->ha_contact[$key] ?? '',
        //         'ha_date_from' => $request->ha_date_from[$key] ?? '',
        //         'ha_date_to' => $request->ha_date_to[$key] ?? '',
        //     ]);
        // }

        auth()->user()->application_status = $request->application_status ?? 0;
        auth()->user()->save();

        $msg = $request->application_status == 0 ? 'saved' : 'submitted';

        if ($request->ajax()) {
            return [
                'message' => 'Application saved'
            ];
        }

        if ($request->application_status == 1) {

            Notification::route('mail', [
                config('mail.admin.email_1') => config('app.name'),
                config('mail.admin.email_2') => config('app.name'),
            ])->notify(new NewApplicationReceived(auth()->user()));
        }

        return redirect()->route('dashboard')->with('success', "Application $msg successfully");
    }

    public function edit()
    {
        if (!auth()->user()->isApplicationFilled()) {
            return redirect()->route('application.create');
        }

        $personal_information = auth()->user()->personal_information ?? null;
        $education_and_training = auth()->user()->education_and_training ?? null;
        $board_certifications = auth()->user()->board_certifications ?? null;
        $licensing = auth()->user()->licensing ?? null;
        $dea_substances = auth()->user()->dea_substances ?? null;
        $references = auth()->user()->references ?? null;
        $work_history = auth()->user()->work_history ?? null;
        $hospital_and_affiliations = auth()->user()->hospital_and_affiliations ?? null;
        $disclusres_and_disciplinary_action = auth()->user()->disclusres_and_disciplinary_action ?? null;
        $credentialing_application_form = auth()->user()->credentialing_application_form ?? null;
        $malpractice_information = auth()->user()->malpractice_information ?? null;
        $malpractice_claims = auth()->user()->malpractice_claims ?? null;
        $malpractice_claim_policies = auth()->user()->malpractice_claim_policies ?? null;
        $current_medical_education = auth()->user()->current_medical_education ?? null;
        $professional_liability_claim = auth()->user()->professional_liability_claim ?? null;
        $additional_hospital_affiliations = auth()->user()->additional_hospital_affiliations ?? null;

        return view('user.application.edit', [
            'personal_information' => $personal_information,
            'education_and_training' => $education_and_training,
            'board_certifications' => $board_certifications,
            'licensing' => $licensing,
            'dea_substances' => $dea_substances,
            'references' => $references,
            'work_history' => $work_history,
            'hospital_and_affiliations' => $hospital_and_affiliations,
            'disclusres_and_disciplinary_action' => $disclusres_and_disciplinary_action,
            'credentialing_application_form' => $credentialing_application_form,
            'malpractice_information' => $malpractice_information,
            'malpractice_claims' => $malpractice_claims,
            'malpractice_claim_policies' => $malpractice_claim_policies,
            'current_medical_education' => $current_medical_education,
            'personal_information' => $personal_information,
            'professional_liability_claim' => $professional_liability_claim,
            'additional_hospital_affiliations' => $additional_hospital_affiliations,
        ]);
    }

    public function update(Request $request)
    {
        auth()->user()->personal_information()->delete();
        auth()->user()->education_and_training()->delete();
        auth()->user()->board_certifications()->delete();
        auth()->user()->licensing()->delete();
        auth()->user()->dea_substances()->delete();
        auth()->user()->references()->delete();
        auth()->user()->work_history()->delete();
        auth()->user()->hospital_and_affiliations()->delete();
        auth()->user()->disclusres_and_disciplinary_action()->delete();
        auth()->user()->credentialing_application_form()->delete();
        auth()->user()->malpractice_information()->delete();
        auth()->user()->malpractice_claims()->delete();
        auth()->user()->malpractice_claim_policies()->delete();
        auth()->user()->current_medical_education()->delete();
        auth()->user()->professional_liability_claim()->delete();
        auth()->user()->additional_hospital_affiliations()->delete();

        $personal_information = $request->user()->personal_information()->create([
            'suffix' => $request->suffix,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'degree' => $request->degree,
            'social_security_number' => $request->social_security_number,
            'home_address' => $request->home_address,
            'home_phone_number' => $request->home_phone_number,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'cell_phone_number' => $request->cell_phone_number,
            'office_address' => $request->office_address,
            'office_phone_number' => $request->office_phone_number,
            'office_city' => $request->office_city,
            'office_state' => $request->office_state,
            'office_zip_code' => $request->office_zip_code,
            'email_address' => $request->email_address,
            'citizenship' => $request->citizenship,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'primary_speciality' => $request->primary_speciality,
            'secondary_speciality' => $request->secondary_speciality,
            'present_position' => $request->present_position,
            'npi' => $request->npi,
            'medicare' => $request->medicare,
            'upin' => $request->upin,
            'fed_tax_id' => $request->fed_tax_id,
            'medicaid' => $request->medicaid,
            'contact_name' => $request->contact_name,
            'contact_address' => $request->contact_address,
        ]);

        $education_and_training = $request->user()->education_and_training()->create([
            'medical_school' => $request->medical_school,
            'degree' => $request->degree,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'e_city' => $request->e_city,
            'e_state' => $request->e_state,
            'internship_training_name' => $request->internship_training_name,
            'internship_training_city' => $request->internship_training_city,
            'internship_training_state' => $request->internship_training_state,
            'internship_training_start_date' => $request->internship_training_start_date,
            'internship_training_end_date' => $request->internship_training_end_date,
            'category_of_training' => $request->category_of_training,
            'residency_training_name' => $request->residency_training_name,
            'residency_training_city' => $request->residency_training_city,
            'residency_training_state' => $request->residency_training_state,
            'residency_training_start_date' => $request->residency_training_start_date,
            'residency_training_end_date' => $request->residency_training_end_date,
            'residency_training_speciality' => $request->residency_training_speciality,
            'fellowship_training_name' => $request->fellowship_training_name,
            'fellowship_training_city' => $request->fellowship_training_city,
            'fellowship_training_state' => $request->fellowship_training_state,
            'fellowship_training_start_date' => $request->fellowship_training_start_date,
            'fellowship_training_end_date' => $request->fellowship_training_end_date,
            'fellowship_training_speciality' => $request->fellowship_training_speciality,
            'additional_training_name' => $request->additional_training_name,
            'additional_training_city' => $request->additional_training_city,
            'additional_training_state' => $request->additional_training_state,
            'additional_training_start_date' => $request->additional_training_start_date,
            'additional_training_end_date' => $request->additional_training_end_date,
            'additional_training_category' => $request->additional_training_category,
        ]);

        foreach ($request->issuing_board as $key => $issuing_board) {
            $request->user()->board_certifications()->create([
                'board_certified' => $request->board_certified,
                'issuing_board' => $issuing_board,
                'issuing_board_speciality' => $request->issuing_board_speciality[$key] ?? '',
                'issuing_board_certified_date' => $request->issuing_board_certified_date[$key],
                'issuing_board_recertified_date' => $request->issuing_board_recertified_date[$key],
                'issuing_board_expiration_date' => $request->issuing_board_expiration_date[$key],
                'examined_board' => $request->examined_board,
                'examined_board_name' => $request->examined_board_name,
                'examined_board_date' => $request->examined_board_date,
                'certified_board' => $request->certified_board,
                'certified_board_date' => $request->certified_board_date,
                'bls_certification' => $request->bls_certification,
                'bls_certification_expiration_date' => $request->bls_certification_expiration_date,
                'acls_certification' => $request->acls_certification,
                'acls_certification_expiration_date' => $request->acls_certification_expiration_date,
                'atls_certification' => $request->atls_certification,
                'atls_certification_expiration_date' => $request->atls_certification_expiration_date,
                'pals_certification' => $request->pals_certification,
                'pals_certification_expiration_date' => $request->pals_certification_expiration_date,
                //'federal_dea_number' => $request->federal_dea_number,
                //'dea_expiration_date' => $request->dea_expiration_date,
                'ecfmg_certificate' => $request->ecfmg_certificate,
                'ecfmg_certificate_id' => $request->ecfmg_certificate_id,
                'fifth_pathway' => $request->fifth_pathway,
                'fifth_pathway_location' => $request->fifth_pathway_location,
                'national_board_exam' => $request->national_board_exam,
                'national_board_exam_date' => $request->national_board_exam_date,
                'flex_exam' => $request->flex_exam,
                'flex_exam_date' => $request->flex_exam_date,
                'spex_exam' => $request->spex_exam,
                'spex_exam_date' => $request->spex_exam_date,
                'usmle_exam' => $request->usmle_exam,
                'usmle_exam_date' => $request->usmle_exam_date,
                'state_board_exam' => $request->state_board_exam,
                'state_board_exam_date' => $request->state_board_exam_date,
                'lmcc_exam' => $request->lmcc_exam,
                'lmcc_exam_date' => $request->lmcc_exam_date,
            ]);
        }

        foreach ($request->licensing_state as $key => $licensing_state) {
            $request->user()->licensing()->create([
                'licensing_state' => $licensing_state,
                'license_number' => $request->license_number[$key] ?? '',
                'license_status' => $request->license_status[$key],
                'license_granted_date' => $request->license_granted_date[$key],
                'license_expiration_date' => $request->license_expiration_date[$key],
                'state_medicare_provider_number' => $request->state_medicare_provider_number[$key],
                'state_medicaid_provider_number' => $request->state_medicaid_provider_number[$key],
                'state_controlled_substance_permit_number' => $request->state_controlled_substance_permit_number[$key],
            ]);
        }

        foreach ($request->licensing_dea_state as $key => $licensing_dea_state) {
            $request->user()->dea_substances()->create([
                'licensing_dea_state' => $licensing_dea_state,
                'license_dea_number' => $request->license_dea_number[$key] ?? '',
                'license_dea_status' => $request->license_dea_status[$key],
                'license_dea_granted_date' => $request->license_dea_granted_date[$key],
                'license_dea_expiration_date' => $request->license_dea_expiration_date[$key],
                'dea_state_medicare_provider_number' => $request->dea_state_medicare_provider_number[$key],
                'dea_state_medicaid_provider_number' => $request->dea_state_medicaid_provider_number[$key],
                'dea_state_controlled_substance_permit_number' => $request->dea_state_controlled_substance_permit_number[$key],
                'federal_dea_number' => $request->federal_dea_number[$key] ?? '',
                'dea_expiration_date' => $request->dea_expiration_date[$key] ?? '',
            ]);
        }

        $request->user()->references()->create([
            'reference_1_name' =>  $request->reference_1_name,
            'reference_1_specialty' =>  $request->reference_1_specialty,
            'reference_1_phone_no' =>  $request->reference_1_phone_no,
            'reference_1_address' =>  $request->reference_1_address,
            'reference_1_city' =>  $request->reference_1_city,
            'reference_1_state' =>  $request->reference_1_state,
            'reference_1_zipcode' =>  $request->reference_1_zipcode,
            'reference_1_fax' =>  $request->reference_1_fax,
            'reference_1_email' =>  $request->reference_1_email,
            'reference_1_position' =>  $request->reference_1_position,
            'reference_1_years_work_together_start' =>  $request->reference_1_years_work_together_start,
            'reference_1_years_work_together_end' =>  $request->reference_1_years_work_together_end,
            'reference_1_facility' =>  $request->reference_1_facility,

            'reference_2_name' =>  $request->reference_2_name,
            'reference_2_specialty' =>  $request->reference_2_specialty,
            'reference_2_phone_no' =>  $request->reference_2_phone_no,
            'reference_2_address' =>  $request->reference_2_address,
            'reference_2_city' =>  $request->reference_2_city,
            'reference_2_state' =>  $request->reference_2_state,
            'reference_2_zipcode' =>  $request->reference_2_zipcode,
            'reference_2_fax' =>  $request->reference_2_fax,
            'reference_2_email' =>  $request->reference_2_email,
            'reference_2_position' =>  $request->reference_2_position,
            'reference_2_years_work_together_start' =>  $request->reference_2_years_work_together_start,
            'reference_2_years_work_together_end' =>  $request->reference_2_years_work_together_end,
            'reference_2_facility' =>  $request->reference_2_facility,

            'reference_3_name' =>  $request->reference_3_name,
            'reference_3_specialty' =>  $request->reference_3_specialty,
            'reference_3_phone_no' =>  $request->reference_3_phone_no,
            'reference_3_address' =>  $request->reference_3_address,
            'reference_3_city' =>  $request->reference_3_city,
            'reference_3_state' =>  $request->reference_3_state,
            'reference_3_zipcode' =>  $request->reference_3_zipcode,
            'reference_3_fax' =>  $request->reference_3_fax,
            'reference_3_email' =>  $request->reference_3_email,
            'reference_3_position' =>  $request->reference_3_position,
            'reference_3_years_work_together_start' =>  $request->reference_3_years_work_together_start,
            'reference_3_years_work_together_end' =>  $request->reference_3_years_work_together_end,
            'reference_3_facility' =>  $request->reference_3_facility,

            'reference_4_name' =>  $request->reference_4_name,
            'reference_4_specialty' =>  $request->reference_4_specialty,
            'reference_4_phone_no' =>  $request->reference_4_phone_no,
            'reference_4_address' =>  $request->reference_4_address,
            'reference_4_city' =>  $request->reference_4_city,
            'reference_4_state' =>  $request->reference_4_state,
            'reference_4_zipcode' =>  $request->reference_4_zipcode,
            'reference_4_fax' =>  $request->reference_4_fax,
            'reference_4_email' =>  $request->reference_4_email,
            'reference_4_position' =>  $request->reference_4_position,
            'reference_4_years_work_together_start' =>  $request->reference_4_years_work_together_start,
            'reference_4_years_work_together_end' =>  $request->reference_4_years_work_together_end,
            'reference_4_facility' =>  $request->reference_4_facility,
        ]);

        foreach ($request->work_history_from as $key => $work_history_from) {
            $request->user()->work_history()->create([
                'work_history_from' => $work_history_from,
                'work_history_to' => $request->work_history_to[$key] ?? '',
                'work_history_facility_name' => $request->work_history_facility_name[$key] ?? '',
                'work_history_phone' => $request->work_history_phone[$key] ?? '',
                'work_history_address' => $request->work_history_address[$key] ?? '',
                'work_history_city' => $request->work_history_city[$key] ?? '',
                'work_history_state' => $request->work_history_state[$key] ?? '',
                'work_history_zipcode' => $request->work_history_zipcode[$key] ?? '',
                'work_history_do_not_contact' => $request->work_history_do_not_contact[$key] ?? '',
            ]);
        }

        foreach ($request->primary_facility_name as $key => $primary_facility_name) {
            $request->user()->hospital_and_affiliations()->create([
                'hospital_and_affiliation_apply' => $request->hospital_and_affiliation_apply,
                'primary_facility_name' => $primary_facility_name,
                'appointment_from' => $request->appointment_from[$key] ?? '',
                'appointment_to' => $request->appointment_to[$key] ?? '',
                'appointment_city' => $request->appointment_city[$key] ?? '',
                'appointment_state' => $request->appointment_state[$key] ?? '',
            ]);
        }

        $request->user()->disclusres_and_disciplinary_action()->create([
            'question_1' =>  $request->question_1,
            'question_2' =>  $request->question_2,
            'question_3' =>  $request->question_3,
            'question_4' =>  $request->question_4,
            'question_5' =>  $request->question_5,
            'question_6' =>  $request->question_6,
            'question_7' =>  $request->question_7,
            'question_8' =>  $request->question_8,
            'question_9' =>  $request->question_9,
            'question_10' =>  $request->question_10,
            'question_11' =>  $request->question_11,
            'question_12' =>  $request->question_12,
            'question_13' =>  $request->question_13,
            'question_14' =>  $request->question_14,
            'question_15' =>  $request->question_15,
            'question_16' =>  $request->question_16,
            'question_17' =>  $request->question_17,
            'question_18' =>  $request->question_18,
            'question_19' =>  $request->question_19,
        ]);

        foreach ($request->explanation_date as $key => $explanation_date) {
            $request->user()->credentialing_application_form()->create([
                'provider_name' => $request->provider_name,
                'explanation_date' => $explanation_date,
                'explanation_answer' => $request->explanation_answer[$key] ?? '',
            ]);
        }

        $attachment = $request->attachment_file;
        if ($attachmentFile = $request->file('attachment')) {
            $attachment = time() . "." . $attachmentFile->getClientOriginalExtension();
            $attachmentFile->move('assets/attachments/', $attachment);
        }

        $request->user()->malpractice_information()->create([
            'malpractice_question_1' => $request->malpractice_question_1,
            'malpractice_question_2' => $request->malpractice_question_2,
            'malpractice_question_3' => $request->malpractice_question_3,
            'additional_malpractice_claim' => $request->additional_malpractice_claim,
            'attachment' => $attachment,
        ]);

        foreach ($request->plantiff_name as $key => $plantiff_name) {
            $request->user()->malpractice_claims()->create([
                'plantiff_name' => $plantiff_name,
                'location' => $request->location[$key] ?? '',
                'status' => $request->status[$key] ?? '',
                'date_of_incident' => $request->date_of_incident[$key] ?? '',
                'summary_included' => $request->summary_included[$key] ?? '',
                'amount_of_award' => $request->amount_of_award[$key] ?? '',
            ]);
        }

        foreach ($request->malpractice_insurance_carrier as $key => $malpractice_insurance_carrier) {
            $request->user()->malpractice_claim_policies()->create([
                'malpractice_insurance_carrier' => $malpractice_insurance_carrier,
                'policy_number' => $request->policy_number[$key] ?? '',
                'policy_date_from' => $request->policy_date_from[$key] ?? '',
                'policy_date_to' => $request->policy_date_to[$key] ?? '',
                'amount_of_coverage' => $request->amount_of_coverage[$key] ?? '',
            ]);
        }

        foreach ($request->program_title as $key => $program_title) {
            $request->user()->current_medical_education()->create([
                'program_title' => $program_title,
                'program_date' => $request->program_date[$key] ?? '',
                'sponsoring_organization' => $request->sponsoring_organization[$key] ?? '',
                'certificate_of_cme' => $request->certificate_of_cme[$key] ?? '',
            ]);
        }

        $request->user()->professional_liability_claim()->create([
            'providers_name' =>  $request->providers_name,
            'patient_involved' =>  $request->patient_involved,
            'patient_age' =>  $request->patient_age,
            'month_year_occurrence' =>  $request->month_year_occurrence,
            'month_year_lawsuit' =>  $request->month_year_lawsuit,
            'event_precipitating_claim' =>  $request->event_precipitating_claim,
            'insurance_carrier_at_time' =>  $request->insurance_carrier_at_time,
            'claim_status' =>  $request->claim_status,
            'defendants' =>  $request->defendants,
            'patients_outcome' =>  $request->patients_outcome,
            'alleged_to_harm' =>  $request->alleged_to_harm,
            'reference_to_adverse_events' =>  $request->reference_to_adverse_events,
            'event_role' =>  $request->event_role,
            'status_pending' =>  $request->status_pending,
            'pending_status_date' =>  $request->pending_status_date,
            'defense_case_handling' =>  $request->defense_case_handling,
            'awaiting_trial' =>  $request->awaiting_trial,
            'awaiting_trial_check' =>  $request->awaiting_trial_check,
            'awaiting_trial_date' =>  $request->awaiting_trial_date,
            'settled_out_of_court' =>  $request->settled_out_of_court,
            'settled_out_of_court_check' =>  $request->settled_out_of_court_check,
            'settled_out_of_court_date' =>  $request->settled_out_of_court_date,
            'total_settlement_amount' =>  $request->total_settlement_amount,
            'paid_settlement_amount' =>  $request->paid_settlement_amount,
            'status_dismissed' =>  $request->status_dismissed,
            'dissmissed_date' =>  $request->dissmissed_date,
            'status_defense_verdict' =>  $request->status_defense_verdict,
            'defense_verdict_date' =>  $request->defense_verdict_date,
            'status_plaintiff_verdict' =>  $request->status_plaintiff_verdict,
            'status_plaintiff_verdict' =>  $request->status_plaintiff_verdict,
            'status_judgement_amount' =>  $request->status_judgement_amount,
            'judgement_amount' =>  $request->judgement_amount,
            'judgement_date' =>  $request->judgement_date,
            'judgement_total_amount' =>  $request->judgement_total_amount,
        ]);

        // foreach ($request->ha_facility as $key => $ha_facility) {
        //     $request->user()->additional_hospital_affiliations()->create([
        //         'ha_facility' => $ha_facility,
        //         'ha_phone' => $request->ha_phone[$key] ?? '',
        //         'ha_address' => $request->ha_address[$key] ?? '',
        //         'ha_city_state_zip' => $request->ha_city_state_zip[$key] ?? '',
        //         'ha_contact' => $request->ha_contact[$key] ?? '',
        //         'ha_date_from' => $request->ha_date_from[$key] ?? '',
        //         'ha_date_to' => $request->ha_date_to[$key] ?? '',
        //     ]);
        // }

        auth()->user()->application_status = $request->application_status;
        auth()->user()->save();

        $msg = $request->application_status == 0 ? 'saved' : 'submitted';

        if ($request->application_status == 1) {

            Notification::route('mail', [
                config('mail.admin.email_1') => config('app.name'),
                config('mail.admin.email_2') => config('app.name'),
            ])->notify(new NewApplicationReceived(auth()->user()));
        }

        return redirect()->route('dashboard')->with('success', "Application $msg successfully");
    }
}
