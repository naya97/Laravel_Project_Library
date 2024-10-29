<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Love',
                'author_id' => 1,
                'category' => 3,
            ],
            [
                'title' => 'Heaven',
                'author_id' => 1,
                'category' => 3,
            ],
            [
                'title' => 'Hell',
                'author_id' => 1,
                'category' => 3,
            ],
            [
                'title' => 'Men',
                'author_id' => 5,
                'category' => 3,
            ],
            [
                'title' => 'Women',
                'author_id' => 2,
                'category' => 2,
            ],
            [
                'title' => 'Moon',
                'author_id' => 2,
                'category' => 2,
            ],
            [
                'title' => 'Earth',
                'author_id' => 3,
                'category' => 2,
            ],
            [
                'title' => 'Sun',
                'author_id' => 3,
                'category' => 2,
            ],
            [
                'title' => 'France',
                'author_id' => 4,
                'category' => 3,
            ],
            [
                'title' => 'England',
                'author_id' => 4,
                'category' => 3,
            ],
        ];

        Book::insert($books);
    
    }
}
