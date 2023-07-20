<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('bookshelves')->insert([
        //     'bookshelf_name' => Str::random(10),
        //     'floor' =>1,
        //     'book_id' =>1,
        // ]);
        DB::table('bookshelves')->insert([
            'bookshelf_name' => 'pf0qPI4THC',
            'floor' =>1,
            'book_id' =>1,
        ]);
        DB::table('bookshelves')->insert([
            'bookshelf_name' => 'pf0qPI4THC',
            'floor' =>1,
            'book_id' =>1,
        ]);
        DB::table('bookshelves')->insert([
            'bookshelf_name' => 'ccccccc',
            'floor' =>1,
            'book_id' =>1,
        ]);
        DB::table('bookshelves')->insert([
            'bookshelf_name' => 'bbbbbbb',
            'floor' =>1,
            'book_id' =>1,
        ]);
        DB::table('bookshelves')->insert([
            'bookshelf_name' => 'aaaaaaa',
            'floor' =>1,
            'book_id' =>1,
        ]);
       
    }
}
