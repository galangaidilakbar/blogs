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

        User::create([
            'name' => 'Galang aidil',
            'username' => 'galang',
            'email' => 'galangaidil45@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Nela Puspita',
        //     'email' => 'nelapuspita@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, modi obcaecati. Eaque quidem sed facilis, minima repudiandae officiis doloremque, dolor animi commodi suscipit ducimus aperiam. Est nam iusto omnis, illo consectetur at fugit delectus architecto eveniet, qui culpa placeat voluptatem deleniti. Est consequatur doloremque unde nostrum error doloribus ducimus, illum dicta excepturi atque quas perspiciatis fugiat minima magni ipsam cumque rem accusamus nemo exercitationem beatae tenetur sed.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, modi obcaecati. Eaque quidem sed facilis, minima repudiandae officiis doloremque, dolor animi commodi suscipit ducimus aperiam. Est nam iusto omnis, illo consectetur at fugit delectus architecto eveniet, qui culpa placeat voluptatem deleniti. Est consequatur doloremque unde nostrum error doloribus ducimus, illum dicta excepturi atque quas perspiciatis fugiat minima magni ipsam cumque rem accusamus nemo exercitationem beatae tenetur sed. Eos aperiam consectetur itaque iste laboriosam sapiente rem sed harum necessitatibus repudiandae quis, nihil aspernatur repellat sint. Consequuntur, voluptate laudantium quod expedita nam quisquam tempore possimus vel cupiditate similique suscipit! Magnam, doloribus earum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum assumenda, temporibus voluptas officia velit dolore odit voluptates libero sunt! Vero, necessitatibus dolor aliquam suscipit, molestias cupiditate adipisci temporibus, animi qui commodi atque repellat. Illo eum quae consequuntur officia ex, minima et vero reiciendis! Explicabo illum laborum praesentium voluptatibus similique atque!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, modi obcaecati. Eaque quidem sed facilis, minima repudiandae officiis doloremque, dolor animi commodi suscipit ducimus aperiam. Est nam iusto omnis, illo consectetur at fugit delectus architecto eveniet, qui culpa placeat voluptatem deleniti. Est consequatur doloremque unde nostrum error doloribus ducimus, illum dicta excepturi atque quas perspiciatis fugiat minima magni ipsam cumque rem accusamus nemo exercitationem beatae tenetur sed.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, modi obcaecati. Eaque quidem sed facilis, minima repudiandae officiis doloremque, dolor animi commodi suscipit ducimus aperiam. Est nam iusto omnis, illo consectetur at fugit delectus architecto eveniet, qui culpa placeat voluptatem deleniti. Est consequatur doloremque unde nostrum error doloribus ducimus, illum dicta excepturi atque quas perspiciatis fugiat minima magni ipsam cumque rem accusamus nemo exercitationem beatae tenetur sed. Eos aperiam consectetur itaque iste laboriosam sapiente rem sed harum necessitatibus repudiandae quis, nihil aspernatur repellat sint. Consequuntur, voluptate laudantium quod expedita nam quisquam tempore possimus vel cupiditate similique suscipit! Magnam, doloribus earum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum assumenda, temporibus voluptas officia velit dolore odit voluptates libero sunt! Vero, necessitatibus dolor aliquam suscipit, molestias cupiditate adipisci temporibus, animi qui commodi atque repellat. Illo eum quae consequuntur officia ex, minima et vero reiciendis! Explicabo illum laborum praesentium voluptatibus similique atque!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, modi obcaecati. Eaque quidem sed facilis, minima repudiandae officiis doloremque, dolor animi commodi suscipit ducimus aperiam. Est nam iusto omnis, illo consectetur at fugit delectus architecto eveniet, qui culpa placeat voluptatem deleniti. Est consequatur doloremque unde nostrum error doloribus ducimus, illum dicta excepturi atque quas perspiciatis fugiat minima magni ipsam cumque rem accusamus nemo exercitationem beatae tenetur sed.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, modi obcaecati. Eaque quidem sed facilis, minima repudiandae officiis doloremque, dolor animi commodi suscipit ducimus aperiam. Est nam iusto omnis, illo consectetur at fugit delectus architecto eveniet, qui culpa placeat voluptatem deleniti. Est consequatur doloremque unde nostrum error doloribus ducimus, illum dicta excepturi atque quas perspiciatis fugiat minima magni ipsam cumque rem accusamus nemo exercitationem beatae tenetur sed. Eos aperiam consectetur itaque iste laboriosam sapiente rem sed harum necessitatibus repudiandae quis, nihil aspernatur repellat sint. Consequuntur, voluptate laudantium quod expedita nam quisquam tempore possimus vel cupiditate similique suscipit! Magnam, doloribus earum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum assumenda, temporibus voluptas officia velit dolore odit voluptates libero sunt! Vero, necessitatibus dolor aliquam suscipit, molestias cupiditate adipisci temporibus, animi qui commodi atque repellat. Illo eum quae consequuntur officia ex, minima et vero reiciendis! Explicabo illum laborum praesentium voluptatibus similique atque!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, modi obcaecati. Eaque quidem sed facilis, minima repudiandae officiis doloremque, dolor animi commodi suscipit ducimus aperiam. Est nam iusto omnis, illo consectetur at fugit delectus architecto eveniet, qui culpa placeat voluptatem deleniti. Est consequatur doloremque unde nostrum error doloribus ducimus, illum dicta excepturi atque quas perspiciatis fugiat minima magni ipsam cumque rem accusamus nemo exercitationem beatae tenetur sed.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, modi obcaecati. Eaque quidem sed facilis, minima repudiandae officiis doloremque, dolor animi commodi suscipit ducimus aperiam. Est nam iusto omnis, illo consectetur at fugit delectus architecto eveniet, qui culpa placeat voluptatem deleniti. Est consequatur doloremque unde nostrum error doloribus ducimus, illum dicta excepturi atque quas perspiciatis fugiat minima magni ipsam cumque rem accusamus nemo exercitationem beatae tenetur sed. Eos aperiam consectetur itaque iste laboriosam sapiente rem sed harum necessitatibus repudiandae quis, nihil aspernatur repellat sint. Consequuntur, voluptate laudantium quod expedita nam quisquam tempore possimus vel cupiditate similique suscipit! Magnam, doloribus earum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum assumenda, temporibus voluptas officia velit dolore odit voluptates libero sunt! Vero, necessitatibus dolor aliquam suscipit, molestias cupiditate adipisci temporibus, animi qui commodi atque repellat. Illo eum quae consequuntur officia ex, minima et vero reiciendis! Explicabo illum laborum praesentium voluptatibus similique atque!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
