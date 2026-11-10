<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;

class meuController extends Controller
{
    function servicos()
    {
        // select = all()
        $servicos = Servico::all();
        return view('servicos', ['servicos' => $servicos]);
    }
    function sobre() {
        $texto = "Trabalhamos com desenvolvimento em Laravel";
        $dados = [
            'Arquitetura MVC',
            'Orientado a Objetos',
            'Eloquente ORM'
        ];
        return view('sobre', [
            'txt' => $texto,
            'dados' => $dados
        ]);
    }
    
    function deletarServico($id)
    {
        $servico = Servico::find($id);
        if ($servico) {
            $servico->delete();
            return redirect('/servicos')->with('success', 'Serviço deletado com sucesso!');
        } else {
            return redirect('/servicos')->with('error', 'Serviço não encontrado.');
        }
    }

    function formAddServico(){
        return view('form-add-servico');
    }

    function insertServico(Request $request){
        Servico::create([
            "nome" => $request->nome,
            "descricao" => $request->descricao,
            "preco" => $request->preco
        ]);
        return redirect('servicos');
    }

    function formEditarServico($id){
        $servico = Servico::findOrFail($id);
        return view('form-editar-servico', ['servico' => $servico]);
    }

    function updateServico($id, Request $request){
        $servico = Servico::findOrFail($id);
        $servico->update([
            "nome" => $request->nome,
            "descricao" => $request->descricao,
            "preco" => $request->preco
        ]);
        return redirect('servicos');
    }
}
