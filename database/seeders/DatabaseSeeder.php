<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            "name" => "Ida Bagus Dwi Putra Purnawa",
            "username" => "putrapurnawa",
            "email" => "putrapurnawa@gmail.com",
            "password" => bcrypt("helloworld")
        ]);

        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        

        // User::create([
        //     "name" => "Eric Cornetto",
        //     "email" => "ericcornetto@gmail.com",
        //     "password" => bcrypt("12345")
        // ]);

        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming"
        ]);

        Category::create([
            "name" => "Ethical Hacking",
            "slug" => "ethical-hacking"
        ]);

        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     "title" => "Judul Pertama",
        //     "slug" => "judul-pertama",
        //     "category_id" => 1,
        //     "user_id" => 1,
        //     "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet illo dolor sed. Asperiores, dolorum error ullam magnam praesentium tenetur velit omnis consectetur quia ipsam facere, illum libero nisi! Facere itaque magni placeat quos, pariatur dolor.",
        //     "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet illo dolor sed. Asperiores, dolorum error ullam magnam praesentium tenetur velit omnis consectetur quia ipsam facere, illum libero nisi! Facere itaque magni placeat quos, pariatur dolor. Facilis illum ipsam temporibus hic voluptas eveniet illo repellat veniam fuga quas, dignissimos commodi a! Adipisci repudiandae doloribus magni voluptas eaque distinctio eveniet vel! Dicta itaque consequatur nisi atque sunt sapiente odit quis, tempore alias est quisquam accusamus aliquam iste. Nesciunt molestias veniam eos ex est unde exercitationem ut, sit quia officiis dolorum esse, minus minima perspiciatis commodi, veritatis illo optio cumque. Corporis, reiciendis a?"
        // ]);

        // Post::create([
        //     "title" => "Judul Kedua",
        //     "slug" => "judul-kedua",
        //     "category_id" => 1,
        //     "user_id" => 1,
        //     "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet illo dolor sed. Asperiores, dolorum error ullam magnam praesentium tenetur velit omnis consectetur quia ipsam facere, illum libero nisi! Facere itaque magni placeat quos, pariatur dolor.",
        //     "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet illo dolor sed. Asperiores, dolorum error ullam magnam praesentium tenetur velit omnis consectetur quia ipsam facere, illum libero nisi! Facere itaque magni placeat quos, pariatur dolor. Facilis illum ipsam temporibus hic voluptas eveniet illo repellat veniam fuga quas, dignissimos commodi a! Adipisci repudiandae doloribus magni voluptas eaque distinctio eveniet vel! Dicta itaque consequatur nisi atque sunt sapiente odit quis, tempore alias est quisquam accusamus aliquam iste. Nesciunt molestias veniam eos ex est unde exercitationem ut, sit quia officiis dolorum esse, minus minima perspiciatis commodi, veritatis illo optio cumque. Corporis, reiciendis a?"
        // ]);

        // Post::create([
        //     "title" => "Judul Ketiga",
        //     "slug" => "judul-ketiga",
        //     "category_id" => 2,
        //     "user_id" => 1,
        //     "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet illo dolor sed. Asperiores, dolorum error ullam magnam praesentium tenetur velit omnis consectetur quia ipsam facere, illum libero nisi! Facere itaque magni placeat quos, pariatur dolor.",
        //     "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet illo dolor sed. Asperiores, dolorum error ullam magnam praesentium tenetur velit omnis consectetur quia ipsam facere, illum libero nisi! Facere itaque magni placeat quos, pariatur dolor. Facilis illum ipsam temporibus hic voluptas eveniet illo repellat veniam fuga quas, dignissimos commodi a! Adipisci repudiandae doloribus magni voluptas eaque distinctio eveniet vel! Dicta itaque consequatur nisi atque sunt sapiente odit quis, tempore alias est quisquam accusamus aliquam iste. Nesciunt molestias veniam eos ex est unde exercitationem ut, sit quia officiis dolorum esse, minus minima perspiciatis commodi, veritatis illo optio cumque. Corporis, reiciendis a?"
        // ]);

        // Post::create([
        //     "title" => "Judul Keempat",
        //     "slug" => "judul-keempat",
        //     "category_id" => 2,
        //     "user_id" => 2,
        //     "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet illo dolor sed. Asperiores, dolorum error ullam magnam praesentium tenetur velit omnis consectetur quia ipsam facere, illum libero nisi! Facere itaque magni placeat quos, pariatur dolor.",
        //     "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet illo dolor sed. Asperiores, dolorum error ullam magnam praesentium tenetur velit omnis consectetur quia ipsam facere, illum libero nisi! Facere itaque magni placeat quos, pariatur dolor. Facilis illum ipsam temporibus hic voluptas eveniet illo repellat veniam fuga quas, dignissimos commodi a! Adipisci repudiandae doloribus magni voluptas eaque distinctio eveniet vel! Dicta itaque consequatur nisi atque sunt sapiente odit quis, tempore alias est quisquam accusamus aliquam iste. Nesciunt molestias veniam eos ex est unde exercitationem ut, sit quia officiis dolorum esse, minus minima perspiciatis commodi, veritatis illo optio cumque. Corporis, reiciendis a?"
        // ]);
    }
}


