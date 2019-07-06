<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    /*
    public function __construct(){
        $this->middleware('auth')
            ->only([
                'contato',
                'categoria'
            ]);

            $this->middleware('auth')
            ->except([
                'contato',
                'categoria'
            ]);
    }*/ 

    public function index(){
        $teste = '123';
        $teste2 = '456';
        return view('site.teste', compact('teste', 'teste2'));
    }
    public function contato(){
        return view('site.contato.contato');
    }
    public function categoria($id){
        return "Pagina de Categoria: {$id}";
    }

}
