<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommonBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common_books', function (Blueprint $table) {
            $table->id();
            $table->string('publisher')->nullable();
            $table->integer('edition')->nullable();
            $table->string('isbn')->nullable();
            $table->string('org_lang')->nullable();
            $table->string('author')->nullable();
            $table->string('trans_lang')->nullable();
            $table->string('translator')->nullable();
            $table->string('painter')->nullable();
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
        Schema::dropIfExists('common_books');
    }
}
