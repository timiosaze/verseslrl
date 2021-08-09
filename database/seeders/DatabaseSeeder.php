<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = User::factory()->create();
        Verse::factory()
                ->count(5)
                ->for($user)
                ->create();
    }
}
