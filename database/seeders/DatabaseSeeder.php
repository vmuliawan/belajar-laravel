<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(4)->create();

        // User::create([
        //     "name" => "Vincent Muliawan",
        //     "email" => "vincentm@gmail.com",
        //     "password" => bcrypt("vincent69")
        // ]);

        Category::create([
            "name" => "Programming",
            "slug" => "programming"
        ]);
        Category::create([
            "name" => "Game",
            "slug" => "game"
        ]);
        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        Post::factory(15)->create();

        // Post::create([
        //     "judul" => "Post Pertama",
        //     "slug" => "post-pertama",
        //     "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis quos dolore magni, esse sequi aliquam id est voluptates maiores temporibus.",
        //     "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, blanditiis eaque impedit maiores voluptatum, eveniet beatae corrupti, molestias voluptate quam natus tempore eos error cupiditate aspernatur expedita repudiandae omnis officia saepe similique? Magni, neque suscipit incidunt iste perspiciatis eaque, aliquid vitae ullam consequatur sed tempora magnam reprehenderit aspernatur odio eos mollitia quibusdam, cum harum voluptates eveniet quidem fugiat sunt numquam. Obcaecati, qui accusamus architecto ratione iusto non corrupti quo cupiditate?",
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);
        // Post::create([
        //     "judul" => "Post Kedua",
        //     "slug" => "post-kedua",
        //     "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis quos dolore magni, esse sequi aliquam id est voluptates maiores temporibus.",
        //     "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, blanditiis eaque impedit maiores voluptatum, eveniet beatae corrupti, molestias voluptate quam natus tempore eos error cupiditate aspernatur expedita repudiandae omnis officia saepe similique? Magni, neque suscipit incidunt iste perspiciatis eaque, aliquid vitae ullam consequatur sed tempora magnam reprehenderit aspernatur odio eos mollitia quibusdam, cum harum voluptates eveniet quidem fugiat sunt numquam. Obcaecati, qui accusamus architecto ratione iusto non corrupti quo cupiditate?",
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);
        // Post::create([
        //     "judul" => "Post Ketiga",
        //     "slug" => "post-ketiga",
        //     "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis quos dolore magni, esse sequi aliquam id est voluptates maiores temporibus.",
        //     "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, blanditiis eaque impedit maiores voluptatum, eveniet beatae corrupti, molestias voluptate quam natus tempore eos error cupiditate aspernatur expedita repudiandae omnis officia saepe similique? Magni, neque suscipit incidunt iste perspiciatis eaque, aliquid vitae ullam consequatur sed tempora magnam reprehenderit aspernatur odio eos mollitia quibusdam, cum harum voluptates eveniet quidem fugiat sunt numquam. Obcaecati, qui accusamus architecto ratione iusto non corrupti quo cupiditate?",
        //     "category_id" => 2,
        //     "user_id" => 1
        // ]);
        // Post::create([
        //     "judul" => "Post Ke empat",
        //     "slug" => "post-keempat",
        //     "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis quos dolore magni, esse sequi aliquam id est voluptates maiores temporibus.",
        //     "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, blanditiis eaque impedit maiores voluptatum, eveniet beatae corrupti, molestias voluptate quam natus tempore eos error cupiditate aspernatur expedita repudiandae omnis officia saepe similique? Magni, neque suscipit incidunt iste perspiciatis eaque, aliquid vitae ullam consequatur sed tempora magnam reprehenderit aspernatur odio eos mollitia quibusdam, cum harum voluptates eveniet quidem fugiat sunt numquam. Obcaecati, qui accusamus architecto ratione iusto non corrupti quo cupiditate?",
        //     "category_id" => 3,
        //     "user_id" => 1
        // ]);
    }
}
