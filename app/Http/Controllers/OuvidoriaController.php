<?php

namespace App\Http\Controllers;
use App\Models\Ouvidoria;
use App\Models\Contato;
use Illuminate\Http\Request;
use PDF;


class OuvidoriaController extends Controller
{
    /*Carrega a listagem de dados*/
    public function index()
    {
        $ouvidorias = Ouvidoria::all();

        return view('ouvidoria.list')->with(['ouvidorias'=> $ouvidorias]);
    }

    /*Carrega o formulário*/
    public function create()
    {
        $contatos = Contato::orderBy('nome')->get();

        return view('ouvidoria.form')->with(['contatos'=> $contatos]);
    }

    /*Salva os dados do formulário*/
    public function store(Request $request)
    {
        $request->validate([
            'sugestao'=>'required|max:150',
            'observacao'=>'required|max:150',
        ],[  
            'sugestao.required'=>"O :attribute é obrigatorio!",
            'sugestao.max'=>" Só é permitido 150 caracteres no :attribute !",
            'observacao.required'=>"O :attribute é obrigatorio!",
            'observacao.max'=>" Só é permitido 150 caracteres no :attribute !",
        ]);

        $dados = [
            'sugestao'=> $request->sugestao,
            'observacao'=>$request->observacao,
            'contato_id'=>$request->contato_id,
            'dataRegistro'=>$request->dataRegistro,
        ];

        Ouvidoria::create($dados); //ou  $request->all()

        return redirect('ouvidoria')->with('success', "Ouvidoria cadastrada com sucesso!");
    }

    /*Carrega apenas 1 registro da tabela*/
    public function show(Ouvidoria $ouvidoria)
    {
        //
    }

    /*Carrega o formulário para edição*/
    public function edit($id)
    {
        $ouvidoria = Ouvidoria::find($id); //select * from ouvidoria where id = $id

        $contatos = Contato::orderBy('nome')->get();

        return view('ouvidoria.form')->with([
            'ouvidoria'=> $ouvidoria,
            'contatos' => $contatos]);
    }

    /*Atualiza os dados do formulário*/
    public function update(Request $request, Ouvidoria $ouvidoria)
    {
        $request->validate([
            'sugestao'=>'required|max:150',
            'observacao'=>'required|max:150',
        ],[  
            'sugestao.required'=>"O :attribute é obrigatorio!",
            'sugestao.max'=>" Só é permitido 150 caracteres no :attribute !",
            'observacao.required'=>"O :attribute é obrigatorio!",
            'observacao.max'=>" Só é permitido 150 caracteres no :attribute !",
        ]);

        $dados = ['sugestao'=> $request->sugestao,
            'observacao'=>$request->observacao,
            'contato_id'=>$request->contato_id,
            'dataRegistro'=>$request->dataRegistro,
        ];

        
        Ouvidoria::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('ouvidoria')->with('success', "Ouvidoria atualizada com sucesso!");
    }

    /*Remove o registro do banco de dados*/
    public function destroy($id)
    {
        $ouvidoria = Ouvidoria::findOrFail($id);

        $ouvidoria->delete();

        return redirect('ouvidoria')->with('success', "Ouvidoria removida com sucesso!");
    }
    /*pesquisa e filtra o registro do banco de dados*/
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $ouvidorias = Ouvidoria::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $ouvidorias = Ouvidoria::all();
        }

        return view('ouvidoria.list')->with(['ouvidorias'=> $ouvidorias]);
    }

    public function report(){
        //select * from aluno order by nome
        $ouvidorias = Ouvidoria::orderBy('contato_id')->get();

        $data = [
            'title'=>"Relatorio Listagem de Ouvidorias",
            'ouvidorias'=> $ouvidorias
        ];

        $pdf = PDF::loadView('ouvidoria.report',$data);
        //$pdf->setPaper('a4', 'landscape');
       // dd($pdf);

        return $pdf->download("listagem_ouvidorias.pdf");
}
    
}
