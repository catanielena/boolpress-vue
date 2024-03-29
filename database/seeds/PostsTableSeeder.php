<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\Base as BaseProvider;
use App\Post;

use Illuminate\Support\Str;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i<10; $i++) {
            $newPost = new Post();
            $newPost->title = ucfirst($faker->sentence());
            $newPost->slug = Str::of($newPost->title)->slug('-');
            $newPost->content = $faker->text(1000);
            $newPost->image = 'https://source.unsplash.com/random/900x700?sig=' . rand();  
            $newPost->save();
        }
    }
}
