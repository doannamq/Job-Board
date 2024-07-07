<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Desk;
use App\Models\Laptop;
use App\Models\Listing;
use App\Models\Movie;
use App\Models\Music;
use App\Models\User;
use App\Models\Watch;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'phuong nam',
            'email' => 'doannamq@gmail.com'
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::factory(8)->create([
            'user_id' => $user->id
        ]);
        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, Ma',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Hello everyone, my name is Phuong Nam and I come from Thai Binh'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineering',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.starkindusties.com',
        //     'description' => 'Hello everyone, my name is Ngoc Mai and I come from Hai Duong'
        // ]);

        Movie::factory(10)->create();
        // Movie::create([
        //     'movie name' => 'Doraemon',
        //     'tags' => 'hoat hinh, hai huoc, phieu luu',
        //     'company' => 'Anime',
        //     'location' => 'Japan, JP',
        //     'email' => 'email3@email.com',
        //     'website' => 'https://www.doraemon.com',
        //     'description' => 'Chu meo may den tu tuong lai'
        // ]);

        // Movie::create([
        //     'movie name' => 'One Piece',
        //     'tags' => 'hanh dong, phieu luu, tham hiem',
        //     'company' => 'Anime',
        //     'location' => 'Japan, JP',
        //     'email' => 'email4@email.com',
        //     'website' => 'https://www.onepiece.com',
        //     'description' => 'Vua hai tac'
        // ]);

        // Movie::create([
        //     'movie name' => 'Tham tu lung danh conan',
        //     'tags' => 'trinh tham, phieu luu',
        //     'company' => 'Anime',
        //     'location' => 'Japan, JP',
        //     'email' => 'email5@email.com',
        //     'website' => 'https://www.conan.com',
        //     'description' => 'Tham tu lung danh conan'
        // ]);

        Car::factory(5)->create();
        // Car::create([
        //     'car name' => 'Honda',
        //     'company' => 'Honda',
        //     'year' => 2022,
        //     'mileage' => 2000,
        //     'description' => 'Honda Car',
        //     'price' => 5000
        // ]);

        // Car::create([
        //     'car name' => 'Yamaha',
        //     'company' => 'Yamaha',
        //     'year' => 2020,
        //     'mileage' => 5000,
        //     'description' => 'Yamaha Car',
        //     'price' => 3000
        // ]);

        // Car::create([
        //     'car name' => 'Vinfast VF8',
        //     'company' => 'Vinfast',
        //     'year' => 2023,
        //     'mileage' => 1000,
        //     'description' => 'Vinfast Car',
        //     'price' => 8000
        // ]);

        Music::factory(2)->create();

        // Watch::create([
        //     'watch name' => 'Rolex',
        //     'company' => 'Rolex Company',
        //     'price' => 5000,
        //     'description' => 'Rolex watch'
        // ]);

        // Watch::create([
        //     'watch name' => 'Cartier',
        //     'company' => 'Cartier Company',
        //     'price' => 4000,
        //     'description' => 'Cartier watch'
        // ]);

        Laptop::factory(15)->create();

        Desk::factory(8)->create();
    }
}
