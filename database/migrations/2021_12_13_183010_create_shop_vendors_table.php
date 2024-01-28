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
        Schema::create('shop_vendors', function (Blueprint $table)
        {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('nit')->unique();
            $table->string('cui')->unique();
            $table->string('phone');
            $table->string('email');
            $table->text('address');
            $table->text('legal_info')->nullable();


            $table->string('legal_representative')->nullable();
            $table->date('registration_date')->nullable();
            $table->string('vendor_type')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->string('logo')->nullable();
            $table->string('website_url')->nullable();
            $table->string('bank_details')->nullable();
            $table->string('preferred_language')->default('es');
            $table->string('time_zone')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_vendors');
    }
};
