<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'background_image',
        'general_feedback_question',
        'ask_for_review',
        'gbp_url',
        'facebook_url',
        'tripadvisor_url',
        'trustpilot_url',
        'booking_url',
        'airbnb_url',
        'google_play_url',
        'app_store_url',
        'amazon_url',
        'ebay_url',
        'yelp_url',
        'thank_you_phrase',
        'email',
        'google_access_token',
        'refresh_token',
        'token_expiry',
        'location_id',
    ];

    /**
     * Define la relación de muchos a muchos con User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function feedbacks(): HasMany
    {
        return $this->hasMany(Feedback::class);
    }

    public function qrCodes(): HasMany
    {
        return $this->hasMany(QrCode::class);
    }

    public function signatures(): HasMany
    {
        return $this->hasMany(Signature::class);
    }

    public function posters(): HasMany
    {
        return $this->hasMany(Poster::class);
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(BusinessContact::class);
    }

    public function businessContacts(): HasMany
    {
        return $this->hasMany(BusinessContact::class);
    }

    public function emailTemplates(): HasMany
    {
        return $this->hasMany(EmailTemplate::class);
    }
}
