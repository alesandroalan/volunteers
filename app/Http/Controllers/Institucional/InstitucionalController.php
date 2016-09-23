<?php

namespace App\Http\Controllers\Institucional;

//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;

class InstitucionalController extends \App\Http\Controllers\Controller
{
    public function Sobre(){
        return view('sobre');
    }
    public function contato(){
        return view('contato');
    }
    public function contatoEnviado(){
        return Request::all();
    }
}
