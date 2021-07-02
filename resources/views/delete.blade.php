@extends('layouts.main')

@section('title')

@section('content')

<form class="form-control" action="{{ route('excluir-noticia', ['id' => $noticiasDelete->id]) }}" method="POST">
@csrf
<label for="texto">Tem certeza que deseja excluir esse produto?</label>
<input type="text" name="texto" id="texto" value="{{ $noticiasDelete->nome_materia }}">
<button>sim</button>

</form>



@endsection