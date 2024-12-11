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

    public function permits()
    {
        return $this->belongsToMany(Permit::class, 'job_requirement_permit');
    }
}
