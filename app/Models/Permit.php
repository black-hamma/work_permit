<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    use HasFactory;

    protected $casts = [
        'workers_names' => 'array',
        'required_permits' => 'array',
        'hazard_identification' => 'array',
        'job_requirements' => 'array',
        'ppe_requirements' => 'array',
        'precautionary_measure' => 'array',
    ];
    protected $fillable = [
        'start_date',
        'end_date',
        'job_location',
        'sub_location',
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
        'disclaimer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($permit) {
            // Retrieve the last job's code
            $lastPermit = self::latest('id')->first();

            // Extract the numeric part of the code and increment it
            $lastSequence = $lastPermit ? (int) str_replace('PMT', '', $lastPermit->code) : 0;
            $newSequence = $lastSequence + 1;

            // Generate the new code
            $permit->permit_code = 'PMT' . str_pad($newSequence, 6, '0', STR_PAD_LEFT);
        });
    }
}
