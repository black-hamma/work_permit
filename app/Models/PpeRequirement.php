<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpeRequirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'ppe_requirement',
    ];

    public function safetyPermits()
    {
        return $this->belongsToMany(safetyPermit::class, 'ppe_requirement_permit');
    }
}
