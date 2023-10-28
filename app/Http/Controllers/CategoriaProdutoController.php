<?php

namespace App\Http\Controllers;
use App\Models\CategoriaProduto;
use App\Models\Produto;
use Illuminate\Http\Request;

class CategoriaProdutoController extends Controller
{
    /*Carrega a listagem de dados*/
    public function index()
    {
        $categorias = CategoriaProduto::all();

        return view('categoria.list')->with(['categorias'=> $categorias]);
    }

    /*Carrega o formulário*/
    public function create()
    {
        $produtos = Produto::orderBy('nome')->get();

        return view('categoria.form')->with(['produtos'=> $produtos]);
    }

    /*Salva os dados do formulário*/
    public function store(Request $request)
    {
        $request->validate([
            'tipo'=>'required|max:150',
            'nome'=>'required|max:150',
        ],[  
            'tipo.required'=>"O :attribute é obrigatorio!",
            'tipo.max'=>" Só é permitido 150 caracteres no :attribute !",
            'nome.required'=>"O :attribute é obrigatorio!",
            'nome.max'=>" Só é permitido 150 caracteres no :attribute !",
        ]);

        $dados = [
            'tipo'=> $request->tipo,
            'nome'=>$request->nome,
            'produto_id'=>$request->produto_id,
        ];

     CategoriaProduto::create($dados); //ou  $request->all()

        return redirect('categoria')->with('success', "Categoria cadastrada com sucesso!");
    }

    /*Carrega apenas 1 registro da tabela*/
    public function show(CategoriaProduto $categoria)
    {
        //
    }

    /*Carrega o formulário para edição*/
    public function edit($id)
    {
        $categoria = CategoriaProduto::find($id); //select * from ouvidoria where id = $id

        $produtos = Produto::orderBy('nome')->get();

        return view('categoria.form')->with([
            'categoria'=> $categoria,
            'produtos' => $produtos]);
    }

    /*Atualiza os dados do formulário*/
    public function update(Request $request, CategoriaProduto $categoria)
    {
        {
            $request->validate([
                'tipo'=>'required|max:150',
                'nome'=>'required|max:150',
            ],[  
                'tipo.required'=>"O :attribute é obrigatorio!",
                'tipo.max'=>" Só é permitido 150 caracteres no :attribute !",
                'nome.required'=>"O :attribute é obrigatorio!",
                'nome.max'=>" Só é permitido 150 caracteres no :attribute !",
            ]);
    
            $dados = [
                'tipo'=> $request->tipo,
                'nome'=>$request->nome,
                'produto_id'=>$request->produto_id,             
            ];

            CategoriaProduto::updateOrCreate(
                ['id'=>$request->id],
                $dados);
    
            return redirect('categoria')->with('success', "Categoria atualizada com sucesso!");
        }

    }
    /*Remove o registro do banco de dados*/
    public function destroy($id)
    {
        $categoria = CategoriaProduto::findOrFail($id);

        $categoria->delete();

        return redirect('categoria')->with('success', "Categoria removida com sucesso!");
    }
    /*pesquisa e filtra o registro do banco de dados*/
    public function search(Request $request)
    {
        if(!empty($request->tipo)){
            $categorias = CategoriaProduto::where(
                $request->tipo,
                 'like' ,
                "%". $request->nome."%"
                )->get();
        } else {
            $categorias = CategoriaProduto::all();
        }

        return view('categoria.list')->with(['categorias'=> $categorias]);
    }
    
}
