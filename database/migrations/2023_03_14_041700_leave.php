<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('levae', function (Blueprint $table) {
            $table->id('id_levae');
            $table->string('title');
            $table->date('start');
            $table->date('end');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('user');
            $table->string('suscess');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
