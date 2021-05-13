<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdottoController extends Controller{

    public function index(){
        

        $data = config('paste');
    
        $lunga = [];
        $corta = [];
        $cortissima = [];
        
        foreach ($data as $key => $tipoPasta) {
            $tipoPasta['id'] = $key;
            if ($tipoPasta['tipo'] == 'lunga') {
                $lunga[] = $tipoPasta;
            } elseif ($tipoPasta['tipo'] == 'corta') {
                $corta[] = $tipoPasta;
            } elseif ($tipoPasta['tipo'] == 'cortissima') {
                $cortissima[] = $tipoPasta;
            }
        }
        
        return view('home', [
            'lunghe' => $lunga,
            'corte' => $corta,
            'cortissime' => $cortissima
        ]);
        
    }

    public function show($id){
        $data = config('paste');

        if ($id >= count($data)) {
            abort(404);
        }        

        $pasta = $data[$id];

        return view('product', [
            'pasta' => $pasta,
            'idProdotto' => $id,
            'maxIndex' => count($data) - 1
        ]);
    }

}
