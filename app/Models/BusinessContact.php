<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BusinessContact extends Model
{
    protected $fillable = [
        'business_id',
        'name',
        'email',
        'phone',
        // Otros campos necesarios
    ];

    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }

    public function emails()
    {
        return $this->hasMany(Email::class, 'contact_id');
    }

    public function latestEmail()
    {
        return $this->hasOne(Email::class, 'contact_id')->latestOfMany();
    }
}
