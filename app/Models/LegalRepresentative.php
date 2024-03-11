<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalRepresentative extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'cui',
        'cui_expiration',
        'phone',
        'email',
    ];
}
