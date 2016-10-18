<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
                'id' => 1,
                'post_id' => 1,
                'user_id' => 1,
                'parent_id' => 1,
                'body' => 'how are u doing']
        );


    }
}
