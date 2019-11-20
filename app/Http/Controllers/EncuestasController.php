<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encuestas;

class EncuestasController extends Controller
{
    public function create(){
    	return view('welcome');
    }
    public function store(Request $request){
    	$encuesta = new Encuestas;
    	$encuesta->nombre = $request->nombre;
    	$encuesta->edad = $request->edad;
    	$encuesta->sexo = $request->sexo;
    	$encuesta->deportes = $request->deportes;
    	$encuesta->musica = $request->musica;
    	$encuesta->pintor_famoso = $request->pintor_famoso;
    	$encuesta->desc_musica_clasica = $request->desc_musica_clasica;
    	$encuesta->interprete = $request->interprete;
    	$encuesta->museos = $request->museos;
    	$encuesta->gustos_lectura = $request->gustos_lectura;
    	$encuesta->tiempo_lectura = $request->tiempo_lectura;
    	$encuesta->gusto_videojuegos = $request->gusto_videojuegos;
    	$encuesta->personaje_1 = $request->personaje_1;
    	$encuesta->personaje_2 = $request->personaje_2;
    	$encuesta->personaje_3 = $request->personaje_3;

    	$encuesta->save();
        $request->session()->flash('success', 'Se añadió correctamente la encuesta');
    	return back();
    }
    public function index(){
        $encuestas = Encuestas::all();
        return view('index', compact('encuestas'));
    }
}
