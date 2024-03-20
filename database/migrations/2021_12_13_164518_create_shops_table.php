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
        Schema::create('shops', function (Blueprint $table)
        {
            $table->id();
            $table->bigInteger('shop_vendor_id')->unsigned();
            $table->bigInteger('business_information_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

            $table->foreign('business_information_id')->references('id')->on('business_information');
            $table->foreign('shop_vendor_id')->references('id')->on('shop_vendors')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();

            $table->string('bank')->nullable();
            $table->string('type_account')->nullable();
            $table->string('name_account')->nullable();
            $table->string('number_account')->nullable();

            $table->text('banner')->nullable();
            $table->text('description')->nullable();
            $table->text('fb_link')->nullable();
            $table->text('tw_link')->nullable();
            $table->text('insta_link')->nullable();
            $table->boolean('status')->default(0);

            $table->string('shop_url')->unique()->nullable();
            $table->text('opening_hours')->nullable();
            $table->text('return_policy')->nullable();
            $table->decimal('average_rating', 3, 2)->default(0.00)->nullable();
            $table->integer('review_count')->default(0)->nullable();
            $table->string('category')->nullable();
            $table->string('geolocation')->nullable();
            $table->json('metadata')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
