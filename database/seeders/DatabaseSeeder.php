<?php

namespace Database\Seeders;

use App\Models\Verse;
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
        Verse::factory()
                ->count(5)
                ->forUser([
                    'name' => 'Jide Awonusi',
                ])
                ->create();
    }
}
