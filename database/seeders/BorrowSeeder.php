<?php

namespace Database\Seeders;

use App\Models\Borrow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Borrow::query()->create([
            'book_id' =>1,
        ]);
        Borrow::query()->create([
            'book_id' =>2,
        ]);
    }
}
