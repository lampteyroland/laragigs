<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();
        Listing::factory(6)->create();

//         Listing::create(
//             [
//                 'title'=> 'Laravel Senior Developer',
//                 'tags'=> 'Laravel, javascript',
//                 'company'=> 'Company name',
//                 'location'=> 'Boston, MA',
//                 'email'=> 'mail@mail.com',
//                 'website'=> 'www.websit.com',
//                 'description'=> 'lorem ipsum',
//             ],
//         );
//
//        Listing::create(
//            [
//                'title'=> 'Laravel Senior Developer',
//                'tags'=> 'Laravel, javascript',
//                'company'=> 'Company name',
//                'location'=> 'Boston, MA',
//                'email'=> 'mail@mail.com',
//                'website'=> 'www.websit.com',
//                'description'=> 'lorem ipsum',
//            ],
//        );




        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
