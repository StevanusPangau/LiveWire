<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        Contact::create([
            'name' => 'Evan'
        ]);

        Contact::create([
            'name' => 'Stevanus'
        ]);

        Contact::create([
            'name' => 'Tivani'
        ]);

        Contact::create([
            'name' => 'Cecil'
        ]);

        Contact::create([
            'name' => 'Budi'
        ]);
    }
}
