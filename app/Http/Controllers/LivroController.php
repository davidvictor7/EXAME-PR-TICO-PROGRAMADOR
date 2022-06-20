<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function Index(){
        $livro = Livro::all();
        return view('admin.livro.index', compact('livro'));
    }

    public function Create(){
        return view('admin.livro.create');
    }

    public function Store(Request $request){
        Livro::create($request->all());
        return redirect()->route('index')->with('message', 'O livro foi cadastrado com sucesso!');;
    }

    public function Destroy($id){
        Livro::destroy($id);
        return redirect()->route('index')->with('message', 'O livro foi excluido com sucesso!');
    }

    public function Edit($id){
        $livro = Livro::find($id);
        return view('admin.livro.edit', compact('livro'));
    }

    public function Update(Request $request, $id){
        $livro = Livro::find($id);
        $livro->update($request->all());
        return redirect()->route('index')->with('message', 'O livro foi atualizado com sucesso!');;
    }
}
