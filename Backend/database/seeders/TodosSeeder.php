<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('todos')->insert([
                'todo_category_id' => rand(1, 10), // random category
                'title' => "Todo Task $i",
                'description' => "This is a sample description for Todo Task $i",
                'status' => rand(0, 1),
                'due_date' => now()->addDays(rand(1, 15)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}