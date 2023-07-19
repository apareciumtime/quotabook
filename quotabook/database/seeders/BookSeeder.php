<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'id'=>1,
        ]);
    }
}
