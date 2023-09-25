<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaProductsTable extends Migration
{
    public function up()
    {
        Schema::create('media_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('type'); // Loại media (ảnh hoặc video)
            $table->string('url'); // Đường dẫn hoặc URL của media
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('media_products');
    }
}

