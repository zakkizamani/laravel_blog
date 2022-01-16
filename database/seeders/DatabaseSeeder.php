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
        User::create([
            'name' => "Zakki Zamani",
            'username' => "admin",
            'email' => "zakki@mail.com",
            'password' => bcrypt('123456')
        ]);

        // User::create([
        //     'name' => "Matt Damon",
        //     'email' => "matt_dd@mail.com",
        //     'password' => bcrypt('123456')
        // ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Animal',
            'slug' => 'animal'
        ]);

        Category::create([
            'name' => 'Digital Marketing',
            'slug' => 'digital-marketing'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni animi amet ea unde distinctio repellat saepe repudiandae nam neque. Animi!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ullam harum nostrum minima, accusantium tenetur, consequatur illum reprehenderit temporibus dolores ad quasi, unde quia sequi neque eos doloremque deserunt architecto! Reprehenderit, ducimus assumenda. Deleniti dolorem commodi placeat quis nisi esse sapiente vel sequi aliquam a, explicabo, voluptate aliquid! Quisquam cupiditate cumque enim quaerat eos vero, reprehenderit ipsam iste placeat! Sapiente, et. Repellendus repellat laboriosam fuga neque molestias, excepturi tenetur explicabo illum, atque, dolores voluptatibus maiores. Eligendi vel, veniam aliquam modi officiis minima error sunt nulla debitis quod fugiat sit aliquid quo pariatur. Mollitia consequuntur unde pariatur, repudiandae neque animi cupiditate ducimus et eveniet esse libero veritatis velit excepturi ipsam, placeat exercitationem vero! Repudiandae qui voluptatum deleniti molestiae quos nemo explicabo?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke_dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni animi amet ea unde distinctio repellat saepe repudiandae nam neque. Animi!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ullam harum nostrum minima, accusantium tenetur, consequatur illum reprehenderit temporibus dolores ad quasi, unde quia sequi neque eos doloremque deserunt architecto! Reprehenderit, ducimus assumenda. Deleniti dolorem commodi placeat quis nisi esse sapiente vel sequi aliquam a, explicabo, voluptate aliquid! Quisquam cupiditate cumque enim quaerat eos vero, reprehenderit ipsam iste placeat! Sapiente, et. Repellendus repellat laboriosam fuga neque molestias, excepturi tenetur explicabo illum, atque, dolores voluptatibus maiores. Eligendi vel, veniam aliquam modi officiis minima error sunt nulla debitis quod fugiat sit aliquid quo pariatur. Mollitia consequuntur unde pariatur, repudiandae neque animi cupiditate ducimus et eveniet esse libero veritatis velit excepturi ipsam, placeat exercitationem vero! Repudiandae qui voluptatum deleniti molestiae quos nemo explicabo?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul KeTiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni animi amet ea unde distinctio repellat saepe repudiandae nam neque. Animi!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ullam harum nostrum minima, accusantium tenetur, consequatur illum reprehenderit temporibus dolores ad quasi, unde quia sequi neque eos doloremque deserunt architecto! Reprehenderit, ducimus assumenda. Deleniti dolorem commodi placeat quis nisi esse sapiente vel sequi aliquam a, explicabo, voluptate aliquid! Quisquam cupiditate cumque enim quaerat eos vero, reprehenderit ipsam iste placeat! Sapiente, et. Repellendus repellat laboriosam fuga neque molestias, excepturi tenetur explicabo illum, atque, dolores voluptatibus maiores. Eligendi vel, veniam aliquam modi officiis minima error sunt nulla debitis quod fugiat sit aliquid quo pariatur. Mollitia consequuntur unde pariatur, repudiandae neque animi cupiditate ducimus et eveniet esse libero veritatis velit excepturi ipsam, placeat exercitationem vero! Repudiandae qui voluptatum deleniti molestiae quos nemo explicabo?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni animi amet ea unde distinctio repellat saepe repudiandae nam neque. Animi!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ullam harum nostrum minima, accusantium tenetur, consequatur illum reprehenderit temporibus dolores ad quasi, unde quia sequi neque eos doloremque deserunt architecto! Reprehenderit, ducimus assumenda. Deleniti dolorem commodi placeat quis nisi esse sapiente vel sequi aliquam a, explicabo, voluptate aliquid! Quisquam cupiditate cumque enim quaerat eos vero, reprehenderit ipsam iste placeat! Sapiente, et. Repellendus repellat laboriosam fuga neque molestias, excepturi tenetur explicabo illum, atque, dolores voluptatibus maiores. Eligendi vel, veniam aliquam modi officiis minima error sunt nulla debitis quod fugiat sit aliquid quo pariatur. Mollitia consequuntur unde pariatur, repudiandae neque animi cupiditate ducimus et eveniet esse libero veritatis velit excepturi ipsam, placeat exercitationem vero! Repudiandae qui voluptatum deleniti molestiae quos nemo explicabo?',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}
