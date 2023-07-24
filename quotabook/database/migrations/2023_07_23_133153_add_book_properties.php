<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBookProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->integer("pages")->nullable();
            $table->text("publisher")->nullable();
            $table->text("edition")->nullable();
            $table->integer("ISBN")->nullable();
            $table->text("ori_lan")->nullable();
            $table->text("author")->nullable();
            $table->text("trans_lan")->nullable();
            $table->text("translator")->nullable();
            $table->text("artist")->nullable();
            $table->text("details")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table){
            $table->dropColumn('pages');
            $table->dropColumn('publisher');
            $table->dropColumn('edition');
            $table->dropColumn('ISBN');
            $table->dropColumn('ori_lan');
            $table->dropColumn('author');
            $table->dropColumn('trans_lan');
            $table->dropColumn('translator');
            $table->dropColumn('artist');
            $table->dropColumn('details');
        });
    }
}
