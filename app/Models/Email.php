<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'business_id',
        'contact_id',
        'template_id',
        'status',
        'sent_at',
    ];

    public function contact()
    {
        return $this->belongsTo(BusinessContact::class);
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function template()
    {
        return $this->belongsTo(EmailTemplate::class);
    }
}
