<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id',
        'name',
        'rating_type',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
