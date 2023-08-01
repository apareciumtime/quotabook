<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateBookShelfs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookshelves')->insert([
            'bookshelf_name' => 'shelf1'
        ]);
        DB::table('bookshelves')->insert([
            'bookshelf_name' => 'shelf2'
        ]);
    }
}
