<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Events;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Events::factory(10)->create();
    }
}
