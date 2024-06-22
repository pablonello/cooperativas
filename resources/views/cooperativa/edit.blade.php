@extends('adminlte::page')

@section('title', 'Cooperativas')

@section('content_header')
    <h1>Editar Cooperativa</h1>
@stop

@section('content')

    <form method="POST" action="/cooperativas/update/{{ $cooperativa->id }}">
        @csrf
        @method('PUT')
        <div class="row small">
            <div class="col">
                <label for="autorizacionPFuncionar">Autorizacion para Funcionar</label>
                <input type="text" class="form-control" id="autorizacionPFuncionar" name="autorizacionPFuncionar" value="{{ $cooperativa->autorizacionPFuncionar }}">
                <label for="planesNacion">Planes Nacion</label>
                <input type="text" class="form-control" id="planesNacion" name="planesNacion" value="{{ $cooperativa->planesNacion }}">
                <label for="registro">Registro</label>
                <input type="text" class="form-control" id="registro" name="registro" value="{{ $cooperativa->registro }}">
                <label for="cierre">Cierrre</label>
                <input type="text" class="form-control" id="cierre" name="cierre" value="{{ $cooperativa->cierre }}">
                <label for="denominacionUsual">Denominacion Usual</label>
                <input type="text" class="form-control" id="inputEmail4" name="denominacionUsual" value="{{ $cooperativa->denominacionUsual }}">
                <label for="denominacionRegistro">Denominacion Registro</label>
                <input type="text" class="form-control" id="denominacionRegistro" name="denominacionRegistro" value="{{ $cooperativa->denominacionRegistro }}">
                <label for="domicilioLegal">Domicilio Legal</label>
                <input type="text" class="form-control" id="domicilioLegal" name="domicilioLegal" value="{{ $cooperativa->domicilioLegal }}">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $cooperativa->telefono }}">
                <label for="mail">Mail</label>
                <input type="text" class="form-control" id="mail" name="mail" value="{{ $cooperativa->mail }}">
                <label for="sede">Sede</label>
                <input type="text" class="form-control" id="inputEmail4" name="sede" value="{{ $cooperativa->sede }}">
                <label for="cuit">CUIT</label>
                <input type="text" class="form-control" id="inputEmail4" name="cuit" value="{{ $cooperativa->cuit }}">
            </div>
            <div class="col">
                <label for="ejerciciosAdeudados">Ejercicio Adeudado</label>
                <input type="text" class="form-control" id="ejerciciosAdeudados" name="ejerciciosAdeudados" value="{{ $cooperativa->ejerciciosAdeudados }}">
                <label for="mora">Mora</label>
                <input type="text" class="form-control" id="mora" name="mora" value="{{ $cooperativa->mora }}">
                <label for="retiroAutorizacionPFuncionar">Retiro Autorizacion para Funcionar</label>
                <input type="text" class="form-control" id="retiroAutorizacionPFuncionar" name="retiroAutorizacionPFuncionar" value="{{ $cooperativa->retiroAutorizacionPFuncionar }}">
                <label for="emplazamiento">Emplazamiento</label>
                <input type="text" class="form-control" id="emplazamiento" name="emplazamiento" value="{{ $cooperativa->emplazamiento }}">
                <label for="ultimaAgo">Ultimo AGO</label>
                <input type="text" class="form-control" id="ultimaAgo" name="ultimaAgo" value="{{ $cooperativa->ultimaAgo }}">
                <label for="expediente">Expediente</label>
                <input type="text" class="form-control" id="expediente" name="expediente" value="{{ $cooperativa->expediente }}">
                <label for="ultBalance">Ultimo Balance</label>
                <input type="text" class="form-control" id="ultBalance" name="ultBalance" value="{{ $cooperativa->ultBalance }}">
                <label for="observaciones">Observaciones</label>
                <input type="text" class="form-control" id="observaciones"name="observaciones" value="{{ $cooperativa->observaciones }}">
                <label for="contitucion">Contitucion</label>
                <input type="text" class="form-control" id="contitucion" name="contitucion" value="{{ $cooperativa->contitucion }}">
                <label for="canceladas">Canceladas</label>
                <input type="text" class="form-control" id="canceladas" name="canceladas" value="{{ $cooperativa->canceladas }}">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-secondary">Editar Datos</button>
        <br>
    </form>
    <br>
@stop



@section('js')
@stop
