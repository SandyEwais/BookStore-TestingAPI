<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('index',[
            'books' => Book::all()
        ]);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        Book::create($data);
        return redirect()->route('index')->with('message','Book Added Successfully');
    }
    public function edit(Book $book){
        return view('update',[
            'book' => $book
        ]);
    }
    public function update(Request $request, Book $book){
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $book->update($data);
        return redirect()->route('index')->with('message','Book Updated Successfully');
        
    }
    public function destroy(Book $book){
        $book->delete();
        return redirect()->route('index')->with('message','Book Deleted Successfully');

    }
}
