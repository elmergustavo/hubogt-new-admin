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
        Schema::create('shop_sub_categories', function (Blueprint $table)
        {
            $table->id();
            $table->bigInteger('shop_category_id')->unsigned()->nullable()->default(null);
            $table->foreign('shop_category_id')->references('id')->on('shop_categories');
            $table->string('name');
            $table->string('slug');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shop_sub_categories', function (Blueprint $table)
        {
            $table->dropForeign(['shop_category_id']);
        });
        Schema::dropIfExists('shop_sub_categories');
    }
};
