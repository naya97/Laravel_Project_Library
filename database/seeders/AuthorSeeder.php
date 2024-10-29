<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = ['Jubran','Ahmad','Suleiman','Eleia','Angham'];

        foreach($authors as $author) {
            Author::query()->create([
                'name' => $author,
            ]);
        }
    }
}
