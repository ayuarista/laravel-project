<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Additional;
use App\Models\Variant;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdditionalVariant>
 */
class AdditionalVariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'additional_id' => Additional::inRandomOrder() -> first() -> id,
            'variant_id' => Variant::inRandomOrder() -> first() -> id
        ];
    }
}
