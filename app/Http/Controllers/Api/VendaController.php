<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::all();
        return view('vendas.index', compact('vendas'));
    }
    public function create(Request $request)
    {
        $venda = Venda::create($request->all());
        return response()->json(['success' => 'Venda concluída!'], 201);
    }
}
