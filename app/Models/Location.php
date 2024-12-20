<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'location'
    ];

    // One-to-Many Relationship
    public function safetyPermits()
    {
        return $this->hasMany(safetyPermit::class);
    }



}
