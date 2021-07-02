@extends('layouts.main')

@section('title')

@section('content')


<div class="container">
<div class="row">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome da matéria</th>
      <th scope="col">Nome do Reporter</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
      @foreach($pegarTodas as $getAll)
    <tr>
      <th scope="row">{{ $getAll['id'] }}</th>
      <td>{{ $getAll['nome_materia'] }}</td>
      <td>{{ $getAll['nome_reporter'] }}</td>
      <td>{{ $getAll['data_materia'] }}</td>
      <form action="{{ route('excluir-noticia', ['id' => $getAll->id]) }}" method="POST">
          @csrf
           <td><button class="btn btn-danger">Excluir</button> <button class="btn btn-warning">Editar</button></td>
      </form>
     
    </tr>
    @endforeach
  </tbody>
</table>
</div>

</div>


@endsection