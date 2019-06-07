<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrailerDriverLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trailer_driver_loads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('trailer_id');
            $table->foreign('trailer_id', 'trailer_driver_loads_trailer_id_fk')
                ->references('id')
                ->on('trailers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('driver_id');
            $table->foreign('driver_id', 'trailer_driver_loads_driver_id_fk')
                ->references('id')
                ->on('drivers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('customer_load_id');
            $table->foreign('customer_load_id', 'trailer_driver_loads_customer_load_id_fk')
                ->references('id')
                ->on('drivers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unique(['trailer_id', 'driver_id', 'customer_load_id'], 'trailer_driver_customer_unique_index');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trailer_driver_loads');
    }
}
