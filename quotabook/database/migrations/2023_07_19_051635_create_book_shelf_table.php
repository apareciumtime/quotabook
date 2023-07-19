<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookShelfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookshelves', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('bookshelf_name');
            $table->integer('floor')->default(0)->nullable();
            // $table->unsignedBigInteger('book_id');
            // $table->foreign('book_id')->references('id')->on('books')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('BookShelf',function (Blueprint $table){
        //     $table->dropForeign(['book_id']);
        // });

        Schema::dropIfExists('BookShelf');
    }
}
