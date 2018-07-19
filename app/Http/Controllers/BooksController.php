<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
        ]);

        $book = Book::create($data);

        return new JsonResponse($book);
    }
}
