<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shops';

    protected $fillable = [
        'vendor_id', 'name', 'banner', 'description', 'fb_link',
        'tw_link', 'insta_link', 'status', 'shop_url', 'opening_hours',
        'return_policy', 'average_rating', 'review_count', 'category',
        'geolocation', 'metadata'
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
