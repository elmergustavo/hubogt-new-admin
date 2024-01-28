<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $table = 'shop_vendors';

    protected $fillable = [
        'user_id', 'nit', 'cui', 'phone', 'email', 'address', 'legal_info',
        'legal_representative', 'registration_date', 'vendor_type',
        'is_verified', 'logo', 'website_url', 'bank_details',
        'preferred_language', 'time_zone'
    ];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}
