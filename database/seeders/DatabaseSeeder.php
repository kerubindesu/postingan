<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use App\Models\Admin;
use App\Models\Guru;
use App\Models\Kelas;
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
        // \App\Models\User::factory(10)->create();
        Guru::insert([
            'name' => 'Sandhika Galih',
            'username' => 'guru',
            'email' => 'guru@gmail.com',
            'password' => Hash::make('12345678'),
            'kelas_id' => '1',
        ]);

        Admin::insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        Kelas::insert([
            'name' => 'Agrobisnis',
            'slug' => 'agrobisnis',
            'image' => 'agrobisnis.jpg',
            'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae placeat, dolores eius tempora est ex distinctio unde porro nobis consequuntur?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat explicabo deserunt ducimus optio quisquam culpa non rem maxime, assumenda earum! Quae dolorum tempore dolorem asperiores qui iusto at, accusantium eligendi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, amet.</p>',
        ]);

        Kelas::insert([
            'name' => 'Barbershop',
            'slug' => 'barbershop',
            'image' => 'barbershop.jpg',
            'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae placeat, dolores eius tempora est ex distinctio unde porro nobis consequuntur?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat explicabo deserunt ducimus optio quisquam culpa non rem maxime, assumenda earum! Quae dolorum tempore dolorem asperiores qui iusto at, accusantium eligendi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, amet.</p>',
        ]);

        Kelas::insert([
            'name' => 'Beverage',
            'slug' => 'beverage',
            'image' => 'beverage.jpg',
            'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae placeat, dolores eius tempora est ex distinctio unde porro nobis consequuntur?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat explicabo deserunt ducimus optio quisquam culpa non rem maxime, assumenda earum! Quae dolorum tempore dolorem asperiores qui iusto at, accusantium eligendi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, amet.</p>',
        ]);

        Kelas::insert([
            'name' => 'Desain Kreatif',
            'slug' => 'desain-kreatif',
            'image' => 'desain-kreatif.jpg',
            'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae placeat, dolores eius tempora est ex distinctio unde porro nobis consequuntur?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat explicabo deserunt ducimus optio quisquam culpa non rem maxime, assumenda earum! Quae dolorum tempore dolorem asperiores qui iusto at, accusantium eligendi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, amet.</p>',
        ]);

        Kelas::insert([
            'name' => 'Komputer Dasar',
            'slug' => 'komputer-dasar',
            'image' => 'komputer-dasar.jpg',
            'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae placeat, dolores eius tempora est ex distinctio unde porro nobis consequuntur?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat explicabo deserunt ducimus optio quisquam culpa non rem maxime, assumenda earum! Quae dolorum tempore dolorem asperiores qui iusto at, accusantium eligendi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, amet.</p>',
        ]);
        
        Kelas::insert([
            'name' => 'Kuliner',
            'slug' => 'kuliner',
            'image' => 'kuliner.jpg',
            'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae placeat, dolores eius tempora est ex distinctio unde porro nobis consequuntur?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat explicabo deserunt ducimus optio quisquam culpa non rem maxime, assumenda earum! Quae dolorum tempore dolorem asperiores qui iusto at, accusantium eligendi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, amet.</p>',
        ]);

        Kelas::insert([
            'name' => 'Mengemudi',
            'slug' => 'mengemudi',
            'image' => 'mengemudi.jpg',
            'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae placeat, dolores eius tempora est ex distinctio unde porro nobis consequuntur?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat explicabo deserunt ducimus optio quisquam culpa non rem maxime, assumenda earum! Quae dolorum tempore dolorem asperiores qui iusto at, accusantium eligendi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, amet.</p>',
        ]);

        Category::insert([
            'name' => 'Tanam Hias',
            'slug' => 'tanaman-hias',
            'image' => 'tanaman-hias.jpg',
            'kelas_id' => '1',
        ]);

        Category::insert([
            'name' => 'Tanam Buah',
            'slug' => 'tanaman-buah',
            'image' => 'tanaman-buah.jpg',
            'kelas_id' => '1',
        ]);

        Category::insert([
            'name' => 'Tanam Bunga',
            'slug' => 'tanaman-bunga',
            'image' => 'tanaman-bunga.jpg',
            'kelas_id' => '1',
        ]);
    }
}
