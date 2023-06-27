<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCartsTable extends Migration
{
    public function up()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropForeign(['session_id']);

            $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropForeign(['session_id']);

            $table->foreign('session_id')->references('id')->on('sessions');
        });
    }
}
