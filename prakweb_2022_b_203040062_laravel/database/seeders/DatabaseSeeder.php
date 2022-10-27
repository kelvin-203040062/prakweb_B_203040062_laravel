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
     *
     * @return void
     */
    public function run()
    {
        

        //User::create([
        //    'name'=> 'Kelvin Ardiansah',
        //    'email' => 'kelvinardiansah16@gmail.com',
        //    'password' => bcrypt('12345')
        //]);

        //User::create([
        //    'name'=> 'Keblin',
        //    'email' => 'keblin16@gmail.com',
        //    'password' => bcrypt('54321')
        //]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
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

        


    }
}
