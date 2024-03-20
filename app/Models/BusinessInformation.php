<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'legal_representative_id',
        'full_name',
        'cui',
        'nit',
        'tax_regime',
        'commercial_address',
        'phone',
        'email',
    ];
}
