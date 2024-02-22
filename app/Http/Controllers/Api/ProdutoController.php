<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Produto;


class ProdutoController extends Controller
{
    public function index(Request $request)
{
    if ($request->has('id')) {
        $produto = Produto::findOrFail($request->id);
        return response()->json(['preco' => $produto->preco]);
    }
    $produtos = Produto::all();
    return response()->json($produtos);
}

    public function create(Request $request)
    {
        $produto = Produto::create($request->all());
        return response()->json($produto, 201);
    }
    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());
        return response()->json(['message' => 'Produto atualizado com sucesso!'], 200);
    }
    public function delete(Request $request, $id)
    {
        $produto = Produto::find($id);
        if ($produto) {
            $produto->delete();
            return response()->json(['message' => 'Produto Deletado com sucesso!', 200]);
        }
        return response()->json(['message' => 'Produto não cadastrado!', 404]);
    }
}
