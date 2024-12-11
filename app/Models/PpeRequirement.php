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

    public function permits()
    {
        return $this->belongsToMany(Permit::class, 'ppe_requirement_permit');
    }
}
