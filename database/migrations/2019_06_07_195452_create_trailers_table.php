<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trailers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dispatcher_id');
            $table->foreign('dispatcher_id', 'trailer_dispatcher_id_fk')
                ->references('id')
                ->on('dispatchers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('trailer');
            $table->decimal('capacity');
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
        Schema::dropIfExists('trailers');
    }
}
