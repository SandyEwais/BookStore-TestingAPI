<?php

namespace App\Http\Controllers\Api;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use Illuminate\Support\Facades\Validator;


class BookController extends Controller
{
    public function index(){
        $books = Book::get();
        return response(BookResource::collection($books));
    }

    public function show(Book $book){
        return response(new BookResource($book));

    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);
 
        if ($validator->fails()) {
            return response($validator->errors(),401);
        }
        Book::create($request->all());
        return response($request->all(),200);
        
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);
 
        if ($validator->fails()) {
            return response($validator->errors(),401);
        }
        $book = Book::find($id);
        if($book){
            $book->update($request->all());
            return response($book,200);
        }
        return response('Book Not Found',404);

    }

    public function delete(Book $book){
        $book->delete();
        return response('Book Deleted');
    }
}

