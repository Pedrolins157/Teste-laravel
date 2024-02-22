<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
class PerfilController extends Controller
{
   
    public static function getUserData()
    {
       
        
    }
    
    
    public function mostrarPerfil()
    {
      
        $user = Auth::usuario();
        return view('app', ['user' => $user]);
      
    }
}
