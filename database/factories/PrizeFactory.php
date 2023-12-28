<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prize_name' => $this->faker->word(),
            'prize_value' => 24,
            'rules_field' => 'lama_kerja',
            'rules_operator' => '=',
            'rules_value' => 3,
            'max_count' => 2,
            'prize_foto' => 'default.png'
        ];
    }
}
