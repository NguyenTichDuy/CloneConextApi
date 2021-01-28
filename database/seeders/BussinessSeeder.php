<?php

namespace Database\Seeders;

use App\Models\Bussiness;
use Illuminate\Database\Seeder;

class BussinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Bussiness::factory(10)->create();
    }
}
