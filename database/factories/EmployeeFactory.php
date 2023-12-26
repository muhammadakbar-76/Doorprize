<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_name' => $this->faker->name(),
            'employee_nik' => $this->faker->numerify('employee-####'),
            'id_department' => $this->faker->numberBetween(1, 12),
            'lama_kerja' => $this->faker->randomFloat(1, 3, 4)
        ];
    }
}
