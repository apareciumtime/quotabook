<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnBookshelfNameFromBookshelfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookshelves', function (Blueprint $table){
            $table->dropColumn('bookshelf_name');
            $table->dropColumn('book_id');
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
            $table->string('bookshelf_name')->after('updated_at');
            $table->integer('book_id')->after('floor');
        });
    }
}
