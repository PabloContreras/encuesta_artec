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

    public function googleLineChart(){
        $noDeportes = Encuestas::where('deportes', 'Ninguno')->count();
        $deportes = Encuestas::where('deportes', '!=', 'Ninguno')->count();

        $rock =  Encuestas::where('musica', 'Rock')->count();
        $banda = Encuestas::where('musica', 'banda')->count();
        $regueton = Encuestas::where('musica', 'regueton')->count();
        $electronica = Encuestas::where('musica', 'electronica')->count();
        $musica = Encuestas::where('musica', '!=', 'Ninguno')->count();
        $noMusica = Encuestas::where('musica', 'Ninguno')->count();

        $pintor = Encuestas::where('pintor_famoso', '!=', '0')->orWhere('pintor_famoso', '!=', 'o')->count();
        $noSabe = Encuestas::where('pintor_famoso', '0')->orWhere('pintor_famoso', 'o')->count();

        $respuesta = Encuestas::where('desc_musica_clasica', '!=', '0')->orWhere('desc_musica_clasica', '!=', 'o')->count();
        $noSabeMusica = Encuestas::where('desc_musica_clasica', '0')->orWhere('desc_musica_clasica', 'o')->count();

        $interprete = Encuestas::where('interprete', '!=', '0')->orWhere('interprete', '!=', 'o')->count();
        $noInterprete = Encuestas::where('interprete', '0')->orWhere('interprete', 'o')->count();

        $terror = Encuestas::where('gustos_lectura', 'Terror')->count();
        $misterio = Encuestas::where('gustos_lectura', 'Misterio')->count();
        $historia = Encuestas::where('gustos_lectura', 'Historia')->count();
        $otro = Encuestas::where('gustos_lectura', 'Otro')->count();

        $menos  = Encuestas::where('tiempo_lectura', '0')->count();
        $una = Encuestas::where('tiempo_lectura', '1')->count();
        $mas = Encuestas::where('tiempo_lectura', '2')->count();

        $tres_personajes = Encuestas::where('personaje_1', '!=', '0')->where('personaje_2', '!=', '0')->where('personaje_3', '!=', '0')->count();
        $dos_personajes = Encuestas::where('personaje_1', '!=', '0')->where('personaje_2', '!=', '0')->where('personaje_3', '=', '0')->count();
        $un_personaje = Encuestas::where('personaje_1', '!=', '0')->where('personaje_2', '=', '0')->where('personaje_3', '=', '0')->count();
        $ningun_personaje = Encuestas::where('personaje_1', '=', '0')->where('personaje_2', '=', '0')->where('personaje_3', '=', '0')->count();
        //return $pintor;
        return view('resultadosEncuesta', compact('deportes', 'noDeportes', 'rock', 'banda', 'regueton', 'electronica', 'noMusica', 'musica', 'pintor', 'noSabe', 'respuesta', 'noSabeMusica', 'interprete', 'noInterprete', 'terror', 'misterio', 'historia', 'otro', 'menos', 'una', 'mas', 'tres_personajes', 'dos_personajes', 'un_personaje', 'ningun_personaje'));
    }
}
