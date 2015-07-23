<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class postController extends Controller
{   
    private $usuario;
    public function __construct(usuario $usuario){
       $this->usuario = $usuario;
    }
    public function index (){
        $usuarios = $this->usuario->all();
        return view('post.index')->with('usuarios',$usuarios);
    }
}
