<?php

namespace Database\Seeders;

use App\Models\AdminContact;
use Illuminate\Database\Seeder;

class AdminContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        AdminContact::factory(10)->create();
    }
}
