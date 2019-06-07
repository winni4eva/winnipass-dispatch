<?php

use Illuminate\Database\Seeder;
use App\Dispatcher;

class DispatcherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Dispatcher::class)->create();
    }
}
