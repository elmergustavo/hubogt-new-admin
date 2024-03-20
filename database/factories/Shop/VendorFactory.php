<?php

namespace Database\Factories\Shop;

use App\Models\Shop\Vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendor>
 */
class VendorFactory extends Factory
{
    protected $model = Vendor::class;

    public function definition()
    {
        return [
            'nit' => $this->faker->unique()->numerify('########-#'),
            'cui' => $this->faker->unique()->numerify('##########'),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'legal_info' => $this->faker->paragraph,
            'registration_date' => $this->faker->date,
            'vendor_type' => $this->faker->randomElement(['individual', 'company']),
            'is_verified' => $this->faker->boolean,
            'logo' => $this->faker->imageUrl(640, 480, 'business'),
            'website_url' => $this->faker->url,
            'bank_details' => $this->faker->bankAccountNumber,
            'preferred_language' => $this->faker->randomElement(['es', 'en']),
            'time_zone' => $this->faker->timezone,
        ];
    }
}
