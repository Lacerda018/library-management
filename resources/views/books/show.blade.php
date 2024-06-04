@extends('layouts.main')

@section('title', $book->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/books/{{ $book->image }}" class="image-fluid" alt="{{ $book->title }}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$book->title}}</h1>
            <p class="book-author"><ion-icon name="book"></ion-icon> {{$book->author}} </p>
            <p class="books-year"><ion-icon name="star-outline"></ion-icon>  {{$book->year}} </p>
            <p class="books-genre"><ion-icon name="tv"></ion-icon> {{$book->genre}} </p>
            <a href="#" class="btn btn-primary" id="book-submit">Ler livro</a>
        </div>
    </div>
</div>

@endsection