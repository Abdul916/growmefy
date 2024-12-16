<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'qr_code',
        'qr_code_path',
        'paper_size',
        'business_id',
    ];

    // Relación con el modelo Business
    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
