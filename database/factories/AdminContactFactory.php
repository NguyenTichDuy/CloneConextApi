<?php

namespace Database\Factories;

use App\Models\AdminContact;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdminContact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'address' => $this->faker->address,
            'hotline' => $this->faker->phoneNumber,
            'email' => $this->faker->email
        ];
    }
}
