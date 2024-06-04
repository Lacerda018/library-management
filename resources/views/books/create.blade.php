@extends('layouts.main')

@section('title', 'Adicione um livro')

@section('content')
    
<div id="book-create-container" class="col-md-6 offset-md-3">
    <h1>Adicione um livro</h1>
    <form action="/books" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do livro:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title">Livro:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Livro">
        </div>
        <div class="form-group">
            <label for="title">Autor:</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="Nome do Autor">
        </div>
        <div class="form-group">
            <label for="title">Ano:</label>
            <input type="number" class="form-control" id="year" name="year" placeholder="Ano do Livro">
        </div>
        <div class="form-group">
            <label for="title">Gênero:</label>
            <input type="text" class="form-control" id="genre" name="genre" placeholder="Gênero do Livro">
        </div>
        <input type="submit" class="btn btn-primary" value="Adicionar Livro">
    </form>
</div>

@endsection