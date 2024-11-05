<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
   
    public function createAuthor(Request $request) {
        $author = Author::query()->create([
            'name' => $request->name
        ]);
        return response()->json([
            'status' => 200,
            'data' => $author,
            'message' => "Author Created Successfully"
        ]);
    }
    public function storeBook(Request $request) {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'category' => 'required|exists:categories,id'
        ]);
    
        $book = Book::create([
            'title' => $validatedData['title'],
            'author_id' => $validatedData['author_id'],
            'category' => $validatedData['category']
        ]);
        
        return response()->json([
            'status' => 200,
            'data' => $book,
            'message' => "Book Added Successfully"
        ]);
    }
}
