<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cooperativa;

class CooperativaController extends Controller
{
    public function index()
    {
        $listCoop = Cooperativa::all();
        return view('cooperativa.index', compact('listCoop'));
    }

    public function verDatos($id)
    {
        $cooperativa = Cooperativa::find($id);
        return response()->json($cooperativa);
    }

    public function editarDatos($id)
    {
        $cooperativa = Cooperativa::find($id);

        return view('cooperativa.edit', compact('cooperativa'));

        //return response()->json($cooperativa);
    }

    public function update(Request $request, $id)
    {
        $cooperativa = Cooperativa::findOrFail($id); // Por ejemplo, aquí estoy suponiendo que quieres actualizar la cooperativa con ID 1

        $cooperativa->update($request->all());

        return redirect()->route('cooperativas.index')->with('success', 'Registro actualizado exitosamente.');
    }

    public function create()
    {
        return view('cooperativa.create');
    }

    public function store(Request $request)
    {
        $cooperativa = new Cooperativa();
        $cooperativa->autorizacionPFuncionar = $request['autorizacionPFuncionar'];
        $cooperativa->planesNacion = $request['planesNacion'];
        $cooperativa->registro = $request['registro'];
        $cooperativa->cierre = $request['cierre'];
        $cooperativa->denominacionUsual = $request['denominacionUsual'];
        $cooperativa->denominacionRegistro = $request['denominacionRegistro'];
        $cooperativa->domicilioLegal = $request['domicilioLegal'];
        $cooperativa->telefono = $request['telefono'];
        $cooperativa->mail = $request['mail'];
        $cooperativa->sede = $request['sede'];
        $cooperativa->cuit = $request['cuit'];
        $cooperativa->ejerciciosAdeudados = $request['ejerciciosAdeudados'];
        $cooperativa->mora = $request['mora'];
        $cooperativa->retiroAutorizacionPFuncionar = $request['retiroAutorizacionPFuncionar'];
        $cooperativa->emplazamiento = $request['emplazamiento'];
        $cooperativa->ultimaAgo = $request['ultimaAgo'];
        $cooperativa->expediente = $request['expediente'];
        $cooperativa->ultBalance = $request['ultBalance'];
        $cooperativa->observaciones = $request['autorizaobservacionescionPFuncionar'];
        $cooperativa->contitucion = $request['contitucion'];
        $cooperativa->canceladas = $request['canceladas'];
        $cooperativa->save();
     
        return redirect()->route('cooperativas.index')->with('success', 'Registro actualizado exitosamente.');
    }
}
