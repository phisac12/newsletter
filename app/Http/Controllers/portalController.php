<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Register;

class portalController extends Controller
{


  public function index()
  {
    $todasNoticias = Register::all();

    return view('index', ['todasNoticias' => $todasNoticias]);
  }

  public function register()
  {

    return view('register');
  }

  public function recebeEmail(Request $request)
  {

    $dados = $request->all();

    Mail::send('envEmail', [], function ($message) use ($dados) {
      $message->from('dawnnerd22@gmail.com', 'Dawn nerds');
      $message->subject('Testando envio de email');
      $message->to($dados['email']);
    });

    return redirect('/');
  }

  public function newsletter()
  {

    return view('newsletter');
  }

  public function adicionar(Request $request)
  {

    Register::create([
      'nome_materia' => $request->nome_materia,
      'data_materia' => $request->data_materia,
      'descricao'    => $request->descricao,
      'nome_reporter' => $request->nome_reporter,


    ]);

    return redirect('/');
  }

  public function show($id)
  {

    $noticias = Register::findOrFail($id);
    return view('show', ['noticias' => $noticias]);
  }

  public function listar(Request $request){

    $pegarTodas = Register::All();
    return view('showAll', ['pegarTodas' => $pegarTodas]);
    
  }

  public function edit($id)
  {

    $noticiasEdit = Register::findOrFail($id);
    return view('edit', ['noticiasEdit' => $noticiasEdit]);
  }

  public function update(Request $request, $id)
  {
    
    $noticiasEdit = Register::findOrFail($id);

    
    $noticiasEdit->update([
      'nome_materia' => $request->nome_materia,
      'data_materia' => $request->data_materia,
      'descricao'    => $request->descricao,
      'nome_reporter' => $request->nome_reporter,


    ]);

    return "Produto atualizado com sucesso";
  }
  
  public function delete($id){

    $noticiasDelete = Register::findOrFail($id);
    return view('delete', ['noticiasDelete' => $noticiasDelete]);

  }

  public function destroy($id){

    $noticiasDelete = Register::findOrFail($id);
    $noticiasDelete->delete();

    return redirect('/noticia/todas');

  }
}
