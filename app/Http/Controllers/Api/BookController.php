<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function showBookData($id) {
        $book = Book::query()->where('id',$id)->first();
        $author = Author::query()->where('id',$book->author->id)->first();
        $category = Category::query()->where('id', $book->category)->first();

        $data = [
            'book' => $book,
            'author_name' => $author ? $author->name : null,
            'category_type' => $category ? $category->type : null,
        ];
        
        return response()->json([
            'status' => 200,
            'data' => $data,
            'message' => "Book Data",
        ]);

    }

    //
    

}