<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class huella extends Controller
{
    public function mostrarVista(){
        return view('formularioMaestros');
    }

    public function guardar(Request $request){
    $data = $request->validate([
        'nombre' => 'required',
        'app' => 'required',
        'apm' => 'required',
        'correo' => 'required|email',
        'contraseña' => 'required',
        'huellaId'=>'required'
    ]);

    $client = new Client();

    try {
        $response = $client->request('POST', 'http://localhost:3001/register', [
            'json' => [
                'nombre' => $data['nombre'],
                'app' => $data['app'],
                'apm' => $data['apm'],
                'correo' => $data['correo'],
                'contraseña' => $data['contraseña'],
                'huellaId'=>$data['huellaId']
            ]
        ]);

        if ($response->getStatusCode() == 200) {
            return redirect('/success');
        } else {
            return redirect('/error');
        }
    } catch (\GuzzleHttp\Exception\ClientException $e) {
        if ($e->getResponse()->getStatusCode() == 400) {
            // Si el ID de la huella ya está en uso, redirige al formulario
            return redirect('/formulario')->withErrors(['huellaId' => 'El ID de la huella ya está en uso.']);
        } else {
            // Para otros errores, redirige a la página de error
            return redirect('/error');
        }
    }
}

    public function mostrarVistaS(){
        return view('verificarsalon');
    }
    
}
