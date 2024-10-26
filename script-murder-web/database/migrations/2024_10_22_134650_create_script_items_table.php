<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('script_item', function (Blueprint $table) {
            $table->id();
            $table->string('scriptname');
            $table->string('picture');
            $table->string('location');
            $table->date('event_date');
            $table->float('price', 8, 2);
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('script_item');
    }
};



