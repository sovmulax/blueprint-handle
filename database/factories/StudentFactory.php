<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Student;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'surname' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'level' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'subject' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'id_carte' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
