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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('code')->nullable();
            $table->string('sloppy')->comment('المؤهل')->nullable();
            $table->string('jops')->nullable();
            $table->enum('type', ['Business_Administration','commercial_arbitration','Diplomatic_relations','Human_Resource_Management'])->nullable();
            $table->date('data')->nullable();
            $table->string('time')->comment('الساعه')->nullable();
            $table->integer('duplicate')->nullable();
            $table->foreignId('page_id')->references('id')->on('pages')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('clients');
    }
};
