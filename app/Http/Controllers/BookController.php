<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

        $books = Book::all();

        return view('welcome', ['books' => $books]);
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){

        $book = new Book;

        $book->title = $request->title;
        $book->author = $request->author;
        $book->year = $request->year;
        $book->genre = $request->genre;

        //image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();
            
            $imageName = md5($requestImage->getClientOriginalName(). strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/books'), $imageName);

            $book->image = $imageName;
        }

        $book->save();

        return redirect('/')->with('msg', 'Livro adicionado com sucesso!');

    }

    public function show($id){

        $book = Book::findOrFail($id);

        return view('books.show', ['book' => $book]);

    }

}
