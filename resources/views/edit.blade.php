@extends('layouts.main')

@section('title')

@section('content')
<style>
   body {
      background-color: white;
   }

   .navbar {
      background-color: black !important;
   }
</style>
<h1 class="text-center mt-5 display-3 register-title text-dark">Editando uma noticia</h1>
<div class="container mt-5">
      <form action="{{ route('att_info', ['id' => $noticiasEdit->id]) }}" method="POST">
      @csrf
      <div class="row">
         <div class="col-md-6">
            <div class="form-group">
               <label for="nome_materia" class="text-labels">Nome da matéria</label>
               <input type="text" id="nome_materia" name="nome_materia" class="form-control" value="{{ $noticiasEdit->nome_materia }}">
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label for="data_materia" class="text-labels">Data da matéria</label>
               <input type="date" id="data_materia" name="data_materia" class="form-control" value="{{ $noticiasEdit->data_materia }}">
            </div>
         </div>
      </div>
         <div class="form-group">
            <label for="descricao" class="text-labels">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao">{{ $noticiasEdit->descricao }}</textarea>
         </div>
      <div class="row">
         <div class="col-md-8">
            <div class="form-group">
               <label for="nome_reporter" class="text-labels">Nome do repórter</label>
               <input type="text" id="nome_reporter" name="nome_reporter" class="form-control" value="{{ $noticiasEdit->nome_reporter }}">
            </div>
         </div>
      </div> 
      <button class="btn btn-primary" type="submit">Enviar</button>   
   </form>
</div>






@endsection