@extends('layouts.main')

@section('title', 'Notícias Hoje')

@section('content')

<h1 class="display-3 my-5 text-center text-warning">Nossa Newsletter</h1>
<img src="/images/16.jpg" width="200px" class="d-block mx-auto my-5" id="img-center" alt="mulher">
<div class="container">

<form action="/api/assine" method="POST">
  <div class="form-row align-items-center">
  <div class="mx-auto d-block">
    <div class="col-auto d-block">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text ">😍</div>
        </div>
        <input type="email" class="form-control d-block mx-auto" name="email" id="email" placeholder="Seu email">
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-success mb-2 d-block mx-auto">Inscrever-se</button>
    </div>
  </div>
  </div>
</form>
        

</form>

</div>



@endsection