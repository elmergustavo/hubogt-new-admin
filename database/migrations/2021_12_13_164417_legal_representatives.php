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
        Schema::create('legal_representatives', function (Blueprint $table)
        {
            $table->id();

            $table->string('full_name')->nullable();
            $table->string('cui')->nullable();
            $table->string('cui_expiration')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });  

        Schema::create('business_information', function (Blueprint $table)
        {
            $table->id();
            $table->bigInteger('legal_representative_id')->unsigned()->nullable();
            $table->foreign('legal_representative_id')->references('id')->on('legal_representatives');

            $table->string('full_name')->nullable();
            $table->string('cui')->nullable();
            $table->string('nit')->nullable();
            $table->string('tax_regime')->nullable();
            $table->string('commercial_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });              
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_information');
        Schema::dropIfExists('legal_representatives');
    }
};
