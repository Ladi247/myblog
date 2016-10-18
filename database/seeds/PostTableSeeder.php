<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(['id' => 1,
            'user_id' => 1,
            'body' => 'good',
            'title' => 'oh mine']
        );


    }
}
