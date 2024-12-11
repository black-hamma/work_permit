<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRequirement extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_requirement',
    ];

    // public function permits()
    // {
    //     return $this->hasMany(Permit::class);
    // }
    public function permits()
    {
        return $this->belongsToMany(Permit::class, 'job_requirement_permit');
    }
}
