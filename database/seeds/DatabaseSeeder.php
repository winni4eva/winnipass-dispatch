<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DispatcherSeeder::class);
        $this->call(TrailerSeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(CustomerLoadSeeder::class);
        $this->call(TrailerDriverLoadSeeder::class);
        $this->call(DestinationSeeder::class);
    }
}
