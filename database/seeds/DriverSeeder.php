<?php

use Illuminate\Database\Seeder;
use App\Driver;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Driver::class)->create();
    }
}
