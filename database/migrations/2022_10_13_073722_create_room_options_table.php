<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_options', function (Blueprint $table) {
            $table->id();
            $table->boolean('breakfast');
            $table->boolean('bathroom');
            $table->boolean('wifi');
            $table->boolean('tv');
            $table->boolean('internet');
            $table->boolean('balcony');
            $table->boolean('newspaper');
            $table->boolean('AC');
            $table->boolean('beach');
            $table->boolean('roomservice');
            $table->foreignId('room_id')->constrained();
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
        Schema::dropIfExists('room_options');
    }
};
