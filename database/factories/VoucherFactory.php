<?php

namespace Database\Factories;

use App\Models\Voucher;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoucherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voucher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'vouchers_name' => $this->faker->name,
            'content' => $this->faker->text,
            'image' => $this->faker->image,
            'time_start' => $this->faker->dateTime,
            'time_end' => $this->faker->dateTime
        ];
    }
}
