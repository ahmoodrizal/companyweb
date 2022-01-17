<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Employee::class;

    public function definition()
    {
        return [
            'emp_fullname' => $this->faker->name(),
            'emp_email' => $this->faker->unique()->safeEmail,
            'emp_address' => $this->faker->city(),
            'emp_id' => $this->faker->randomNumber(9),
            'emp_department' => $this->faker->randomElement(['Front-End', 'Back-End', 'Mobile Developer', 'Design']),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'salary' => $this->faker->randomNumber(7),
        ];
    }
}
