<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Borrow;
use App\Models\ReadingList;
use App\Models\ReadingListBook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Exists;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    public function index() {
        $users = User::query()->get();
        return $users;
    }

    public function show($id) {

        $readingListBook = ReadingListBook::findOrFail($id);
        return response()->json([
            'status' => 200,
            'data' => $readingListBook,
            'message' => 'OK'
        ]);
    }

    public function borrow(Request $request) {
        $user = Auth::user();
        $borrow = Borrow::query()->create([
            'book_id' => $request->id,
            'user_id' => $user->id,
        ]);

        return response()->json([
            'status' => 200,
            'data' => $borrow,
            'message' => 'book borrowed successfully'
        ]);
    }

    public function deleteBorrowedBook(Request $request) {
        
        $borrow = Borrow::where('user_id', Auth::id())->where('id', $request->id)->delete();    
        
        if($borrow == 0) {
            return response()->json([
                'status' => 400,
                'message' => "Bad Request"
            ]);
        }

        return response()->json([
            'status' => 200,
            'data' => $borrow,
            'message' => "book deleted successfully",
        ]);
    }

    
    public function showReadingList() {
       $user = Auth::user();
       //from reading list books
        $readingListsbooks [] = ReadingListBook::where('reading_list_id',$user->id)->get();
         
        return response()->json([
            'status' => 200,
            'data' => $readingListsbooks,
            'status' => "Data Showed Successfully",
        ]);
    }

    public function addBookToReadingList(Request $request) {
        //to reading list books
        $user = Auth::user();
        $book = ReadingListBook::query()->create([
            'book_id' => $request->id,
            'reading_list_id' => $user->id
        ]);

        return response()->json([
            'status' => 200,
            'data' => $book,
            'message' => "Book Added Successfully"
        ]);

    }
 
}
