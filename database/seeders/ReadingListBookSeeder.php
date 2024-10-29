<?php

namespace Database\Seeders;

use App\Models\ReadingListBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReadingListBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReadingListBook::query()->create([
            'book_id' => 1,
            'reading_list_id' => 1
        ]);
        ReadingListBook::query()->create([
            'book_id' => 2,
            'reading_list_id' => 2
        ]);
        ReadingListBook::query()->create([
            'book_id' => 2,
            'reading_list_id' => 3
        ]);
        ReadingListBook::query()->create([
            'book_id' => 2,
            'reading_list_id' => 4
        ]);
    }
}
