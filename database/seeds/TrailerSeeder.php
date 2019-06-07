<?php

use Illuminate\Database\Seeder;
use App\Trailer;

class TrailerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Trailer::class)->create();
    }
}
