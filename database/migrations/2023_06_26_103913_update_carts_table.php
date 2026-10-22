<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCartsTable extends Migration
{
    public function up()
    {
        // The initial SQLite schema already uses cascading deletes. SQLite
        // cannot alter an existing foreign key in place.
        if (config('database.default') === 'sqlite') {
            return;
        }

        Schema::table('carts', function (Blueprint $table) {
            $table->dropForeign(['session_id']);

            $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');
        });
    }

    public function down()
    {
        if (config('database.default') === 'sqlite') {
            return;
        }

        Schema::table('carts', function (Blueprint $table) {
            $table->dropForeign(['session_id']);

            $table->foreign('session_id')->references('id')->on('sessions');
        });
    }
}
