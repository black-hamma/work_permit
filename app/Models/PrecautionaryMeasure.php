<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrecautionaryMeasure extends Model
{
    use HasFactory;

    protected $fillable = [
        "precautionary_measure"
    ];

    public function safetyPermits()
    {
        return $this->belongsToMany(safetyPermit::class, 'job_requirement_permit');
    }
}
