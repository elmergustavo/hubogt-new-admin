<?php

namespace App\Models\Shop;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Vendor extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    
    protected $table = 'shop_vendors';

    protected $fillable = [
        'user_id',
        'is_company',
        'nit',
        'cui',
        'phone',
        'email',
        'address',
        'legal_info',
        'full_name',
        'registration_date',
        'vendor_type',
        'is_verified',
        'logo',
        'website_url',
        'bank_details',
        'preferred_language',
        'time_zone',
        'data',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shops()
    {
        return $this->hasMany(Shop::class, 'shop_vendor_id');
    }
}
