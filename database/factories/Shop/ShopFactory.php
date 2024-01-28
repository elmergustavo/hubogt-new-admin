<?php

namespace Database\Factories\Shop;

use App\Models\Shop\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    protected $model = Shop::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'banner' => $this->faker->imageUrl(1920, 1080, 'business'),
            'description' => $this->faker->paragraph,
            'fb_link' => $this->faker->url,
            'phone' => $this->faker->boolean(50) ? $this->faker->phoneNumber : null,
            'email' => $this->faker->boolean(50) ? $this->faker->safeEmail : null,
            'address' => $this->faker->boolean(50) ? $this->faker->address : null,
            'tw_link' => $this->faker->url,
            'insta_link' => $this->faker->url,
            'status' => $this->faker->boolean,
            'shop_url' => $this->faker->slug,
            'opening_hours' => 'Lunes a Viernes: 9 am - 5 pm',
            'return_policy' => $this->faker->paragraph,
            'average_rating' => $this->faker->randomFloat(2, 1, 5),
            'review_count' => $this->faker->numberBetween(0, 500),
            'category' => $this->faker->randomElement(['ropa', 'electrónica', 'hogar', 'jardín', 'juegos']),
            'geolocation' => $this->faker->latitude . ', ' . $this->faker->longitude,
            'metadata' => json_encode(['additional_info' => $this->faker->sentence]),
        ];
    }
}
