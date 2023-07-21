<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Categoria;

class ClienteController extends Controller
{
    function index()
    {
        $clientes = Cliente::All();
        // dd($ulientes);

        return view('ClienteList')->with(['clientes' => $clientes]);
    }

    function create()
    {

        return view('ClienteForm');
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required | max: 120',
                'telefone' => 'required | max: 20',
                'email' => ' required | email | max: 100',
                'cpf' => ' required | max: 100',


            ],
            [
                'nome.required' => 'O nome é obrigatório',
                'nome.max' => 'Só é permitido 120 caracteres',
                'telefone.required' => 'O telefone é obrigatório',
                'telefone.max' => 'Só é permitido 20 caracteres',
                'email.required' => 'O email é obrigatório',
                'email.max' => 'Só é permitido 100 caracteres',
                'cpf.required' => 'O cpf é obrigatório',
                'cpf.max' => 'Só é permitido 100 caracteres',
            ]
        );

        //dd( $request->nome);
        Cliente::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'cpf' => $request->cpf,


        ]);

        return \redirect()->action(
            'App\Http\Controllers\ClienteController@index'
        );
    }

    function edit($id)
    {
        //select * from uliente where id = $id;
        $cliente = Cliente::findOrFail($id);
        //dd($uliente);
        return view('ClienteForm')->with([
            'cliente' => $cliente,
        ]);
    }

    function show($id)
    {
        //select * from cliente where id = $id;
        $cliente = Cliente::findOrFail($id);
        //dd($uliente);

        return view('ClienteForm')->with([
            'cliente' => $cliente,
        ]);
    }

    function update(Request $request)
    {
        //dd( $request->nome);
        $request->validate(
            [
                'nome' => 'required | max: 120',
                'telefone' => 'required | max: 20',
                'email' => ' required | email | max: 100',
                'cpf' => ' required | max: 100',


            ],
            [
                'nome.required' => 'O nome é obrigatório',
                'nome.max' => 'Só é permitido 120 caracteres',
                'telefone.required' => 'O telefone é obrigatório',
                'telefone.max' => 'Só é permitido 20 caracteres',
                'email.required' => 'O email é obrigatório',
                'email.max' => 'Só é permitido 100 caracteres',
                'cpf.required' => 'O cpf é obrigatório',
                'cpf.max' => 'Só é permitido 100 caracteres',
            ]
        );

        Cliente::updateOrCreate(
            ['id' => $request->id],
            [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'cpf' => $request->cpf,
            ]
        );

        return \redirect()->action(
            'App\Http\Controllers\ClienteController@index'
        );
    }
    //

    function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);

        $cliente->delete();

        return \redirect()->action(
            'App\Http\Controllers\ClienteController@index'
        );
    }

    function search(Request $request)
    {
        $campo = $request->campo;

        if (!empty($campo)) {
            $clientes = Cliente::where($campo, 'like', '%' . $request->valor . '%')->get();
        } else {
            $clientes = Cliente::all();
        }

        //dd($ulientes);
        return view('ClienteList')->with(['clientes' => $clientes]);
    }
}
// npm install --save-dev vite laravel-vite-plugin
// npm install --save-dev @vitejs/plugin-vue
// npm run build
