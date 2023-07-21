<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\CategoriaProduto;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    function index()
    {
        $produtos = Produto::All();
        // dd($usuarios);

        return view('ProdutoList')->with(['produtos' => $produtos]);
    }

    function create()
    {
        $categoriaprodutos = Categoriaproduto::orderBy('nome')->get();

        return view('ProdutoForm')->with(['categoriaprodutos' => $categoriaprodutos]);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required | max: 120',
                'quantidade' => 'required  | max: 50',
                'valor' => 'required | max: 50',

                'categoriaproduto_id' => ' nullable',
                'imagemproduto' => ' nullable|image|mimes:jpeg,jpg,png|max:2048',
            ],
            [
                'nome.required' => 'O nome é obrigatório',
                'nome.max' => 'Só é permitido 120 caracteres',
                'quantidade.required' => 'A quantidade é obrigatório',
                'quantidade.max' => 'Só é permitido 50 caracteres',
                'valor.required' => 'O valor é obrigatório',
                'valor.max' => 'Só é permitido 50 caracteres',

            ]
        );
        //dd( $request->nome);


        $dados = [
            'nome' => $request->nome,
            'quantidade' => $request->quantidade,
            'valor' => $request->valor,
            'categoriaproduto_id' => $request->categoriaproduto_id,
        ];

        $imagemproduto = $request->file('imagemproduto');
        $nome_arquivo = '';
        //verifica se o campo imagem foi passado uma imagem
        if ($imagemproduto) {
            $nome_arquivo = date('YmdHis') . '.' . $imagemproduto->getClientOriginalExtension();

            $diretorio = 'imagem/';
            //salva a imagem em uma pasta
            $imagemproduto->storeAs($diretorio, $nome_arquivo, 'public');
            //adiciona ao vetor o diretorio do arquivo e o nome
            $dados['imagemproduto'] = $diretorio . $nome_arquivo;
        }

        //dd( $request->nome);
        //passa o vetor com os dados do formulário como parametro para ser salvo
        Produto::create($dados);

        return \redirect('produto')->with('success', 'Cadastrado com sucesso!');
    }

    function edit($id)
    {
        //select * from usuario where id = $id;
        $produto = Produto::findOrFail($id);
        //dd($usuario);
        $categoriaprodutos = Categoriaproduto::orderBy('nome')->get();

        return view('ProdutoForm')->with([
            'produto' => $produto,
            'categoriaprodutos' => $categoriaprodutos,
        ]);
    }

    function show($id)
    {
        //select * from usuario where id = $id;
        $produto = Produto::findOrFail($id);
        //dd($usuario);
        $categoriaprodutos = Categoriaproduto::orderBy('nome')->get();

        return view('ProdutoForm')->with([
            'produto' => $produto,
            'categoriaprodutos' => $categoriaprodutos,
        ]);
    }

    function update(Request $request)
    {
        //dd( $request->nome);
        $request->validate(
            [
                'nome' => 'required | max: 120',
                'quantidade' => 'required  | max: 50',
                'valor' => 'required | max: 50',

                'categoriaproduto_id' => ' nullable',
                'imagemproduto' => ' nullable|image|mimes:jpeg,jpg,png|max:2048',
            ],
            [
                'nome.required' => 'O nome é obrigatório',
                'nome.max' => 'Só é permitido 120 caracteres',
                'quantidade.required' => 'A quantidade é obrigatório',
                'quantidade.max' => 'Só é permitido 50 caracteres',
                'valor.required' => 'O valor é obrigatório',
                'valor.max' => 'Só é permitido 50 caracteres',

            ]
        );
        //dd( $request->nome);


        $dados = [
            'nome' => $request->nome,
            'quantidade' => $request->quantidade,
            'valor' => $request->valor,
            'categoriaproduto_id' => $request->categoriaproduto_id,
        ];
        $imagemproduto = $request->file('imagemproduto');
        $nome_arquivo = '';
        //verifica se o campo imagem foi passado uma imagem
        if ($imagemproduto) {
            $nome_arquivo = date('YmdHis') . '.' . $imagemproduto->getClientOriginalExtension();

            $diretorio = 'imagem/';
            //salva a imagem em uma pasta
            $imagemproduto->storeAs($diretorio, $nome_arquivo, 'public');
            //adiciona ao vetor o diretorio do arquivo e o nome
            $dados['imagemproduto'] = $diretorio . $nome_arquivo;
        }

        //dd($dados);

        Produto::updateOrCreate(
            ['id' => $request->id],
            $dados
        );

        return \redirect()->action(
            'App\Http\Controllers\ProdutoController@index'
        );
    }
    //

    function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        if (!empty($produto->imagemproduto) && Storage::disk('public')->exists($produto->imagemproduto)  ) {
            Storage::disk('public')->delete($produto->imagemproduto);
        }
        $produto->delete();

        return \redirect()->action(
            'App\Http\Controllers\ProdutoController@index'
        );

    }
      function search(Request $request)
        {
            $campo = $request->campo;

            if (!empty($campo)) {
                $produtos = Produto::where($campo, 'like', '%' . $request->valor . '%')->get();
            } else {
                $produtos = Produto::all();
            }

        return view('ProdutoList')->with(['produtos' => $produtos]);
    }
}
// npm install --save-dev vite laravel-vite-plugin
// npm install --save-dev @vitejs/plugin-vue
// npm run build

