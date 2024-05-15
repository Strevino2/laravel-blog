<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        User::truncate();
//        Category::truncate();
//        Post::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(30)->create([
            'user_id' => $user->id
        ]);

//        $user = \App\Models\User::factory()->create();
//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My Family Post',
//            'slug' => 'my-first-post',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat, turpis tristique faucibus commodo, sem leo semper felis, ut malesuada neque justo sit amet massa. Nulla viverra nec enim et pellentesque. Integer condimentum quis eros et rhoncus. Pellentesque malesuada eleifend vehicula. Etiam elit dolor, vulputate nec laoreet quis, porttitor et ligula. Aliquam ac lectus et libero tempor pulvinar et at massa. Phasellus vel suscipit ex.</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post',
//            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
//            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat, turpis tristique faucibus commodo, sem leo semper felis, ut malesuada neque justo sit amet massa. Nulla viverra nec enim et pellentesque. Integer condimentum quis eros et rhoncus. Pellentesque malesuada eleifend vehicula. Etiam elit dolor, vulputate nec laoreet quis, porttitor et ligula. Aliquam ac lectus et libero tempor pulvinar et at massa. Phasellus vel suscipit ex.</p>'
//        ]);
    }
}
