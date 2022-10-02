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
        Schema::create('section_eights', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('notes');
            $table->longText('photo')->nullable();
            $table->foreignId('page_id')->nullable()->constrained('pages')->cascadeOnDelete();
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
        Schema::dropIfExists('section_eights');
    }
};
