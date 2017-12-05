<?php

use Illuminate\Database\Seeder;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=[
        	['title'=>'Tips cepat menang','content'=>'lorem ipsum'],
        	['title'=>'haruskah menunda nikah?','content'=>'lorem ipsum'],
        	['title'=>'mambangun visi misi keluarga','content'=>'lorem ipsum']
        ];
        //masukan data ke database
        DB::table('posts')->insert($posts);
    }
}
