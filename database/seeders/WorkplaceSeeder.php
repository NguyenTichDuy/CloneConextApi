<?php

namespace Database\Seeders;

use App\Models\Workplace;
use Illuminate\Database\Seeder;

class WorkplaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Workplace::factory(10)->create();
    }
}
