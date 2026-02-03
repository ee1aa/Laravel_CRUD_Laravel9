<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//「DB::」という記法を使用するためのファサードの使用宣言
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            ['name' => 'Atlas一郎'],
            ['name' => 'Atlas二郎'],
            ['name' => 'Atlas三郎'],
            ['name' => 'Atlas四郎'],
            ['name' => 'Atlas五郎']
        ]);
    }
}
