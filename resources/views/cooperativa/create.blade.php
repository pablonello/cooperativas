@extends('adminlte::page')

@section('title', 'Cooperativas')

@section('content_header')
    <br>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-header">Crear Cooperativa</h5>
            <div class="card-body">
                <form method="POST" action="{{ route('cooperativas.store') }}">
                    @csrf
                    <div class="mb-2">
                        <label for="autorizacionPFuncionar" class="form-label">Autorizacion Para Funcionar</label>
                        <input type="text" class="form-control" id="autorizacionPFuncionar" name="autorizacionPFuncionar" >
                    </div>
                    <div class="mb-3">
                        <label for="planesNacion" class="form-label">Planes Nacion</label>
                        <input type="text" class="form-control" id="planesNacion" name="planesNacion">
                    </div>
                    <div class="mb-2">
                        <label for="registro" class="form-label">Registro</label>
                        <input type="text" class="form-control" id="registro" name="registro">
                    </div>
                    <div class="mb-3">
                        <label for="cierre" class="form-label">cierre</label>
                        <input type="number" class="form-control" id="cierre" name="cierre">
                    </div>
                    <div class="mb-2">
                        <label for="denominacionUsual" class="form-label">Denominacion Usual</label>
                        <input type="text" class="form-control" id="denominacionUsual" name="denominacionUsual">
                    </div>
                    <div class="mb-3">
                        <label for="denominacionRegistro" class="form-label">Denominacion Registro</label>
                        <input type="text" class="form-control" id="denominacionRegistro" name="denominacionRegistro">
                    </div>
                    <div class="mb-2">
                        <label for="domicilioLegal" class="form-label">Domicilio Legal</label>
                        <input type="text" class="form-control" id="domicilioLegal" name="domicilioLegal">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="mb-2">
                        <label for="mail" class="form-label">mail</label>
                        <input type="text" class="form-control" id="mail" name="mail">
                    </div>
                    <div class="mb-3">
                        <label for="sede" class="form-label">Sede</label>
                        <input type="text" class="form-control" id="sede" name="sede">
                    </div>
                    <div class="mb-2">
                        <label for="cuit" class="form-label">Cuit</label>
                        <input type="text" class="form-control" id="cuit" name="cuit">
                    </div>
                    <div class="mb-3">
                        <label for="ejerciciosAdeudados" class="form-label">Ejercicios Adeudados</label>
                        <input type="text" class="form-control" id="ejerciciosAdeudados" name="ejerciciosAdeudados">
                    </div>
                    <div class="mb-2">
                        <label for="mora" class="form-label">Mora</label>
                        <input type="number" class="form-control" id="mora" name="mora">
                    </div>
                    <div class="mb-3">
                        <label for="retiroAutorizacionPFuncionar" class="form-label">Retiro Autorizacion Para Funcionar</label>
                        <input type="text" class="form-control" id="retiroAutorizacionPFuncionar" name="retiroAutorizacionPFuncionar">
                    </div>
                    <div class="mb-2">
                        <label for="emplazamiento" class="form-label">Emplazamiento</label>
                        <input type="text" class="form-control" id="emplazamiento" name="emplazamiento">
                    </div>
                    <div class="mb-3">
                        <label for="ultimaAgo" class="form-label">Ultima Ago</label>
                        <input type="date" class="form-control" id="ultimaAgo" name="ultimaAgo">
                    </div>
                    <div class="mb-2">
                        <label for="expediente" class="form-label">Expediente</label>
                        <input type="text" class="form-control" id="expediente" name="expediente">
                    </div>
                    <div class="mb-3">
                        <label for="ultBalance" class="form-label">Ultimo Balance</label>
                        <input type="date" class="form-control" id="ultBalance" name="ultBalance">
                    </div>
                    <div class="mb-2">
                        <label for="observaciones" class="form-label">Observaciones</label>
                        <textarea class="form-control" id="observaciones" rows="3" name="observaciones"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="contitucion" class="form-label">Contitucion</label>
                        <input type="text" class="form-control" id="contitucion" name="contitucion">
                    </div>
                    <div class="mb-3">
                        <label for="canceladas" class="form-label">Canceladas</label>
                        <input type="text" class="form-control" id="canceladas" name="canceladas">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    @stop



    @section('js')
    @stop
