<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Level;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(50)->create();
        Level::factory()->create(['name'=>'Plata']);
        Level::factory()->create(['name'=>'Oro']);
        Level::factory()->create(['name'=>'Bronce']);
    }




}
