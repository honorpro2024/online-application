<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function personal_information()
    {
        return $this->hasOne(PersonalInformation::class);
    }

    public function education_and_training()
    {
        return $this->hasOne(EducationAndTraining::class);
    }

    public function board_certifications()
    {
        return $this->hasMany(BoardCertification::class);
    }

    public function licensing()
    {
        return $this->hasMany(Licensing::class);
    }

    public function dea_substances()
    {
        return $this->hasMany(DeaSubstance::class);
    }

    public function references()
    {
        return $this->hasMany(Reference::class);
    }

    public function work_history()
    {
        return $this->hasMany(WorkHistory::class);
    }

    public function hospital_and_affiliations()
    {
        return $this->hasMany(HospitalAndAffiliation::class);
    }

    public function disclusres_and_disciplinary_action()
    {
        return $this->hasOne(DisclusresAndDisciplinaryAction::class);
    }

    public function credentialing_application_form()
    {
        return $this->hasMany(CredentialApplicationForm::class);
    }

    public function malpractice_information()
    {
        return $this->hasOne(MalpracticeInformation::class);
    }

    public function malpractice_claims()
    {
        return $this->hasMany(MalpracticeClaim::class);
    }

    public function malpractice_claim_policies()
    {
        return $this->hasMany(MalpracticeClaimPolicy::class);
    }

    public function current_medical_education()
    {
        return $this->hasMany(MedicalEducation::class);
    }

    public function professional_liability_claim()
    {
        return $this->hasOne(ProfessionalLiabilityClaims::class);
    }

    public function additional_hospital_affiliations()
    {
        return $this->hasMany(AdditionalHospitalAffiliations::class);
    }

    public function isApplicationFilled()
    {
        return $this->personal_information()->exists();
    }

    public static function booted()
    {
        static::creating(function ($user) {
            $user->password = bcrypt($user->password);
        });
    }
}
