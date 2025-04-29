<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:admin']);
    }

    public function index()
    {
        $users = User::get();
        return view('admin.users.index',['users' => $users]);
    }

    public function show(User $user)
    {
        if(!$user->application_status){
            return redirect()->back()->with('error','Application not found');
        }

        $personal_information = $user->personal_information;
        $education_and_training = $user->education_and_training;
        $board_certifications = $user->board_certifications;
        $licensing = $user->licensing;
        $dea_substances = $user->dea_substances;
        $references = $user->references;
        $work_history = $user->work_history;
        $hospital_and_affiliations = $user->hospital_and_affiliations;
        $disclusres_and_disciplinary_action = $user->disclusres_and_disciplinary_action;
        $credentialing_application_form = $user->credentialing_application_form;
        $malpractice_information = $user->malpractice_information;
        $malpractice_claims = $user->malpractice_claims;
        $malpractice_claim_policies = $user->malpractice_claim_policies;
        $current_medical_education = $user->current_medical_education;
        $professional_liability_claim = $user->professional_liability_claim;
        $additional_hospital_affiliations = $user->additional_hospital_affiliations;

        return view('admin.users.show', [
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
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        if(!$user->application_status){
            return redirect()->back()->with('error','Application not found');
        }
        
        $personal_information = $user->personal_information;
        $education_and_training = $user->education_and_training;
        $board_certifications = $user->board_certifications;
        $licensing = $user->licensing;
        $dea_substances = $user->dea_substances;
        $references = $user->references;
        $work_history = $user->work_history;
        $hospital_and_affiliations = $user->hospital_and_affiliations;
        $disclusres_and_disciplinary_action = $user->disclusres_and_disciplinary_action;
        $credentialing_application_form = $user->credentialing_application_form;
        $malpractice_information = $user->malpractice_information;
        $malpractice_claims = $user->malpractice_claims;
        $malpractice_claim_policies = $user->malpractice_claim_policies;
        $current_medical_education = $user->current_medical_education;
        $professional_liability_claim = $user->professional_liability_claim;
        $additional_hospital_affiliations = $user->additional_hospital_affiliations;

        return view('admin.users.edit', [
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
            'user' => $user
        ]);
    }

    public function update(User $user, Request $request)
    {
        $user->personal_information()->delete();
        $user->education_and_training()->delete();
        $user->board_certifications()->delete();
        $user->licensing()->delete();
        $user->dea_substances()->delete();
        $user->references()->delete();
        $user->work_history()->delete();
        $user->hospital_and_affiliations()->delete();
        $user->disclusres_and_disciplinary_action()->delete();
        $user->credentialing_application_form()->delete();
        $user->malpractice_information()->delete();
        $user->malpractice_claims()->delete();
        $user->malpractice_claim_policies()->delete();
        $user->current_medical_education()->delete();
        $user->professional_liability_claim()->delete();
        $user->additional_hospital_affiliations()->delete();

        $personal_information = $user->personal_information()->create([
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

        $education_and_training = $user->education_and_training()->create([
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
            $user->board_certifications()->create([
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

        foreach ($request->licensing_state as $key => $licensing_state) {
            $user->licensing()->create([
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
            $user->dea_substances()->create([
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

        $user->references()->create([
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
            $user->work_history()->create([
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
            $user->hospital_and_affiliations()->create([
                'hospital_and_affiliation_apply' => $request->hospital_and_affiliation_apply,
                'primary_facility_name' => $primary_facility_name,
                'appointment_from' => $request->appointment_from[$key] ?? '',
                'appointment_to' => $request->appointment_to[$key] ?? '',
                'appointment_city' => $request->appointment_city[$key] ?? '',
                'appointment_state' => $request->appointment_state[$key] ?? '',
            ]);
        }

        $user->disclusres_and_disciplinary_action()->create([
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
            $user->credentialing_application_form()->create([
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
        
        $user->malpractice_information()->create([
            'malpractice_question_1' => $request->malpractice_question_1,
            'malpractice_question_2' => $request->malpractice_question_2,
            'malpractice_question_3' => $request->malpractice_question_3,
            'additional_malpractice_claim' => $request->additional_malpractice_claim,
            'attachment' => $attachment,
        ]);

        foreach ($request->plantiff_name as $key => $plantiff_name) {
            $user->malpractice_claims()->create([
                'plantiff_name' => $plantiff_name,
                'location' => $request->location[$key] ?? '',
                'status' => $request->status[$key] ?? '',
                'date_of_incident' => $request->date_of_incident[$key] ?? '',
                'summary_included' => $request->summary_included[$key] ?? '',
                'amount_of_award' => $request->amount_of_award[$key] ?? '',
            ]);
        }

        foreach ($request->malpractice_insurance_carrier as $key => $malpractice_insurance_carrier) {
            $user->malpractice_claim_policies()->create([
                'malpractice_insurance_carrier' => $malpractice_insurance_carrier,
                'policy_number' => $request->policy_number[$key] ?? '',
                'policy_date_from' => $request->policy_date_from[$key] ?? '',
                'policy_date_to' => $request->policy_date_to[$key] ?? '',
                'amount_of_coverage' => $request->amount_of_coverage[$key] ?? '',
            ]);
        }

        foreach ($request->program_title as $key => $program_title) {
            $user->current_medical_education()->create([
                'program_title' => $program_title,
                'program_date' => $request->program_date[$key] ?? '',
                'sponsoring_organization' => $request->sponsoring_organization[$key] ?? '',
                'certificate_of_cme' => $request->certificate_of_cme[$key] ?? '',
            ]);
        }

        $user->professional_liability_claim()->create([
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
        //     $user->additional_hospital_affiliations()->create([
        //         'ha_facility' => $ha_facility,
        //         'ha_phone' => $request->ha_phone[$key] ?? '',
        //         'ha_address' => $request->ha_address[$key] ?? '',
        //         'ha_city_state_zip' => $request->ha_city_state_zip[$key] ?? '',
        //         'ha_contact' => $request->ha_contact[$key] ?? '',
        //         'ha_date_from' => $request->ha_date_from[$key] ?? '',
        //         'ha_date_to' => $request->ha_date_to[$key] ?? '',
        //     ]);
        // }

        return redirect()->route('admin.users.index')->with('success', 'Application updated successfully');
    }
}
