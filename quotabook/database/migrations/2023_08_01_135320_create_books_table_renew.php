<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTableRenew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bookshelves_id')->nullable()->constrained();
            $table->integer('floor')->nullable();
            $table->integer('order')->nullable();
            $table->string('title');
            $table->integer('page')->nullable();
            $table->string('penname')->nullable();
            $table->text('comment');
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
        Schema::table('books', function (Blueprint $table) {
            $table->dropConstrainedForeignId('bookshelves_id');
        });
        Schema::dropIfExists('books');
    }
}
