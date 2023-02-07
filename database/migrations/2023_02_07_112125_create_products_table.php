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
        Schema::create('products', function (Blueprint $table) {
            $table->integer("product_id")->autoIncrement()->unique()->primary();
            $table->string("product_name")->unique();
            $table->integer("price");
            $table->foreignId("category_id");
            $table->string("image_url")->default("https://www.mrpanet.org/global_graphics/default-store-350x350.jpg");
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
        Schema::dropIfExists('products');
    }
};
