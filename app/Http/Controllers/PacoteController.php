<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacote;
use App\Models\CategoriaPacote;
use Illuminate\Support\Facades\Storage;

class PacoteController extends Controller
{
    function index()
    {
        $pacotes = Pacote::All();
        // dd($usuarios);

        return view('PacoteList')->with(['pacotes' => $pacotes]);
    }

    function create()
    {
        $categoriapacotes = Categoriapacote::orderBy('nome')->get();

        return view('PacoteForm')->with(['categoriapacotes' => $categoriapacotes]);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required | max: 120',
                'descricao' => 'required  | max: 700',
                'valor' => 'required | max: 50',

                'categoriapacote_id' => ' nullable',
                'imagem' => ' nullable|image|mimes:jpeg,jpg,png|max:2048',
            ],
            [
                'nome.required' => 'O nome é obrigatório',
                'nome.max' => 'Só é permitido 120 caracteres',
                'descricao.required' => 'A descrição é obrigatória',
                'descricao.max' => 'Só é permitido 700 caracteres',
                'valor.required' => 'O valor é obrigatório',
                'valor.max' => 'Só é permitido 50 caracteres',

            ]
        );
        //dd( $request->nome);


        $dados = [
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'valor' => $request->valor,
            'categoriapacote_id' => $request->categoriapacote_id,
        ];

        $imagem = $request->file('imagem');
        $nome_arquivo = '';
        //verifica se o campo imagem foi passado uma imagem
        if ($imagem) {
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $diretorio = 'imagem/';
            //salva a imagem em uma pasta
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            //adiciona ao vetor o diretorio do arquivo e o nome
            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        //dd( $request->nome);
        //passa o vetor com os dados do formulário como parametro para ser salvo
        Pacote::create($dados);

        return \redirect('pacote')->with('success', 'Cadastrado com sucesso!');
    }

    function edit($id)
    {
        //select * from usuario where id = $id;
        $pacote = Pacote::findOrFail($id);
        //dd($usuario);
        $categoriapacotes = Categoriapacote::orderBy('nome')->get();

        return view('PacoteForm')->with([
            'pacote' => $pacote,
            'categoriapacotes' => $categoriapacotes,
        ]);
    }

    function show($id)
    {
        //select * from usuario where id = $id;
        $pacote = Pacote::findOrFail($id);
        //dd($usuario);
        $categoriapacotes = Categoriapacote::orderBy('nome')->get();

        return view('PacoteForm')->with([
            'pacote' => $pacote,
            'categoriapacotes' => $categoriapacotes,
        ]);
    }

    function update(Request $request)
    {
        //dd( $request->nome);
        $request->validate(
            [
                'nome' => 'required | max: 120',
                'descricao' => 'required  | max: 700',
                'valor' => 'required | max: 50',

                'categoriapacote_id' => ' nullable',
                'imagem' => ' nullable|image|mimes:jpeg,jpg,png|max:2048',
            ],
            [
                'nome.required' => 'O nome é obrigatório',
                'nome.max' => 'Só é permitido 120 caracteres',
                'descricao.required' => 'A descrição é obrigatória',
                'descricao.max' => 'Só é permitido 700 caracteres',
                'valor.required' => 'O valor é obrigatório',
                'valor.max' => 'Só é permitido 50 caracteres',

            ]
        );
        //dd( $request->nome);


        $dados = [
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'valor' => $request->valor,
            'categoriapacote_id' => $request->categoriapacote_id,
        ];
        $imagem = $request->file('imagem');
        $nome_arquivo = '';
        //verifica se o campo imagem foi passado uma imagem
        if ($imagem) {
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $diretorio = 'imagem/';
            //salva a imagem em uma pasta
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            //adiciona ao vetor o diretorio do arquivo e o nome
            $dados['imagem'] = $diretorio . $nome_arquivo;
        }

        //dd($dados);

        Pacote::updateOrCreate(
            ['id' => $request->id],
            $dados
        );

        return \redirect()->action(
            'App\Http\Controllers\PacoteController@index'
        );
    }
    //

    function destroy($id)
    {

        $pacote = Pacote::findOrFail($id);

        if (!empty($pacote->imagem) && Storage::disk('public')->exists($pacote->imagem)  ) {
                Storage::disk('public')->delete($pacote->imagem);
            }
        $pacote->delete();

        return \redirect()->action(
            'App\Http\Controllers\PacoteController@index'
        );

    }
      function search(Request $request)
        {
            $campo = $request->campo;

            if (!empty($campo)) {
                $pacotes = Pacote::where($campo, 'like', '%' . $request->valor . '%')->get();
            } else {
                $pacotes = Pacote::all();
            }
            
        return view('PacoteList')->with(['pacotes' => $pacotes]);
    }
}


// npm install --save-dev vite laravel-vite-plugin
// npm install --save-dev @vitejs/plugin-vue
// npm run build

