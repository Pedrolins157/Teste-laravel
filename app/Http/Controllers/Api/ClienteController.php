<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\CreateClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $clientes = new Cliente ();
        if($request->has('nome')){
            $clientes = $clientes->where('nome', 'like', "%".$request->nome."%");
        }
        return $clientes->get();
    }
    public function create(Request $request)
    {
        $cliente= Cliente::create($request->all());
        return response()->json($cliente,201);
    }
    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return response()->json(['message' => 'Dados do cliente atualizado com sucesso!'], 200);
    }
    public function delete(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        if ($cliente) {
            $cliente->delete();
            return response()->json(['message' => 'Cliente Deletado com sucesso!', 200]);
        }
        return response()->json(['message' => 'Cliente não cadastrado!', 404]);
    }
}
