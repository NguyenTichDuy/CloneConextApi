<?php

namespace Database\Factories;

use App\Models\Bussiness;
use Illuminate\Database\Eloquent\Factories\Factory;

class BussinessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bussiness::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name
        ];
    }
}
