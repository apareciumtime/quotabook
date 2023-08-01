<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateBooks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'book1',
        ]);
        DB::table('books')->insert([
            'title' => 'book2',
        ]);
        DB::table('books')->insert([
            'title' => 'book3',
        ]);
        DB::table('books')->insert([
            'title' => 'book4',
        ]);
        DB::table('books')->insert([
            'title' => 'book5',
        ]);
    }
}
