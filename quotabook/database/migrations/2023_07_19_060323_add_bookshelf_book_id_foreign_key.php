<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBookshelfBookIdForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookshelves', function (Blueprint $table) {
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookshelves', function (Blueprint $table) {
            $table->dropForeign(['book_id']);
        });
    }
}
