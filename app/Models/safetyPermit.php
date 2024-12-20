<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class safetyPermit extends Model
{
    use HasFactory;

    protected $casts = [
        'workers_names' => 'array',
        'required_permits' => 'array',
        'HazardIdentification_identification' => 'array',
        'job_requirements' => 'array',
        'ppe_requirements' => 'array',
        'precautionary_measure' => 'array',
        'is_disclaimer' => 'boolean'
    ];
    protected $fillable = [
        'start_date',
        'end_date',
        'job_location',
        'sub_location',
        'department',
        'equipment_details',
        'job_description',
        'receiver_name',
        'contract_company',
        'staff_id',
        'risk_assessment',
        'permit_code',
        'workers_names',
        'required_permits',
        'hazard_identification',
        'job_requirements',
        'ppe_requirements',
        'precautionary_measure',
        'is_disclaimer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function jobRequirements()
    {
        return $this->belongsToMany(JobRequirement::class, 'job_requirement_permit');
    }
    public function ppeRequirements()
    {
        return $this->belongsToMany(PpeRequirement::class, 'ppe_requirement_permit');
    }
    public function precautionaryMeasures()
    {
        return $this->belongsToMany(PrecautionaryMeasure::class, 'precautionary_measure_permit');
    }
    public function hazardIdentifications()
    {
        return $this->belongsToMany(HazardIdentification::class, 'hazard_identifications_permit');
    }
}
