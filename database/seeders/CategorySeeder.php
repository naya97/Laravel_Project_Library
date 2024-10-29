<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['history','science','art'];

        foreach ($categories as $category) {
            Category::query()->create([
                'type' => $category,
            ]);
        }
    }
}
