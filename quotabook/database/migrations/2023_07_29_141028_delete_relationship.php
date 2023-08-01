<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookshelves_books', function (Blueprint $table) {
            $table->dropConstrainedForeignId('book_id');
            $table->dropConstrainedForeignId('bookshelf_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookshelves_books', function (Blueprint $table) {
            $table->foreignId('bookshelf_id')->after('updated_at')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('book_id')->after('floor')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }
}
