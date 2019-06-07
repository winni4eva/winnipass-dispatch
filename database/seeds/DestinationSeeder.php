<?php

use Illuminate\Database\Seeder;
use App\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Destination::class, 6)->create();
    }
}
