<?php

use Illuminate\Database\Seeder;
use App\User;
use\App\Post;
use\App\Comment;
use Faker\Generator as Faker;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $comments = 10;
        $users = User::all();

        for ( $i = 0; $i < $comments; $i++ ) { 
            $newComment = new Comment();

            $newComment->user_id = $users->random()->id;
            $newComment->creator = $faker->name();
            $newComment->email = $faker-> email();
            $newComment->comment_text = $faker->text(100);

            $newComment->save();
        }
    }
}
