<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          DB::table('admins')->insert([
          'name' => Str::random(5),
          'email' => 'admin@gmail.com',
          'password' => Hash::make('12345678'),
          ]);
        // \App\Models\User::factory(10)->create();
    }
}