<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBooksTableAddCommonBooksIdForeignKeyAndSewedBooksIdForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->foreignId('common_books_id')->nullable()->after('comment')->constrained();
            $table->foreignId('sewed_books_id')->nullable()->after('comment')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropConstrainedForeignId('common_books_id');
            $table->dropConstrainedForeignId('sewed_books_id');
        });
    }
}
