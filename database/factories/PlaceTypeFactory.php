<?php

namespace Database\Factories;

use App\Models\PlaceType;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceTypeFactory extends Factory
{
    protected $model = PlaceType::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'restaurant',
                'bar',
                'cafe',
                'hotel',
                'museum',
                'park',
                'shopping_mall',
                'airport',
                'train_station',
                'bus_station',
            ]),
            'created_at' => now(),
        ];
    }
}
