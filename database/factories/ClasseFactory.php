<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Classe;

class ClasseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Classe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'classe_name' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'nb_student' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
