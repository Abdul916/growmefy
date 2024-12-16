<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id',
        'subject',
        'body',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
