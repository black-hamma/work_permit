<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HazardIdentification extends Model
{
    use HasFactory;

    protected $fillable = ['hazard_identification'];

    public function safetyPermits()
    {
        return $this->belongsToMany(safetyPermit::class, 'hazard_identification_permit');
    }
}
