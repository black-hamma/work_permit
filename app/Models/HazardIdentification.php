<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HazardIdentification extends Model
{
    use HasFactory;

    protected $fillable = ['hazard_identification'];

    public function permits()
    {
        return $this->belongsToMany(Permit::class, 'hazard_identification_permit');
    }
}
