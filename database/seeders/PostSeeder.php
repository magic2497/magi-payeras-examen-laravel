<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['title' => 'titulo 1',  'extract' => 'extract1', 'description' => 'description1',  'acces' => 'public', 'user_id' => '1'],
            ['title' => 'titulo 2', 'extract' => 'extract2', 'description' => 'description2',  'acces' => 'private', 'user_id' => '1'],
            ['title' => 'titulo 3', 'extract' => 'extract3', 'description' => 'description3',  'acces' => 'public', 'user_id' => '2'],

        ];
        DB::table('post')->insert($post);
    }
}
