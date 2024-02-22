<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{

    public function index(Request $request)
    {
        $nome = $request->input('nome');
        if($nome){
            $user = Usuario::where('nome', 'like', "%$nome%")->get();
            return $user;
        }
        return response()->json(['message' =>'Usuário não cadastrado!' ]);
    }
    public function create(Request $request)
    {
        $usuario = $request->all();
        $usuario['password'] = Hash::make($request->input('password'));
        $usuario = Usuario::create($usuario);
        return response()->json([$usuario, 201]);
    }
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->update($request->all());
        return response()->json(['message' => 'Usuário atualizado com sucesso!']);
    }
    public function delete(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        if ($usuario) {
            $usuario->delete();
            return response()->json(['message'=>'Usuário excluido com sucesso!']);
        }
        return response()->json(['message'=>'Usuário não encontrado!']);
    }
}
