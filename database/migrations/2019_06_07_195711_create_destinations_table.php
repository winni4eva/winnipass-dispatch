<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dispatcher_id');
            $table->foreign('dispatcher_id', 'destinations_dispatcher_id_fk')
                ->references('id')
                ->on('dispatchers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('destination');
            $table->unique(['dispatcher_id', 'destination']);
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
        Schema::dropIfExists('destinations');
    }
}
