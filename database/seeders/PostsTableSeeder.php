<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title' => 'tips cepat pintar', 'content' => 'lorem ipsum'],
            ['title' => 'haruskah menunda belajar', 'content' => 'lorem ipsum'],
            ['title' => 'membangun visi misi kesuksesan', 'content' => 'lorem ipsum'],
        ];
        DB::table('posts')->insert($posts);
    }
}
