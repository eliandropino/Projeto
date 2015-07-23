<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class testeController extends Controller{
    
    public function _construct(){
        
    }
    
    public function eliandro(){
        $nome = 'Eliandro';
        return view('teste')->with('nome',$nome);
    }
    
    
    
    
}
