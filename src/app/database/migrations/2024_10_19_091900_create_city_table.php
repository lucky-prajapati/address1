<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('citys', function (Blueprint $table) {
            $table->id();
            $table->string('city_name',100);
            $table->unsignedBigInteger('state_id');
            $table->timestamps();

            $table->foreign('state_id')->references('id')->on('citys');
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('citys');
    }

};