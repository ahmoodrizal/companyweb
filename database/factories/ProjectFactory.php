<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Project ' . $this->faker->company(),
            'leader' => $this->faker->name(),
            'link' => $this->faker->domainName(),
            'language' => $this->faker->randomElement(['PHP', 'Javascript', 'Java', 'Dart']) . ' + ' . $this->faker->randomElement(['Laravel', 'ReactJS', 'Flutter', 'Kotlin', 'CodeIgniter', 'VueJS'])
        ];
    }
}
