<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desejo;
use App\Models\Produto;
use App\Charts\GraficoDesejoChart;

class DesejoController extends Controller
{
    /*Carrega a listagem de dados*/
    public function index()
    {
        $desejos = Desejo::all();

        return view('desejo.list')->with(['desejos'=> $desejos]);
    }

    /*Carrega o formulário*/
    public function create()
    {
        $produtos = Produto::orderBy('nome')->get();

        return view('desejo.form')->with(['produtos'=> $produtos]);
    }

    /*Salva os dados do formulário*/
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required|max:100',
            'qtdItens'=>'required|max:100',
            'desc'=>'required|max:200',
        ],[
            'nome.required'=>"O :attribute é obrigatorio!",
            'nome.max'=>" Só é permitido 100 caracteres no :attribute !",
            'qtdItens.required'=>"O :attribute é obrigatorio!",
            'qtdItens.max'=>" Só é permitido 100 caracteres no :attribute !",
            'desc.required'=>"A :attribute é obrigatoria!",
            'desc.max'=>" Só é permitido 20 caracteres na :attribute !"
        ]);

        $dados = [
            'nome'=> $request->nome,
            'qtdItens'=> $request->qtdItens,
            'desc'=> $request->desc,
            'dataEntrada'=> $request->dataEntrada,
            'produto_id'=>$request->produto_id,
        ];

        Desejo::create($dados); //ou  $request->all()

        return redirect('desejo')->with('success', "Desejo cadastrado com sucesso!");
    }

    /*Carrega apenas 1 registro da tabela*/
    public function show(Desejo $desejo)
    {
        //
    }

    /*Carrega o formulário para edição*/
    public function edit($id)
    {
        $desejo = Desejo::find($id); //select * from desejo where id = $id

        $produtos = Produto::orderBy('nome')->get();

        return view('desejo.form')->with([
            'desejo'=> $desejo,
            'produtos' => $produtos]);
    }

    /*Atualiza os dados do formulário */
    public function update(Request $request, Desejo $desejo)
    {
        $request->validate([
            'nome'=>'required|max:100',
            'qtdItens'=>'required|max:100',
            'desc'=>'required|max:200',
        ],[
            'nome.required'=>"O :attribute é obrigatorio!",
            'nome.max'=>" Só é permitido 100 caracteres no :attribute !",
            'qtdItens.required'=>"O :attribute é obrigatorio!",
            'qtdItens.max'=>" Só é permitido 100 caracteres no :attribute !",
            'desc.required'=>"A :attribute é obrigatoria!",
            'desc.max'=>" Só é permitido 20 caracteres na :attribute !"
        ]);

        $dados = [
            'nome'=> $request->nome,
            'qtdItens'=> $request->qtdItens,
            'desc'=> $request->desc,
            'dataEntrada'=> $request->dataEntrada,
            'produto_id'=>$request->produto_id,
        ];

        Desejo::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('desejo')->with('success', "Desejo atualizado com sucesso!");

    }

    /*Remove o registro do banco de dados*/
    public function destroy($id)
    {
        $desejo = Desejo::findOrFail($id);

        $desejo->delete();

        return redirect('desejo')->with('success', "Desejo removido com sucesso!");
    }
    /*pesquisa e filtra o registro do banco de dados*/
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $desejos = Desejo::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $desejos = Desejo::all();
        }

        return view('desejo.list')->with(['desejos'=> $desejos]);
    }

    public function chart(GraficoDesejoChart $desejo){

        return view('desejo.chart')->with(['desejo'=>  $desejo->build(),
    ]);
    }
}
