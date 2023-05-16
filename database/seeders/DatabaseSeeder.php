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
        \App\Models\User::factory(10)->create();

        Listing::factory(6)->create();
        // Listing::create([
        //     'title' => 'Laravael Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'Sample.com',
        //     'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique ratione blanditiis, obcaecati repellat eius temporibus, ab doloribus nostrum accusamus, atque sequi architecto esse quas dolor nisi ipsam nesciunt praesentium illo.',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
