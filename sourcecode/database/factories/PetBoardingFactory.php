<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PetBoarding;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetBoarding>
 */
class PetBoardingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PetBoarding::class;

    public function definition()
    {
        return [
            'owner_name' => $this->faker->name,
            'pet_name' => $this->faker->name,
            'pet_age'=>$this->faker->randomNumber(1, 20),
            'entry_date' => $this->faker->date(),
            'exit_date' => $this->faker->date(),
            'file' => null,
        ];
    }
}
