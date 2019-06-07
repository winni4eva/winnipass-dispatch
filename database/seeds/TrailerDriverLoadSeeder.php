<?php

use Illuminate\Database\Seeder;
use App\TrailerDriverLoad;

class TrailerDriverLoadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TrailerDriverLoad::class)->create();
    }
}
