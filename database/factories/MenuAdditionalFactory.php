<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Menu;
use App\Models\Additional;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MenuAdditional>
 */
class MenuAdditionalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'menu_id' => Menu::inRandomOrder() -> first() -> id,
            'additional_id' => Additional::inRandomOrder() -> first() -> id
            //
        ];
    }
}
