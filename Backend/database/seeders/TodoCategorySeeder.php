<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Work',
            'Personal',
            'Shopping',
            'Health',
            'Finance',
            'Study',
            'Travel',
            'Hobby',
            'Home',
            'Others'
        ];

        foreach ($categories as $name) {
            DB::table('todo_categories')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}