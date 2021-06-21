<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(), //se rellenara con una frase
            'description'=> $this->faker->paragraph(), //se rellena con un párafo 
            'category'=> $this->faker->randomElement(['Desarrollo web', 'Programación']) //se rellena con una de esas opciones
        ];
    }
}
