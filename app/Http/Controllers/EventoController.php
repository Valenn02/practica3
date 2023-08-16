<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index(){
        /*$personas  = [
            ['nombre' => 'Valentin',
            'edad' => '18'],
            ['nombre' => 'kelly',
            'edad' => '15']
        ];
        return view('personas',['personas' => $personas ]);*/
        $evento = Evento::get();
      
        return view('evento',['eventos'=>$evento]);
        
    }
}
