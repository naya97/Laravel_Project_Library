<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\ReadingListBook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

}
