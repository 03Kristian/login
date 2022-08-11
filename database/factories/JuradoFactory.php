<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Jurado;

class JuradoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'identificacion' =>$this->faker->numberBetween(182, 102310980),
            'nombre'=>  $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'id_mesajurado' => $this->faker->numberBetween(1,2),
        ];
    }

    /* *@return \Illuminate\Database\Eloquent\Factories\Factory */
}
