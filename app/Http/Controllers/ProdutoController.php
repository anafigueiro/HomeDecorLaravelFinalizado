<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use PDF;

class ProdutoController extends Controller
{
    /*Carrega a listagem de dados*/
    public function index()
    {
        $produtos = Produto::all();

        return view('produto.list')->with(['produtos'=> $produtos]);
    }

    /*Carrega o formulário*/
    public function create()
    {
        return view('produto.form');
    }

    /*Salva os dados do formulário*/
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required|max:150',
            'descricao'=>'required|max:150',
            'valor'=>'required|max:20',
        ],[
            'nome.required'=>"O :attribute é obrigatorio!",
            'nome.max'=>" Só é permitido 150 caracteres no :attribute !",
            'descricao.required'=>"A :attribute é obrigatoria!",
            'descricao.max'=>" Só é permitido 150 caracteres na :attribute !",
            'valor.required'=>"O :attribute é obrigatorio!",
            'valor.max'=>" Só é permitido 20 caracteres no :attribute !",
        ]);

        $dados = ['nome'=> $request->nome,
            'descricao'=> $request->descricao,
            'valor'=> $request->valor
        ];

        $imagem = $request->file('imagem');
        //verifica se existe imagem no formulário

        if($imagem){
            $nome_arquivo =
            date('YmdHis').'.'.$imagem->getClientOriginalExtension();

            $diretorio = "imagem/produto/";
            //salva imagem em uma pasta do sistema
            $imagem->storeAs($diretorio,$nome_arquivo,'public');

            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Produto::create($dados); //ou  $request->all()

        return redirect('produto')->with('success', "Produto cadastrado com sucesso!");
    }

    /*Carrega apenas 1 registro da tabela*/
    public function show(Produto $produto)
    {
        //
    }

    /*Carrega o formulário para edição*/
    public function edit($id)
    {
        $produto = Produto::find($id); //select * from contato where id = $id

        return view('produto.form')->with(['produto'=>$produto]);
    }

    /*Atualiza os dados do formulário*/
    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome'=>'required|max:150',
            'descricao'=>'required|max:150',
            'valor'=>'required|max:20',
        ],[
            'nome.required'=>"O :attribute é obrigatorio!",
            'nome.max'=>" Só é permitido 150 caracteres no :attribute !",
            'descricao.required'=>"A :attribute é obrigatoria!",
            'descricao.max'=>" Só é permitido 150 caracteres na :attribute !",
            'valor.required'=>"O :attribute é obrigatorio!",
            'valor.max'=>" Só é permitido 20 caracteres no :attribute !",
        ]);

        $dados = ['nome'=> $request->nome,
            'descricao'=> $request->descricao,
            'valor'=> $request->valor,
            'imagem'=>$request->imagem,
        ];

        $imagem = $request->file('imagem');
        //verifica se existe imagem no formulário
        if($imagem){
            $nome_arquivo =
            date('YmdHis').'.'.$imagem->getClientOriginalExtension();

            $diretorio = "imagem/produto/";
            //salva imagem em uma pasta do sistema
            $imagem->storeAs($diretorio,$nome_arquivo,'public');

            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

         Produto::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('produto')->with('success', "Produto atualizado com sucesso!");

    }

    /*Remove o registro do banco de dados*/
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);

        $produto->delete();

        return redirect('produto')->with('success', "Produto removido com sucesso!");
    }
    /*pesquisa e filtra o registro do banco de dados*/
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $produtos = Produto::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $produtos = Produto::all();
        }

        return view('produto.list')->with(['produtos'=> $produtos]);
    }

    public function report(){
        //select * from aluno order by nome
        $produtos = Produto::orderBy('nome')->get();

        $data = [
            'title'=>"Relatorio Listagem de Produtos",
            'produtos'=> $produtos
        ];

        $pdf = PDF::loadView('produto.report',$data);
        //$pdf->setPaper('a4', 'landscape');
       // dd($pdf);

        return $pdf->download("listagem_produtos.pdf");
}
    
}
