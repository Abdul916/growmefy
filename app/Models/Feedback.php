<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feedback extends Model
{
    protected $fillable = [
        'business_id',
        'name',
        'email',
        'phone',
        'review'
    ];

    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }
}
