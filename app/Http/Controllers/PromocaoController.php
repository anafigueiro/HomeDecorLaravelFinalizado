<?php

namespace App\Http\Controllers;
use App\Charts\PromocaoValoresChart;
use App\Models\Promocao;
use App\Models\Produto;
use PDF;
use Illuminate\Http\Request;

class PromocaoController extends Controller
{
    public function index()
    {
        $promocoes = Promocao::all();

        return view('promocao.list')->with(['promocoes'=> $promocoes]);
    }

    public function create()
    {
        $produtos = Produto::orderBy('nome')->get();

        return view('promocao.form')->with([
            'produtos'=> $produtos
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'produto_id'=>'required',
            'descricao'=>'required',
            'novo_valor'=>'required',
        ],[
            'produto_id.required'=>"O :attribute é obrigatorio!",
            'descricao.required'=>"O :attribute é obrigatorio!",
            'novo_valor.required'=>"O :attribute é obrigatorio!",
        ]);

        $dados = ['produto_id'=> $request->produto_id,
            'descricao'=> $request->descricao,
            'novo_valor'=> $request->novo_valor
        ];

        $imagem = $request->file('imagem');
        //verifica se existe imagem no formulário

        if($imagem){
            $nome_arquivo =
            date('YmdHis').'.'.$imagem->getClientOriginalExtension();

            $diretorio = "imagem/promocao/";
            //salva imagem em uma pasta do sistema
            $imagem->storeAs($diretorio,$nome_arquivo,'public');

            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Promocao::create($dados); //ou  $request->all()

        return redirect('promocao')->with('success', "Cadastrado com sucesso!");
    }

    public function show(Promocao $promocao)
    {
        //
    }

    public function edit($id)
    {
        $promocao = Promocao::find($id); //select * from promocao where id = $id

        $produtos = Produto::orderBy('nome')->get();

        return view('promocao.form')->with([
            'promocao'=> $promocao,
            'produtos'=> $produtos
        ]);
    }

    public function update(Request $request, Promocao $promocao)
    {
        $request->validate([
            'produto_id'=>'required',
            'descricao'=>'required',
            'novo_valor'=>'required',
        ],[
            'produto_id.required'=>"O :attribute é obrigatorio!",
            'descricao.required'=>"O :attribute é obrigatorio!",
            'novo_valor.required'=>"O :attribute é obrigatorio!",
        ]);

        $dados = ['produto_id'=> $request->produto_id,
            'descricao'=> $request->descricao,
            'novo_valor'=> $request->novo_valor,
            'imagem'=>$request->imagem,
        ];

        $imagem = $request->file('imagem');
        //verifica se existe imagem no formulário
        if($imagem){
            $nome_arquivo =
            date('YmdHis').'.'.$imagem->getClientOriginalExtension();

            $diretorio = "imagem/promocao/";
            //salva imagem em uma pasta do sistema
            $imagem->storeAs($diretorio,$nome_arquivo,'public');

            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Promocao::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('promocao')->with('success', "Atualizado com sucesso!");

    }
    public function destroy($id)
    {
        $promocao = Promocao::findOrFail($id);

        $promocao->delete();

        return redirect('promocao')->with('success', "Removido com sucesso!");
    }
    
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $promocoes = Promocao::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $promocoes = Promocao::all();
        }

        return view('promocao.list')->with(['promocoes'=> $promocoes]);
    }

    public function chart(PromocaoValoresChart $promocaoValores){
        return view('promocao.chart')->with([
            'promocaoValores'=>  $promocaoValores->build()
        ]);
    }
}
