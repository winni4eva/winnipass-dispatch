<?php

use Illuminate\Database\Seeder;
use App\CustomerLoad;

class CustomerLoadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CustomerLoad::class)->create();
    }
}
