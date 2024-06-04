@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div id="search-container" class="col-md-12">
    <h1> Bem vindo a livraria </h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="books-container" class="col-md-12">
    <h2>Outros Livros</h2>
    <p class="subtitle">Veja outros livros recomendados</p>
    <div id="cards-container" class="row">
        @foreach($books as $book)
        <div class="card col-md-3">
            <img src="/img/books/{{ $book->image }}" alt="{{ $book->title }}">
            <div class="card-body">
                <p class="card-year">{{$book->year}}</p>
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-genre">{{$book->genre}}</p>
                <a href="/books/{{ $book->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection