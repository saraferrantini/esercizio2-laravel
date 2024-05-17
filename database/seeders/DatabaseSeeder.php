<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
*/
  public function run(): void{// User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        DB::table('books')->insert([
            'title' => Str::random(rand(20,50)),
            'price' =>  rand(100, 350),
            'author'=> Str::random(10),
            'img' => Str::random(10),
        ]);
    }
}