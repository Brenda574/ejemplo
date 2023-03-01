<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function entrada() {
        return view('Sistema.entrada');
    }

    public function validar(Request $solicitar) {
        //dump($solicitar->all());
        $usuario = $solicitar->input('usuario');
        $password = $solicitar->input('password');
        if ($usuario==$password) {
            return redirect(route("nopciones"));
        } else {
            return view("Sistema.error");
        }
    }
    
    public function mopciones() {
        return view("Sistema.opciones");
    }

    public function seleccionar() {
        return view("Sistema.opciones");
    }

    public function saludar() {
    }

    public function salir(Request $solicitar) {
        $solicitar->session()->forget('idioma');
        return redirect('login');
    }
}
