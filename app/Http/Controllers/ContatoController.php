<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /*Carrega a listagem de dados*/
    public function index()
    {
        $contatos = Contato::all();

        return view('contato.list')->with(['contatos'=> $contatos]);
    }

    /*Carrega o formulário*/
    public function create()
    {
        return view('contato.form');
    }

    /*Salva os dados do formulário*/
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required|max:150',
            'sobrenome'=>'required|max:150',
            'email'=>'required|max:150',
            'des'=>'required|max:150',
            'endereco'=>'required|max:150'
        ],[
            'nome.required'=>"O :attribute é obrigatorio!",
            'nome.max'=>" Só é permitido 150 caracteres no :attribute !",
            'sobrenome.required'=>"O :attribute é obrigatorio!",
            'sobrenome.max'=>" Só é permitido 150 caracteres no :attribute !",
            'email.required'=>"O :attribute é obrigatorio!",
            'email.max'=>" Só é permitido 150 caracteres no :attribute !",
            'des.required'=>"O texto de ajuda é obrigatorio!",
            'des.max'=>" Só é permitido 150 caracteres no :attribute !",
            'endereco.required'=>"O :attribute é obrigatorio!",
            'endereco.max'=>" Só é permitido 150 caracteres no :attribute !",
        ]);

        $dados = ['nome'=> $request->nome,
            'sobrenome'=> $request->sobrenome,
            'email'=> $request->email,
            'des'=>$request->des,
            'endereco'=>$request->endereco
        ];

        Contato::create($dados); //ou  $request->all()

        return redirect('contato')->with('success', "Contato cadastrado com sucesso!");
    }

    /*Carrega apenas 1 registro da tabela*/
    public function show(Contato $contato)
    {
        //
    }

    /*Carrega o formulário para edição*/
    public function edit($id)
    {
        $contato = Contato::find($id); //select * from contato where id = $id

        return view('contato.form')->with(['contato'=>$contato]);
    }

    /*Atualiza os dados do formulário*/
    public function update(Request $request, Contato $contato)
    {
        $request->validate([
            'nome'=>'required|max:150',
            'sobrenome'=>'required|max:150',
            'email'=>'required|max:150',
            'des'=>'required|max:150',
            'endereco'=>'required|max:150'
        ],[
            'nome.required'=>"O :attribute é obrigatorio!",
            'nome.max'=>" Só é permitido 150 caracteres no :attribute !",
            'sobrenome.required'=>"O :attribute é obrigatorio!",
            'sobrenome.max'=>" Só é permitido 150 caracteres no :attribute !",
            'email.required'=>"O :attribute é obrigatorio!",
            'email.max'=>" Só é permitido 150 caracteres no :attribute !",
            'des.required'=>"O :attribute é obrigatorio!",
            'des.max'=>" Só é permitido 150 caracteres no :attribute !",
            'endereco.required'=>"O :attribute é obrigatorio!",
            'endereco.max'=>" Só é permitido 150 caracteres no :attribute !",
        ]);

        $dados = ['nome'=> $request->nome,
            'sobrenome'=> $request->sobrenome,
            'email'=> $request->email,
            'des'=>$request->des,
            'endereco'=>$request->endereco
        ];

         Contato::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('contato')->with('success', "Contato atualizado com sucesso!");

    }

    /*Remove o registro do banco de dados*/
    public function destroy($id)
    {
        $contato = Contato::findOrFail($id);

        $contato->delete();

        return redirect('contato')->with('success', "Contato removido com sucesso!");
    }
    /*pesquisa e filtra o registro do banco de dados*/
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $contatos = Contato::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $contatos = Contato::all();
        }

        return view('contato.list')->with(['contatos'=> $contatos]);
    }
    
}
