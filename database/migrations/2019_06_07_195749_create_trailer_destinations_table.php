<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrailerDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trailer_destinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('trailer_driver_load_id');
            $table->foreign('trailer_driver_load_id', 'trailer_destinations_trailer_driver_load_id_fk')
                ->references('id')
                ->on('trailer_driver_loads')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('destination_id');
            $table->foreign('destination_id', 'trailer_destinations_destination_id_fk')
                ->references('id')
                ->on('destinations')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('trailer_destinations');
    }
}
