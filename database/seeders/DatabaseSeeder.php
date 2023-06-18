<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\ssDocument;
use App\Models\ejsDocument;
use App\Models\transaction_info;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
        $user = User::factory()->create([
            'name' => 'Jon Doe',
            'email' => 'Jon@gmail.com'
        ]);

        User::factory()->create([
            'role' => 'assessor',
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('123456')
        ]);

        ejsDocument::factory(1)->create([
            'name' => $user->name,
            'user_id' => $user->id,
            'nullCount' => 14
        ]);

        ssDocument::factory(1)->create([
            'name' => $user->name,
            'user_id' => $user->id,
            'nullCount' => 13
        ]);

        transaction_info::factory()->create([
            'name' => 'Extrajudicial Settlements',
            'qty' => 14,
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nesciunt pariatur molestias accusamus dolore, nihil aliquam? Maxime, debitis mollitia eum est excepturi animi, delectus quisquam reprehenderit quas, perspiciatis perferendis repellendus.",
            'requirements' => "Extrajudicial Settle of Estate,Affidavit of Publication,BIR eCAR,Owner's Duplicate Copy of Title,Realty Tax Clearance,Current Tax Declaration,Transfer Tax Receipt,DAR Clearance, Special Power of Attorney,Sepia,Blueprint,Technical Description,Written Request,Cadastral Cost" 
        ]);
            
        transaction_info::factory()->create([
            'name' => 'Simple Sale',
            'qty' => 13,
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nesciunt pariatur molestias accusamus dolore, nihil aliquam? Maxime, debitis mollitia eum est excepturi animi, delectus quisquam reprehenderit quas, perspiciatis perferendis repellendus.",
            'requirements' => "Deed of Absolute Sale,BIR eCAR,Owner's Duplicate Copy of Title,Realty Tax Clearance,Current Tax Declaration,Transfer Tax Receipt,DAR Clearance,Special Power of Attorney,Sepia,Blueprint,Technical Description,Written Request,Cadastral Cost"
        ]);
        
    }
}
