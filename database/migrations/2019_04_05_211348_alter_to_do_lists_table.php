<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterToDoListsTable extends Migration
{
    /**
     * Run the migrations.
     *-
     * @return void
     */
    public function up()
    {
        Schema::table('to_do_lists', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->after('id');
            $table->string('status',10)->default('pending')->after('Order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('do_lists', function (Blueprint $table) {
            //
        });
    }
}
